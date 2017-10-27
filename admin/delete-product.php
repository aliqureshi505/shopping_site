<?php 


$product_id = $_GET['id'];
$product_category = $_GET['category'];



$conn = mysqli_connect("localhost", "root", "", "e_shopping");

switch ($product_category) {

		case 'Men':
		# code...
		$delete_query = "DELETE  FROM mens_fashion WHERE id = $product_id";
		$res = mysqli_query($conn, $delete_query);
		
		header("location:manage-products.php?delete=true");
		break;


		case 'Women':
		# code...
		$delete_query = "DELETE  FROM womens_fashion WHERE id = $product_id";
		$res = mysqli_query($conn, $delete_query);
		
		header("location:manage-products.php");

		break;



		case 'Winter Clothes':
		# code...
		$delete_query = "DELETE  FROM 	winter_clothes WHERE id = $product_id";
		$res = mysqli_query($conn, $delete_query);
		
		header("location:manage-products.php");

		break;



		case 'Electronics Gadgets':
		# code...
		$delete_query = "DELETE  FROM electronics WHERE id = $product_id";
		$res = mysqli_query($conn, $delete_query);
		
		header("location:manage-products.php");

		break;



		case 'Shoes ':
		# code...
		$delete_query = "DELETE  FROM shoes WHERE id = $product_id";
		$res = mysqli_query($conn, $delete_query);

		header("location:manage-products.php");

		break;


		case 'Summer Clothes':
		# code...
		$delete_query = "DELETE  FROM summer_cothes WHERE id = $product_id";
		$res = mysqli_query($conn, $delete_query);
	
		header("location:manage-products.php");

		break;
	
	default:
		# code...
		break;
}
?>