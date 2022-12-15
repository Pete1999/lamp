<?php
//phpinfo();
ob_start();
ini_set('display_errors', 'On');
error_reporting(E_ALL);
// Assign file paths to PHP constants
// __FILE__ returns the current path to this file
// dirname() returns the path to the parent directory
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');


define("WWW_ROOT", '');

require_once('functions.php');
?>
