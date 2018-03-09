<?php
App::uses('AppModel', 'Model');
/**
 * Product Model
 *
 * @property ProductCategory $ProductCategory
 * @property ProductPackage $ProductPackage
 */
class Product extends AppModel {

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
		'ProductCategory' => array(
			'className' => 'ProductCategory',
			'foreignKey' => 'product_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ProductPackage' => array(
			'className' => 'ProductPackage',
			'foreignKey' => 'product_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

    function beforeSave($options=array()) {
        if (!empty($this->data['Product']['url']) && is_uploaded_file($this->data['Product']['url']['tmp_name'])) {
            if (!move_uploaded_file($this->data['Product']['url']['tmp_name'], 'img/products/' . $this->data['Product']['url']['name']))
            {
                return false;
            }
            $this->data['Product']['url'] = $this->data['Product']['url']['name'];
            //$this->data['Post']['type'] = $this->data['Post']['image_url']['type'];
            //$this->data['Post']['size'] = $this->data['Post']['image_url']['size'];
        } else {
            $this->data['Product']['url'] = $this->data['Product']['url_orig'];
        }
        return true;
    }
}
