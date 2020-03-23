<?php
    // The user can access the home page if they are logged in.
    if (isset($_SESSION["username"])){
        // if the user is a vendor
        if ($_SESSION["isvendor"])header("Location: /medkart/vendor.php");
        // if the user is a consumer
        else header("Location: /medkart/user.php");
        exit();
    } else {
        header("Location: /medkart/login.html");
        exit();
    }
?>