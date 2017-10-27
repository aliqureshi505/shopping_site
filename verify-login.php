
<?php 


	

		$name = $_GET['name'];
		$pass = $_GET['password']; 

		$conn = mysqli_connect("localhost", "root", "", "e_shopping" );

		 
		// EXECUTING QUERY TO CHECK ITS RECORD IS AVAIL IN DB							

		$verify_user = "SELECT * FROM users WHERE 
						 name = '$name' AND password = '$pass' AND admin = 'no'";

		$res = mysqli_query($conn, $verify_user);
		
		
		
		if( mysqli_num_rows($res) == 0){
			
			header("location:login.php?error=Invalidusernameorpassword");
			
		}
		else{
			session_start();
			$_SESSION['user_name'] = $name;
			header("location:index.php");
			
		}			 





?>
