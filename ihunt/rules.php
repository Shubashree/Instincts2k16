<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Rules</title>
	<!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/less-1.1.3.min.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"></link>
    <link rel="stylesheet" type="text/css" href="css/style-particle.css">
		<script type="text/javascript" src="js/type-text.js"></script>
	<link rel="stylesheet" type="text/css" href="css/level.css"/>
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
   <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74733967-1', 'auto');
  ga('send', 'pageview');

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


<div class="body-wrap" id="world" style="perspective:500px;position:fixed;">

		<div class="trans" id="top-left-fixed-block">
		<div class="opq">
		<div class="nav">
		<div class="navi" style="perspective:700px;">
		<ul class="navbar" style=" top:-40px;perspective:700px;">
	        
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					<div class="nav-menu" onclick="setTimeout(function(){window.location='index.php'},800);">
                    <p class="p1">HOME</p>
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
		<div class="question" style="top:-140px; text-align:justify;">
		<h3>Rules:</h3>
		<ul>
     <li>   I Hunt 2k16 is an individual online event.</li>
     <li>   Register in Instincts site to get Instincts ID. <a href="http://www.ssninstincts.org.in" target="_blank">Click here</a> </li>

<li>A computing device with decent internet connection is enough for playing I Hunt 2k15.</li><div style="height:10px;"></div>

<li>It is purely  non-technical and open to all students from all the streams.</li><div style="height:10px;"></div>
		
		<li>The answer should not contain capital letters or spaces. For example if your answer is "Bruce Wayne", type it as "brucewayne". The answers can be alphanumeric. Special characters can also be part of the answers.</li><div style="height:10px;"></div>
		
		<li>Be decent on forums. Try to use them only when in desperate need.</li><div style="height:10px;"></div>
		<li>Remember this is a competition and ruining any question by sharing answers is prohibited. Everything is being monitored. Any discripancies will imply immediate disqualification</li><div style="height:10px;"></div>
		<li>The descision made by admins will be final.</li><div style="height:10px;"></div>
		
		
		</ul>
		</div>
		</div>
		</div>
        </div>
        
          <div class="footer">
           <p style="bottom:-10px; left:42%;position:absolute; color:#000;">&copy; NaaMDesigns 2015</p>
    <p class="footer-para">Designed by:<br />
<span style="font-family:'Lucida Console', Monaco, monospace; cursor:pointer;font-size:1.5em;color:#C9AF08" onclick="location.href='http://www.naamdesigns.com'">NaaMDesigns</span><br />
<a href="https://www.facebook.com/arvind.muthuraman" style="text-decoration:none" target="_blank">#ARVIND M</a>
</p>
    </div> 
        </div>
        
 <script type="text/javascript" src="js/motion.js"></script>        
</body>
</html>