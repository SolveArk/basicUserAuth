<!-- ID: SH-IT-43139 -->

<!-- ***This file was named default.php instead of register.php
so as to access it first***
**Just a very basic session demonstration though**-->
<?php
session_start();
$required= '';

if(isset($_POST['sub'])){
    //Validate for empty fields
    if(empty($_POST['fullname']) || empty($_POST['uname']) ||
    empty($_POST['mail']) || empty($_POST['pword'])){

    $required= '<p style="color:red;">*All fields are required</p>';
}else{
        $_SESSION['fname']      =   trim($_POST['fullname']);
        $_SESSION['username']   =   trim($_POST['uname']);
        $_SESSION['email']      =   trim($_POST['mail']);
        $_SESSION['password']   =   trim($_POST['pword']);

        $required= '<p style="color:rgb(0, 184, 46);">Registration Success!, Login below.</p>';
    }
}
?>

<!Doctype html>
<html>

<head>
    <link rel= "stylesheet" type= "text/css" href="basicStyle/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
    <title>REGISTER</title>
</head>

<body>

    <div class="wrap">
    <p><?php echo $required?></p>

    <h1>Register</h1>

    <form action= "default.php" method= "post">
        
        <div class= "formInput">
            <label for="fname">FullName</label>
            <input type= "text" name="fullname" 
            autofocus="autofocus" placeholder="Enter FullName">
        </div>
        
        <div class= "formInput">
            <label for="uname">Username</label>
            <input type= "text" name="uname" 
            placeholder="Enter UserName">
        </div>
    
        <div class= "formInput">
            <label for="uname">Email</label>
            <input type= "email" name="mail" 
            placeholder="Enter Email">
        </div>
    
        <div class= "formInput">
            <label for="uname">Password</label>
            <input type= "password" name="pword" 
            placeholder="Enter Password">
        </div>

        <div class= "btn">
        <button type="submit" name= "sub" class="sub_btn">Register</button>
    </div>
    <p>Registered? <a href= "login.php">Login</a></p>

    </div>

    </form>

</body>

</html>