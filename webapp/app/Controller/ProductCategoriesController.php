<?php
App::uses('AppController', 'Controller');
/**
 * ProductCategories Controller
 *
 */
class ProductCategoriesController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

	public function index($id = null)
	{
        $this->Posts = ClassRegistry::init('Post');
//        $this->set('banners', $this->Posts->find('all', array(
//            'conditions' => array(
//                'is_show' => true
//            , 'Post.post_category_id = ' => 6
//            ))));
        $this->set('banners', $this->Posts->find('all', array(
            'conditions' => array(
                'is_show' => true
            , 'Post.post_category_id = ' => 5
            ))));
                
        //$this->set('categories', $this->paginate());
        $this->set('categories', $this->ProductCategory->find('all', array(
            'conditions' => array('ProductCategory.is_active' => true),
            'order' => 'ProductCategory.sequence'
            )));
	}
	
	public function view($id=null)
	{
		$this->ProductCategory->id = $id;
        if (!$this->ProductCategory->exists()) {
            throw new NotFoundException(__('Invalid Installer'));
        }
		$this->ProductCategory->recursive = 1;
        $this->set('categories', $this->ProductCategory->read(null, $id));
	}
	
	public function add()
	{
	}
	
	public function edit($id = null) 
	{
	}

    /**
     * Admin Index action
     */
    function admin_index() {
        $this->check_authorization();

        $this->ProductCategory->recursive = 0;
        $this->set('productCategories', $this->paginate());
    }

    /**
     * Admin Edit action
     * @param int $id
     */
    function admin_view($id = null) {
        if(!$id && empty($this->data)) {
            $this->Session->setFlash('Invalid ProductCategory');
            $this->redirect(array('action' => 'index'));
        }

        // get & check ProductCategory
        $productCategory = $this->ProductCategory->read(null, $id);
        if(empty($productCategory)) {
            $this->Session->setFlash('Invalid ProductCategory');
            $this->redirect(array('action' => 'index'));
        }

        $this->set('productCategory', $productCategory);
    }

    /**
     * Admin Add action
     */
    function admin_add() {
        if(!empty($this->data)) {

            $this->ProductCategory->create();
            if ($this->ProductCategory->save($this->data)) {
                $this->Session->setFlash('The ProductCategory has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('The ProductCategory could not be saved. Please, try again.');
            }
        }

        // set form legend text
        $this->set('legend','Add ProductCategory');
    }

    /**
     * Admin Edit action
     * @param int $id
     */
    function admin_edit($id = null) {
        if(!$id && empty($this->data)) {
            $this->Session->setFlash('Invalid ProductCategory');
            $this->redirect(array('action' => 'index'));
        }

        // get & check ProductCategory
        $productCategory = $this->ProductCategory->read(null, $id);
        if(empty($productCategory)) {
            $this->Session->setFlash('Invalid ProductCategory');
            $this->redirect(array('action' => 'index'));
        }

        // unset unrequired validation rules
        unset($this->ProductCategory->validate['ProductCategoryname']['check_ProductCategory']);
        unset($this->ProductCategory->validate['ProductCategoryname']['check_ProductCategoryname_exists']);
        unset($this->ProductCategory->validate['password']);

        if(!empty($this->data)) {
            // validate & save data
            if ($this->ProductCategory->save($this->data)) {
                $this->Session->setFlash('The ProductCategory has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('The ProductCategory could not be saved. Please, try again.');
            }
        } else {
            // pre-populate data
            $this->data = $productCategory;
        }

        // set View variables
        //$this->set('legend','Edit ProductCategory');
        $this->set('edit',TRUE);
        $this->set('productCategory', $productCategory);

        // use same View for adding & editing
        $this->render('admin_add');
    }

    /**
     * Admin Delete action
     * @param int $id
     */
    function admin_delete($id = null) {
        if(!$id) {
            $this->Session->setFlash('Invalid id for ProductCategory');
            $this->redirect(array('action'=>'index'));
        }

        // get & check ProductCategory
        $productCategory = $this->ProductCategory->read(null, $id);
        if(empty($productCategory)) {
            $this->Session->setFlash('Invalid ProductCategory');
            $this->redirect(array('action' => 'index'));
        }

        if($this->ProductCategory->delete($id)) {
            $this->Session->setFlash('ProductCategory deleted');
            $this->redirect(array('action'=>'index'));
        }
        $this->Session->setFlash('ProductCategory was not deleted');
        $this->redirect(array('action' => 'index'));
    }
}
