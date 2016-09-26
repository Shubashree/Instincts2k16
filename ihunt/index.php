<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>iHunt</title>



<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1">
	
	<!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    
	<script type="text/javascript" src="js/less-1.1.3.min.js"></script>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"></link>
    <link rel="stylesheet" type="text/css" href="css/style-particle.css">
		<script type="text/javascript" src="js/type-text.js"></script>
<script src="js/jqfloat.min.js"></script>
<!--<script src="js/jquery-starfield.min.js"></script>-->



	<link rel="stylesheet" type="text/css" href="css/level.css"/>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60501445-1', 'auto');
  ga('send', 'pageview');

</script>
   
 
   
</head>
<body >
<!--<div class="loader"><img src="images/load.gif"> <p>Loading..</p></div>-->
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





<img class="logo" src="images/ins.png" style="position:absolute;top:0; left:25%; width:180px;height:auto;margin-top:-20px;">
<p class="header-p"></p>

<div class="sponsor">
<h1>Sponsored by:</h1><h1 >Associate sponsors:</h1>
<img class="slogo" src="images/naam.png" >
<img class="slogo" src="images/andylogo.png" >
<img class="slogo" src="images/ican.png"  >
</div>


<div class="body-wrap " id="world" style="perspective:500px;">
<div id="particles-js"></div>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>

<script src="js/lib/stats.js"></script>
		<!--<img id="bgpic" src="images/plogo.png" style="position:absolute;"/>-->
		<!--<div class="header"><center><img src="images/bg11.png" style="position:relative;top:7px;height:80px;"/></center></div>-->
		<div class="trans" id="top-left-fixed-block">
        <div class="trans-holder" >
		<div class="opq">
		<div class="nav">
		<div class="navi" style="perspective:700px;">
		<ul class="navbar" style=" top:-40px; perspective:700px; ">
			<div class="control-group" >
			 <div class="controls">
				<div class="input-prepend">
					<!--<span class="add-on"><i class="icon-home"></i></span>
					<input style="height:20px" class="span2 btn btn-primary" value="Home" onclick="window.location='index.php';" />-->
                    <div class="nav-menu" onclick="setTimeout(function(){window.location='play.php'},800);">
                    <p class="p1">PLAY</p>
                    </div>
                    
				</div>
			  </div>
			</div>
			
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					<!--<span class="add-on"><i class="icon-pencil"></i></span>
					<input style="height:20px" class="span2 btn btn-primary" value="Rules" onclick="window.location='rules.php';" />-->
                    <div class="nav-menu" onclick="setTimeout(function(){window.location='rules.php'},800);">
                    <p class="p1">RULES</p>
                    </div>
				</div>
			  </div>
			</div>
			
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					<!--<span class="add-on"><i class="icon-user"></i></span>
					<input style="height:20px" class="span2 btn btn-primary" value="Leaderboard" onclick="window.location='leaderboard.php';" />-->
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
					<!--<span class="add-on"><i class="icon-bullhorn"></i></span>
					<input style="height:20px" class="span2 btn btn-primary" value="Forum" onclick="window.location='forum/index.php';" />-->
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
					<!--<span class="add-on"><i class="icon-comment"></i></span>
					<input style="height:20px" class="span2 btn btn-primary" value="Contact Us" onclick="window.location='contact.php';" />-->
                    <div class="nav-menu" onclick="setTimeout(function(){window.location='contact.php'},800);">
                    <p class="p1" style=" font-size:18px;">CONTACT</p>
                    </div>
				</div>
			  </div>
			</div>
	        
			<?php if(isset($_SESSION["valid_user"])){?>
			<!--<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
				<!--	<span class="add-on"><i class="icon-off"></i></span>
					<input style="height:20px" class="span2 btn btn-primary" value="Logout" onclick="window.location='logout.php';" />
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
					<!--<span class="add-on"><i class="icon-hand-right"></i></span>
					<input style="height:20px" class="span2 btn btn-primary" value="Login/Register" onclick="window.location='loginform.php';" />-->
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
		<div class="welcome" style="position:absolute;float:right;top:-80px;right:0px;background:#333;">
		<span class="yellow">Hi <?php echo $_SESSION["valid_user"]; ?></span>!, <a href="logout.php"><span class="white"  style="text-decoration:underline;font-size:20px;">Logout!!</span></a>
		</div>
		<?php } ?>
		<div class="question" style="top:-100px;text-align:justify;">
		<h2 class="text-effect1" style="text-align:center">Welcome to iHunt 2k16</h2>
		&quot;<span style="font-weight:bold" >What makes your brain race and your heart to increase pace? Yes, it's a riddle that teases your brain and it's a riddle that has brought you here. So,<em><span class="yellow"> welcome to I Hunt 2k16 : the official online web hunt of Instincts 2k16 </span></em>. <br> The event will focus primarily on testing your lateral thinking abilities and out of the box thinking skills. If you like exercising your grey cells and puzzling over things 'round and round' till you explode, this is the event for you. We promise to tickle your brain cells with interesting conundrums. So, don't let your brain stay numb, close your four fingers and raise your thumb for this great challenge to reach Infinty and Beyond!</span>&quot;</br>
		
		<!--<code>-Sir Arthur Conan Doyle</code></br></br>
		Unleash the <em><span class="yellow">Sherlock</span></em> in you ! The thrilling and furious event is back..!!
		<br/><br/>Get ready to decode!-->

		<?php 
		if(!isset($_SESSION["valid_user"]))
		{
		?>
		<br/>
		<?php if(isset($_SESSION["msg"])){ echo "<font color=\"red\">".$_SESSION["msg"]."</font>"; } unset($_SESSION["msg"]);?><br/><br/>
		<a href="loginform.php"><span style="font-weight:bold" class="yellow">Login</span></a> to play.<br/><br/>
		Not yet registered? <a href="registration.php"><span style="font-weight:bold" class="yellow">Register here</span></a>
		<?php
		}
		else
		{
		?>
		<br/><br/>
		<a href="play.php"><span style="font-weight:bold" class="yellow">Click here</span></a> to play
		<br/><br/>
		Or go to <a href="forum/index.php"><span style="font-weight:bold" class="yellow">Forum</span></a>
		<?php
		}
		?>
		<br/>
		</div>
		</div>
		</div>
        </div>
        </div>
        
    <div class="footer">
    <p style="bottom:-10px; left:42%;position:absolute; color:#333;">&copy; NaaMDesigns 2015</p>
    
    <p class="footer-para">Designed by:<br />
<span id="footlink" style="font-family:'Lucida Console', Monaco, monospace; cursor:pointer;font-size:1.5em;color:#C9AF08" onclick="location.href='http://www.naamdesigns.com'">NaaMDesigns</span><br />
<a href="https://www.facebook.com/arvind.muthuraman" style="text-decoration:none; " target="_blank">#ARVIND M</a>
</p>
    </div>    
   </div> 
  <script type="text/javascript" src="js/motion.js"></script>
 
   <script type="application/javascript">
           /* $('body').starfield({
                starDensity: 1.5,
                mouseScale: 1.0
            });*/
        </script>
    
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
	  
});
   </script>
</body>
</html>