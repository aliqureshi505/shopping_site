<?php  include("bs_files.php"); ?>

<?php 

//   CHECKING LOGIN BUTTON IS CLICKED 



	if (isset($_POST['admin_login_btn'])) {

		

		$admin_name = $_POST['admin_name'];
		$admin_pass = $_POST['admin_password']; 

		$conn = mysqli_connect("localhost", "root", "", "e_shopping" );

		 
		// EXECUTING QUERY TO CHECK ITS RECORD IS AVAIL IN DB							

		

		$verify_admin = " SELECT * FROM users WHERE name = '$admin_name' AND password = '$admin_pass' AND admin = 'yes' ";

		$query = mysqli_query($conn, $verify_admin);

		if(mysqli_affected_rows($conn)>0){
			session_start();
			echo $_SESSION['admin_name'] = $admin_name; 
			$_SESSION['admin_logged_in'] = true; 
			header("location:index.php");
		}

		else {
				$incorrect_nameorpass = true;
				
		  }


		  

























			


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

			<form class="col-md-offset-4 col-md-4 col-md-offset-4" id="admin-login" action="#" method="post">

					<div class="row" id="admin-logo"> <center> <h2> <span class="glyphicon glyphicon-user" ></span>  Login</h2> </center></div>

					


					<?php

					// IF USERNAME DOES NOT MATCH IN DB
					 if(isset($incorrect_nameorpass)){

						 	echo "<p class='alert alert-danger'>";
						 	echo "Invalid name or password";
						 	echo " <a href='#''  class='close' data-dismiss='alert' >  &times;  </a> </p>";


					 }

					
					?>






				<br>
				   <input type="text" class=" form-control" placeholder="Enter Name" name="admin_name" required>
				<br>
				<input type="password"    class="form-control"  placeholder="Enter Password" name="admin_password" required>
				<a href="">Forget Password ? </a> <br>
				<br>
				
				
				<button name="admin_login_btn" class="btn btn-primary btn-block"  > Login </button>  
				<br><br>
				

			</form >
			<br><br><br>


		</div>


</body>
</html>