<?php
    // Handles consumer registration
    // check that the method used in indeed POST and not GET
    if(!isset($_POST["submit"])){
        // User must access this location through browser form action only !
        header("Location: /medkart/register.php?error=Access denied!");
        exit();
    }
    // check if password and its confirmation match
    if ($_POST["password"] != $_POST["confirm"]){
        // if password and its confirmation dont match, throw error
        header("Location: /medkart/register.php?error=Passwords dont match, Please try again!");
        exit();
    }
    // check if username or email already exist in the database
    $username = $_POST["username"];
    $email = $_POST["email"];
    $hashed_password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $first = $_POST["firstname"];
    $second = $_POST["lastname"];
    $address = $_POST["address"];
    // import database conn
    require_once("dbconnect.php");
    $sql = "SELECT * from consumer WHERE email=$email or username=$username";
    $result = $conn->query($sql);
    if ($result != FALSE && $result->num_rows != 0){
        // username or email is already taken
        $conn->close();
        header("Location: /medkart/register.php?error=Username or Email is already taken");
        exit();
    } else {
        // insert data
        $sql = "INSERT INTO consumer(username, email, passwordhash, firstname, lastname, address)
         VALUES('$username','$email','$hashed_password','$first','$second', '$address')";
        if ($conn->query($sql) == TRUE){
            // data was inserted successfuly, redirect to home
            header("Location: /medkart/login.php?success=Registration Successful. Login to get started !");
            $conn->close();
            exit();
        } else {
        header("Location: /medkart/register.php?error=We encountered an error on our side. Please try later");
            $conn->close();
            exit();
        }
        echo $sql;
    }
    
?>