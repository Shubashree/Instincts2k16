<?php
	require_once("database.php");
	session_start();
	foreach($_POST as $f1)
	{
		if($f1==NULL)
			$flag = 1;
	}
	if($flag == 1)
	{
		$_SESSION["error"]="Do not leave any field blank";
		Header("Location: registration.php");
	}
	else
	{
		$key = filter_var($_POST["key"],513);
		$password = filter_var($_POST["password"],513);
		$cpassword = filter_var($_POST["cpassword"],513);
		$name1 = filter_var($_POST["name"],513);
		$college = filter_var($_POST["college"],513);


		if(!$key)
		{
			$_SESSION["error"] = "Enter a valid email id";
			Header("Location: registration.php");
		}
		else if(!$password)
		{
			$_SESSION["error"] = "Enter a valid password";
			Header("Location: registration.php");
		}
		else if(!$cpassword) 
		{
			$_SESSION["error"] = "Enter a valid password";
			Header("Location: registration.php");
		}
			else if(!$name1) 
		{
			$_SESSION["error"] = "Enter a valid name";
			Header("Location: registration.php");
		}
			else if(!$college) 
		{
			$_SESSION["error"] = "Enter a valid college";
			Header("Location: registration.php");
		}
		else if($_SESSION['6_letters_code']!=$_POST['code'])
		{
		    $_SESSION["error"] = "Enter correct captcha";
			Header("Location: registration.php");
		}
		else
		{
				$sql = "SELECT COUNT(*) FROM users2 WHERE pkey = '" . mysql_real_escape_string($key) . "'";
				$ref = mysql_query($sql);
				$result = mysql_result($ref,0);
				if($result == 0)
				{
					//$sqll = "SELECT COUNT(*) FROM participants WHERE pid = '" . mysql_real_escape_string($key) . "'";
					//$reff = mysql_query($sqll);
					//$result2 = mysql_result($reff,0);
					//if($result2 != 0)
					//{
					if($password!=$cpassword)
					{
						$_SESSION["error"] = "Passwords do not match";
						Header("Location: registration.php");
					}
					//$sql2 = "SELECT * FROM participants WHERE pid = '" . mysql_real_escape_string($key) . "'";
					$ref2 = mysql_query($sql);
					$row = mysql_fetch_assoc($ref2);

					//$name = $row["name"];
					$name = $_POST["name"];
					$pos = 0;
					$pos = strpos($name,"admin");
						if($pos!=NULL)
						{
						$_SESSION["error"] = "Your Name is invalid";
						Header("Location: registration.php");
						}
						else
						{
						//$college = $row["college"];
						//$phone = $row["ph_no"];
						//$email = $row["email"];
						$college = $_POST["college"];
						$phone = $_POST["phone"];
						//$email = $row["email"];
	
						$sql = "INSERT INTO users2 (pkey, name, password, curlevel, isadmin, college, mobile, email) VALUES ('".mysql_real_escape_string($key)."','".mysql_real_escape_string($name)."','".sha1(mysql_real_escape_string($password))."',1,0,'".mysql_real_escape_string($college)."','".$phone."','".mysql_real_escape_string($email)."')";
						$ref = mysql_query($sql);
							if(!$ref)
							{
							$_SESSION["error"] = "Error during registration";
							Header("Location: registration.php");
							}
						$_SESSION["msg"] = "Registration Successful";
						
						 $from = "noreply@ssnparadigm.com"; // this is your Email address
    $to = $_POST['email']; // this is the sender's Email address
    //$to="admin@focad.3eeweb.com";
	$name = $_POST['name'];
    
    //$subject = "Form submission";
    $subject2 = "iHunt 2016 - Acknowledgement.";
	$enquiry=$_POST['reply'];
   // $message = $name . " wrote the following:" . "\n\n" . $enquiry;
    $message2 = "<p ><br><span style=\"font-family:calibri;font-size:18px;\">Hello <b>".$name."</b>,<br><br>
     			<b>Greetings from Team iHunt ! </b><br><br>
              &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;     

What makes your brain race and your heart to increase pace? Yes, it's a riddle that teases your brain and it's a riddle that has brought you here. So, welcome to I Hunt 2k16 : the official online web hunt of Instincts 2k16 . <br><br>
The event will focus primarily on testing your lateral thinking abilities and out of the box thinking skills. If you like exercising your grey cells and puzzling over things 'round and round' till you explode, this is the event for you. We promise to tickle your brain cells with interesting conundrums. So, don't let your brain stay numb, close your four fingers and raise your thumb for this great challenge to reach Infinty and Beyond!<br><br>
User name : ".$key."
<br><br>
Password : ".$password."
<br><br>
Regards, <br>
iHunt team.
";

    $headers2 = "From:" . $from . "\r\n";
	//$headers2 .='Reply-To: '. $from . "\r\n" ;
    //$headers2 .='X-Mailer: PHP/' . phpversion();
    //$headers2 .= "MIME-Version: 1.0\r\n";
    $headers2 .= "Content-type: text/html; charset=iso-8859-1\r\n";   
	
	//if(!empty($from) && !empty($name)){
	// mail($to,$subject,$message,$headers);
    mail($key,$subject2,$message2,$headers2,'-fadmin@ihunt.ssninstincts.org.in'); // sends a copy of the message to the sender
	
						
						
						
						Header("Location: index.php");
						}
					//}
					/*else
					{
						$_SESSION["error"] = "Invalid Paradigm Key";	
						Header("Location: registration.php");
					}*/
				}
				else
				{
					$_SESSION["error"] = "That Email is already registered.";	
					Header("Location: registration.php");
				}
		}
	}
	?>