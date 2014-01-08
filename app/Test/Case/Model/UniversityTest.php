<?php
App::uses('University', 'Model');

/**
 * University Test Case
 *
 */
class UniversityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.university',
		'app.parish',
		'app.city',
		'app.state',
		'app.country',
		'app.beneficiary',
		'app.beneficiary_type',
		'app.user',
		'app.universities_user',
		'app.problem',
		'app.document',
		'app.project',
		'app.experience',
		'app.career',
		'app.careers_project',
		'app.careers_university'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->University = ClassRegistry::init('University');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->University);

		parent::tearDown();
	}

}
