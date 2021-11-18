<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$cTime = date('Y-m-d H:i:s');
$cDate = date('Y-m-d');
$tblPrefix ="pro_";

//constants...
define('HASH_KEY', 'test_eccomerce');
define('PROD', 0); //during production 1 testing 0...

if(PROD == 1){
define('SITE_URL', '');

    $hostName = '';
	$userName = '';
	$password = '';
	$database = '';
	
}else{
	define('SITE_URL', 'http://localhost/tem/');
	$hostName = 'localhost';
	$userName = 'root';
	$password = '';
	$database = 'bonami_db';
}
$conn = mysqli_connect($hostName, $userName, $password, $database);

if($conn!=true){
	echo '<script> alert("Could not connect to database.");</script>';
}

$genDataQ = mysqli_query($conn, "SELECT key_name, key_value FROM `pro_general` WHERE key_name!=''");
while($genData = mysqli_fetch_assoc($genDataQ)){
	$_SESSION['general'][$genData['key_name']]= $genData['key_value'];
}

define('SITE_NAME', 'Eccomerce site');





?>