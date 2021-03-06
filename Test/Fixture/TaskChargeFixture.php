<?php
/**
 * TaskChargeFixture
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Yuto Kitatsuji <kitatsuji.yuto@withone.co.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

/**
 * TaskChargeFixture
 */
class TaskChargeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary', 'comment' => 'ID | | | '),
		'task_content_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false, 'comment' => 'タスクID | | | '),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false, 'comment' => 'created user | 作成者 | users.id | '),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false, 'comment' => 'created user | 作成者 | users.id | '),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'created datetime | 作成日時 | | '),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => '0', 'unsigned' => false, 'comment' => 'modified user | 更新者 | users.id | '),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => 'modified datetime | 更新日時 | | '),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'task_content_id' => '1',
			'user_id' => '1',
			'created_user' => '1',
			'created' => '2016-03-17 07:10:12',
			'modified_user' => '1',
			'modified' => '2016-03-17 07:10:12',
		),
		array(
			'id' => '2',
			'task_content_id' => '2',
			'user_id' => '2',
			'created_user' => '2',
			'created' => '2016-03-17 07:10:12',
			'modified_user' => '2',
			'modified' => '2016-03-17 07:10:12',
		),
		array(
			'id' => '3',
			'task_content_id' => '1',
			'user_id' => '2',
			'created_user' => '1',
			'created' => '2016-03-17 07:10:12',
			'modified_user' => '1',
			'modified' => '2016-03-17 07:10:12',
		),
		array(
			'id' => '4',
			'task_content_id' => '1',
			'user_id' => '3',
			'created_user' => '1',
			'created' => '2016-03-17 07:10:12',
			'modified_user' => '1',
			'modified' => '2016-03-17 07:10:12',
		),
		array(
			'id' => '5',
			'task_content_id' => '1',
			'user_id' => '4',
			'created_user' => '1',
			'created' => '2016-03-17 07:10:12',
			'modified_user' => '1',
			'modified' => '2016-03-17 07:10:12',
		),
		array(
			'id' => '6',
			'task_content_id' => '1',
			'user_id' => '5',
			'created_user' => '1',
			'created' => '2016-03-17 07:10:12',
			'modified_user' => '1',
			'modified' => '2016-03-17 07:10:12',
		),
		array(
			'id' => '7',
			'task_content_id' => '1',
			'user_id' => '6',
			'created_user' => '1',
			'created' => '2016-03-17 07:10:12',
			'modified_user' => '1',
			'modified' => '2016-03-17 07:10:12',
		),
	);

}
