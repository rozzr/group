<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.6.2.min.js">
  </script>
  <script type="text/javascript">
	$(document).ready(function(){
  
	  $("#delete").click(function(event) {
	  
		var deleteid= $('#name1').val();
		
		$.post("delete.php", {deleteid: deleteid} ,
		 
		function (data) {
			if (!data) {
				$("#submit").append("Failed to reach server. Login Error.");
			} 
		});
		return false;
	  });
});
$(document).ready(function(){
  
	  $("#deleteuser").click(function(event) {
	  
		var deleteuser= $('#name2').val();
		
		$.post("remove_user.php", {deleteuser: deleteuser},
		 
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
$(document).ready(function(){
  
	  $("#deletecomment").click(function(event) {
	  
		var delcomment= $('#name3').val();
		
		$.post("delete_comment.php", {delcomment: delcomment},
		 
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

<link rel="stylesheet" type="text/css" href="admin.css"/>
<div id="del"><span><p><label>Delete post:  </label><br /><input id="name1"type="text" name="name1" placeholder="Enter post number" /></p>
<input name="delete" id="delete" tabindex="5" value="Delete Post" type="submit"></span></div>
<br><br>
<div id="remuser"><span><p><label>Remove user:  </label><br /><input id="name2"type="text" name="name2" placeholder="Enter username" /><br /><br /></p>
<input name="deleteuser" id="deleteuser" tabindex="5" value="Remove User" type="submit"></span></div>
<br><br>
<div id="remcomment"><span><p><label>Delete comment:  </label><br /><input id="name3"type="text" name="name3" placeholder="Enter comment" /><br /><br /></p>
<input name="deletecomment" id="deletecomment" tabindex="5" value="Delete Comment" type="submit"></span></div>