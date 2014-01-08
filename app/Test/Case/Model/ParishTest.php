<?php
App::uses('Parish', 'Model');

/**
 * Parish Test Case
 *
 */
class ParishTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.parish',
		'app.city',
		'app.state',
		'app.country',
		'app.beneficiary',
		'app.university'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Parish = ClassRegistry::init('Parish');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Parish);

		parent::tearDown();
	}

}
