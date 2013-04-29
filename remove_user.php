<?php

include_once("scripts/db-connection.php");
$db = connect_db();
$deleteuser =pg_escape_string($_POST['deleteuser']);
echo 'User removed';
$output1=$db->prepare("DELETE from comments where username = '".$deleteuser."' "); 
$output = $db->prepare("DELETE from users where username = '".$deleteuser."' ");  
$output1->execute();
$output->execute();

?>
    