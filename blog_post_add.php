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
    $title=pg_escape_string($_POST['title']);
	//$today=pg_escape_string(getdate());
    //$date = date_create();
    //echo date_timestamp_get($date);
    $today = date("Y-m-d H:i:s");
    
   // echo $today;
    //$name='Liviu';
	 $sql = "INSERT INTO blog VALUES ('$comment',nextval('blog_id_seq'::regclass),'$name','$today','$title')";
     $result = pg_query($dbh, $sql);
     echo 'The article was posted';
     pg_close($dbh);
	 $page='blog.php';
header('Location:'.$page);
}
?>
