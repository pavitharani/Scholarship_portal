<!DOCTYPE html>
<html>
<head>
<meta charset="utf 8">
<title>Sign up form</title>
<link rel="stylesheet" href="style1.css">
<body>
<form action="connect1.php" method="post">
<div class="login-box">
<h1>REGISTER</h1>
<div class="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" placeholder="username" name="username" id="id1" value="" required />
</div>
<div class="textbox">
<i class="fa fa-envelope" aria-hidden="true"></i>
<input type="email" placeholder="name@domail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" value="" required />
</div>
<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>
<input type="password" placeholder="password" name="password" id="id2" value="" required />
</div>
<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>
<input type="password" placeholder="Confirm password" name="Confirm password" id="id3" value="" required />
</div>
<div class="textbox">
<i class="fa fa-phone" aria-hidden="true"></i>
<input type="tel" placeholder="Phone number" pattern="\d{10}" name="Phone_number" value="" required />
</div>
<input class="btn" type="submit" name="" value="SUBMIT" onclick="myFunction1(this.form)"/>
</div>
</form>
</body>
</html>