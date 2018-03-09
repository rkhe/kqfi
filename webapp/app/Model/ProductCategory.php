<?php
App::uses('AppModel', 'Model');
/**
 * ProductCategory Model
 *
 * @property Product $Product
 */
class ProductCategory extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_category_id',
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

        if (!empty($this->data['ProductCategory']['url']) && is_uploaded_file($this->data['ProductCategory']['url']['tmp_name'])) {
            if (!move_uploaded_file($this->data['ProductCategory']['url']['tmp_name'], 'img/products/' . $this->data['ProductCategory']['url']['name']))
            {
                return false;
            }
            $this->data['ProductCategory']['url'] = $this->data['ProductCategory']['url']['name'];
            //$this->data['Post']['type'] = $this->data['Post']['image_url']['type'];
            //$this->data['Post']['size'] = $this->data['Post']['image_url']['size'];
        } else {
            $this->data['ProductCategory']['url'] = $this->data['ProductCategory']['url_orig'];
        }
        return true;
    }
}
