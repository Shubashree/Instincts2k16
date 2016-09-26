<?php
session_start();
error_reporting(0);
ob_start();
require_once("../database.php");
if(!isset($_SESSION["valid_user"]))
{
	header("Location: ../index.php");
}
$lvl = $_GET["lvl"];
if(!$lvl)
{
	Header("Location: index.php");
}
if($lvl>20||$lvl<1)
{
	Header("Location: index.php");
}
if($lvl>$_SESSION["level"])
{
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Forum - Level <?php echo $lvl; ?></title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="../js/less-1.1.3.min.js"></script>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"></link>	
	 <link rel="stylesheet" type="text/css" href="../css/style-particle.css">
		<script type="text/javascript" src="../js/type-text.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/level.css"/>
	 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74733967-1', 'auto');
  ga('send', 'pageview');

</script>
<script src="../js/jqfloat.min.js"></script>
 <script>
  // window.open('levels/credits1.php','_blank');
  $(document).ready(function(e) {
  $('.control-group,.logo,.footer').jqFloat({
	  width:10,
	  height:10,
	  speed:1000
	  
	  });
    $('.header-p').jqFloat({
	  width:12,
	  height:12,
	  speed:1400
	  
	  });
	    $('.slogo').jqFloat({
	  width:12,
	  height:12,
	  speed:1000
	  
	  });
});
   </script>
</head>
<body>
<div class="loader">
<div class="container container2 " style="perspective:500px;">
  <div class="cube">
    <div class="side side1"></div>
    <div class="side side2"></div>
    <div class="side side3"></div>
    <div class="side side4"></div>
    <div class="side side5"></div>
    <div class="side side6"></div>
   
  </div>
   <div class="side side7">LOADING..</div>
</div>
</div>




<img src="../images/ins.png" style="position:absolute;top:0;
left:25%; width:180px;height:auto;margin-top:-20px;">
<p class="header-p"></p>
<div class="sponsor">
<h1>Sponsored by:</h1><h1 style="text-align:center">Associate sponsors:</h1>
<img class="slogo" src="../images/naam.png" >
<img class="slogo" src="../images/andylogo.png" >
<img class="slogo" src="../images/ican.png" style="margin-top:0;" >
</div>
<div class="body-wrap" id="world">
<div id="particles-js"></div>

<script src="../js/particles.js"></script>
<script src="../js/app.js"></script>

<script src="../js/lib/stats.js"></script>
		<div class="trans" id="top-left-fixed-block">
		<div class="opq">
		<div class="nav">
        <div class="navi">
		<ul class="navbar" style=" top:-40px">
	        
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					<div class="nav-menu" onclick="setTimeout(function(){window.location='../index.php'},800);">
                    <p class="p1">HOME</p>
                    </div>
				</div>
			  </div>
			</div>
			
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					 <div class="nav-menu" onclick="setTimeout(function(){window.location='../rules.php'},800);">
                    <p class="p1">RULES</p>
                    </div>
				</div>
			  </div>
			</div>
			
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					 <div class="nav-menu" onclick="setTimeout(function(){window.location='../leaderboard.php'},800);">
                    <p class="p1" style="font-size:18px; ">RANKING</p>
                    </div>
				</div>
			  </div>
			</div>
		
		    <?php if(isset($_SESSION["valid_user"])){ ?>
		    <div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					 <div class="nav-menu" onclick="setTimeout(function(){window.location='index.php'},800);">
                    <p class="p1">FORUM</p>
                    </div>
				</div>
			  </div>
			</div>
			<?php } ?>
			
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					 <div class="nav-menu" onclick="setTimeout(function(){window.location='../contact.php'},800);">
                    <p class="p1" style=" font-size:18px;">CONTACT</p>
                    </div>
				</div>
			  </div>
			</div>
	        
			<?php if(isset($_SESSION["valid_user"])){?>
		<!--	<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					 <div class="nav-menu" onclick="setTimeout(function(){window.location='logout.php'},1500);">
                    <p class="p1">LOGOUT</p>
                    </div>
				</div>
			  </div>
			</div>-->
			<?php } else {?>
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					 <div class="nav-menu" onclick="setTimeout(function(){window.location='../loginform.php'},1500);">
                    <p class="p1" style="font-size:16px;font-weight:bold; margin:-3px 0 0 60px;">LOGIN/<br>REGISTER</p>
                    </div>
				</div>
			  </div>
			</div>
			<?php } ?>
		</ul>
		</div>
        </div>
		<div class="content">
		<?php if(isset($_SESSION["valid_user"])){ ?>
		<div class="welcome" style="position:absolute;float:right;top:-80px;right:0px;background:#000">
		<span class="yellow">Hi <?php echo $_SESSION["valid_user"]; ?> !</span>, <a href="../logout.php"><span class="white">Logout</span></a>
		</div>
		<?php } ?>
		<center>
		<h2 style="color:#000;">Forum - Level <?php echo $lvl; ?></h2></center>
		<div id="forumposts" style="width:100%; height:80%; word-wrap:break-word; overflow:auto;">
		<?php
		$sql = "SELECT id,name,val,date_format(CONVERT_TZ(time,'+00:00','+11:30'), '%D %b, %Y %r') as time,level FROM forum2 WHERE level='".$lvl."' ORDER BY id ASC";
		$ref = mysql_query($sql);
		while($row = mysql_fetch_assoc($ref))
		{
			echo "<p style=\"font-size:13px;color:#000;\"><span class=\"yellow\" style=\"font-weight:bold;font-size:15px;\">".$row["name"]."</span> : ";
			if($_SESSION["isadmin"]>0)
			{
				echo "<a href=\"deletepost.php?id=".$row["id"]."&lvl=".$lvl."\">delete</a>";
			}
			echo "<br/><span class=\"yellow\" style=\"font-style:italic;font-size:10px;\">".$row["time"]."</span>";
			echo "<br/>".$row["val"]."</p>";
		}
		?>
		<!--change to glyphicon-->
		<h4 style="#000">Add Post</h4>
		<form method="post" action="addpost.php">
		<textarea rows="4" cols="50" name="message" ></textarea>
		<input type="hidden" value="<?php echo $lvl; ?>" name="level"/>
		<div class="form-actions">
		 <button type="submit" class="btn btn-primary" value="post" ><i class="icon-share"></i>Post</button> 
		 <!--button type="button" class="btn"><i class="icon-trash"></i>Clear</button-->	
		</div>
		</form>
		</div>
		</div>
		</div>
         </div>
        
         <div class="footer">
           <p style="bottom:-10px; left:42%;position:absolute; color:#fff;">&copy; NaaMDesigns 2015</p>
    <p class="footer-para">Designed by:<br />
<span style="font-family:'Lucida Console', Monaco, monospace; cursor:pointer;font-size:1.5em;color:#C9AF08" onclick="location.href='http://www.naamdesigns.com'">NaaMDesigns</span><br />
<a href="https://www.facebook.com/arvind.muthuraman" style="text-decoration:none" target="_blank">#ARVIND M</a>
</p>
    </div> 
        </div>
                  <script type="text/javascript" src="../js/motion.js"></script>

       
</body>
</html>