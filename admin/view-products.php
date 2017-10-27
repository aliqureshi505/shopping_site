<?php include("header.php"); ?>
<?php include("admin-navbar.php"); ?>

<!--  VIEW PRODUCTS CODING WHICH TYPE OF PRODUCT WANT TO VIEW  -->
<?php 

  	if (isset($_POST['view-product-btn'])) {


  		// RATHER THAN USING IF-ELSIF WE USE WSITCH STATMEMTS


  		switch ($_POST['category']) {

  				case 'Men\'s Fashion':
  				header("location:products-page/mens-fashion.php?category=mens-fashion");
  				break;

  				case 'Women\'s Fashion':
  				header("location:products-page/womens-fashion.php?category=womens-fashion");
  				break;

  				case 'Winter Clothes':
  				header("location:products-page/winter.php?category=winter");
  				break;

  				case 'Summer Clothes':
  				header("location:products-page/summer.php?category=summer");
  				break;
  			

				case 'Electronics Gadgets':
  				header("location:products-page/electronics Gadgets.php?category=electronics Gadgets");
  				break;

  				case 'Shoes':
  				header("location:products-page/shoes.php?category=shoes");
  				break;

  			default:
  				echo "Not a category";
  				die();
  		}


  			
  		

  	}


?>

<html>
<head>
	<title></title>
	<style type="text/css">

	/*#view-product-bg{ background-image: url("bg-img-1.jpg");
					background-size: cover;
					background-repeat: no-repeat; }
*/
	#select-category{ font-size: 19px;}		
	#view-product-bg select{border-radius: 50px; border: 3px solid #F06E11; padding: 10px; text-align: center; color: black; font-weight: bold;}	
	#view-product-bg select:hover{background-color: orange; color: white; border: 3px solid orange; cursor: pointer;}	
	#view-product-bg option{border-radius: 50px;}



	#view-product-btn {border-radius: 50px;}
	

	</style>
</head>
<body>

	<div class="container-fluid" id="view-product-bg">
		<form action="view-products.php" method="post">
		<center>
			<br><br>
		<label id="select-category" > Select Category: &nbsp;&nbsp;  </label>
		
		<select name="category" id="prodt-list">

			<option > Men's Fashion   </option>
			<option > Women's Fashion </option>
			<option > Winter Clothes  </option>
			<option > Summer Clothes  </option>
			<option > Electronics Gadgets </option>
			<option > Shoes			 </option>

		</select>

		<br> <br>
		<button class="btn btn-danger btn-lg" id="view-product-btn" name="view-product-btn">View Products</button>
		<br><br>
	</center>



</form>

	</div>



</body>
</html>

<br>  <center> <hr style="border:1px solid orange; width:450px; ">  </center>
<?php include("admin-footer.php"); ?>