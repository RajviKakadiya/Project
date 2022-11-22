<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}



input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.error
{
  color: #f44336;
}

button {
  background-color: #047eaa;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 12px 0 12px 0;
  
}

img.avatar {
  width: 20%;
  border-radius: 25%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2 align="center">Login Form</h2>
<form align="center" action="auth.php" method="post">


  <?php
    if(isset($_GET['error']))
    {?>
    <p class="error">
      <?php echo $_GET['error'];?></p>
   <?php }?>

   
  <div class="container">
    <!-- <img src="E:/mca sem1/ip/boothomepage/imag/avatr.png" alt="Avatar" class="avatar" > -->
  </div>
  <table align="center" >
  <div class="container">
    <tr>
      <td><label ><b>Username</b></label>
      <td><input type="text" placeholder="Enter Username" name="uname" required size="100">
    </tr>
    <tr>
      <td><label ><b>Password</b></label>
    <td><input type="password" placeholder="Enter Password" name="psw" required>
  </tr> 
    <tr>  
    <td colspan="2"><button type="submit">Login</button>
    <!-- <button type="submit"><a href="Register.html">Register Now</a></button></td> -->
    </tr>
  </div>
  

 </table> 
</form>

</body>
</html>
