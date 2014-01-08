<?php
/**
 * CareersProjectFixture
 *
 */
class CareersProjectFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'career_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'career_id_project_id' => array('column' => array('career_id', 'project_id'), 'unique' => 1),
			'I_CAREER_ID' => array('column' => 'career_id', 'unique' => 0),
			'I_PROJECT_ID' => array('column' => 'project_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'career_id' => 1,
			'project_id' => 1
		),
	);

}
