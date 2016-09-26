<?php
    session_start();
    include("./contact_phptextClass.php");  
    
    /*create class object*/
    $phptextObj = new contact_phptextClass();   
    /*phptext function to genrate image with text*/
    $phptextObj->phpcaptcha('#162453','#fff',120,40,10,25); 
 ?>