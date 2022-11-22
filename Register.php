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

button {
  background-color: #086c7e;
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

<h2 align="center">Registration Form</h2>

<form align="center"  action="auth.php" method="post">
  <div class="container">
    <!-- <img src="imag/avatr.png" alt="Avatar" class="avatar" > -->
  </div>
  <table align="center" >
  <div class="container">
    <tr>
      <td><label for="uname"><b>Name</b></label>
      <td><input type="text" placeholder="Name" size="100" name="name">
    </tr>
   <tr>
      <td><label for="uname"><b>Email</b></label>
      <td><input type="text" placeholder="Email" name="email">
    </tr> 
    <tr> 
      <td><label for="psw"><b>Password</b></label>
      <td><input type="password" placeholder="Password" name="pas" >
    </tr>
    <tr>
      <td><label for="uname"><b>Re-Password</b></label>
      <td><input type="text" placeholder="Re-Password" name="rep">   
    </tr>
    <tr>    
      <th><label for="uname"><b>Age</b></label>
      <th><input type="text" placeholder="Age" name="age">
    </tr>
    <tr>
      <th><label for="uname"><b>Birtdate</b></label>
      <th><input type="text" placeholder="Birtdate" name="birthdate">
    </tr>
    <tr>
      <th><label for="uname"><b>Country</b></label>
      <th><input type="text" placeholder="Country" name="country" >
    </tr>
    <tr>
      <th><label for="uname"><b>State</b></label>
      <th><input type="text" placeholder="State" name="state">
    </tr>
    <tr>
      <th><label for="uname"><b>City</b></label>
      <th><input type="text" placeholder="City" name="city">
    </tr>
    <tr>
      <th colspan="2"><button type="submit" name="btn">submit</button>
    </tr>
  </div>

  
</form>
</table>
</body>
</html>
