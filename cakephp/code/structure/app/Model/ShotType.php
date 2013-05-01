<?php
App::uses('AppModel', 'Model');
/**
 * ShotType Model
 *
 * @property Shot $Shot
 */
class ShotType extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Shot' => array(
			'className' => 'Shot',
			'foreignKey' => 'shot_type_id',
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
