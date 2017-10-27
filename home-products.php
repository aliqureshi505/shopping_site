<?php  include("bs_files.php");?>
<html>
<head>
	<title></title>

	<style type="text/css">
	
	#btns .btn{ margin-top: 5px; border-radius: 0px; }
	.title{ padding: 5px;}
	.title, .price {text-align: center;}
	.price{padding: 5px; color: #F08930;}

	#view-more-btn{background-color: #AA60BF; border: 3px solid #AA60BF; color: white;}

	#view-more-btn:hover{background-color: transparent; ; color: #AA60BF; }

	.container .thumbnail{border: 1px solid #ACAFB0;}
	#btns a{text-decoration: none;}
	#btns a:hover{text-decoration: none;}

	#btns .col-md-3{margin-top: 25px; }
	#btns h4{font-weight: bold;}


	


	</style>
</head>

</head>
<body>

<div class="container" id="btns">
	
		





		

			
		   <center>  <h4>  <span><img src="assets/Men-fashion.png" height="40px"></span> &nbsp; Men's Collection: </h4> <center>
		<div style="border:1px solid orange; width:100%;"></div>
		<br> 










			<!-- MENS FASHIOON PRODUCT FETCH FROM DB -->

			<?php 


			$conn = mysqli_connect("localhost", "root", "", "e_shopping");
			$fetch_women_fashion = "SELECT * FROM 	mens_fashion ORDER BY id DESC LIMIT 0,8 ";
			$category = 'women-fashion'; //  used in view decriptiom query string
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
				 <div class="thumbnail"> 	
				 	<h4 class="title"><?php  echo  "cat:mens" ?></h4>
				 			<?php  echo " <img class='img-responsive' src='admin/products/men fashion/{$image_no}.jpg'   alt='image-not-found' />" ?>
				 	<h4 class="price"><?php  echo "prd_id:".$id; ?></h4>		
				 	<button class="btn btn-success btn-block"> <span class="glyphicon glyphicon-shopping-cart">&nbsp;</span>Buy Product  </button>
				 	<button class="btn btn-primary btn-block"> <span class="glyphicon glyphicon-plus">&nbsp;</span>Add to wish list  </button> 
				 <a href="view-description.php?category=mens-fashion&prdt_id=<?php echo $id; ?> ">	
				 	<button class="btn btn-danger btn-block">  <span class="glyphicon glyphicon-th-list">&nbsp;</span>View Description  </button>		
				 </a>			         
				 	
				 </div>
	        </div>
	    
                <?php } //end of while loop ?>



            <!-- END OF MENS FASHIOON PRODUCT FETCH FROM DB -->  































		 	<button class="btn btn-info btn-lg" id="view-more-btn">View More Products</button>















		
					<br> <br> <br>
			   <center>  <h4>  <span><img src="assets/womens-fashion.png" height="40px"></span>   Women's Collection: </h4> <center>
			<div style="border:1px solid orange; width:100%;"></div>
			<br> 




			<!-- WOMEN FASHIOON PRODUCT FETCH FROM DB -->

			<?php 


			$conn = mysqli_connect("localhost", "root", "", "e_shopping");
			$fetch_women_fashion = "SELECT * FROM womens_fashion ORDER BY id DESC LIMIT 0,8 ";
			$category = 'womes-fashion';
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
				 <div class="thumbnail"> 	
				 	<h4 class="title"><?php  echo  $image_no; ?></h4>
				 			<?php  echo " <img src='admin/products/women fashion/{$image_no}.jpg '   alt='image-not-found' />" ?>
				 	<h4 class="price"><?php  echo  $title; ?></h4>		
				 	<button class="btn btn-success btn-block"> <span class="glyphicon glyphicon-shopping-cart">&nbsp;</span>Buy Product  </button>
				 	<button class="btn btn-primary btn-block"> <span class="glyphicon glyphicon-plus">&nbsp;</span>Add to wish list  </button> 
				 	<a href="view-description.php?category=women-fashion&prdt_id=<?php echo $id; ?> ">
				 	<button class="btn btn-danger btn-block">  <span class="glyphicon glyphicon-th-list">&nbsp;</span>View Description  </button>		
		            </a>
				 	
				 </div>
	        </div>
	    
                <?php } //end of while loop ?>



            <!-- ENDOF WOMEN FASHIOON PRODUCT FETCH FROM DB -->    


					<button class="btn btn-info btn-lg" id="view-more-btn">View More Products</button>   















		

		<br><br> <br>
		
		   <center>  <h4> <span><img src="assets/electronics.png" height="40px"></span> &nbsp;  Electronics Appliances: </h4> <center>
		<div style="border:1px solid orange; width:100%;"></div>
		<br> 






			<!-- electronics  PRODUCT FETCH FROM DB -->

			<?php 


			$conn = mysqli_connect("localhost", "root", "", "e_shopping");

			$fetch_women_fashion = "SELECT * FROM 	electronics ORDER BY id DESC LIMIT 0,8 ";
			$category = 'electronics';
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
				 <div class="thumbnail"> 	
				 	<h4 class="title"><?php  echo  $title; ?></h4>
				 	<?php  echo " <img class='img-responsive' src='admin/products/electronics/{$image_no}.jpg'   alt='image-not-found' />" ?>
				 	
				 	<h4 class="price"><?php  echo  $title; ?></h4>		
				 	<button class="btn btn-success btn-block"> <span class="glyphicon glyphicon-shopping-cart">&nbsp;</span>Buy Product  </button>
				 	<button class="btn btn-primary btn-block"> <span class="glyphicon glyphicon-plus">&nbsp;</span>Add to wish list  </button> 
				 	<a href="view-description.php?category=electronics&prdt_id=<?php echo $id; ?> ">
				 	<button class="btn btn-danger btn-block">  <span class="glyphicon glyphicon-th-list">&nbsp;</span>View Description  </button>		
		         	</a>
				 	
				 </div>
	        </div>

	    
                <?php } //end of while loop ?>



            <!-- END OF  electronics PRODUCT FETCH FROM DB -->  




                                













					<button id="view-more-btn" class="btn btn-info btn-lg" >View More Products</button>


  
  </div>










</body>
</html>