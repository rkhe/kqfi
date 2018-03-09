<?php

App::uses('AppController', 'Controller');

/**
 * Posts Controller
 *
 */
class PostsController extends AppController {

    /**
     * Scaffold
     *
     * @var mixed
     */
    public $scaffold;

    public function index($id = null) {
        //$this->Posts = ClassRegistry::init('Post');
        $this->set('banners', $this->Post->find('all', array(
                    'conditions' => array(
                        'is_show' => true
                        , 'Post.post_category_id = ' => 5
        ))));

        $this->set('posts', $this->Post->find('all', array(
                    'conditions' => array('is_show' => true, 'Post.post_category_id < ' => 3),
                    'order' => array('Post.created', 'Post.created DESC'),
        )));
    }

    public function promo() {
        $this->set('banners', $this->Post->find('all', array(
                    'conditions' => array(
                        'is_show' => true
                        , 'Post.post_category_id = ' => 5
        ))));

        $today = date("Y-m-d h:i:s A");
        $posts = $this->Post->find('all', array(
            'conditions' => array(
                'is_show' => true,
                'startdate <= ' => $today,
                'enddate > ' => $today,
                'Post.post_category_id = ' => 2),
            'order' => array('Post.created', 'Post.created DESC'),
        ));
        $this->set('posts', $posts);
        //pr( $tz . ': ' . date('r') );
        //pr($today);
    }
    
    public function careers() {
        $this->set('banners', $this->Post->find('all', array(
                    'conditions' => array(
                        'is_show' => true
                        , 'Post.post_category_id = ' => 5
        ))));

        $today = date("Y-m-d h:i:s A");
        $posts = $this->Post->find('all', array(
            'conditions' => array(
                'is_show' => true,
                'Post.post_category_id = ' => 7),
            'order' => array('Post.created', 'Post.created DESC'),
        ));
        $this->set('posts', $posts);
    }

    public function view($id = null) {
        $this->Post->id = $id;
        if (!$this->Post->exists()) {
            throw new NotFoundException(__('Invalid Post'));
        }
        $this->Post->recursive = 1;
        $this->set('post', $this->Post->read(null, $id));
    }

    /**
     * Admin Index action
     */
    function admin_index() {
        $this->check_authorization();

        $this->Post->recursive = 0;
        $this->set('posts', $this->paginate());
    }

    /**
     * Admin Edit action
     * @param int $id
     */
    function admin_view($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash('Invalid Post');
            $this->redirect(array('action' => 'index'));
        }

        // get & check Post
        $post = $this->Post->read(null, $id);
        if (empty($post)) {
            $this->Session->setFlash('Invalid Post');
            $this->redirect(array('action' => 'index'));
        }

        $this->set('post', $post);
    }

    /**
     * Admin Add action
     */
    function admin_add() {
        if (!empty($this->data)) {
            $this->Post->create();
            if ($this->Post->save($this->data)) {
                $this->Session->setFlash('The Post has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('The Post could not be saved. Please, try again.');
            }
        }

        // set form legend text
        //$this->set('legend','Add Post');
        $this->loadModel('PostCategory');
        $this->set('postCategories', $this->PostCategory->find('list'));
    }

    /**
     * Admin Edit action
     * @param int $id
     */
    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash('Invalid Post');
            $this->redirect(array('action' => 'index'));
        }

        // get & check Post
        $post = $this->Post->read(null, $id);
        if (empty($post)) {
            $this->Session->setFlash('Invalid Post');
            $this->redirect(array('action' => 'index'));
        }

        if (!empty($this->data)) {
            // validate & save data
            if ($this->Post->save($this->data)) {
                $this->Session->setFlash('The Post has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('The Post could not be saved. Please, try again.');
            }
        } else {

            // pre-populate data
            $this->data = $post;
        }

        // set View variables
        $this->set('edit', TRUE);

        $this->loadModel('PostCategory');
        $this->set('postCategories', $this->PostCategory->find('list'));
        $this->set('post', $post);

        // use same View for adding & editing
        $this->render('admin_add');
    }

    /**
     * Admin Delete action
     * @param int $id
     */
    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash('Invalid id for Post');
            $this->redirect(array('action' => 'index'));
        }

        // get & check Post
        $post = $this->Post->read(null, $id);
        if (empty($post)) {
            $this->Session->setFlash('Invalid Post');
            $this->redirect(array('action' => 'index'));
        }

        if ($this->Post->delete($id)) {
            $this->Session->setFlash('Post deleted');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash('Post was not deleted');
        $this->redirect(array('action' => 'index'));
    }

}
