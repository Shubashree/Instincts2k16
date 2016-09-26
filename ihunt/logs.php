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
	
	$sql = "SELECT * FROM logs2 ORDER BY time DESC limit 2000";
	$ref = mysql_query($sql);
	$content = "<center><h2>Logs</h2></center><br/><br/><table width = \"60%\" align = \"center\" border=0 style=\"table-layout:fixed;overflow:hidden; word-wrap:break-word;\" >";
	$i = 1;
	$content = $content ."<tr><th>Id</th><th>Username</th><th>Answer</th><th>Level</th><th>Time</th><th>IP Address</th></tr>";
	while($row = mysql_fetch_assoc($ref))
	{
		$content = $content ."<tr align=\"center\"><td>" . $i . ".</td><td> " . $row["user"] . "</td><td>" . $row["val"] . "</td><td>" . $row["level"]. "</td><td>".  $row["time"]. "</td><td>".$row["ipaddr"]."</td></tr>";
		$i++;
	}
	$content = $content . "</table>";
?>
<!doctype html>
<html>
<head>
<!--<meta http-equiv="refresh" content="15" >--> 
<title>Logs</title>
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