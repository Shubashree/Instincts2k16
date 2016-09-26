<?php
session_start();
error_reporting(E_ERROR|E_PARSE);
ob_start();
require_once("../database.php");
if(!isset($_SESSION["valid_user"]))
{
	header("Location: ../index.php");
}
if($_SESSION["isadmin"]==0)
{
	header("Location: index.php");
}
else
{
$id=$_GET["id"];
$lvl=$_GET["lvl"];
if(!$id)
	if(!$lvl)
	header("Location: index.php");

$sql = "DELETE FROM forum2 where id='".$id."'";
$ref = mysql_query($sql);
}
header("Location: forum.php?lvl=$lvl");
