<?php
/*
This file handles the login logic. Use the database connection created in 
dbconnect.php. This file does the below functions:
1. Check if the request is a POST request
2. Check if the form is completely filled. 
3. Check if the consumer/vendor exists
4. If the users exists, Check if the password hash matches
5. If everything passes, add the user to session and redirect
to users page
6. If something fails, show error and redirect back to login page.
*/
if (!isset($_POST["submit"])){
    header("Location: /medkart/login.php?error=Access to this page is denied.");
    exit();
}

// import the db connection
require_once("dbconnect.php");

$username = $_POST["username"];
$password = $_POST["password"];
$isvendor = FALSE;
if (isset($_POST["isvendor"]) && $_POST["isvendor"] == "Yes"){
    // check for the password hash in vendor table
    $sql = "SELECT passwordhash from vendor where username='$username'";
    $isvendor = TRUE;
} else {
    // check for the password hash in user table
    $sql = "SELECT passwordhash from consumer where username='$username'";
}

// execute sql query
$error = NULL;
$result = $conn->query($sql);
if ($result == FALSE){
    $conn->close();
    $error = "Username is invalid. Please try again !";
    header("Location: /medkart/login.php?error=$error");
    exit();
}
if ($result->num_rows > 0){
    // if indeed there is a user, check for password
    $row = $result->fetch_assoc();
    if(password_verify($password, $row["passwordhash"])) {
        // successful login
        // add to session
        $_SESSION = [];
        $_SESSION["username"] = $username;
        $_SESSION["isvendor"] = $isvendor;
        if ($isvendor){
            // CHANGE THIS TO POINT TO VENDOR HOME PAGE
            $conn->close();
            header("Location: /medkart/home.php?success=Login Successful");
            exit();
        } else {
            $conn->close();
            header("Location: /medkart/home.php?success=Login Successful");
            exit();
        }
    } else {
        $conn->close();
        // invalid password
        $error = "Invalid Password. Please try again !";
    }
} else {
    // if user does not exist, show error
    $conn->close();
    $error = "Username invalid. Please try again !";
}
// if the code reached here, there was an error
header("Location: /medkart/login.php?error=$error");
?>