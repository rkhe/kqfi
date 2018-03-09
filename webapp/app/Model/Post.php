<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 * @property PostCategory $PostCategory
 */
class Post extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'PostCategory' => array(
			'className' => 'PostCategory',
			'foreignKey' => 'post_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    function beforeSave($options=array()) {

        if (!empty($this->data['Post']['image_url']) && is_uploaded_file($this->data['Post']['image_url']['tmp_name'])) {
            if (!move_uploaded_file($this->data['Post']['image_url']['tmp_name'], 'img/posts/' . $this->data['Post']['image_url']['name']))
            {
                return false;
            }
            $this->data['Post']['image_url'] = $this->data['Post']['image_url']['name'];
            //$this->data['Post']['type'] = $this->data['Post']['image_url']['type'];
            //$this->data['Post']['size'] = $this->data['Post']['image_url']['size'];
        } else {
            $this->data['Post']['image_url'] = $this->data['Post']['image_url_orig'];
        }
        return true;
    }
}
