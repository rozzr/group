<script type="text/javascript" src="scripts/jquery-1.9.1.js">
  </script>
  <script type="text/javascript">
	$(document).ready(function(){
  
	  $("#submit_post").click(function(event) {
	  	var title=$('#title_blog').val();
		var comment= $('#comentariu').val();
		var name="<?php Print($username) ?>";
		$.post("blog_post_add.php", {title: title,comment: comment, name: name},
		 
		function (data) {
			if (!data) {
				$("#submit").append("Failed to reach server. Login Error.");
			} else {
				alert(data);
			}
		});
		return false;
	  });
});
</script>




<div id="blog_post_title"><span><p><label>Title: </label><br /><input id="title_blog"type="text" name="name1" placeholder="Title goes here" /></p>
	<label>Comment:  </label><br /><textarea id="comentariu" name="comentariu" cols="100" rows="3"></textarea><br /><br /><br />
	<input name="submit_post" id="submit_post" tabindex="5" value="Submit Post" type="submit">
</div>