<?php
session_start();//Begin session

$msg= '';

if(isset($_POST['log'])){
    if(!empty($_POST['name']) && !empty($_POST['pass'])){

    if(isset($_SESSION['username']) && 
        isset($_SESSION['password'])){
        
        if($_POST['name'] === $_SESSION['username'] && 
            $_POST['pass'] === $_SESSION['password']){

            header('Location:page.php');
        }else{
            $msg= '<p style="color:red;">
            You entered a wrong password or email</p>';
        }
    }else{
        $msg= '<p style="color:red;">
        Error!: No Credentials Found.</p>';
    }
}else{
    $msg= '<p style="color:red;">
    *All fields are required.</p>';
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <link rel= "stylesheet" type= "text/css" href="basicStyle/style.css">
<title>LOGIN</title>
<meta name="viewport" content="width=device-width, initial-scale=0.75">
</head>

<body>
<div class= "wrap">
    <p><?php  echo $msg;  ?></p>
<h1>Login</h1>
    <form action= "login.php" method= "post">

            <div>
                <label for="uname">Username</label>
                <input type= "text" name="name" 
                autofocus="autofocus" placeholder="Enter UserName">
            </div>
        

            <div>
                <label for="uname">Password</label>
                <input type= "password" name="pass" 
                placeholder="Enter Password">
        </div>

        <div class= "btn">
             <button type="submit" name= "log">Login</button>
        </div>
         <p>Not registered? <a href= "default.php">Register</a></p>
        </div>

    </form>
</body>

</html>