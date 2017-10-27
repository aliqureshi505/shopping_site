<?php  include("navbar.php");  ?>

<?php 

if (! isset( $_SESSION['user_name'])  ) {

	echo " <center> <h3> It seems that your are not logged in plz login <a href='login.php' > here  </a>  </h3> </center> ";
    die();

}

?>





<html>
<head>
	<title></title>
	<style type="text/css">
	#buy-product input{border-radius: 0px;}
	#buy-product input {color: red;}
	#buy-product .btn {border-radius: 0px; font-size: 16px;}
	#buy-product h3{color: #C66FE3; margin: 25px;}
	

	</style>
</head>
<body>


	<div class="container" id="view-description">

		<center >  <h4> <span class="glyphicon glyphicon-th" ></span>&nbsp; <b> Buy Product</b>  </h4>  </center>
		<div style="border:2px solid orange;"></div>
		

	 <div class="row" id="buy-product">
	     	<div class="col-md-offset-3 col-md-6 col-md-offset-3">

	     		<center>   <h3> <span class="glyphicon glyphicon-info-sign"></span> Cash On Delivery</h3>  </center>

<form method="post">
  			<input name="name" type="text" class="form-control" placeholder="Enter Name" required  > <br>
  		    </div>	
  		
  			<div class="col-md-offset-3 col-md-6 col-md-offset-3">
  			<input name="email"  type="text" class="form-control" placeholder="Enter Email" required  > <br>
  		    </div>	


  		    <div class="col-md-offset-3 col-md-6 col-md-offset-3">
  			<input name="phone_no" type="text" class="form-control" placeholder="Phone Number 03123456789" required   >   <br>
  		    </div>	


  			<div class="col-md-offset-3 col-md-6 col-md-offset-3">
  			<input name="shipping_address" type="text" class="form-control" placeholder="Shipping Address" required  > <br>
  		    </div>


  		    <div class="col-md-offset-3 col-md-6 col-md-offset-3">
  			 <center>  <button class="btn btn-success"> <span class="glyphicon glyphicon-ok"></span>  &nbsp;Place My Order</button>  </center> <br>
  		    </div>

</form>

</div>
		   <div style="border:2px solid orange;"></div>



	




</body>
</html>

