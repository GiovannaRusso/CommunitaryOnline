<?php
App::uses('CareersProject', 'Model');

/**
 * CareersProject Test Case
 *
 */
class CareersProjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.careers_project',
		'app.career',
		'app.project',
		'app.university',
		'app.user',
		'app.universities_user',
		'app.experience',
		'app.careers_university'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CareersProject = ClassRegistry::init('CareersProject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CareersProject);

		parent::tearDown();
	}

}
