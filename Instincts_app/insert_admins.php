<?php include 'db_connect1.php'; ?>

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

<?php
 
// create a variable
$user_name=$_POST['user'];
$password=$_POST['pass'];


//Execute the query
 
 
$result=mysqli_query($connect,"select * from gcm_admins where username='$user_name' AND password='$password'");
                
    if(mysqli_affected_rows($connect) > 0){
	
	
    $_SESSION["username"]=$user_name;	
	
	
	
	
    header("Location: admin.php");



}else {
  
    
	
	echo "<div id=\"login_form\">";
	echo "<div class=\"form-group\">";
    echo "<div class=\"col-sm-offset-2 col-sm-12\">";
	echo"<h2> Invalid Login Credentials</h2>";
    echo" <a href=\"index.html\"><button type=\"submit\" class=\"btn btn-primary bt-md\">Try again</button></a>";
    echo"</div>";
	echo"</div>";
	echo "</div>";
	echo mysqli_error ($connect);
}




?>

</body>
</html>

