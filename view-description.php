<?php  include("bs_files.php");?>
<?php  include("navbar.php");  ?>


<?php 

     $category = $_GET['category'] ;
     $product_id = $_GET['prdt_id'];

     switch ($category) {

     	   case 'electronics':
     		# code...
     	   $conn = mysqli_connect("localhost", "root", "", "e_shopping");
     	   $view_description = "SELECT * FROM electronics WHERE id = ".$product_id;
     	   $res = mysqli_query($conn, $view_description);
     	   $row = mysqli_fetch_Assoc($res);

     	  $title =   $row['title'];
     	  $price =   $row['price'];
     	  $description =   $row['description'];
     	  $image_no = $row['image'];
     	  $image =  "<img src='admin/products/electronics/{$image_no}.jpg' height=260px width=260px >";


     		break;





     		case 'women-fashion':
     		# code...
     		$conn = mysqli_connect("localhost", "root", "", "e_shopping");
     	    $view_description = "SELECT * FROM womens_fashion  WHERE id = ".$product_id;
     	   $res = mysqli_query($conn, $view_description);
     	   $row = mysqli_fetch_Assoc($res);
     	   
     	  $title =   $row['title'];
     	  $price =   $row['price'];
     	  $description =   $row['description'];
     	  $image_no = $row['image'];
     	  $image =  "<img src='admin/products/women fashion/{$image_no}.jpg' height=260px width=260px >";
     		break;




     		case 'mens-fashion':
     		# code...
     		$conn = mysqli_connect("localhost", "root", "", "e_shopping");
     	    $view_description = "SELECT * FROM mens_fashion WHERE id = ".$product_id;
     	   $res = mysqli_query($conn, $view_description);
     	   $row = mysqli_fetch_Assoc($res);
     	   
     	  $title =   $row['title'];
     	  $price =   $row['price'];
     	  $description =   $row['description'];
     	  $image_no = $row['image'];
     	  $image =  "<img src='admin/products/men fashion/{$image_no}.jpg' height=260px width=260px >";
     		break;




     		case 'shoes':
     		# code...
     		$conn = mysqli_connect("localhost", "root", "", "e_shopping");
     	    $view_description = "SELECT * FROM shoes WHERE id = ".$product_id;
     	   $res = mysqli_query($conn, $view_description);
     	   $row = mysqli_fetch_Assoc($res);
     	   
     	  $title =   $row['title'];
     	  $price =   $row['price'];
     	  $description =   $row['description'];
     	  $image_no = $row['image'];
     	  $image =  "<img src='admin/products/electronics/{$image_no}.jpg' height=260px width=260px >";
     		break;




     		case 'summer-cothes':
     		# code...
     		$conn = mysqli_connect("localhost", "root", "", "e_shopping");
     	    $view_description = "SELECT * FROM summer_cothes WHERE id = ".$product_id;
     	   $res = mysqli_query($conn, $view_description);
     	   $row = mysqli_fetch_Assoc($res);
     	   
     	  $title =   $row['title'];
     	  $price =   $row['price'];
     	  $description =   $row['description'];
     	  $image_no = $row['image'];

     	  $image =  "<img src='admin/products/summer/{$image_no}.jpg' height=260px width=260px >";
     		break;



     		case 'winter-clothes':
     		# code...
     		$conn = mysqli_connect("localhost", "root", "", "e_shopping");
     	    $view_description = "SELECT * FROM 	winter_clothes WHERE id = ".$product_id;
     	   $res = mysqli_query($conn, $view_description);
     	   $row = mysqli_fetch_Assoc($res);
     	   
     	  $title =   $row['title'];
     	  $price =   $row['price'];
     	  $description =   $row['description'];
     	  $image_no = $row['image'];
     	  $image =  "<img src='admin/products/winter/{$image_no}.jpg' height=260px width=260px >";
     		break;
     	
     	default:
     		# code...
     		break;
     }



?>






<html>
<head>
	<title></title>
	<style type="text/css">
	
	/*img{float: left;}*/
	#view-description .btn { border-radius: 0px; margin-top: 10px;}
	#view-description div{margin-top: 30px;}
	.des-term{font-size: 18px;}
	#view-description p{padding-left: 50px; font-size: 16px;}
	#img-div{ margin-right: 20px;}
	</style>
</head>
<body>

	<div class="container" id="view-description">

		<center >  <h4> <span class="glyphicon glyphicon-th"></span>&nbsp; <b> View Description of Product </b>  </h4>  </center>
		<div style="border:2px solid orange;"></div>


		<div class="col-md-4" id="img-div">
			<!-- <img src="assets/clothes-.png" style="border:1px solid #7E7F80;"> -->
			<?php echo $image; ?>
		</div>

			<div class="col-md-offset-4">	
				
			  	<b class="des-term">  Title :  </b>   <br>  <p> <?php echo $title; ?>   </p>  
			  	<b class="des-term">  Price:  </b>  <br>  <p> <?php echo $price; ?>  </p>  
			  	<b class="des-term">  Description:  </b> <br>   <p> <?php echo $description; ?>   </p>  

		   </div>

		   <br>
		   <center>
		   <button class="btn btn-success btn-lg"> <span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;  Buy this product</button>

		   <button class="btn btn-primary btn-lg"> <span class="glyphicon glyphicon-plus"></span> &nbsp;  Add to wish list</button>
		   </center>	
  
		   <div style="border:2px solid orange;"></div>


	</div>

</body>
</html>

<br><br><br><br><br><br>
<?php  include("footer.php");  ?>