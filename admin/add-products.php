<?php include("header.php"); ?>
<?php include("admin-navbar.php"); ?>
	

	<?php 

	//CODING FOR ADDING PRODUCT WITHIN THEIR CATEGORY

	if(isset($_POST['add_prdt_btn'])){

		$product_title = $_POST['prdt_title'];
		$product_price = $_POST['prdt_price'];
		$product_description = $_POST['prdt_descrp'];
		$image_no = uniqid();
		$file = $_FILES['prdt_img'];
		
		

	
	$conn = mysqli_connect("localhost", "root", "", "e_shopping");

	switch ($_POST['category_name']) {

		case 'Men\'s Fashion':
			
	//  INSERT PRODUCT INTO its TABLE
		
		$add_prodct_query = "INSERT INTO mens_fashion (title, description, price, image )
							VALUES('$product_title', '$product_description', '$product_price', '$image_no') ";
		$res = mysqli_query($conn, $add_prodct_query);

		// STORE UPLOADED PRODUCT IMAGE TO DESIRE LOCATION
		
		move_uploaded_file($file['tmp_name'], "products/men fashion/".$image_no.".jpg");
	

			break;

		case 'Women\'s Fashion':
			
		//  INSERT PRODUCT INTO its TABLE

		$add_prodct_query = "INSERT INTO womens_fashion (title, description, price, image )
							VALUES('$product_title', '$product_description', '$product_price', '$image_no') ";
		$res = mysqli_query($conn, $add_prodct_query);

		// STORE UPLOADED PRODUCT IMAGE TO DESIRE LOCATION
		
		move_uploaded_file($file['tmp_name'], "products/women fashion/".$image_no.".jpg");


			break;
		
		case 'Winter Collection':
			
	//  INSERT PRODUCT INTO its TABLE

		$add_prodct_query = "INSERT INTO winter_clothes (title, description, price, image )
							VALUES('$product_title', '$product_description', '$product_price', '$image_no') ";
		$res = mysqli_query($conn, $add_prodct_query);

		// STORE UPLOADED PRODUCT IMAGE TO DESIRE LOCATION
		
		move_uploaded_file($file['tmp_name'], "products/winter/".$image_no.".jpg");


			break;
		
		case 'Summer Collection':
			
	//  INSERT PRODUCT INTO its TABLE

		$add_prodct_query = "INSERT INTO summer_cothes (title, description, price, image )
							VALUES('$product_title', '$product_description', '$product_price', '$image_no') ";
		$res = mysqli_query($conn, $add_prodct_query);

		// STORE UPLOADED PRODUCT IMAGE TO DESIRE LOCATION
		
		move_uploaded_file($file['tmp_name'], "products/summer/".$image_no.".jpg");


			break;
		
		case 'Shoes':
			
		//  INSERT PRODUCT INTO its TABLE

		$add_prodct_query = "INSERT INTO shoes (title, description, price, image )
							VALUES('$product_title', '$product_description', '$product_price', '$image_no') ";
		$res = mysqli_query($conn, $add_prodct_query);

		// STORE UPLOADED PRODUCT IMAGE TO DESIRE LOCATION
		
		move_uploaded_file($file['tmp_name'], "products/shoes/".$image_no.".jpg");


			break;	

			case 'Electronic Gadgets':
			
		//  INSERT PRODUCT INTO its TABLE

		$add_prodct_query = "INSERT INTO electronics (title, description, price, image )
							VALUES('$product_title', '$product_description', '$product_price', '$image_no') ";
		$res = mysqli_query($conn, $add_prodct_query);

		// STORE UPLOADED PRODUCT IMAGE TO DESIRE LOCATION
		
		move_uploaded_file($file['tmp_name'], "products/electronics/".$image_no.".jpg");


			break;	


		
		default:
			
			break;
	}



}
	?>


<html>
<head>
	<title></title>
	<style type="text/css">

	#add-prodct input, textarea{border-radius: 0px; }

	#select-category {border-radius: 50px; 
					border: 3px solid #F06E11; padding: 7px;
					 color: white; 
			 		background-color: #F06E11; 
			 		font-size: 16px;
			 		}
	#select-category:hover { cursor: pointer; 	}	

	#sel_cat{font-size: 18px;}		 		

	
#add-product-title .glyphicon-plus{color: #F06E11;}
#add-product-title {color: #F06E11; font-weight: bold; }
		 		
	#add-product-btn .btn{ background-color: #F06E11; border: transparent; border-radius: 50px; font-size: 19px; font-weight: bold; border: 2px solid transparent}

	#add-product-btn .btn:hover{ background-color: transparent; color: #F06E11;  border: 2px solid #F06E11;  border-radius: 50px; font-size: 19px;}		 		

	/*#add-prodct label{font-size: 15px; float: left;}*/

	
	
	</style>
</head>
<body>

	<form method="post" enctype="multipart/form-data">

	<div class="container" id="add-prodct">
		<h4 id="add-product-title"> <span class="glyphicon glyphicon-plus"></span> Add Product</h4>

			<center>



				<label id="sel_cat">  Select Category: &nbsp;     </label>
		
			<select id="select-category" name="category_name" >
				<option> Men's Fashion  </option>
				<option> Women's Fashion  </option>
				<option> Winter Collection  </option>
				<option> Electronic Gadgets  </option>
				<option> Summer Collection  </option>
				<option> Shoes  </option>
			</select>

		<br> <br>

		<div class="col-md-offset-4 col-md-4 col-md-offset-4">
			<label> Product Title:     </label>
			<input type="text"  name="prdt_title" class="form-control" required >  <br>
		</div>


		<div class="col-md-offset-4 col-md-4 col-md-offset-4">
			<label> Product Price:     </label>
			<input type="text"  name="prdt_price" class="form-control" required >  <br>
		</div>



		<div class="col-md-offset-4 col-md-4 col-md-offset-4">
			<label> Product Descriptions     </label>:
			<textarea  name="prdt_descrp" class="form-control"  required ></textarea>  <br>
		</div>



		<div class="col-md-offset-4 col-md-4 col-md-offset-4" >
			<label> Product Image:     </label>
			<input style="color:orange; font-weight:bold;" type="file" name="prdt_img" required >
		</div>




		<div class="col-md-offset-4 col-md-4 col-md-offset-4" id="add-product-btn" >
			<br>
			<button class="btn btn-primary btn-block" name="add_prdt_btn">Add Product</button>
		</div>

		


		
	</center>
	

	</div>



<br><br>


</form>

			<?php include("admin-footer.php"); ?>
</body>
</html>