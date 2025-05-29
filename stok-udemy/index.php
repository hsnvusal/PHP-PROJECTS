<?php
require_once 'config/database.php';
require_once 'Helper/mHelper.php';
$db = new Database();
$returnArray = [];
$returnArray['status'] = false;

$mode = $_GET['mode'];
$process = $_GET['process'];

$path = 'Api/'.$mode.'/'.$process.'.php';
if (file_exists($path))
{
    require_once 'api/'.$mode.'/'.$process.'.php';
}
else {
    die('Page is not found');
}


print_r($returnArray);