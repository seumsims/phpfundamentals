<?php 
session_start();

session_destroy();

$_SESSION = array();
// delete the session cookie

header('Location: login.php');