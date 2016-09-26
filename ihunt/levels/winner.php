<?php
session_start();
error_reporting(E_ERROR|E_PARSE);
require_once("../database.php");
if(!isset($_SESSION["valid_user"]))
{
	header("Location: ../index.php");
}
else
{
	if(!($_SESSION["level"]==11))
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
    <title>Level 12</title>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/less-1.1.3.min.js"></script>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"></link>
	<!-- creator -->
	 <link rel="stylesheet" type="text/css" href="../css/style-particle.css">
		<script type="text/javascript" src="../js/type-text.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/level.css"/>

</head>
<body>

<div class="loader"><img src="../images/load.gif"> <p>Loading..</p></div>


<div id="particles-js"></div>

<script src="../js/particles.js"></script>
<script src="../js/app.js"></script>

<script src="../js/lib/stats.js"></script>

<img src="../images/ins.png" style="position:absolute;top:0;
left:25%; width:180px;height:auto;margin-top:-20px;">
<p class="header-p"></p>
<div class="body-wrap">
		<div class="trans">
         
		<div class="opq">
		<div class="nav">
        <div class="navi">
		<ul class="navbar" style=" top:-40px;">
	        
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					<div class="nav-menu" onclick="setTimeout(function(){window.location='../index.php'},2000);">
                    <p class="p1">HOME</p>
                    </div>
				</div>
			  </div>
			</div>
			
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					<div class="nav-menu" onclick="setTimeout(function(){window.location='../rules.php'},1500);">
                    <p class="p1">RULES</p>
                    </div>
				</div>
			  </div>
			</div>
			
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					 <div class="nav-menu" onclick="setTimeout(function(){window.location='../leaderboard.php'},1500);">
                    <p class="p1" style="font-size:18px; margin-left:82px;">RANKING</p>
                    </div>
				</div>
			  </div>
			</div>
		
		    <?php if(isset($_SESSION["valid_user"])){ ?>
		    <div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					 <div class="nav-menu" onclick="setTimeout(function(){window.location='../forum/index.php'},1500);">
                    <p class="p1">FORUM</p>
                    </div>
				</div>
			  </div>
			</div>
			<?php } ?>
			
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					 <div class="nav-menu" onclick="setTimeout(function(){window.location='../contact.php'},1500);">
                    <p class="p1" style="margin-left:82px; font-size:18px;">CONTACT</p>
                    <!--MHu3SKu4SX]]-->
                    </div>
				</div>
			  </div>
			</div>
	        
			<?php if(isset($_SESSION["valid_user"])){?>
			<!--<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					<span class="add-on"><i class="icon-off"></i></span>
					<input style="height:20px" class="span2 btn btn-primary" value="Logout" onclick="window.location='../logout.php';" />
				</div>
			  </div>
			</div>-->
			<?php } else {?>
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					 <div class="nav-menu" onclick="setTimeout(function(){window.location='../loginform.php'},1500);">
                    <p class="p1" style="font-size:16px;font-weight:bold; margin:-3px 0 0 80px;">LOGIN/<br>REGISTER</p>
                    </div>
				</div>
			  </div>
			</div>
			<?php } ?>
		</ul>
		</div>
		</div>
		<div class="content" style=" ">
		<!--<div class="question" style="top:-100px;  background-color:#FFF;">
		<center>
		
		</center>
		</div>-->
        
        <img src="congo.gif" id="congrats" style="margin:5% 15%;" width="250" height="auto">
        
        
        <br/>
	<!--
	<div class="ansform">
    <form action="../answer.php" method="post">	
	<div class="control-group" >
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
   </div>-->
   
		</div>
		</div>
        </div>
        
        
         <div class="footer">
    <p style="bottom:-10px; left:42%;position:absolute; color:#fff;">&copy; NaaMDesigns 2015</p>
    
    <p class="footer-para">Designed by:<br />
<span id="footlink" style="font-family:'Atomic Age'; cursor:pointer;font-size:1.5em;color:#C9AF08" onclick="location.href='http://www.naamdesigns.com'">NaaMDesigns</span><br />
<a href="https://www.facebook.com/arvind.muthuraman" style="text-decoration:none" target="_blank">#ARVIND M</a>
</p>
    </div> 
        </div>
        
        
</body>
</html>