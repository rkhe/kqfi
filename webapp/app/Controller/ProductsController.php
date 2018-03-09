<?php

App::uses('AppController', 'Controller');

/**
 * Products Controller
 *
 */
class ProductsController extends AppController {

    /**
     * Scaffold
     *
     * @var mixed
     */
    public $scaffold;

    public function index($id = null) {
        $this->Posts = ClassRegistry::init('Post');
        $this->set('banners', $this->Posts->find('all', array(
                    'conditions' => array(
                        'is_show' => true
                        , 'Post.post_category_id = ' => 5
                    )
            )));

        $this->ProductCategory = ClassRegistry::init('ProductCategory');
        $this->set('categories', $this->ProductCategory->find('all', array(
                    'conditions' => array('is_active' => true),
                    'order' => array('ProductCategory.sequence'))));

        $this->set('currentCategory', $this->ProductCategory->read(null, $id));

        $products = $this->Product->find('all', array(
            'conditions' => array('Product.product_category_id' => $id, 'Product.is_active' => 'true'),
            'order' => array('Product.sequence')
        ));
        $this->set('products', $products);
        //pr($products);
    }

    public function view($id = null) {
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Invalid Installer'));
        }

        $this->Product->recursive = 1;
        $this->set('products', $this->Product->read(null, $id));
    }

    public function add() {
        
    }

    public function edit($id = null) {
        
    }

    /* ADMIN */

    /**
     * Admin Index action
     */
    function admin_index() {
        $this->check_authorization();

        $this->loadModel('ProductCategory');
        $this->set('productCategories', $this->ProductCategory->find('list', array(
            'fields' => array('ProductCategory.id', 'ProductCategory.title')
        )));
        //debug($this->data['Filter']['category_id']);
        $this->Product->recursive = 0;
        $catId = 0;
        if (!empty($this->data) && $this->data['Filter']['category_id'] > 0) {
            $catId = $this->data['Filter']['category_id'];
            $this->set('products', $this->paginate('Product', array('Product.product_category_id' => $catId)));
        } else {
            $this->set('products', $this->paginate());
        }
    }

    /**
     * Admin Edit action
     * @param int $id
     */
    function admin_view($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash('Invalid Product');
            $this->redirect(array('action' => 'index'));
        }

        // get & check Product
        $product = $this->Product->read(null, $id);
        if (empty($product)) {
            $this->Session->setFlash('Invalid Product');
            $this->redirect(array('action' => 'index'));
        }

        $this->set('product', $product);
    }

    /**
     * Admin Add action
     */
    function admin_add() {
        if (!empty($this->data)) {

            $this->Product->create();
            if ($this->Product->save($this->data)) {
                $this->Session->setFlash('The Product has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('The Product could not be saved. Please, try again.');
            }
        }

        // set form legend text
        //$this->set('legend','Add Product');
        $this->loadModel('ProductCategory');
        $this->set('productCategories', $this->ProductCategory->find('list'));
    }

    /**
     * Admin Edit action
     * @param int $id
     */
    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash('Invalid Product');
            $this->redirect(array('action' => 'index'));
        }

        // get & check Product
        $product = $this->Product->read(null, $id);
        if (empty($product)) {
            $this->Session->setFlash('Invalid Product');
            $this->redirect(array('action' => 'index'));
        }

        if (!empty($this->data)) {
            // validate & save data
            if ($this->Product->save($this->data)) {
                $this->Session->setFlash('The Product has been saved');
                $this->redirect(array('action' => 'index'));
                $this->redirect($this->referer());
            } else {
                $this->Session->setFlash('The Product could not be saved. Please, try again.');
            }
        } else {
            // pre-populate data
            $this->data = $product;
        }

        // set View variables
        //$this->set('legend','Edit Product');
        $this->set('edit', TRUE);
        $this->set('product', $product);

        $this->loadModel('ProductCategory');
        $this->set('productCategories', $this->ProductCategory->find('list'));

        // use same View for adding & editing
        $this->render('admin_add');
    }

    /**
     * Admin Delete action
     * @param int $id
     */
    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash('Invalid id for Product');
            $this->redirect(array('action' => 'index'));
        }

        // get & check Product
        $Product = $this->Product->read(null, $id);
        if (empty($Product)) {
            $this->Session->setFlash('Invalid Product');
            $this->redirect(array('action' => 'index'));
        }

        if ($this->Product->delete($id)) {
            $this->Session->setFlash('Product deleted');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash('Product was not deleted');
        $this->redirect(array('action' => 'index'));
    }

}
