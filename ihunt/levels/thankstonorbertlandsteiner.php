<?php
session_start();
require_once("../database.php");
if(!isset($_SESSION["valid_user"]))
{
	header("Location: ../index.php");
}
else
{
	if(!($_SESSION["level"]==9))
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
    <title>Level9</title>
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
<ul class="navbar">
	        
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-home"></i></span>
					<input style="height:20px" class="span2 btn btn-primary" value="Home" onclick="window.location='../index.php';" />
				</div>
			  </div>
			</div>
			
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-pencil"></i></span>
					<input style="height:20px" class="span2 btn btn-primary" value="Rules" onclick="window.location='../rules.php';" />
				</div>
			  </div>
			</div>
			
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-user"></i></span>
					<input style="height:20px" class="span2 btn btn-primary" value="Leaderboard" onclick="window.location='../leaderboard.php';" />
				</div>
			  </div>
			</div>
		
		    <?php if(isset($_SESSION["valid_user"])){ ?>
		    <div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-bullhorn"></i></span>
					<input style="height:20px" class="span2 btn btn-primary" value="Forum" onclick="window.location='../forum/index.php';" />
				</div>
			  </div>
			</div>
			<?php } ?>
			
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-comment"></i></span>
					<input style="height:20px" class="span2 btn btn-primary" value="Contact Us" onclick="window.location='../contact.php';" />
				</div>
			  </div>
			</div>
	        
			<?php if(isset($_SESSION["valid_user"])){?>
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-off"></i></span>
					<input style="height:20px" class="span2 btn btn-primary" value="Logout" onclick="window.location='../logout.php';" />
				</div>
			  </div>
			</div>
			<?php } else {?>
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-hand-right"></i></span>
					<input style="height:20px" class="span2 btn btn-primary" value="Login/Resgister" onclick="window.location='../loginform.php';" />
				</div>
			  </div>
			</div>
			<?php } ?>
		</ul>
		</div>
		
		<!-- ddd@xy.ef -->
		
		<div class="content">
		<div class="question">
		<center>
		<img src="qns/lvl9/9.1.jpg" width="90" height="90"/>
		<img src="qns/lvl9/9.2.jpg" width="90" height="90"/>
		<img src="qns/lvl9/9.3.jpg" width="90" height="90"/>
		</center>
		</div>
		<div class="ansform">
    <form action="../answer.php" method="post">	
	<div class="control-group">
    <label class="control-label" for="answ"><span style="font-weight:bold;font-size:20px" class="yellow">Answer</span></label>
	<div style="height:5px"></div>
	<div class="controls">
	 <div class="input-prepend">
	  <span class="add-on"><i class="icon-pencil"></i></span>
	  <input type="text" size="20" id="answ" name="answer" required />
	  <input type="submit" class="btn btn-primary" value="Submit" />
	 </div>
	</div>
   </div>
   </form>
   </div>
   
		
		</div>
</body>
</html>