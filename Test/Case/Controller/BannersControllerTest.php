<?php
/**
 * BannersController Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('BannersController', 'Banners.Controller');

/**
 * BannersController Test Case
 */
class BannersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.banners.banner',
		'plugin.banners.site_setting',
		'plugin.banners.site_setting_value'
	);

}
