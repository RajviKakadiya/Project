<?php
session_start();
if(isset($_POST['uname']) && isset($_POST['psw']))
{
    $uname=$_POST["uname"];
    $pswd=$_POST["psw"];
    if($uname == "admin" && $pswd == "admin")
    {
        $_SESSION['uname']=$uname;
        header("Location: home.php");
    }
    else
    {
        header("Location: login.php?error=invalid username and password");
    }
}

?>