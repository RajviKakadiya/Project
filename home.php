<?php
session_start();
if(isset($_SESSION['uname']))
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome to home page <?php echo $_SESSION['uname'];?></h1>
    <a href="logout.php">log out</a>
</body>
</html>

<?php
}
else{
    header("Location:login.php");
    exit();
}
?>