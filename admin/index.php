<?php include("header.php"); ?>

<?php 

 if( ! $_SESSION['admin_logged_in']){
	header("location:login.php");
} 
?>







<html>
<head>
	<title></title>
	<style type="text/css">
	#admin-home-bg{ background-image: url("bg-img-1.jpg");
					background-size: cover;
					background-repeat: no-repeat; }

	#admin-home-bg h2{text-align: center;  line-height: 40px; color: white; }
	#admin-home-bg .btn {border-radius: 0px; font-size: 17px; margin: 10px;}


	</style>
</head>
<body>

	<?php include("admin-navbar.php");  ?>

	<div class="container-fluid" id="admin-home-bg">
		<div class="container">
		<br>
			<h2>E-Shopping provides you an admin panel with the help of this you can manage your website without coding
				You can easily add-maanage-edit products in efficient manner with user friendly interface 	
			</h2>
			<br>
				<div class="row">
					<center>
							
					     <a href="index.php">	<button class="btn btn-primary btn-lg">  Home Page</button>   </a>

						 <a href="add-products.php">	<button class="btn btn-info btn-lg"> Add products</button>    </a>

						 <a href="manage-products.php">	<button class="btn btn-success btn-lg">  Manage products</button>    </a>

						 <a href="view-products.php">	<button class="btn btn-warning btn-lg">  View products</button>    </a>

						 <a href="logout.php">	<button class="btn btn-primary btn-lg">  Logout Me</button>    </a>

						 <a href="update-info.php">	<button class="btn btn-danger btn-lg">  Update Info</button>    </a>
					
					</center>
				</div>

				<br><br><br>


		</div>

	</div>

		 <hr>

	<?php  include("admin-footer.php"); ?>

</body>
</html>