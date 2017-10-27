<?php include("../header.php"); ?>
<?php include("view-product-navbar.php"); ?>

<?php 
$conn = mysqli_connect("localhost", "root", "", "e_shopping");

$query = "SELECT * FROM mens_fashion ORDER BY id DESC ";

$res = mysqli_query($conn, $query);

if (mysqli_num_rows($res)==0) {
	 $no_produc = true;
			}
?>


<html>
<head>
	<title></title>
	<style type="text/css">
	.cat-symbol .glyphicon-tags, .glyphicon-chevron-right{color: #F06E11;}
	.cat-symbol label {color: black; font-size: 14px;}
	.cat {color: black;}

	#view-product-table { background-image:url("bg-img-.jpg"); 
						  background-size: cover;
						  background-repeat: no-repeat;}
	#view-product-table .table {background-color: white;  text-align: center;}
	#view-product-table .table th{text-align: center; background-color: orange; color: white; }	

	</style>
</head>
<body>

	<div class="container" >
 
 <div class="row">
	<h5 class="cat-symbol">	&nbsp;	&nbsp; 	&nbsp;<span class="glyphicon glyphicon-tags"></span> &nbsp;<a href="../view-products.php" class="cat"> Select Category </a>  <span class="glyphicon glyphicon-chevron-right"></span>   <label>  <?php   echo $_GET['category'] ?>  </label> </h5>
	<br>
</div>	

</div>
<div class="container-fluid" id="view-product-table">
	<br><br><br>
	<div class="container">

 <?php 

if (isset($no_produc)) {
	# code...
	echo "<h3 style='color:white;'> No product found ! </h3>";
}
					echo "<table class='table table-responsive table-striped table-bordered'";	

					echo "  <tr>    
									 <th>Product ID</th> 
									 <th>Product Title</th> 
									 <th>Product Description</th> 
									 <th>Product Price</th>
									 <th>Product Image</th> 

						     </tr>  ";

					    while ($row = mysqli_fetch_assoc($res)) {

					    	$img_no = $row['image']; // store image name into var from db

						
						echo "<tr>  
										<td>  {$row['id']} </td> 
									    <td>  {$row['title']} </td> 
									    <td>  {$row['description']} </td> 
									    <td>  {$row['price']} </td> 
									   <td> <a href='#'> <img  class='img' src='../products/men fashion/$img_no.jpg' height='50px' alt='No Image found'  /> </a>  </td>
							  </tr>";
						
					}
					
	   					
					echo "</table>";




 ?>


</div>	
</div>		
	

</body>
</html>
<hr>

<?php include("../admin-footer.php"); ?>