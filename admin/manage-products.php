<?php include("header.php"); ?>
<?php include("admin-navbar.php"); ?>




<?php 
// CODING FOR MANAGE PRODUCT ACCORDING TO THIER CATEGORY AND ALSO MADE CONNECTION AND FETCH RESULT FROM DB

if (isset($_POST['manage-product-btn'])) {

	$conn = mysqli_connect("localhost", "root", "", "e_shopping");

	 $category_name = $_POST['category'];

	switch ($_POST['category']) {

			

			case 'Men\'s Fashion':
			# code...
			
			$query = "SELECT * FROM mens_fashion ORDER BY id DESC ";
			$res  = mysqli_query($conn, $query);
			if (mysqli_num_rows($res)==0) {
				  $no_produc = true;
			}

				$category_is_selected = true;

			// while ($row = mysqli_fetch_assoc($res)) {
			// 		 $product_id = $row['id'];
			// 		 $product_title = $row['title'];
			// 		 $product_desc = $row['description'];
			// 		 $product_price = $row['price'];
			// 		 $product_img = $row['image'];
			// }

			break;



			case 'Women\'s Fashion':
			# code...
			$query = "SELECT * FROM womens_fashion ORDER BY id DESC ";
			$res  = mysqli_query($conn, $query);
			if (mysqli_num_rows($res)==0) {
				  $no_produc = true;
			}

				$category_is_selected = true;
			break;



			case 'Winter Clothes':
			# code...
			$query = "SELECT * FROM winter_clothes ORDER BY id DESC ";
			$res  = mysqli_query($conn, $query);
			if (mysqli_num_rows($res)==0) {
				  $no_produc = true;
			}

				$category_is_selected = true;
			break;



			case 'Summer Clothes':
			# code...
			$query = "SELECT * FROM summer_cothes ORDER BY id DESC ";
			$res  = mysqli_query($conn, $query);
			if (mysqli_num_rows($res)==0) {
				  $no_produc = true;
			}

				$category_is_selected = true;
			break;



			case 'Electronics Gadgets':
			# code...
			$query = "SELECT * FROM electronics ORDER BY id DESC ";
			$res  = mysqli_query($conn, $query);
			if (mysqli_num_rows($res)==0) {
				  $no_produc = true;
			}

				$category_is_selected = true;
			break;



			case 'Shoes':
			# code...
			$query = "SELECT * FROM shoes ORDER BY id DESC ";
			$res  = mysqli_query($conn, $query);
			if (mysqli_num_rows($res)==0) {
				  $no_produc = true;
			}

				$category_is_selected = true;
			break;


		
		default:
			# code...
			echo "No item is selected";
			break;
	}
	

}




?>












<html>
<head>
	<title></title>

	<style type="text/css">
	.cat-symbol .glyphicon-tags, .glyphicon-chevron-right{color: #F06E11;}
	.cat-symbol label {color: black; font-size: 14px;}
	.cat {color: black;}

	#view-product-table { background-image:url("bg-img-1.jpg"); 
						  background-size: cover;
						  background-repeat: no-repeat;}
	#view-product-table .table {background-color: white;  text-align: center;  border: 2px solid #F06E11;}
	#view-product-table .table th{text-align: center; background-color: orange; color: white; }	

	#select-category{ font-size: 16px;}		
	#view-product-bg select{border-radius: 50px; border: 3px solid #F06E11; padding: 10px; text-align: center; color: black; font-weight: bold;}

	#mng-prdt {border-radius: 50px; background-color: orange; color: white; padding: 8px; font-size: 16px; border: transparent;} 	
	#mng-product-btn{border-radius: 30px; font-size: 18px; }
	#mng-prdt:hover {cursor: pointer; }

	#action-btn{border-radius: 0px;}

	</style>


</head>
<body>

	




					<center>
			<br>
			<form method="post">
		<label id="select-category" > Select Category: &nbsp;&nbsp;  </label>
		
		<select name="category" id="mng-prdt"> 

			<option > Men's Fashion   </option>
			<option > Women's Fashion </option>
			<option > Winter Clothes  </option>
			<option > Summer Clothes  </option>
			<option > Electronics Gadgets </option>
			<option > Shoes			 </option>

		</select>

		<br> <br>
		<button class="btn btn-primary btn-md" id="mng-product-btn" name="manage-product-btn">Go to manage product</button>
		<br><br>
		     </form>
	</center>






	
	
<div class="container-fluid" id="view-product-table">
	<br><br><br>
	<div class="container">
		
			<?php 


if (isset($no_produc)) {
	# code...
	echo "<h3 style='color:white'> No product Found</h3>";
}


if (isset($category_name)) {
	# code...

	echo "<h3 style='color:white; text-decoration:underline;'>" .$category_name. "</h3>";
					
}



					echo "<table class='table table-responsive table-striped table-bordered'";	

					echo "  <tr>    
									 <th>Product ID</th> 
									 <th>Product Title</th> 
									 <th>Product Description</th> 
									 <th>Product Price</th>
									 <th>Product Image</th> 
									 <th>Action</th> 

						     </tr>  ";
				   
				   
if(isset($category_is_selected)){ // if cat is selected then show redults


					    while ($row = mysqli_fetch_assoc($res)) {

						
						echo "<tr>  
										<td>   {$row['id']} </td> 
									    <td>  {$row['title']} </td> 
									    <td>  {$row['description']} </td> 
									    <td>  {$row['price']} </td>
									    <td>  {$row['price']} </td> 



									    <td>   


									    		<a href='delete-product.php?id={$row['id']}category='> <button id='action-btn' class='btn btn-primary btn-block'> <span class='glyphicon glyphicon-pencil'>  Edit </button> </a> 
									           
									    		&nbsp;
									            <a href=''> <button id='action-btn' class='btn btn-danger btn-block'> <span class='glyphicon glyphicon-trash'>  Delete   </button>   </a>
									    


									    </td>  
							  </tr>";
						
					}
					
	   					
					echo "</table>";
}				





			?>	


















</div>

</div>

</body>
</html>
<hr>
