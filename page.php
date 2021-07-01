<?php
session_start();
?>

<?php
include('ssnlog.php');
?>

<!-- Most basic sample dashboard -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel= "stylesheet" type= "text/css" href="basicStyle/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 echo '<p><a href="logout.php">Logout</a></p>';

    echo('<div class= "userPage page">
        '."Welcome, ".strtoupper($_SESSION['fname']).'<br>
        You Are: '.$_SESSION['username'].'<br>
        Your Email: '.$_SESSION['email'].'
        </div>');

        
?>
</body>
</html>