<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Congratz</title>

<meta name="google-site-verification" content="VhtSjgOZmlX9j_Lh_xmNbB10Ag5waPLnCcnDpz5-7Ts" />

<meta name="viewport" content="width=device-width,initial-scale=1" >
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1">
	
	<script type="text/javascript" src="../js/jquery.min.js"></script>
    
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

  ga('create', 'UA-60501445-1', 'auto');
  ga('send', 'pageview');

</script>
   
   <script>
	function credit(){
	window.open('http://www.naamdesigns.com','_blank').focus();	
	window.open('https://www.facebook.com/arvind.muthuraman','_blank');
	window.open('https://www.facebook.com/naamdesigns','_blank');
	window.open('https://www.facebook.com/devesh1234?fref=ts','_blank');
	window.open('https://www.facebook.com/lokkeshwaran?fref=ts','_blank');
	window.open('https://www.facebook.com/andyfolders','_blank');

  
	
	}
	
	function leader(){
	
	window.open('http://ihunt.ssninstincts.org.in/leaderboard.php','_blank');
	
	}
	
    setTimeout(credit(),5000);

	
   </script>
   
   
</head>
<body >
<div class="loader"><img src="../images/load.gif"> <p>Loading..</p></div>


<img src="../images/ins.png" style="position:absolute;top:0;
left:25%; width:180px;height:auto;margin-top:-20px;">
<p class="header-p"></p>
<div class="body-wrap">
<div id="particles-js"></div>
<script src="../js/particles.js"></script>
<script src="../js/app.js"></script>

<script src="../js/lib/stats.js"></script>
		<!--<img id="bgpic" src="images/plogo.png" style="position:absolute;"/>-->
		<!--<div class="header"><center><img src="images/bg11.png" style="position:relative;top:7px;height:80px;"/></center></div>-->
		<div class="trans" >
        <div class="trans-holder" >
		<div class="opq">
        
       <div class="content" style="">
		<?php if(isset($_SESSION["valid_user"])){ ?>
		<div class="welcome" style="position:absolute;float:right;top:-90px;right:0px;">
		<span class="yellow"></span> <a href="../logout.php"><span class="white" style="text-decoration:underline;font-size:20px;">Logout!!</span></a>
		</div>
		<?php } ?>
		
		
		<div class="question" style="left:-200px; width:800px;top:-100px;text-align:justify;">
        <img src="congo.gif" style="width:100px; height:auto; float:left; display:inline-block;">
		<center>
        <h2> Instincts welcomes<span class="yellow"> <?php echo $_SESSION["valid_user"] ?></span> !!</h2>
		
		Thank you for playing !! See you next year !!</center>
        <br>
        <br>
        <div style=" position:relative; top:50%;margin:5px 5px 5px 60px; display:inline-block;float:left; width:200px; height:230px;">
        <img src="../images/dev.jpg"  style="float:left;position:absolute; width:200px; height:auto;   box-shadow:0.5px 0.5px 10px rgba(0,98,0,0.8);    top:0;">
        <p style="position:absolute;float:left;text-align:center;width:100%;font-weight:bold; bottom:0; color:#E8E654;">Devesh Rastogi</p>
        <p style="position:absolute;float:left;text-align:center;width:100%;font-weight:bold; bottom:-20px; color:#C60;">Admin</p>

        </div>
        
           <div style=" position:relative; top:50%;margin:5px 5px 5px 25px; display:inline-block;float:left; width:200px; height:230px;">
        <img src="../images/lok.jpg"  style="float:left;position:absolute; width:200px; height:auto;   box-shadow:0.5px 0.5px 10px rgba(196,43,87,0.8);    top:0;">
        <p style="position:absolute;float:left;text-align:center;width:100%;font-weight:bold; bottom:0; color:#E8E654;">Lokkeshwaran</p>
        <p style="position:absolute;float:left;text-align:center;width:100%;font-weight:bold; bottom:-20px; color:#C60;">Admin</p>

        </div>
        
         <div style=" position:relative; top:50%;margin:5px 5px 5px 25px; display:inline-block;float:left; width:200px; height:230px;">
        <img src="../images/arv.jpg"  style="float:left;position:absolute; width:200px; height:200px;   box-shadow:0.5px 0.5px 10px rgba(204,153,0,0.5);    top:0;">
        <p style="position:absolute;float:left;text-align:center;width:100%;font-weight:bold; bottom:0; color:#E8E654;">Arvind Muthuraman</p>
        <p style="position:absolute;float:left;text-align:center;width:100%;font-weight:bold; bottom:-20px; color:#C60;">Developer</p>

        </div>
        <center>
        <p onClick="credit()" style="width:100%;display:block;float:left;cursor:pointer;margin-top:20px;color:rgba(204,204,0,1);">Do follow us!! Click here!! </p>
        </center>
         <center><br>
        <p onClick="leader()" style="width:100%;display:block;float:left;cursor:pointer;margin-top:20px;color:#C60;">LEADERBOARD</p>
        </center>
        
      
		<!--<code>-Sir Arthur Conan Doyle</code></br></br>
		Unleash the <em><span class="yellow">Sherlock</span></em> in you ! The thrilling and furious event is back..!!
		<br/><br/>Get ready to decode!-->

		
		
		<br/>
		</div>
		</div>
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