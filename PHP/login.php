<?php
session_start();

if (isset($_POST["login"])) {
    if (isset($_POST["username"]) && isset($_POST["password"])) {

    }
    else {
        $_SESSION["error"] = "both username and password are required";
    }
}

if (isset($_POST["register"])) {
    
}

?>