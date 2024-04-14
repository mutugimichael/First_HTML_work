<?php
    require_once "constants.php";

$dbh = new mysqli($hostname, $hostuser, $hostpassword, $dbname);

    
if($db->connect_error){
    print "Connection Failed" . connect_error;
}else{
    // print "Connected Successfully";
}


?>