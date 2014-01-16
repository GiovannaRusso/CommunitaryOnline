<?php
App::uses('UniversityUserType', 'Model');

/**
 * UniversityUserType Test Case
 *
 */
class UniversityUserTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.university_user_type',
		'app.universities_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UniversityUserType = ClassRegistry::init('UniversityUserType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UniversityUserType);

		parent::tearDown();
	}

}
