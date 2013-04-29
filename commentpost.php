<?php

error_reporting(E_ALL);
if (isset($_POST['name'])) {
     // attempt a connection
	 $conn_string = "host=webcourse.cs.nuim.ie port=5432 dbname=cs230 user=cs230teamb password=voohooWa";
     $dbh = pg_connect($conn_string);
     if (!$dbh) 	{
         				die("Error in connection: " . pg_last_error());
    			 	}
    
    $name =pg_escape_string($_POST['name']);
    $comment =pg_escape_string($_POST['comment']);
    $id=pg_escape_string($_POST['id']);
	$today=pg_escape_string(date('d-m-y'));
    //$name=pg_escape_string($GLOBALS[$username]);
    
	 $sql = "INSERT INTO comments VALUES ('$comment','$name','$today','$id')";
     $result = pg_query($dbh, $sql);
     
     pg_close($dbh);


}
?>
