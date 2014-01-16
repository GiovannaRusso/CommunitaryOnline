<?php
App::uses('Problem', 'Model');

/**
 * Problem Test Case
 *
 */
class ProblemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.problem',
		'app.creator',
		'app.beneficiary',
		'app.parish',
		'app.city',
		'app.state',
		'app.country',
		'app.university',
		'app.user',
		'app.universities_user',
		'app.document',
		'app.document_type',
		'app.project',
		'app.experience',
		'app.career',
		'app.careers_project',
		'app.careers_university',
		'app.beneficiary_type',
		'app.need',
		'app.needs_problem'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Problem = ClassRegistry::init('Problem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Problem);

		parent::tearDown();
	}

}
