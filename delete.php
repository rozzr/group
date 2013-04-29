<?php

include_once("scripts/db-connection.php");
$db = connect_db();
$deleteid =intval($_POST['deleteid']);
$output1=$db->prepare('DELETE from comments where id='.$deleteid.'');
$output = $db->prepare('DELETE from blog where id='.$deleteid.'');  //Nu uita sa faci asta !!!!
//$output = $db->prepare('SELECT * FROM comments ORDER BY date DESC ');
echo 'Deletion was successfull';
$output1->execute();
$output->execute();


?>
    