<?php  include("bs_files.php");
$user_name = $user_email = $user_password = $confirm_password = "";
 ?>


<?php 

	if (isset($_GET['passworderror'])) {
	 
		$pass_not_match = true;

	}
	elseif (isset($_GET['emailoruserexist'])) {
		
		$email_or_user_exist = true;
	}
	elseif (isset($_GET['success'])) {
		
		$account_created = true;
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

			<form action="verfiy-signup.php" class="col-md-offset-4 col-md-4 col-md-offset-4" id="admin-login"  method="post">

					<div class="row" id="admin-logo"> <center> <h2> <span class="glyphicon glyphicon-user" ></span>  Sign Up</h2> </center></div>

					


					<?php

					// IF USERNAME DOES NOT MATCH IN DB
					 if(isset($pass_not_match)){

						 	echo "<p class='alert alert-danger'>";
						 	echo "Password not match";
						 	echo " <a href='#''  class='close' data-dismiss='alert' >  &times;  </a> </p>";


					 }elseif (isset($email_or_user_exist)) {
					 	
					 	    echo "<p class='alert alert-danger'>";
						 	echo "Email or username already exist";
						 	echo " <a href='#''  class='close' data-dismiss='alert' >  &times;  </a> </p>";

					 }
					 elseif (isset($account_created)) {
					 	
					 	    echo "<p class='alert alert-success'>";
						 	echo "Account Created Suessfully  <a href=''> <b> Login Now </b> </a> ";
						 	echo " <a href='#''  class='close' data-dismiss='alert' >  &times;  </a> </p>";

					 }

					
					?>





				
				   <input type="text" class=" form-control" placeholder="Enter Name" name="user_name"   required>
				<br>
				<input type="email"    class="form-control"  placeholder="Email Adress" name="user_email"   required>
				 <br>

				<input type="password"    class="form-control"  placeholder="Enter Password" name="user_password"   required>
			    <br>


				<input type="password"    class="form-control"  placeholder="Confirm Password" name="confirm_password"   required>
				<a href="">Already have account ?</a> <br>
				<br>


				
				<button name="craete_account_btn" class="btn btn-primary btn-block"  > Create an account </button>  
				<br><br>
				

			</form >
			<br><br><br>


		</div>


</body>
</html>