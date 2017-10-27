
<?php


	
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];
	$confirm_password = $_POST['confirm_password'];

	if( ! ($user_password === $confirm_password) ){ header("location:sign-up.php?passworderror=pass not match"); }


$conn = mysqli_connect("localhost", "root", "", "e_shopping" );
	


	$email_already_exist = "SELECT email, name FROM users 
						   WHERE email = '$user_email' OR email = '$user_email'
						    ";
	$res = mysqli_query($conn, $email_already_exist);
	if (mysqli_affected_rows($conn)>0) {
		
		header("location:sign-up.php?emailoruserexist=Your name or email already exist");
		
	}					   


	$create_Account = "INSERT INTO users (name, email, password)
						VALUES('$user_name', '$user_email', '$user_password')";
	$res = mysqli_query($conn, $create_Account);
		

		header("location:sign-up.php?success=account created");	
	
					


 ?>
