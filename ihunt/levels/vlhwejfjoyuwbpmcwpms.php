<?php
session_start();
require_once("../database.php");
if(!isset($_SESSION["valid_user"]))
{
	header("Location: ../index.php");
}
else
{
	if(!($_SESSION["level"]==15))
	{
		$sql = "SELECT * FROM levels2 WHERE id = '" . $_SESSION["level"] . "'";
		$ref = mysql_query($sql);
		$row = mysql_fetch_assoc($ref);
		if($row == NULL)
		{
			$_SESSION["error"] = "No levels";
			Header("Location: ../index.php");
		}
		else
		{
			$levelname=$row["levelname"];
			Header("Location: $levelname.php");
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Level 15</title>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/less-1.1.3.min.js"></script>
	<script type="text/javascript" src="../js/jquery-firefly.js"></script> 
	<script type="text/javascript">$(document).ready(function() {
	$.firefly({images:['../images/fly1by1.png','../images/fly2by2.png','../images/fly3by31.png','../images/fly4by4.png'],total:163});
	$("#main").show("slow");});	</script>
	<link rel="stylesheet" type="text/css" href="../css/level.css"/>
	<script type="text/javascript">
	 var _gaq = _gaq || [];
	 _gaq.push(['_setAccount', 'UA-34263328-1']);
	 _gaq.push(['_trackPageview']);

  	(function() {
  	  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   	  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   	  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 	 })();
	</script>
</head>
<body>
		<img id="bgpic" src="../images/plogo.png" style="position:absolute;"/>
		<div class="header"><center><img src="../images/trespass.png" style="position:relative;top:7px;height:80px;"/></center></div>
		<div class="trans"></div>
		<div class="opq">
		<div class="nav">
		<img src="../images/border_tl.png" style="position:absolute; top:0; left:0;" />
		<img src="../images/border_tr.png" style="position:absolute; top:0; right:0;" />
		<img src="../images/border_bl.png" style="position:absolute; bottom:0; left:0;" />
		<img src="../images/border_br.png" style="position:absolute; bottom:0; right:0;" />
		<ul class="navbar">
		<a href="../index.php"><li>HOME</li></a><br/>
		<a href="../rules.php"><li>RULES</li></a><br/>
		<a href="../leaderboard.php"><li>LEADERBOARD</li></a><br/>
		<?php if(isset($_SESSION["valid_user"])){ ?><a href="../forum/index.php"><li>FORUM</li></a><br/><?php } ?>
		<a href="../contact.php"><li>CONTACT US</li></a><br/>
		<a href="../logout.php"><li>LOGOUT</li></a>
		</ul>
		</div>
		
		<!-- O! Draconian Devil -->
		
		<div class="content">
		<img src="../images/border_tl.png" style="position:absolute; top:0; left:0;" />
		<img src="../images/border_tr.png" style="position:absolute; top:0; right:0;" />
		<img src="../images/border_bl.png" style="position:absolute; bottom:0; left:0;" />
		<img src="../images/border_br.png" style="position:absolute; bottom:0; right:0;" />
		<div class="question">
		<center>
		<img src="qns/lvl15/image2.jpg" width="150" height="150" style="position:absolute; top:0; left:15%;" />
		<img src="qns/lvl15/image1.jpg" width="150" height="150" style="position:absolute; bottom:0; left:15%;"/>
		<img src="qns/lvl15/image4.jpg" width="150" height="150" style="position:absolute; top:0; right:15%;"/>
		<img src="qns/lvl15/image3.jpg" width="150" height="150" style="position:absolute; bottom:0; right:15%;"/>
		<hr style="height: 250px;border-right: 6px solid white;width: 3px;"/>
		</center>
		</div>
		<div class="ansform">
		<form action="../answer.php" method="post">
		Answer: <input type="text" size="20" name="answer"/>
		<input type="submit" value="submit"/>
		</form>
		</div>
		</div>
		</div>
</body>
</html>