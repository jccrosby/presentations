<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Shot $Shot
 */
class User extends AppModel {

	#public $displayField = 'emailAddress';
	
	public $virtualFields = array(
	    'displayName' => "CONCAT(User.first_name ,' ', User.last_name)"
	);
	public $displayField = 'displayName';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Shot' => array(
			'className' => 'Shot',
			'foreignKey' => 'user_id',
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

}
