<?php include 'db_connect_ins.php'; ?>
 



<?php
 //session_start();
/*
 * Following code will create a new product row
 * All product details are read from HTTP Post Request
 */
 
// array for JSON response
$response = array();
 
    $randid = rand(11111,99999);
    $strid = "INS".strval($randid);
  
   
    $stmt2 = "select * from ins_reg where id = '".$strid."'";
    $res = $connect->query($stmt2);
  
    
    while($res->num_rows)
    {
        $randid = rand(11111,99999);
        $strid = "INS".strval($randid);
     /*   $stmt2 = $conn->prepare("select * from ins_reg where id = '".$strid."'");
        $stmt2->execute();
        $res = $stmt2->get_result(); */
        $stmt2 = "select * from ins_reg where id = '".$strid."'";
        $res = $connect->query($stmt2);
    }
// check for required fields
//$id = $_SESSION["str"];

if (isset($_GET['contactName']) && isset($_GET['contactEmail']) && isset($_GET['contactCollege']) &&isset($_GET['contactPhone']))
{
     $id = $strid;
    $name = $_GET['contactName'];
    $email = $_GET['contactEmail'];
	$college = $_GET['contactCollege'];
	$no = $_GET['contactPhone'];
//echo $name;
//echo $email;
//echo $college;
//echo $no;

	
   // $description = $_POST['description'];
 
    // include db connect class
    //require_once __DIR__ . '/db_connect.php';
 
    // connecting to db
    $result=mysqli_query($connect,"INSERT INTO ins_reg(id, name, phone, email, college) VALUES( '$id','$name', '$no','$email','$college')");
 
    // check if row inserted or not
    if ($result) {
        // successfully inserted into database

        $response["success"] = 1;
        $response["message"] = "Registration successful. Your INSTINCTS id is : ".$strid."";
 
        // echoing JSON response
         echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "** Email ID already registered! **";
 
        // echoing JSON response
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
   // $response["message"] = "Sorry Registration Failed!, Please Retry";
 
    // echoing JSON response
       json_encode($response);
}
?>
