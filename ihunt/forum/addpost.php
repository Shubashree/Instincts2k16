<?php
session_start();
error_reporting(E_ERROR|E_PARSE);
ob_start();
require_once("../database.php");
$flag=0;
if(!isset($_SESSION["valid_user"]))
{
	header("Location: ../index.php");
}
$val = filter_var($_POST["message"],513);
$level = $_POST["level"];
if($_SESSION["isadmin"]==0)
{
$fname = $_SESSION["valid_user"];
}
else
{
$fname = $_SESSION["valid_user"]."(admin)";
}
$sql = "select answer from levels2;";
$result = mysql_query($sql) or die(mysql_error("error"));

while($row = mysql_fetch_array($result))
{
 $ans = $row['answer'];
 $val1= strtolower($val);
 $value = preg_replace('/\s+/', '',$val1);
 $flag=0;

 $len_ans = strlen($ans);
 $len = strlen($value);
 echo $len." ".$len_ans."\n";
 for($i=0;$i<$len-$len_ans+1;$i++)
 {
  $fans = "";
  for($j=$i;$j<$i+$len_ans;$j++)
   $fans.=$value[$j];
  if($fans==$ans)
  {
  // $flag=1;
  // $val="Its a warning from the admins ".$fname.".Do not post answers on forums.";
  // break;
  }
 }

 /*if(substr_count($ans,$value)>0)
 {
  $val="Its a warning from the admins ".$fname.".Do not post answers on forums.";
  break;
 }*/
 if($flag==1) 
  break;
}

$sql = "INSERT INTO forum2 (name, val, level) VALUES ('" . mysql_real_escape_string($fname) . "','" . mysql_real_escape_string($val) . "','" . $level . "')";
$ref = mysql_query($sql);
header("Location: forum.php?lvl=$level");
?>
