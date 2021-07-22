<?php
/*
Plugin Name: Test Repo
Plugin URI: https://github.com/manojkcoder/test-repo
Description: Test Repo
Version: 1.0.0
Author: Manojkcoder
Author URI: https://github.com/manojkcoder
License:
License URI:
*/

if(!defined('ABSPATH')){
	die('Invalid request.');
}

define('PLUGIN_NAME','Test Repo');
define('PLUGIN_SLUG','test-repo');
define('PLUGIN_VERSION','1.0.0');
define('PLUGIN_DIR',plugin_dir_path(__FILE__));
define('PLUGIN_FILE',__FILE__ );
define('PLUGIN_URL',plugin_dir_url(__FILE__));

class TestRepo{
	public function __construct(){
		register_activation_hook(__FILE__ ,array($this,'activatePlugin'));
		register_deactivation_hook(__FILE__,array($this,'deactivatePlugin'));
		$this->installHooks();
	}
	public function activatePlugin(){}
	public function deactivatePlugin(){}
	protected function installHooks(){}
}
new TestRepo();
