<?php
/**
 * @author Arkadiusz Bisaga, Janusz Tylek
 * @copyright Copyright &copy; 2006-2020 Janusz Tylek
 * @version 1.0
 * @license MIT
 * @package epesi-tests
 * @subpackage search
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

class Tests_SearchCommon extends ModuleCommon {
	
	public static function search($word){
		return array(0=>'Found word '.$word.'!');
	}

	public static function advanced_search_access() {
		return true;
	}
}
?>
