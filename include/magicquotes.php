<?php
/**
 * @author Janusz Tylek <j@epe.si>
 * @version 1.9.0
 * @copyright Copyright &copy; 2006-2020 Janusz Tylek
 * @license MIT
 * @package epesi-base
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

//strip slashes!!!
if (get_magic_quotes_gpc()) {
    function undoMagicQuotes($array, $topLevel=true) {
        $newArray = array();
        foreach($array as $key => $value) {
            if (!$topLevel) {
                $key = stripslashes($key);
            }
            if (is_array($value)) {
                $newArray[$key] = undoMagicQuotes($value, false);
            }
            else {
                $newArray[$key] = stripslashes($value);
            }
        }
        return $newArray;
    }

    $_GET = undoMagicQuotes($_GET);
    $_POST = undoMagicQuotes($_POST);
    $_COOKIE = undoMagicQuotes($_COOKIE);
    $_REQUEST = undoMagicQuotes($_REQUEST);
}
