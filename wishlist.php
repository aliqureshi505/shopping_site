<?php 


if (!isset($_SESSION['user_name'])) {
	# code...
	echo " <center> <br> <br> <h3> It seems that your are not logged in plz login <a href='login.php' > here  </a>  </h3> </center> ";
    die();

}

$product_id = $_GET['id'];
$category  = $_GET['category'];


$file_name = "mywishlist.txt";

if ( ! file_exists($file_name)) {

echo "no file";	

}

else{

$handle  =  fopen($file_name, 'a');

$wishlist_item = "\n Category = $category  and   Product_id = $product_id";

fwrite($handle, $wishlist_item);


}

?>