<?php

require_once "scripts/header.php";
require_once "scripts/login-funcs.php";

if (!isLoggedIn()) {

    header('Location: index.php');
    exit();
}

?>

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Home</title>
<!-- TemplateEndEditable -->
<link rel="stylesheet" type="text/css" href="css/blog.css" />
<link rel="alternate stylesheet" media="screen" type="text/css" href="largeText.css" title="Large Text" />
<link rel="alternate stylesheet" media="screen" type="text/css" href="lowVis.css" title="Low Vision" />

<script type="text/javascript" src="scripts/jquery-1.9.1.js"></script>
<script type="text/javascript"src="register.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<script type="text/javascript">
  function openwindow() {
  window.open ("admin.php","openwindowname","width=300,height=400,scrollbars=no,resizable=no,toolbar=no,location=no,directories=no,status=no,menu  bar=no,copyhistory=no,");
  }
</script>
</head>
<body>
<?php

    $username = $_SESSION[SESSION_USERNAME];
    $group = $_SESSION[SESSION_GROUP];
    $login_count = getLoginCount($username);

    
?>


<div id="container">

<div id="header">

<div id="header_left" ice:editable="*">
<h1>Not Going <span class="red">Quietly</span></h1>
<h2>Living with Frederich's Ataxia</h2>
</div>

<div id="header_right">
<script type="text/javascript" src="scripts/styleswitcher.js"></script>
       <div id="styleswitch">	  
            <p>   
            <a href="#" onclick="return setActiveStyleSheet('Default')" onkeypress="return setActiveStyleSheet('Default')" title="Customise this site (default style)."> Normal</a> | <a href="#" onclick="return setActiveStyleSheet('Large Text')" onkeypress="return setActiveStyleSheet('Large Text')" title="Customise this site (Larger text size).">Large Text</a> | <a href="#" onclick="return setActiveStyleSheet('Low Vision')" onkeypress="return setActiveStyleSheet('Low Vision')" title="Customise this site (low vision version).">Low Vision</a></p>
      </div>
<h class="welcome">Hello <?php echo $username; ?>. </h>
  <form id="form2" action="scripts/logout.php" method="POST">
  <input type="submit" value="Logout">
</form>
          
  </div>
  
</div>
       

<div id="left">

<h4><span class="menu_first_letter">Navigation</span></h4>

<div id="navcontainer">
<ul id="navlist">
<li id="active"><a href="main.php">Home</a></li>
<li class="green"><a href="blog.php" id="current">Blog</a></li>
<li><a href="file:///Macintosh HD/Users/liviupantilie/Documents/Not Going/whats.html">What's New</a></li>
<li><a href="#">Locations</a></li>
<li><a href="file:///Macintosh HD/Users/liviupantilie/Documents/Not Going/gallery.php">Gallery </a></li>
<li><a href="file:///Macintosh HD/Users/liviupantilie/Documents/Not Going/sitemap.html">Site Map</a></li>
<div id="admin_panel"><li><a href="#" onclick="openwindow()">Admin Options</a></li></div>

</ul>
</div>

<h4>Contact us </h4>


  <form id="form2" method="post" class="contact_us" action="">
    <p><label>Name
    <input type="text" class="fields_contact_us" name="textfield" />
    </label>
    <label>E-mail
    <input type="text" class="fields_contact_us" name="textfield2" />
	</label>
	<label>
    Your message:
    <textarea name="textarea" cols="" rows=""></textarea>
	</label>
    <label>
    <input type="submit" class="submit_button_contact" name="Submit3" value="Submit" />
    </label></p>
  </form>

<h4>Suggested links </h4>



<a href="http://www.csstemplateheaven.com">CssTemplateHeaven</a></div>



   </p>
   <div id="post_comments">
    <p>

      <?php include("post_blog.php") ?>

    </p>
   </div>
   <div id="blog">
   <p>
     <?php include("posts.php") ?>   
  </p>
   </div>

<div id="footer"> </div>
<script> 
          if("<?php Print($group) ?>" != 'admin')
          {
            $("#admin_panel").hide();
            $("#post_comments").hide();
           
          }
          else
          {

            $("#admin_panel").show();
            $("#post_comments").show();
          
          }
</script>
</div>


</body>
</html>
