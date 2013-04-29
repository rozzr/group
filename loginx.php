<?php

require_once "scripts/header.php";

?>
<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
<div id="loginx" class="login-popup">
            <a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
            <form method="post" class="signin" action="login.php">
              <fieldset class="textbox">
                <label class="username">
                  <span>Username</span>
                  <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Username">
                </label>
                
                

                <label class="password">
                  <span>Password</span>
                  <input id="password" name="password" value="" type="password" placeholder="Password">
                </label>
                   <input id="login-button"type="submit" class="submit" value="Submit"  />
                
                
                
              </fieldset>
            </form>
          </div>
