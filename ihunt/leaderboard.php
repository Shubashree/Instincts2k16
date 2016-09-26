<?php
error_reporting(E_ALL ^ E_DEPRECATED);
	session_start();
	require_once("database.php");
	$sql = "SELECT * FROM users2 WHERE isadmin != 1 ORDER BY curlevel DESC,leveltime ASC,id ASC limit 400";
	$ref = mysql_query($sql);
	$content = "<center><h2>Who's On Top</h2></center><br/><br/><table width = \"60%\" align = \"center\" border=0>";
	$i = 1;
	$content = $content ."<tr style=\" color:#000;\"><th>Rank</th><th>Username</th><th>College</th><th>Level</th></tr>";
	while($row = mysql_fetch_assoc($ref))
	{
		$lvl = $row["curlevel"];
		if($lvl==21)
		{
		$lvl = "Completed";
		}
		
		/*if($row["name"]=='MishuAnubis'){
			$content = $content ."<tr align=\"center\" style=\" color:#cf0;\"><td>" . $i . ".</td><td> " . $row["name"] . "</td><td>" . $row["college"] . "</td><td>" . $lvl. '(1st place)'. "</td></tr>";
			}
		else if($row["name"]=='wolverine'){
			$content = $content ."<tr align=\"center\" style=\" color:#cf0;\"><td>" . $i . ".</td><td> " . $row["name"] . "</td><td>" . $row["college"] . "</td><td>" . $lvl. '(2st place)'. "</td></tr>";
			}	
			else if($row["name"]=='Ashish ram'){
			$content = $content ."<tr align=\"center\" style=\" color:#cf0;\"><td>" . $i . ".</td><td> " . $row["name"] . "</td><td>" . $row["college"] . "</td><td>" . $lvl. '(3st place)'. "</td></tr>";
			}
		else{*/
		$content = $content ."<tr align=\"center\" style=\" color:#000;\"><td>" . $i . ".</td><td> " . $row["name"] . "</td><td>" . $row["college"] . "</td><td>" . $lvl. "</td></tr>";
		//}
		$i++;
	}
	$content = $content . "</table>";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Leaderboard</title>
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/less-1.1.3.min.js"></script>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"></link>
	
	<link rel="stylesheet" type="text/css" href="css/level.css"/>
	
    
    <link rel="stylesheet" type="text/css" href="css/style-particle.css">
		<script type="text/javascript" src="js/type-text.js"></script>
        <script src="js/jqfloat.min.js"></script>
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


<div id="particles-js"></div>

<script src="js/particles.js"></script>
<script src="js/app.js"></script>

<script src="js/lib/stats.js"></script>	
<img src="images/ins.png" style="position:absolute;top:0;
left:25%; width:180px;height:auto;margin-top:-20px;">	
     <p class="header-p"></p>
     
 <div class="sponsor">
<h1>Sponsored by:</h1><h1 style="text-align:center">Associate sponsors:</h1>
<img class="slogo" src="images/naam.png" >
<img class="slogo" src="images/andylogo.png" >
<img class="slogo" src="images/ican.png" style="margin-top:0;" >
</div>
    
     
<div class="body-wrap" id="world">   
        
		<div class="trans" id="top-left-fixed-block">
		<div class="opq">
		<div class="nav">
		<div class="navi">
		<ul class="navbar" style=" top:-40px">
	        
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					 <div class="nav-menu" onclick="setTimeout(function(){window.location='play.php'},800);">
                    <p class="p1">PLAY</p>
                    </div>
				</div>
			  </div>
			</div>
			
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					 <div class="nav-menu" onclick="setTimeout(function(){window.location='rules.php'},800);">
                    <p class="p1">RULES</p>
                    </div>
				</div>
			  </div>
			</div>
			
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					 <div class="nav-menu" onclick="setTimeout(function(){window.location='leaderboard.php'},800);">
                    <p class="p1" style="font-size:18px; ">RANKING</p>
                    </div>
				</div>
			  </div>
			</div>
		
		    <?php if(isset($_SESSION["valid_user"])){ ?>
		    <div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					  <div class="nav-menu" onclick="setTimeout(function(){window.location='forum/index.php'},800);">
                    <p class="p1">FORUM</p>
                    </div>
				</div>
			  </div>
			</div>
			<?php } ?>
			
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					<div class="nav-menu" onclick="setTimeout(function(){window.location='contact.php'},800);">
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
					 <div class="nav-menu" onclick="setTimeout(function(){window.location='loginform.php'},800);">
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
		<div class="welcome" style="position:absolute;float:right;top:-80px;right:0px;">
		Welcome <?php echo $_SESSION["valid_user"]; ?>, <a href="logout.php"><span class="white" style="text-decoration:underline;font-size:20px;">Logout</span></a>
		</div>
		<?php } ?>
		<br/>
		<div id="leaderboard" style="width:100%; height:120%;color:#000; word-wrap:break-word;top:-70px;position:absolute; overflow:auto;">
		<?php echo $content; ?>
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
         <script type="text/javascript" src="js/motion.js"></script>
</body>
</html>