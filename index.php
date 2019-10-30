<?php
    if(isset($_POST['submit']))
    {
        $email = $_POST['fname'];
        $pass = $_POST['pass'];

        if($email == '')
        {
            $error= "Email is required";
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $error = "<b>$email</b> is not a valid email address";
        }
        else if($pass == '')
        {
            $error = "Password is required";
        }
        else if(strlen($pass)<8)
        {
            $error = "Minimum password length is 8";
        }
    }

?>

<!DOCTYPE html>
<html lang "en">
<head>
    <meta charset ="UTF-8">
    <title>Log In Form</title>
</head>
<body>
    <h1>Login</h1>
    <form method = "post">
        Email:
        <input type = "text" name = "fname" placeholder = "Enter User Email"><br><br>
        Password:
        <input type = "password" name = "pass" placeholder = "Enter User Password"><br><br>
        <input type = "submit" name = "submit" value = "Submit" >
    </form>
</body>
