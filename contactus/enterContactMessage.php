
<?php

	echo "hey";

	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ins_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
  

  	$stmt = $conn->prepare("INSERT INTO ins_msg (`contact_name`, `contact_email`, `contact_subject`, `contact_message`) VALUES (?,?,?,?)");
  
    
    $stmt->bind_param("ssss", $cname,$cemail,$csubject,$cmessage);
  

    /* Set parameters */
    $cname = $_GET['contactName2'];
    $cemail = $_GET['contactEmail2'];
    $csubject = $_GET['contactSubject'];
    $cmessage = $_GET['contactMessage'];
  
   
    echo "<br><br>";
    if($stmt->execute() === FALSE)
    {
    	$error['sending'] = "Something went wrong. Please try again.";

			echo json_encode($error);
      //  echo " ** Oops! Some error occurred, try again! **";
    }
    
    else   
    {
    	$error['OK'] = "done";

			echo json_encode($error);
    }     
       // echo " Email Sent!";
     echo "<script>alert('$message');</script>";   
     header("Location: ../index2.php#contact");
 	   $stmt->close();
?>
