<?php
$nationalID=$_POST['nationalID'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$county=$_POST['county'];
$telno=$_POST['telno'];
$re_password=$_POST['re_password'];
if ($password !==$re_password) {
 	header("location: register.php?error=Confirmation password does not match!!");
 } else {
   $conn = new mysqli ('localhost','root','kipla321','sali');
if($conn->connect_error){
	die('connection Failed:' .$conn->connect_error);

}
else{
	$stmt=$conn->prepare("insert into registration_form(nationalID,password,firstname,lastname,surname,email,gender,county,telno) values(?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssssi",$username,$password,$firstname,$lastname,$surname,$email,$gender,$county,$telno);
	$stmt->execute();
	$stmt->close();

	header('location:index.php');
	exit(0);
	
}	
}
     
	 


?>