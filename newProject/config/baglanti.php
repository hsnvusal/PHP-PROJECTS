<?php
session_start();
class baglanti
{
    public $db;
    function __construct()
    {
            $this->db = new PDO("mysql:host=localhost;dbname=users;charset=utf8", "root", "");
    }
}
define("SITE_URL","http://localhost/newProject");
require_once "sessionManager.php";
require_once "helper.php";
$baglanti = new baglanti();
$sessionManager = new sessionManager();
?>
