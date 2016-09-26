<?php
session_start();
require_once("database.php");
$password = sha1(mysql_real_escape_string($_POST["password"]));
$sql = "SELECT * FROM users2 WHERE pkey = '" . $_POST["key"] . "'";
	$ref = mysql_query($sql);
	$row = mysql_fetch_assoc($ref);
	
	if($row == NULL)
	{
		$_SESSION["error"] = "E-Mail not yet registered";
		Header("Location: loginform.php");
	}
	else if($row["password"] == $password)
	{
		$_SESSION["valid_user"]= $row["name"];
		$_SESSION["level"] = $row["curlevel"];
		$_SESSION["key"] = $row["pkey"];
		if($row["isadmin"] == NULL)
		{
			$_SESSION["isadmin"] = 0;
		}
		else 
			$_SESSION["isadmin"] = $row["isadmin"];	
		Header("Location: index.php");
	}
	else
	{
		$_SESSION["error"] = "Wrong password!";
		Header("Location: loginform.php");
	}
?>
