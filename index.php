<?php  include("navbar.php");  ?>
<html>
<head>
	<title></title>
	<style type="text/css">
	#main-jumbo{background-image: url("assets/test2.jpg");
				background-repeat: no-repeat;
				background-size: cover;}

	




	#main-jumbo p{font-size: 34px; color: white; letter-spacing: 3px;}

	#main-jumbo .btn{ border-radius: 0px; margin-left: 5px; margin-top: 5px;}
	#find-color .glyphicon{color: red; letter-spacing: 1px;}

	#sel-cat{padding: 20px;}
	#sel-cat a{color: black; text-decoration: none;}
	#sel-cat a:hover{color: red;}
	#sel-cat{background-image: url("assets/sel-cat-bg01.jpg");
			 background-size: cover;
			 background-repeat: no-repeat;	}

	#jumbo-btns-a {background-color: transparent; border: 3px solid #F27EC1; color: #F27EC1;  font-weight: bold;}
	#jumbo-btns-a:hover {background-color: #F27EC1; color: white;}

	#jumbo-btns-b {background-color: transparent; border: 3px solid #E7ED40; color: #E7ED40;  font-weight: bold;}
	#jumbo-btns-b:hover {background-color: #E7ED40 ; color: white;}

	#jumbo-btns-c {background-color: transparent; border: 3px solid #3FE8E8; color: #3FE8E8;  font-weight: bold;}
	#jumbo-btns-c:hover {background-color: #3FE8E8 ; color: white;}

	#jumbo-btns-d {background-color: transparent; border: 3px solid #63E83F; color: #63E83F;  font-weight: bold;}
	#jumbo-btns-d:hover {background-color: #63E83F ; color: white;}
	

			
	</style>
</head>
<body>


	<div class="jumbotron" id="main-jumbo">
		
		<div class="container">

			<center>
				<br><br>

				<p>Whoever said money can't buy hapiness
					simply didn't know where to go shopping</p>
				<br><br> 


				<br>
				
				<br>



				<div class="row">

					
					<a href="electronics.php"><button id="jumbo-btns-b" class="btn btn-success btn-lg">Electronics</button>  </a>

					<a href="women-fasion.php"><button id="jumbo-btns-a" class="btn btn-primary btn-lg">&nbsp;Fashion &nbsp;</button>  </a>

					<a href="winter-collection.php"><button id="jumbo-btns-c" class="btn btn-danger btn-lg">&nbsp;&nbsp;Clothes &nbsp;</button>  </a>

					<a href="shoes-variety.php"><button id="jumbo-btns-d" class="btn btn-warning btn-lg">&nbsp;&nbsp;Shoes &nbsp;</button>  </a>
			    
			    </div>





				<BR><BR><BR> <BR><BR><BR> 
			</center>

		</div>

	</div>

<div  id="sel-cat">
<div  class="container "> 	<h3 id="find-color">  <span class="glyphicon glyphicon-th"> </span>   Select Category:   </h3>   </div>




   <center>  <h4> <a href=""> <span><img src="assets/womens-fashion.png" height="50px"></span>&nbsp;  Women's Fashion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-chevron-right"></span>   </a>  </h4> <div style="border:2px solid orange; width:30%"> </div>   </center> <br>

   <center>   <h4>  <a href=""> <span><img src="assets/Men-fashion.png" height="50px"></span> &nbsp;  Men's Fashion &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-right"></span> </a>  </h4> <div style="border:2px solid orange; width:30%"> </div>   </center> <br>

   <center>  <h4>  <a href=""> <span><img src="assets/electronics.png" height="50px"></span> &nbsp;  Electronics Gadgets  &nbsp;<span class="glyphicon glyphicon-chevron-right"></span> </a> </h4> <div style="border:2px solid orange; width:30%"> </div>   </center> <br>

   <center>  <h4> <a href="">  <span><img src="assets/clothes-.png" height="50px"></span> &nbsp;  Cothes Collection   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-right"></span> </a> </h4> <div style="border:2px solid orange; width:30%"> </div>   </center> <br>

   <center>     <h4> <a href="">  <span><img src="assets/shoes.png" height="50px"></span> &nbsp;  Shoes Variety  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-right"></span> </a> </h4> <div style="border:2px solid orange; width:30%"> </div>   </center> <br>

</div>

<br><br>

<?php include("home-products.php"); ?>

<br><br><div style="border:1px solid #CC71EB; width:100%;"></div><br>
<?php include("footer.php"); ?>


</body>
</html>

