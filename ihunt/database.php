<?php
define('DB_NAME','networkg_ihunt');
define('DB_USER','networkg_ihunt');
define('DB_PASSWORD','ihunt123');
define('DB_HOST','localhost');


$result = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
$database = DB_NAME;
@mysql_select_db($database) or die( "Unable to select database. Please see if the database exists");

$sql = "CREATE TABLE IF NOT EXISTS `users2` (
		  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
		  `pkey` varchar(200) DEFAULT NULL,
		  `name` varchar(200) DEFAULT NULL,
		  `password` varchar(200) DEFAULT NULL,
		  `curlevel` int(11) DEFAULT NULL,
		  `leveltime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
		  `isadmin` int(11) DEFAULT NULL,
		  `college` varchar(200) DEFAULT NULL,
		  `mobile` varchar(20) DEFAULT NULL,
		  `email` varchar(200) DEFAULT NULL
	);";
$ref = mysql_query($sql);

$sql = "CREATE TABLE IF NOT EXISTS `participants` (
		`pid` varchar(6) PRIMARY KEY,
		`pname` varchar(200) DEFAULT NULL,
		`college` varchar(200) DEFAULT NULL,
		`ph_no` varchar(20) DEFAULT NULL,
		`email` varchar(200) DEFAULT NULL
	);";
$ref = mysql_query($sql);

$sql = "CREATE TABLE IF NOT EXISTS `levels2` (
		  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
		  `levelname` varchar(200) DEFAULT NULL,
		  `answer` varchar(1000) DEFAULT NULL
	)";
$ref = mysql_query($sql);

$sql = "CREATE TABLE IF NOT EXISTS `forum2` (
		  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
		  `name` varchar(200) DEFAULT NULL,
		  `val` varchar(2000) DEFAULT NULL,
		  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
		  `level` int(11) DEFAULT NULL
	);";
$ref = mysql_query($sql);

$sql = "CREATE TABLE IF NOT EXISTS `logs2` (
		  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
		  `user` varchar(200) DEFAULT NULL,
		  `val` varchar(2000) DEFAULT NULL,
		  `level` int(11) DEFAULT NULL,
		  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
		  `ipaddr` varchar(200) DEFAULT NULL
	);";
$ref = mysql_query($sql);
?>