<?php

include_once("scripts/db-connection.php");
$db = connect_db();

$posts = $db->prepare('SELECT * FROM blog ORDER BY id DESC ');
$posts->execute();

?>

<ul>
    <?php
    foreach ($posts as $id => $post)
	{
		
		include("blog_template.html");
		include("comment.php");

    }
    
	
?>

</ul>
