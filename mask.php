<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.6.2.min.js">
  </script>
  <script type="text/javascript">
  $(document).ready(function(){
 
    $("#submit").click(function(event) {
    var username=$('#username1').val();
    var email=$('#email').val();
    var password=$('#password').val();
  
    $.post("register.php", {username: username,email: email, password: password},
    
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
<div id="login-box" class="login-popup">
            <a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
            <form method="post" class="signin">
              <fieldset class="textbox">
                <label class="username">
                  <span>Username</span>
                  <input id="username1" name="username1" type="text" autocomplete="on" placeholder="Username">
                </label>
               
                <label class="email">
                  <span>Email Address</span>
                  <input id="email" name="email" type="text" placeholder="Email Address">
                </label>

                <label class="password">
                  <span>Password</span>
                  <input id="password" name="password" type="password" placeholder="Password">
                </label>
                <button class="submit_button" type="submit" value="submit" id="submit">Register</button>
               
               
               
              </fieldset>
            </form>
          </div>
