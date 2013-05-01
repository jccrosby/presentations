<?php
/**
 * ShotFixture
 *
 */
class ShotFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'shot_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'count' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'user_id_idxfk_1' => array('column' => 'user_id', 'unique' => 0),
			'shot_type_id_idxfk_1' => array('column' => 'shot_type_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'shot_type_id' => 1,
			'count' => 1
		),
	);

}
