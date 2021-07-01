<?php
//Restrict access to dashboard if session is found to be empty.
if(($_SESSION['username']=='') || ($_SESSION['email']=='')){

    header('Location:login.php');
    exit();
}

?>