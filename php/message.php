<?php
// Prints messages (errors and successes)
if (isset($_GET["error"])){
    echo "<div class='alert alert-danger' role='alert'>
    <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
    <span class='sr-only'>Error:</span>";
    echo $_GET["error"];
    echo "</div>";
}
if (isset($_GET["success"])){
    echo "<div class='alert alert-success' role='alert'>
    <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
    <span class='sr-only'>Success:</span>";
    echo $_GET["success"];
    echo "</div>";
}
// remove messages
$_GET = [];
?>