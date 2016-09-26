<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_GET["regId"]) && isset($_GET["message"])) {
   $regId = $_GET["regId"];
	$registatoin_ids = array();
	$i=0;
	  include_once 'db_functions.php';
        $db = new DB_Functions();
        $users = $db->getAllUsers();
        if ($users != false)
            $no_of_users = mysql_num_rows($users);
        else
            $no_of_users = 0;
			
			   while ($row = mysql_fetch_array($users)) {
			   
			   $registatoin_ids[$i++]= $row["gcm_regid"];
			   
			   }
	
	
	
	
	$regIdf="/topics/global";
    $message = $_GET["message"];
    
    include_once './GCM.php';
    
    $gcm = new GCM();

    //$registatoin_ids = array($regId,$regId);
    $message = array("price" => $message);

    $result = $gcm->send_notification($registatoin_ids, $message);

    echo $result;
}
?>
