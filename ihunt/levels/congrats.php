<?php
session_start();
if($_SESSION["level"]<=19)
{
Header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Congratulations</title>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/less-1.1.3.min.js"></script>
	<script type="text/javascript" src="../js/jquery-firefly.js"></script>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"></link>	
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
		<div class="content">
		<?php if(isset($_SESSION["valid_user"])){ ?>
		<div class="welcome" style="position:absolute;float:right;top:0px;right:0px;">
		<span class="yellow">Hi <?php echo $_SESSION["valid_user"]; ?></span>!, <a href="../logout.php"><span class="white" style="text-decoration:underline">Logout</span></a>
		</div>
		<?php } ?>
		<h2>Congratulations ! </h2>
		<p>
		You have uncovered the<span class="yellow"> Sherlock </span>within you :P. Thanks for participating. <br/><br/>
		Hope it was very informative and fun filled.
		<br/>
		<center><img src="congrats.jpg" width="600" height="300"/></center><div style="height:5px"></div>
		<center>&quot;John, I don't think I'll need you anymore. I have found a replacement for you.&quot;</center>
		</div>
		</div>
</body>
</html>