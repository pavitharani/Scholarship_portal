<!DOCTYPE html>
<html>
<head>
<meta charset="utf 8">
<title>Login form</title>
<link rel="stylesheet" href="style.css">
<body>
<form action="connect.php" method="post" >
<div class="login-box">
<h1>LOGIN</h1>
<div class="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" placeholder="username" name="username" value="" required />
</div>
<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>
<input type="password" placeholder="password" name="password" value="" required />
</div>
<input class="btn" type="submit" name="submit" value="Sign in" onclick="myFunction1(this.form)" />
</div>
</form>
</html>