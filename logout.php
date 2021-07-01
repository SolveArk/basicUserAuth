<?php
session_start();

//destroy session and redirect to login.php
session_destroy();
header("Location: login.php");
?>