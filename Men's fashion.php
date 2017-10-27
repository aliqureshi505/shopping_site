<?php  include("navbar.php");   ?>
<html>
<head>
	<title></title>
	<style type="text/css">

	#cat a{font-size: 18px;}
	#btns .btn{ margin-top: 5px; border-radius: 0px; }
	.title, .price {text-align: center;}
	#btns{margin-top: 25px; }
	#btns a{text-decoration: none;}
	#btns a:hover{text-decoration: none;}

	</style>
</head>
<body>

	<div class="container" id="cat">
		
		
   <center>  <h4> <span><img src="assets/Men-fashion.png" height="40px"></span> &nbsp; Men's Fashion </h4> <center>
		<div style="border:1px solid orange; width:100%;"></div>
		<br>




			<!-- WOMEN FASHIOON PRODUCT FETCH FROM DB -->

			<?php 


			$conn = mysqli_connect("localhost", "root", "", "e_shopping");
			$fetch_women_fashion = "SELECT * FROM mens_fashion ORDER BY id DESC ";
			$res = mysqli_query($conn, $fetch_women_fashion);

			while ($row = mysqli_fetch_assoc($res)) {  ?>
			
			<?php 
				// show record as front end 
				 $id = $row['id'];
				 $title = $row['title'];
				 $description = $row['description'];
				 $price = $row['price'];
				 $image_no = $row['image'];

				?>


						
						


			<div class=" col-md-3 "> 
				 <div class="thumbnail" id="btns"> 	
				 	<h4 class="title"><?php  echo  $image_no; ?></h4>
				 			<?php  echo " <img src='admin/products/men fashion/{$image_no}.jpg'   alt='image-not-found' />" ?>
				 	<h4 class="price"><?php  echo  $title; ?></h4>		
				 
				

				 		<button class="btn btn-success btn-block"> <span class="glyphicon glyphicon-shopping-cart">&nbsp;</span>
				 			Buy Product  </button>
				 

				 	<button class="btn btn-primary btn-block"> <span class="glyphicon glyphicon-plus">&nbsp;</span>Add to wish list  </button> 
				 	<a href="view-description.php?category=mens-fashion&prdt_id=<?php echo $id; ?> ">
				 	<button class="btn btn-danger btn-block">  <span class="glyphicon glyphicon-th-list">&nbsp;</span>View Description  </button>		
		         	</a>
				 	
				 </div>
	        </div>
	    
                <?php } //end of while loop ?>



            <!-- ENDOF WOMEN FASHIOON PRODUCT FETCH FROM DB -->    





	</div>



</body>

</html>

