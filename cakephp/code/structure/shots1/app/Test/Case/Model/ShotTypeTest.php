<?php
App::uses('ShotType', 'Model');

/**
 * ShotType Test Case
 *
 */
class ShotTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shot_type',
		'app.shot',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ShotType = ClassRegistry::init('ShotType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShotType);

		parent::tearDown();
	}

}
