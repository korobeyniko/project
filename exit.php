<?php
    session_start();
    unset($_SESSION["user_email"]);
    unset($_SESSION["user_name"]);
    unset($_SESSION["user_id"]);

    setcookie("name","", time() - 3600);
    setcookie("id","", time() - 3600);

    //unset($_COOKIE["name"]);
    //unset($_COOKIE["id"]);


    header('location:home.php');
?>