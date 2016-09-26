<?php



error_reporting(E_ERROR|E_PARSE);
session_start();
ob_start();
require_once("database.php");
if(!isset($_SESSION["valid_user"]))
{
	header("Location: index.php");
}
// breach answers 

else if( ($_SESSION["valid_user"]=="Pv") ){
	
Header("Location: levels/levelbreach.php");
	
	
	}
	

//	
	
else
{
	
	
	
	$sql = "SELECT * FROM levels2 WHERE id = '" . $_SESSION["level"] . "'";
	$ref = mysql_query($sql);
	$row = mysql_fetch_assoc($ref);
	if($row == NULL)
	{
		$_SESSION["error"] = "No levels";
		echo $_SESSION["error"];
		Header("Location: ./levels/congos.php");
	}
	else
	{
		$levelname=$row["levelname"];
		echo $levelname;
		Header("Location: ./levels/$levelname.php");
	}
	

}

	
?>