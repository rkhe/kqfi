<?php
App::uses('AppModel', 'Model');
/**
 * ProductPackage Model
 *
 * @property Product $Product
 */
class ProductPackage extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'remarks';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
