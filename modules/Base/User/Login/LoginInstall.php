<?php
/**
 * LoginInstall class.
 * 
 * This class provides initialization data for Login module.
 * 
 * @author Paul Bukowski <pbukowski@telaxus.com>
 * @copyright Copyright &copy; 2006, Telaxus LLC
 * @version 1.0
 * @licence SPL
 * @package epesi-base-extra
 * @subpackage user-login
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

class Base_User_LoginInstall extends ModuleInstall {
	public static function install() {
		$ret = DB::CreateTable('user_password',"user_login_id I KEY, password C(32) NOTNULL, mail C(255) NOTNULL",array('constraints' => ', FOREIGN KEY (user_login_id) REFERENCES user_login(id)'));
		if($ret===false) {
			print('Invalid SQL query - Login module install');
			return false;
		}
		Base_ThemeCommon::install_default_theme('Base/User/Login');
		return true;
	}
	
	public static function uninstall() {
		Base_ThemeCommon::uninstall_default_theme('Base/User/Login');
		return DB::DropTable('user_password');
	}
	
	public static function version() {
		return array('1.0.0');
	}
	public static function requires($v) {
		return array(
			array('name'=>'Libs/QuickForm','version'=>0), 
			array('name'=>'Base/User','version'=>0), 
			array('name'=>'Base/Theme','version'=>0), 
			array('name'=>'Base/Lang','version'=>0),
			array('name'=>'Base/Theme','version'=>0),
			array('name'=>'Base/Mail', 'version'=>0));
	}
}

?>
