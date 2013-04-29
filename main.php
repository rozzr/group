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
  <title>Home</title>
  <link href="css/index.css" rel="stylesheet" type="text/css" media="screen" title="Default" />
  <link rel="alternate stylesheet" media="screen" type="text/css" href="css/largeText.css" title="Large Text" />
  <link rel="alternate stylesheet" media="screen" type="text/css" href="css/lowVis.css" title="Low Vision" />
  <!-- /**************************************** Registration Box ****************************/ -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script type="text/javascript"src="register.js"></script>
  <!-- /**************************************** End of Registration Box ****************************/ -->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
</head>

<body>
	<?php

    $username = $_SESSION[SESSION_USERNAME];
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
          <p class="welcome">Hello <?php echo $username; ?>. </p>
	<form id="form2" action="scripts/logout.php" method="POST">
	<input type="submit" value="Logout">
</form>

		
          <?php include "loginx.php";?>
          <?php include "mask.php";?> <!-- needs to be server side to be interpreted as code -->
          
        </div>

      </div>

      <div id="left">

        <h4><span class="menu_first_letter">Navigation</span></h4>

        <div id="navcontainer">
          <ul id="navlist">
            <li id="active"><a href="main.php">Home</a></li>
            <li class="green"><a href="Blog.php" id="current">Blog</a></li>
            <li><a href="whats.html">What's New</a></li>
            <li><a href="Locations.html">Locations</a></li>
            <li><a href="gallery.php">Gallery </a></li>
            <li><a href="sitemap.html">Site Map</a></li>
          </ul>
        </div>

        <h4>Contact us </h4>


        <form id="form2" method="post" class="contact_us" action="php/Contact.php">
          <p><label>Name
            <input type="text" class="fields_contact_us" name="name" />
          </label>
          <label>E-mail
            <input type="text" class="fields_contact_us" name="email" />
          </label>
          <label>
            Your message:
            <textarea name="message" cols="" rows=""></textarea>
          </label>
          <label>
            <input type="submit" class="submit_button_contact" value="Submit" />
            <input class="submit_button_contact" type="reset" />
          </label></p>
        </form>




      </div>

      <div id="right">

        <div class="date_box">
          <div class="date_box_month">Jan</div>
          <div class="date_box_day">18</div>
        </div>
        <h3>Lorem Ipsum sample text  </h3>


        <p><img src="images/demo_img.jpg" alt="Kiwi" width="159" height="140" class="float_right" />The way I would describe Friedreich's Ataxia, is that your body is set on a self destruct course. I feel like I have been fighting a daily battle with my own body forever, (well since 11yo anyway) and at times I am just immensely battle weary.

          Its surprising how your thoughts, views, and opinions change, or better said, become refined and distilled, when your own body is breaking down, and just generally going to shit, before your very eyes!

          I don't want some polyanna site, proclaiming to everyone how I cope with FA everyday with the help of jesus (deliberate small j) Friedreich's ataxia is something I honestly wouldn't wish on a dog, but it is my reality, so I just better get on with it! </p>

          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum sapien enim, cursus in, aliquam sit amet, convallis eget, metus. Duis dui mi, varius at, lacinia eget, ullamcorper et, tortor. Pellentesque ac pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean orci mi, varius eget, mollis vel, rhoncus a, leo. Ut eros enim, vehicula quis, gravida ac, sodales sit amet, orci. Nulla eleifend tristique erat.</p>

          <p class="read_more"><a href="#"><img src="images/arrow.png" alt="read more" width="16" height="12" />Further reading</a> </p>


          <div class="date_box">
            <div class="date_box_month">Jan</div>
            <div class="date_box_day">12</div>
          </div>


          <h3>A blockquote</h3>

          <blockquote><p class="quote">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum sapien enim, cursus in, aliquam sit amet, convallis eget, metus. Duis dui mi, varius at, lacinia eget, ullamcorper et, tortor. Pellentesque ac pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean orci mi, varius eget, mollis vel, rhoncus a, leo. Ut eros enim, vehicula quis, gravida ac, sodales sit amet, orci. Nulla eleifend tristique erat. Sed ac est. Fusce tincidunt luctus tortor. Quisque sed neque vitae elit cursus faucibus.</p></blockquote>

          <p>Duis mauris justo, tincidunt in, molestie sed, lacinia vel, dolor. Aenean ac tellus porttitor ligula hendrerit ornare. Vivamus gravida ornare augue. Proin porta, quam a vulputate blandit, massa lorem euismod eros, vel nonummy enim sapien eget nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In dapibus commodo dolor. Aliquam facilisis turpis ac tortor. Quisque quis velit eget lacus consectetuer volutpat. Cras nibh. Sed quis justo. In neque lacus, sagittis id, lobortis nec, congue id, diam. Phasellus ut pede. Praesent porta consectetuer dui. Praesent mattis neque. Nunc commodo facilisis ipsum. Etiam scelerisque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ut quam. Nullam mauris nulla, dictum vulputate, pharetra vel, tempor nec, sem. Pellentesque scelerisque. </p>

          <p class="read_more"><a href="#"><img src="images/arrow.png" alt="read more" width="16" height="12" />Further reading</a> </p>

        </div>

        <div id="footer"> </div>
      </div>


    </body>
    </html>
