<!DOCTYPE html>
<html>
<head>
<title> loginpage </title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<div id="fm">
<form action="submission.php" method="POST">
	<div id="title">REGISTRATION FORM</div><BR><BR>
	<?php if(isset($_GET['error'])){?>
<p class="error"><?php echo $_GET['error'];?></p>
	<?php }?>
	<div class="algtable">
<label>Firstname:</label>
<input type="text" id="user" name="firstname" required><br><br>
<label>Lastname:</label>
<input type="text" id="pass" name="lastname" required><br><br>
<label>Surname:</label>
<input type="text" id="user" name="surname"><br><br>
<label>Email:</label>
<input type="text" id="user" name="email" required><br><br>
<label>Gender:</label>
<input type="radio" id="male" name="gender" value="Male" required>Male
<input type="radio" id="female" name="gender" value="Male"required>Female<br><br>
<label>County:</label>
<select name="county" id="county">
<option value="--">--</option>
<option value="Non-Resident">Non-Resident</option>
<option value="Mombasa">Mombasa</option>
<option value="Kwale">Kwale</option>
<option value="Kilifi">Kilifi</option>
<option value="Tana River">Tana River</option>
<option value="Lamu">Lamu</option>
<option value="Taita/Taveta">Taita/Taveta</option>
<option value="Garissa">Garissa</option>
<option value="Wajir">Wajir</option>
<option value="Mandera">Mandera</option>
<option value="Marsabit">Marsabit</option>
<option value="Isiolo">Isiolo</option>
<option value="Meru">Meru</option>
<option value="Tharaka-Nithi">Tharaka-Nithi</option>
<option value="Embu">Embu</option>
<option value="Kitui">Kitui</option>
<option value="Makueni">Makueni</option>
<option value="Nyandarua">Nyandarua</option>
<option value="Nyeri">Nyeri</option>
<option value="Kirinyaga">Kirinyaga</option>
<option value="Murang'a">Murang'a</option>
<option value="Kiambu">Kiambu</option>
<option value="Turkana">Turkana</option>
<option value="West Pokot">West Pokot</option>
<option value="Samburu">Samburu</option>
<option value="Trans Nzoia">Trans Nzoia</option>
<option value="Elgeyo/Marakwet">Elgeyo/Marakwet</option>
<option value="Nandi">Nandi</option>
<option value="Baringo">Baringo</option>
<option value="Laikipia">Laikipia</option>
<option value="Nakuru">Nakuru</option>
<option value="Narokr">Narok</option>
<option value="Kajiado">Kajiado</option>
<option value="Kericho">Kericho</option>
<option value="Kakamega">Kakamega</option>
<option value="Vihiga">Vihiga</option>
<option value="Bungoma">Bungoma</option>
<option value="Busia">Busia</option>
<option value="Siayar">Siaya</option>
<option value="Kisumu">Kisumu</option>
<option value="Homa Bay">Homa Bay</option>
<option value="Migori">Migori</option>
<option value="Kisii">Kisii</option>
<option value="Nyamira">Nyamira</option>
<option value="Nairobi City">Nairobi City</option>
</select><br><br>
<label>Tel-no:</label>
<input type="text" id="user" name="telno" required><br><br>
<label>National ID:</label>
<input type="text" id="user" name="national_ID"required><br><br>
<label>Password:</label>
<input type="password" id="user" name="password" required><br><br>
<label>Confirm password:</label>
<input type="password" id="user" name="re_password" required><br><br>
<input type="submit" id="btn" value="Submit">
<p>Already have an account? <a href="login.php">Login<a/><p>
</div>
</form>
</div>
</body>
</html>