<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--<script>
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
  // tasks to do if it is a Mobile Device
 // alert("Mobile Detected");
 window.location.href="http://ihunt.ssninstincts.org.in/2dtimer/index.php";
}
</script>-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74733967-1', 'auto');
  ga('send', 'pageview');

</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="viewport" content="width=device-width">
<title>IHunt</title>

<link rel="stylesheet" href="ddcubeclass.css" />

<style>


#dynamicfuturedate .ddcubecountdown{
	display: block; /* display each cube on its own line */
	margin-bottom: 5px;
	font-size: 8px; /* adjust font size to scale up/down the cubes (default is 10px) */
}

#dynamicfuturedate ul li{
	background: darkred;
}

</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="ddcubeclass.js"></script>

<script src="ddcubecountdown.js">


</script>
<script src="jGravity-min.js"></script>
<script>


jQuery(function($){ // on DOM load

//Eg #1
	var mycountdown = new cubecountdown({
		containerid: 'futuredate',
		targetdate: 'March 6, 2016 19:30:00',
		size: ['8em', '8em'], // specify cube dimensions in "em" only
		unit: ['days']
	})

	mycountdown.onEnd = function(){ 
		window.location.href="http://ihunt.ssninstincts.org.in/index.php";
	}




})




</script>


</head>

<body style="perspective:1000px;" class="ignoreMe">
<div class="futuredate-holder ignoreMe">
<div id="futuredate" style="perspective:2000px;transform:rotateY(0deg)" class="jGravity ignoreMe"></div>
</div><!--end holder-->
<div class="content-holder ">
<h1>iHunt</h1>
<h4>Sponsored by NAAM DESIGNS</h4>
<h2>The countdown has begun!!!</h2>
<h3>Bored? Click/Drag the time counter to play!!</h3>


</div><!--content holder-->


 <div class="footer">
    <p style="bottom:-10px; left:42%;position:absolute; color:#333;">&copy; NAAMDesigns 2015</p>
    
    <p class="footer-para">Designed by:<br />
<span id="footlink" style="font-family:'Lucida Console', Monaco, monospace; cursor:pointer;font-size:1.5em;color:#C9AF08" onclick="location.href='http://www.naamdesigns.com'">NAAMDesigns</span><br />
<a href="https://www.facebook.com/arvind.muthuraman" style="text-decoration:none;color:#fff " target="_blank">#ARVIND M</a>
</p>
    </div>   

<!--<div id="dynamicfuturedate"></div>
<div style="font-weight:bold">until Christmas!</div>-->


<script>
$(window).on('load',function() {

   
	
	
	$('body').on('click','div.jGravity', function() { 
		$('body').jGravity({ 
			target: 'div.ddcubeclass', 
			ignoreClass: 'ignoreMe', 
			weight: 25,
			depth: 5, 
			drag: true 
		});

		
		$(this).removeClass('jGravity');
		$('#futuredate').css('display','inline-block');
		$('.footer').fadeIn(1000);
		$('.content-holder').css('top','100px');
		$('.content-holder').css('transition','1s ease');
		$('.content-holder').css('position','fixed');
		//$('.content-holder h1').css('text-align','left');
		// ----- \\
		
	});
	

	
});
</script>

</body>
</html>
