<?php
session_start();

$root = $_SERVER['DOCUMENT_ROOT'];

$rootHtml = "/" . basename($_SERVER['DOCUMENT_ROOT']);
$rootHtml = str_replace("//", "/", $rootHtml);

require_once $root . "/Model/Classes/Database.php";

require_once $root . "/Model/Entity/User.php";
require_once $root . "/Model/Manager/UserManager.php";

