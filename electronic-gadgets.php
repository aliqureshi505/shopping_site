<?php  include("navbar.php");  ?>
<html>
<head>
	<title></title>
	<style type="text/css">
	#cat a{font-size: 18px;}
	#btns .btn{ margin-top: 5px; border-radius: 0px; }
	.title, .price {text-align: center;}

	</style>
</head>
<body>

	<div class="container" id="cat">
		
		
   <center>  <h4> <span><img src="assets/womens-fashion.png" height="40px"></span> &nbsp; Women's Fashion: </h4> <center>
		<div style="border:1px solid orange; width:100%;"></div>
		<br>




			<!-- WOMEN FASHIOON PRODUCT FETCH FROM DB -->

			<?php 


			$conn = mysqli_connect("localhost", "root", "", "e_shopping");
			$fetch_women_fashion = "SELECT * FROM womens_fashion ORDER BY id DESC ";
			$res = mysqli_query($conn, $fetch_women_fashion);

			while ($row = mysqli_fetch_assoc($res)) {  ?>
			
			<?php 
				// show record as front end 

				 $title = $row['title'];
				 $description = $row['description'];
				 $price = $row['price'];
				 $image_no = $row['image'];

				?>


						
						


			<div class=" col-md-3 "> 
				 <div class="thumbnail" id="btns"> 	
				 	<h4 class="title"><?php  echo  $image_no; ?></h4>
				 			<?php  echo " <img src='admin/products/men fashion'{$image_no}.jpg   alt='image-not-found' />" ?>
				 	<h4 class="price"><?php  echo  $title; ?></h4>		
				 	<button class="btn btn-success btn-block"> <span class="glyphicon glyphicon-shopping-cart">&nbsp;</span>Buy Product  </button>
				 	<button class="btn btn-primary btn-block"> <span class="glyphicon glyphicon-plus">&nbsp;</span>Add to wish list  </button> 
				 	<button class="btn btn-danger btn-block">  <span class="glyphicon glyphicon-th-list">&nbsp;</span>View Description  </button>		
		         
				 	
				 </div>
	        </div>
	    
                <?php } //end of while loop ?>



            <!-- ENDOF WOMEN FASHIOON PRODUCT FETCH FROM DB -->    





	</div>



</body>

</html>

