 <?php
session_start();
?>

<html>
<head>

 <title>Logout</title>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen">
 <link rel="stylesheet" href="css/custom.css" type="text/css" media="screen">

</head>


<body>

<div id="login_form">
	
  <div class="form-group">
         <div class="col-sm-offset-2 col-sm-12">
		    

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>
			
				<h2> You have been successfully logged out</h2>
             <a href="index.html"><button type="submit" class="btn btn-primary bt-md">HOME</button></a>
          </div>
  </div>

</div>




</body>
</html>