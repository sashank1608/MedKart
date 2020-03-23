<?php
    // just put a button in a form whose action is this file. That's it.
    // destroy session
    $_SESSION = [];
    header("Location: /medkart/login.php?success=Logged out");
    exit();
?>