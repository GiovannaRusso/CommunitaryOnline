<?php
App::uses('Document', 'Model');

/**
 * Document Test Case
 *
 */
class DocumentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.document',
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
		'app.project',
		'app.experience',
		'app.career',
		'app.careers_project',
		'app.careers_university',
		'app.document_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Document = ClassRegistry::init('Document');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Document);

		parent::tearDown();
	}

}
