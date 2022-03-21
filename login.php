<!DOCTYPE html>
<html>
<head>
<title> loginpage </title>
<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
	<div class="center">
		<div id="fm" >
<form action="log.php" method="POST">
	<div id="title">Login Portal</div><br>
	<?php if(isset($_GET['error'])){?>
<p class="error"><?php echo $_GET['error'];?></p>
	<?php }?>
     <label>National Id:</label>
     <input type="text" name="nationalID" placeholder="National Id"><br><br>
     <label>Password:</label>
     <input type="password" id="user" name="password" placeholder="Password" maxlength="8" minlength="6"><br><br>
<P><I><B>Password is case sensitive</B></I></P><br>
<INPUT TYPE="CHECKBOX" CHECKED="CHECKED"> Remember me?<BR>
<input type="submit" id="btn" value="Login" style="background-color: green; color: white;" >
<p>Don't Have Account?<a href="register.php">Register</a></p>
<a href="#">Forgot Password?</a>
</form>
</div>
</body>
</html>