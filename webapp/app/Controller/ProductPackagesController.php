<?php
App::uses('AppController', 'Controller');
/**
 * ProductPackages Controller
 *
 */
class ProductPackagesController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

    /**
     * Admin Index action
     */
    function admin_index() {
        $this->check_authorization();

        $this->ProductPackage->recursive = 0;
        $this->set('productPackages', $this->paginate());
    }

    /**
     * Admin Edit action
     * @param int $id
     */
    function admin_view($id = null) {
        if(!$id && empty($this->data)) {
            $this->Session->setFlash('Invalid ProductPackage');
            $this->redirect(array('action' => 'index'));
        }

        // get & check ProductPackages
        $productPackage = $this->ProductPackage->read(null, $id);
        if(empty($productPackage)) {
            $this->Session->setFlash('Invalid ProductPackage');
            $this->redirect(array('action' => 'index'));
        }

        $this->set('productPackage', $productPackage);
    }

    /**
     * Admin Add action
     */
    function admin_add() {
        if(!empty($this->data)) {

            $this->ProductPackage->create();
            if ($this->ProductPackage->save($this->data)) {
                $this->Session->setFlash('The ProductPackage has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('The ProductPackage could not be saved. Please, try again.');
            }
        }

        // set form legend text
        $this->set('legend','Add ProductPackage');
    }

    /**
     * Admin Edit action
     * @param int $id
     */
    function admin_edit($id = null) {
        if(!$id && empty($this->data)) {
            $this->Session->setFlash('Invalid ProductPackages');
            $this->redirect(array('action' => 'index'));
        }

        // get & check ProductPackages
        $productPackage = $this->ProductPackage->read(null, $id);
        if(empty($productPackage)) {
            $this->Session->setFlash('Invalid ProductPackage');
            $this->redirect(array('action' => 'index'));
        }

        if(!empty($this->data)) {
            // validate & save data
            if ($this->ProductPackage->save($this->data)) {
                $this->Session->setFlash('The ProductPackage has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('The ProductPackages could not be saved. Please, try again.');
            }
        } else {
            // pre-populate data
            $this->data = $productPackage;
        }

        // set View variables
        $this->set('edit',TRUE);
        $this->set('productPackage', $productPackage);

        $this->loadModel('Product');
        $this->set('products', $this->Product->find('list'));

        // use same View for adding & editing
        $this->render('admin_add');
    }

    /**
     * Admin Delete action
     * @param int $id
     */
    function admin_delete($id = null) {
        if(!$id) {
            $this->Session->setFlash('Invalid id for ProductPackage');
            $this->redirect(array('action'=>'index'));
        }

        // get & check ProductPackages
        $productPackage = $this->ProductPackage->read(null, $id);
        if(empty($ProductPackages)) {
            $this->Session->setFlash('Invalid ProductPackage');
            $this->redirect(array('action' => 'index'));
        }

        if($this->ProductPackage->delete($id)) {
            $this->Session->setFlash('ProductPackage deleted');
            $this->redirect(array('action'=>'index'));
        }
        $this->Session->setFlash('ProductPackage was not deleted');
        $this->redirect(array('action' => 'index'));
    }


}
