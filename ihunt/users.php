<?php
	session_start();
	if(!isset($_SESSION["valid_user"]))
	{
	header("Location: index.php");
	}
	if($_SESSION["isadmin"]==0)
	{
	Header("Location: index.php");
		
	}
	require_once("database.php");
	
	$sql = "SELECT * FROM users2 ORDER BY id ";
	$ref = mysql_query($sql);
	$content = "<center><h2>Users</h2></center><br/><br/><table width = \"80%\" align = \"center\" border=0.2 cellpadding=3 style=\"table-layout:fixed;overflow:hidden; word-wrap:break-word;\" >";
	//$i = 1;
	$content = $content ."<tr><th>Id</th><th>Username</th><th>email</th><th>Level</th><th>college</th><th>Mobile no.</th></tr>";
	while($row = mysql_fetch_assoc($ref))
	{
		$content = $content ."<tr align=\"center\"><td>" . $row["id"] . ".</td><td> " . $row["name"] . "</td><td>" . $row["pkey"] . "</td><td>" . $row["curlevel"]. "</td><td>".  $row["college"]. "</td><td>".$row["mobile"]."</td></tr>";
		//$i++;
	}
	$content = $content . "</table>";
?>
<!doctype html>
<html>
<head>
<!--<meta http-equiv="refresh" content="15" >--> 
<title>users</title>
<style>
body{
	color:#000;
	background-color:#EBEBF2;
	}

</style>
</head>
<body>
<?php echo $content; ?>
</body>
</html>