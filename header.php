<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once 'libs/Smarty.class.php';
require_once 'function.php';
$smarty = new Smarty;
$db     = link_db();

define('_TAG_PAGE',str_replace('.php','.tpl',basename($_SERVER['PHP_SELF'])));