<?php

include_once("scripts/db-connection.php");
$db = connect_db();
$deletecomment =pg_escape_string($_POST['delcomment']);
echo 'Deletion was succesful';

$output = $db->prepare("DELETE from comments where comments = '".$deletecomment."' ");  
$output->execute();

?>