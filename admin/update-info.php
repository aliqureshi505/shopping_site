<?php include("header.php"); ?>
<?php include("admin-navbar.php"); ?>


<?php 

	// UPDATE MUINFO CODE

if(isset($_POST['updateinfo-btn'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_pass = $_POST['confirm_pass'];

	

	if( ! ($password === $confirm_pass) ){
		$pass_not_match = true;
		
	}
	
	$conn = mysqli_connect("localhost", "root", "", "e_shopping");
	
	$updatemyinfo = "UPDATE users SET 
					name = '$name',
					email =  '$email',
					password = '$password',
					admin = 'yes'
					WHERE admin = 'yes' ";

	$res = mysqli_query($conn, $updatemyinfo);	
	if($res){
		$info_update_success = true;
	}

}			

?>

<html>
<head>
	<title></title>
	<style type="text/css">
	#update-info-bg{ background-image: url("bg-img-1.jpg");
					background-size: cover;
					background-repeat: no-repeat; }

	#update-info-bg h3, h4{ color: white;  }	
	#update-info-input input	{ border-radius: 0px; }		

	#updateinfo-btn{ border-radius: 0px;  font-size: 18px;}	

	.alert-success{color: white;}

	</style>
</head>
<body>

			<div class="container-fluid" id="update-info-bg">
				<div class="container" >
					<h3> <span class="glyphicon glyphicon-user"></span> Update MyInfo:</h3>

					<div id="update-info-input" class="col-md-offset-4 col-md-4 col-md-offset-4 ">
						
				<form method="post">	

				<?php  
					if(isset($pass_not_match)){

						    echo "<p class='alert alert-danger'>";
						 	echo "Password not match";
						 	echo " <a href='#''  class='close' data-dismiss='alert' >  &times;  </a> </p>";

					}

					if(isset($info_update_success)){

						    echo "<p class='alert alert-success'>";
						 	echo " <b> Info Updated successfully </b>";
						 	echo " <a href='#''  class='close' data-dismiss='alert' >  &times;  </a> </p>";

					}

				?>					

						<input type="text" class="form-control" name="name" placeholder="Enter Name" required > <br>
						


						<input type="email" class="form-control" name="email" placeholder="Enter Email" required > <br>
						

						

						<input type="text" class="form-control" name="password" placeholder="Password" required > <br>


						
						<input type="text" class="form-control" name="confirm_pass" placeholder="Confirm Password" required > <br>

						<button class="btn btn-danger btn-block active" name="updateinfo-btn" id="updateinfo-btn">Update MyInfo</button>

							<br><br><br><br><br>



					</form>	

					</div>


				</div>
			</div>
			<hr>

			<?php include("admin-footer.php"); ?>

</body>
</html>