<?php
/**
 * @author Paul Bukowski <pbukowski@telaxus.com>
 * @copyright Copyright &copy; 2007, Telaxus LLC
 * @version 1.0
 * @licence SPL
 * @package epesi-tests
 * @subpackage wizard
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

class Tests_WizardInstall extends ModuleInstall {
	public static function install() {
		return true;
	}
	
	public static function uninstall() {
		return true;
	}
	public static function requires($v) {
		return array(array('name'=>'Utils/CatFile','version'=>0),
			array('name'=>'Base/Lang','version'=>0),
			array('name'=>'Utils/Wizard','version'=>0)
		);
	}
}

?>
