<?php

require_once "scripts/header.php";
require_once "scripts/login-funcs.php";

if (!isLoggedIn()) {

    header('Location: index.php');
    exit();
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gallery</title>
<link rel="stylesheet" type="text/css" href="css/gallery.css" />
<link rel="alternate stylesheet" media="screen" type="text/css" href="css/largeText.css" title="Large Text" />
<link rel="alternate stylesheet" media="screen" type="text/css" href="css/lowVis.css" title="Low Vision" />
</head>

<body>
  <?php

    $username = $_SESSION[SESSION_USERNAME];
    $group = $_SESSION[SESSION_GROUP];
    $login_count = getLoginCount($username);

    
?>  

<div id="container">

<div id="header">

<div id="header_left">
<h1>Not Going <span class="red">Quietly</span></h1>
<h2>Living with Frederich's Ataxia</h2>
</div>

<div id="header_right">
<script type="text/javascript" src="index.js"></script>
  

	
	<script type="text/javascript">
		begin();
	</script>
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
<li class="green"><a href="Blog.php">Blog</a></li>
<li><a href="whats.html">What's New</a></li>
<li><a href="#">Locations</a></li>
<li><a href="gallery.php"id="current">Gallery </a></li>
<li><a href="sitemap.html">Site Map</a></li>
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



</div>

<div id="right">

  
  <ul class="pg">
    <li><a href="img/megoodcarving.jpg"><img src="img/megoodcarving.jpg" alt="" /></a></li>
    <li><a href="img/ROMA.JPG"><img src="img/ROMA.JPG" alt="" /></a></li>
    <li><a href="img/mefromtpyra.JPG"><img src="img/mefromtpyra.JPG" alt="" /></a></li>
<li><a href="img/PICT0044.JPG"><img src="img/PICT0044.JPG" alt="" /></a></li>
    <li><a href="img/duncanwithlioness.jpg"><img src="img/duncanwithlioness.jpg" alt="" /></a></li>
    <li><a href="img/kirstenbosch.jpg"><img src="img/kirstenbosch.jpg" alt="" /></a></li>
<li><a href="img/greatmoitaj.JPG"><img src="img/greatmoitaj.JPG" alt="" /></a></li>
    <li><a href="img/tablemtt.JPG"><img src="img/tablemtt.JPG" alt="" /></a></li>
    <li><a href="img/favevs.jpg"><img src="img/favevs.jpg" alt="" /></a></li>
<li><a href="img/timessq.jpg"><img src="img/timessq.jpg" alt="" /></a></li>
    <li><a href="img/mevart.jpg"><img src="img/mevart.jpg" alt="" /></a></li>
    <li><a href="img/beautifulelephant.jpg"><img src="img/beautifulelephant.jpg" alt="" /></a></li>
<li><a href="img/nearfh.jpg"><img src="img/nearfh.jpg" alt="" /></a></li>
    <li><a href="img/BUFFALO.JPG"><img src="img/BUFFALO.JPG" alt="" /></a></li>
    <li><a href="img/amazingview.jpg"><img src="img/amazingview.jpg" alt="" /></a></li>
 <li><a href="img/mecheetmarie.jpg"><img src="img/mecheetmarie.jpg" alt="" /></a></li>
<li><a href="img/ostrich.jpg"><img src="img/ostrich.jpg" alt="" /></a></li>
    <li><a href="img/pyramids.jpg"><img src="img/pyramids.jpg" alt="" /></a></li>
    <li><a href="img/adare.jpg"><img src="img/adare.jpg" alt="" /></a></li>
    <li><a href="img/gladdy.JPG"><img src="img/gladdy.JPG" alt="" /></a></li>
<li><a href="img/buffalosunset.jpg"><img src="img/buffalosunset.jpg" alt="" /></a></li>
    <li><a href="img/algar.jpg"><img src="img/algar.jpg" alt="" /></a></li>
    <li><a href="img/hotelr.jpg"><img src="img/hotelr.jpg" alt="" /></a></li>
<li><a href="img/framejoe.JPG"><img src="img/framejoe.JPG" alt="" /></a></li>
    <li><a href="img/joeericasmiling.JPG"><img src="img/joeericasmiling.JPG" alt="" /></a></li>
<li><a href="img/mevineyard.jpg"><img src="img/mevineyard.jpg" alt="" /></a></li>
    <li><a href="img/menelep.JPG"><img src="img/menelep.JPG" alt="" /></a></li>
    <li><a href="img/mtmala.jpg"><img src="img/mtmala.jpg" alt="" /></a></li>
<li><a href="img/ailbhe.jpg"><img src="img/ailbhe.jpg" alt="" /></a></li>
    <li><a href="img/MECOL.JPG"><img src="img/MECOL.JPG" alt="" /></a></li>
<li><a href="img/maria.jpg"><img src="img/maria.jpg" alt="" /></a></li>
    <li><a href="img/fort.JPG"><img src="img/fort.JPG" alt="" /></a></li>
    <li><a href="img/hiro.JPG"><img src="img/hiro.JPG" alt="" /></a></li>
<li><a href="img/monkey.jpg"><img src="img/monkey.jpg" alt="" /></a></li>
    <li><a href="img/metattoo.jpg"><img src="img/metattoo.jpg" alt="" /></a></li>
<li><a href="img/nycboat.jpg"><img src="img/nycboat.jpg" alt="" /></a></li>
    <li><a href="img/wheel01.jpg"><img src="img/wheel01.jpg" alt="" /></a></li>
<li><a href="img/luishappyman.JPG"><img src="img/luishappyman.JPG" alt="" /></a></li>
    <li><a href="img/menma.jpg"><img src="img/menma.jpg" alt="" /></a></li>
    <li><a href="img/luisfaveresize.jpg"><img src="img/luisfaveresize.jpg" alt="" /></a></li>
<li><a href="img/bored tribal dancers.jpg"><img src="img/bored tribal dancers.jpg" alt="" /></a></li>
    <li><a href="img/capepoint.jpg"><img src="img/capepoint.jpg" alt="" /></a></li>
<li><a href="img/beautelephwalkingaway.jpg"><img src="img/beautelephwalkingaway.jpg" alt="" /></a></li>
    <li><a href="img/grtmoc.JPG"><img src="img/grtmoc.JPG" alt="" /></a></li>
<li><a href="img/fame.jpg"><img src="img/fame.jpg" alt="" /></a></li>
    <li><a href="img/AILBAP.JPG"><img src="img/AILBAP.JPG" alt="" /></a></li>

  </ul>



  
</div>

<div id="footer"> </div>
</div>


</body>
</html>
