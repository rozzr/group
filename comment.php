<?php

include_once("scripts/db-connection.php");
$db = connect_db();

$check=intval($post['id']);
$output = $db->prepare('SELECT * FROM comments  where id = '.$check .' ORDER BY date DESC');  //Nu uita sa faci asta !!!!
//$output = $db->prepare('SELECT * FROM comments ORDER BY date DESC ');
$output->execute();

?>

<ul>
    <?php
    foreach ($output as $id => $post)
	{
		include("comment_post.html");
		
		

    }
    
	
?>
<?php include("comment-template.html"); ?>
</ul>