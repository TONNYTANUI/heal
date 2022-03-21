<?php
require_once('connect5.php');
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$county=$_POST['county'];
$telno=$_POST['telno'];
$national_ID=$_POST['national_ID'];
$password=$_POST['password'];
$re_password=$_POST['re_password'];
if ($password !==$re_password) {
    header("location: register.php?error=Confirmation password does not match!!");
 } else {
$sql = "INSERT INTO registration_form (firstname,lastname,surname,email,gender,county,telno,national_ID,password) 
      VALUES ($firstname,$lastname,$surname,$email,$gender,$county,$telno,$national_ID,$password)";
if(mysqli_query($dbconnect, $sql)){
    echo "<br>1 Extra records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnect);
}
}
 // Close connection
mysqli_close($dbconnect);
?>
