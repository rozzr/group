<?php

require_once "scripts/header.php";
require_once "scripts/login-funcs.php";

$reg_status = "";

$conn_string = "host=webcourse.cs.nuim.ie port=5432 dbname=cs230 user=cs230teamb password=voohooWa";
$db = pg_connect($conn_string);
if (!$db)     {
    die("Error in connection: " . pg_last_error());

}

//else if ($_POST['username']== "" || $_POST['password'] == "" || $_POST['email'] == "") {
        //echo("All fields are mandatory!");

  //  }

    $username = pg_escape_string($_POST['username']);
    $password = pg_escape_string($_POST['password']);
    $email = pg_escape_string($_POST['email']);
    $group='user';

        // hash password before insertion
    $salt = salt();
    $password = generateHash($password, $salt);
   

    $sql = "INSERT INTO users VALUES ('$username', '$password','$email','$salt','$group')";
    $result=pg_query($db,$sql);
    pg_close($db);
    echo("You have successfully registered dumbass!");

?>