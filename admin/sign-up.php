<?php  include("bs_files.php"); ?>


<?php

$user_name = $user_email = $user_password = $confirm_password = "";

if (isset($_POST['craete_account_btn'])) {
	
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_password = $_POST['user_password'];
	$confirm_password = $_POST['confirm_password'];

	if( ! ($user_password === $confirm_password) ){ echo "<center> <h3> .) Password does not match <a href=''>Try Again</a></h3>  </center>"; die(); }

$conn = mysqli_connect("localhost", "root", "", "e_shopping" );
	


	$email_already_exist = "SELECT name FROM users 
						   WHERE email = '$user_email' ";
	$res = mysqli_query($conn, $email_already_exist);
	if (mysqli_affected_rows($conn)>0) {
		
		echo "<center> <h3> Username alreday exist <a href=''>Try Again </a> </h3> </center>"; die();
		
		
	}					   


	$create_Account = "INSERT INTO users (name, email, password)
						VALUES('$user_name', '$user_email', '$user_password')";
	$res = mysqli_query($conn, $create_Account);
		echo " <center> <h3> Account Craeted successfully <a href=''>Login Me </a> </h3> </center>"; die();
	
					

}
 ?>


<html>
<head>
	<title></title>
	<style type="text/css">
	
	#admin-login {background-color: white;}
	#admin-login{ border: 5px solid #D95427; padding: 25px; margin-top: 80px;}
	#admin-login .form-control { border-radius: 0px;}
	#admin-login .btn-primary { border-radius: 0px; background: #D95427; border: none; font-size: 17px;}
	
	#admin-logo h2{color: #D95427; }
	body{background-image: url("bg-img-1.jpg");
		background-repeat: no-repeat;
		background-size: cover; }

	#admin-login input{ color: #D95427; font-size: 15px; border: 1px solid #D95427;}
	#admin-login a{color: #D95427;}
	#admin-login .alert-danger{border-radius: 0px; }

	</style>
</head>
<body>

		<div class="container">

			<form class="col-md-offset-4 col-md-4 col-md-offset-4" id="admin-login"  method="post">

					<div class="row" id="admin-logo"> <center> <h2> <span class="glyphicon glyphicon-user" ></span>  Login</h2> </center></div>

					


				<br>
				   <input type="text" class=" form-control" placeholder="Enter Name" name="user_name"  value="<?php echo $user_name; ?>" required>
				<br>
				<input type="email"    class="form-control"  placeholder="Email Adress" name="user_email"  value="<?php echo $user_email; ?>" required>
				 <br>

				<input type="password"    class="form-control"  placeholder="Enter Password" name="user_password" value="<?php echo $user_password; ?>"  required>
			    <br>


				<input type="password"    class="form-control"  placeholder="Confirm Password" name="confirm_password" value="<?php echo $confirm_password; ?>"  required>
				<a href="">Already have account ?</a> <br>
				<br>


				
				<button name="craete_account_btn" class="btn btn-primary btn-block"  > Create an account </button>  
				<br><br>
				

			</form >
			<br><br><br>


		</div>


</body>
</html>