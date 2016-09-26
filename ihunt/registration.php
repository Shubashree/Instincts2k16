<?php
session_start();
if(isset($_SESSION["valid_user"]))
	Header("Location: index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Register</title>
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
<h1>Sponsored by:</h1><h1 style="">Associate sponsors:</h1>
<img class="slogo" src="images/naam.png" >
<img class="slogo" src="images/andylogo.png" >
<img class="slogo" src="images/ican.png" style="" >
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
                    <p class="p1" style="font-size:18px;">RANKING</p>
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
			<div class="control-group">
			 <div class="controls">
				<div class="input-prepend">
					 <div class="nav-menu" onclick="setTimeout(function(){window.location='logout.php'},800);">
                    <p class="p1">LOGOUT</p>
                    </div>
				</div>
			  </div>
			</div>
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
		<div class="question" style="top:-100px;">
		<h2>Registration</h2><div style="height:10px"></div>
		<div>
		<form method="post" action="register.php" style="min-width:500px !important;">
		
         <div class="control-group1" style="height:50px">
		  <label class="control-label" >Instincts ID</label>
		  <div class="controls">
		   <div class="input-prepend">
			<span class="add-on"><i class="icon-user"></i></span>
			<input type="text"  id="" name="" placeholder="Instincts ID" required /> 
		   </div>
		  </div>
	     </div>
        
        
         <div class="control-group1" style="height:50px;float:right;">
		  <label class="control-label" for="name">User Name</label>
		  <div class="controls">
		   <div class="input-prepend">
			<span class="add-on"><i class="icon-user"></i></span>
			<input type="text"  id="name" name="name" placeholder="name" required /> 
		   </div>
		  </div>
	     </div>
        
         <div class="control-group1" style="height:50px">
		  <label class="control-label" for="pkey">E-Mail</label>
		  <div class="controls">
		   <div class="input-prepend">
			<span class="add-on"><i class="icon-user"></i></span>
			<input type="text"  id="pkey" name="key" placeholder="E-Mail" required /> 
		   </div>
		  </div>
	     </div>
         
         
		  <div class="control-group1" style="height:50px;float:right;">
		  <label class="control-label" for="name">College</label>
		  <div class="controls">
		   <div class="input-prepend">
			<span class="add-on"><i class="icon-user"></i></span>
			<input type="text"  id="college" name="college" placeholder="college" required /> 
		   </div>
		  </div>
	     </div>
		 <div class="control-group1" style="height:50px">
		  <label class="control-label" for="passwd">Password</label>
		    <div class="controls">
		      <div class="input-prepend">
		       <span class="add-on"><i class="icon-chevron-right"></i></span>
		       <input type="Password" id="passwd" name="password" placeholder="Your-Password" required /> 
		      </div>
		    </div>
	    </div>
        
         <div class="control-group1" style="height:50px;float:right;">
		  <label class="control-label" for="name">Phone no</label>
		  <div class="controls">
		   <div class="input-prepend" >
			<span class="add-on"><i class="icon-user"></i></span>
			<input type="text"  id="phone" name="phone" placeholder="phone" required /> 
		   </div>
		  </div>
	     </div>
		
		<div class="control-group1" style="height:45px">
		  <label class="control-label" for="passwd">Confirm Password</label>
		    <div class="controls">
		      <div class="input-prepend">
		       <span class="add-on"><i class="icon-chevron-right"></i></span>
		       <input type="Password" id="passwd" name="cpassword" placeholder="Your-Password" required /> 
		      </div>
		    </div>
	    </div>
		
		<div class="captcha" style="height:85px"  >
		 <label style="color:#000">Captcha:</label>
		 <img alt="cap" src="captchafile.php" />
		 <label style="color:#000">Enter Code:</label><input type="text" name="code" required/>
		</div>
		<div class="form-actions" ><br>
		 <button type="submit" class="btn btn-primary" value="reg" name="register"><i class="icon-ok-sign"></i>Register</button> 
		 <!--button type="button" class="btn"><i class="icon-trash"></i>Clear</button-->	
		</div>
		</form>
		<font color="red">
		<?php 
		if(isset($_SESSION["error"]))
		{
			echo $_SESSION["error"];
			unset($_SESSION["error"]);
		} 
		?></font>
		<!--<font color="black">*Get Paradigm Key by registering here </font> <a href="http://www.ssnparadigm.org/register/register.php"> <b> <font class="#ffffff">Register@P2k13</font></b></a> -->
		</div>
		</div>
		</div>
		</div>
        </div>
         <div class="footer">
          <p style="bottom:-10px; left:42%;position:absolute; color:#fff;">&copy; NaaMDesigns 2015</p>
    <p class="footer-para">Designed by:<br />
<span style="font-family:'Atomic Age'; cursor:pointer;font-size:1.5em;color:#C9AF08" onclick="location.href='http://www.naamdesigns.com'">NaaMDesigns</span><br />
<a href="https://www.facebook.com/arvind.muthuraman" style="text-decoration:none" target="_blank">#ARVIND M</a>
</p>
    </div>    
        </div>
         <script type="text/javascript" src="js/motion.js"></script>
</body>
</html>