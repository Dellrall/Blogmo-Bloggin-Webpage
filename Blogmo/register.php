<!DOCTYPE=htnl>
<html>
<head>
  <meta charset="utf-8">
  <title>Sign up</title>
  <link rel = "icon" href = "img/logo.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
<header>



<!--logo and brand name-->
  <div class="header" style="width:1260px;height:160px;background-color:#6b6361;color:white;"float:middle>
    <img src="img/logo.png">
    <h1>_______________________________</h1>
    <h1>Blogmo_<span class="blink">| </span></h1>
    <h2>&nbsp; Blogs for homosapien</h2>
</header>
</div>
<!--button on the rights-->
<div>
    <ul>
      <li class="active">
      <a href="home.php">Home</a></li>
      <!--<li><a href="#">Need Help?</a></li>-->
    </ul>
  </div>



        <center>
  <div class="main">
      <p class="sign" align="center">Welcome to Blogmo</p>
<form action="register.php" method="post">
  Username: <br><input type="username" name="username" class="username" required>
  <br>
  First name (optional)
   &nbsp;
   &nbsp;
   &nbsp;
   &nbsp;
  Last name (optional)
  <br><input type="username" name="firstn" class="firstname"/t> <input type="username" name="lastn" class="lastname">
  <br>s
  Date of birth: <br><input type="date" name="dob" class="dob" required>
  <br>
  Password: <br><input type="password" name="pw" class="password" id="myInput"required>
  <br>
  Confirm Password: <br><input type="password" name="pwc" class="passwordc" id="myInput"required>
  <br>
  <input type="checkbox" onclick="myFunction()">Show Password
  <br>
  <br>
  <input type="submit" class="submit">
<br>
<br>
<br>
  Already a member? <a href="login.php"> Login, Old pal</a>
</form>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</center>

<footer>
  <div style="width:1250px;height:250px;background-color:#595351;color:white;"float:left>
    <center>
    <br>
      <h3>Blogmo&#8482;</h3>
        <p>Special thanks to:</p>
        <p>Miss Siti Haslinda</p>
        <p>Internet tutorial (especially Freecodecamp.org)</p>
        <P>My fellow classmate</p>
        <p>and <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">me</a> :)</p>

    </center>
  </div>
  <footer>
 </body>
 </html>
