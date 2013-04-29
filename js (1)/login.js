var LOGIN_SUCCESS = 0;
var LOGIN_FAIL = 1;

function login(data) {
    response = JSON.parse(data);
    if (response === LOGIN_FAIL) {
        alert("Incorrect username/password");
    } else if (response === LOGIN_SUCCESS) {
        window.location.replace("main.php");
    }
}

$(document).ready(function() {
    $("#login-button").click(function() {
        $.post("scripts/login.php",
            $(this).parent().serialize(), login);
        return false;
    });
});
