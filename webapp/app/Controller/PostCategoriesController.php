<?php
App::uses('AppController', 'Controller');
/**
 * PostCategories Controller
 *
 */
class PostCategoriesController extends AppController {

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

        $this->PostCategory->recursive = 0;
        $this->set('postCategories', $this->paginate());
    }

    /**
     * Admin Add action
     */
    function admin_add() {
        if(!empty($this->data)) {
            // unset unrequired validation rules
            //unset($this->PostCategory->validate['PostCategoryname']['check_PostCategory']);

            $this->PostCategory->create();
            if ($this->PostCategory->save($this->data)) {
                $this->Session->setFlash('The PostCategory has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('The PostCategory could not be saved. Please, try again.');
            }
        }

        // set form legend text
        //$this->set('legend','Add PostCategory');
    }
    
    /**
     * Admin Edit action
     * @param int $id
     */
    function admin_edit($id = null) {
        if(!$id && empty($this->data)) {
            $this->Session->setFlash('Invalid PostCategory');
            $this->redirect(array('action' => 'index'));
        }

        // get & check User
        $postCategory = $this->PostCategory->read(null, $id);
        if(empty($postCategory)) {
            $this->Session->setFlash('Invalid PostCategory');
            $this->redirect(array('action' => 'index'));
        }

        // unset unrequired validation rules
        //unset($this->User->validate['username']['check_user']);
        //unset($this->User->validate['username']['check_username_exists']);
        //unset($this->User->validate['password']);

        if(!empty($this->data)) {
            // validate & save data
            if ($this->PostCategory->save($this->data)) {
                $this->Session->setFlash('The PostCategory has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('The PostCategory could not be saved. Please, try again.');
            }
        } else {
            // remove Password
            //$user['User']['password'] = '';

            // pre-populate data
            $this->data = $postCategory;
        }

        // set View variables
        $this->set('edit',TRUE);

        // use same View for adding & editing
        $this->render('admin_add');
    }

    /**
     * Admin Delete action
     * @param int $id
     */
    function admin_delete($id = null) {
        if(!$id) {
            $this->Session->setFlash('Invalid id for PostCategory');
            $this->redirect(array('action'=>'index'));
        }

        // get & check PostCategory
        $postCategory = $this->PostCategory->read(null, $id);
        if(empty($postCategory)) {
            $this->Session->setFlash('Invalid PostCategory');
            $this->redirect(array('action' => 'index'));
        }

        if($this->PostCategory->delete($id)) {
            $this->Session->setFlash('PostCategory deleted');
            $this->redirect(array('action'=>'index'));
        }
        $this->Session->setFlash('PostCategory was not deleted');
        $this->redirect(array('action' => 'index'));
    }
}
