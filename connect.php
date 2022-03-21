<?php
$username =$_POST['username'];
$password=$_POST['password'];
$user_data= 'username='. $username. '&password='. $password;
if (empty($username)){//echo "<script>password is Required</script>";
	header("location: login.php?error=Username and Password are Required!!");
	(exit);
}if (empty($password)){
	header("location: login.php?error=Password is Required!!");
	(exit);
}//if (empty($password$username)){
	//header("location: login.php?error=Password and Username is Required");
	//(exit);

$conn = new mysqli ('localhost','root','kipla321','registration_database');
if($conn->connect_error){
	die('connection Failed:' .$conn->connect_error);
}
else{
	$stmt=$conn->prepare("select * from registration_form where username=?");
	$stmt->bind_param('s',$username);
	$stmt->execute();
	$stmt_result= $stmt->get_result();
	if($stmt_result->num_rows>0){
		$data=$stmt_result->fetch_assoc();
		if($data["password"]==$password){
			//echo "Login successfully";
	      $_SESSION['verified']=$user['verified'];
	      $_SESSION['message']='You are logged in!';
	      $_SESSION['type']='alert-success';
	      header("location:portal.php");
	      exit();
             } else{
                     header("location: login.php?error=Invalid Username or Password<br>Kindly Check Your Credentials Before You login!!");
              }
	
}
	else {
		header("location: login.php?error=Invalid Username or Password<br>Kindly Check Your Credentials Before You login!!");
		exit();
		close();

	}
}


?>

//"location: login.php?error=Invalid Username or Password<br>Kindly Check Your Credentials Before You login!!"
?>