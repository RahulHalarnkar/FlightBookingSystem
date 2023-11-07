<?php

echo '<script>alert("you have been logged out")</script>';

include '../connect.php';
session_start();
//destroy the session
session_unset();
//redirect to login page
header("location: main.html");
?>