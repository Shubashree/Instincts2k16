<?php
session_start();
require_once("database.php");
 $ipad = $_SERVER['REMOTE_ADDR']; 
if(!isset($_SESSION["valid_user"]))
{
	header("Location: index.php");
}
else
{
	$level = $_SESSION["level"];
	$answer = $_POST["answer"];

	if(!$answer)
	{
		header("Location: play.php");
	}

//	$sql = "INSERT INTO logs2 (user,val,level,ipaddr) VALUES ('" . mysql_real_escape_string($_SESSION["valid_user"]) . "','" . mysql_real_escape_string($answer) . "','". $level . "','".$ipad."')";

	$sql = "INSERT INTO logs2 (user,val,level,ipaddr) VALUES ('" . mysql_real_escape_string($_SESSION["valid_user"]) . "','" . mysql_real_escape_string($answer) . "','". $level . "','".$ipad."')";


	$ref = mysql_query($sql);

	$sql = "SELECT * FROM levels2 WHERE id = '" . mysql_real_escape_string($level) . "'" ;
	
	$ref = mysql_query($sql);
	$row = mysql_fetch_assoc($ref);

	$ans = $row['answer'];
	if(!($ans))
	{
		$_SESSION["error"] = "Answer has not yet been decided";
	}


	else if($answer == $ans)
	{
		$level++;
		$_SESSION["level"] = $level;
		$sql = "UPDATE users2 SET curlevel = '" . $level . "' WHERE pkey = '" . $_SESSION["key"] ."'"; 
		$ref = mysql_query($sql);
		//$ref = mysql_query($sql);
	}
	else
		$content = "Wrong answer. <a href = \"index.php\">Try again</a>";
	
Header("Location: play.php");		
}
?>