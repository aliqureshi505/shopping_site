
<?php  include("bs_files.php");  session_start(); ?>



<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="fa/css/font-awesome.css">

<style type="text/css">





@media (max-width: 991px) {
  .navbar-header {
      float: none;
  }
  .navbar-left,.navbar-right {
      float: none !important;
  }
  .navbar-toggle {
      display: block;
  }
  .navbar-collapse {
      border-top: 1px solid transparent;
      box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
  }
  .navbar-fixed-top {
      top: 0;
      border-width: 0 0 1px;
  }
  .navbar-collapse.collapse {
      display: none!important;
  }
  .navbar-nav {
      float: none!important;
      margin-top: 7.5px;
  }
  .navbar-nav>li {
      float: none;
  }
  .navbar-nav>li>a {
      padding-top: 10px;
      padding-bottom: 10px;
  }
  .collapse.in{
      display:block !important;
  }
}














		.nav{height: 53px;}		

		

		#nav-text li a {
			color: white;
			
		}

		#nav-text li a:hover {
			color: black;
			
		}



		#main-navbar{
			background-color: #FFAD33;
			border-bottom: 2px solid transparent;
			
		}

		#main-navbar li:hover  {
			background-color: #FFAD33;

}

		



		#nav-text a:hover  {
			border-bottom: 2px solid white;

			/*line-height: 17px;*/
			color: #000000;
			

		}

		#nav-dropdown li a{   background: #FFAD33;
						  color: white;
						  padding: 12px;}

	    #nav-dropdown li a:hover{  color: black;
	    						text-decoration: none;
	    						border: none; 
	    					}


	       .modal-header { background-color: orange; color: white; font-weight: bold; }
   #login-btn{ background-color: orange; border: orange; font-size: 18px;}	

   .modal-dialog input {border-radius: 0px;}				
   #login-btn {border-radius: 0px; }
   #login-btn:hover{background: transparent; border: 1px solid orange; color: orange;}
   #signup-btn{border-radius: 0px; background-color: orange; color: white;  border: orange; font-size: 18px;}
   #signup-btn:hover{background: transparent; border: 1px solid orange; color: orange;}


		


</style>
</head>
<body>

	
	<!--navbar-->
<nav>
		<div class="navbar navbar-default   navbar-fixed-top" id="main-navbar">
			<div class="container">
				<div class="navbar-header">




                <!--  navbar collpase button -->

                	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span style="color:white; "  class="glyphicon glyphicon-chevron-down" ></span>
			        
			        </button>

                <!--  end of navbar collapse button -->	

					<a href="" class="navbar-brand" style="color:white;"><span class="glyphicon glyphicon-shopping-cart"> E-Shopping</span></a>
		
				</div>


						


				<div class="collapse navbar-collapse  " id="myNavbar">    <!--   this div is just only for collapsing navbar-->




						<ul id="nav-text" class="nav navbar-nav navbar-right" id="nav-items"  >
							<li >
							         

							          <a href="index.php">

							 <span  class="glyphicon glyphicon-home"></span>  &nbsp;Home      </a>

								




							</li>

							


							<li><a href="" class="dropdown-toggle" data-toggle="dropdown" > <span class="glyphicon glyphicon-flash"></span>  Fashion  <span class="caret"></span> </a>


								<ul class="dropdown-menu" id="nav-dropdown">
						          <li><a href="Men's fashion.php"><span  class="glyphicon glyphicon-chevron-right"></span>&nbsp;Men's Fashion</a></li>
						          <li><a href="women-fasion.php"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Women's Fashion</a></li>
						          <li><a href="shoes-variety.php"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Shoes Collection</a></li>
						          
       						    </ul>



							</li>




							<li><a href="" class="dropdown-toggle" data-toggle="dropdown" > <span class="fa fa-male"></span> &nbsp; Clothes <span class="caret"></span>    </a>


								<ul class="dropdown-menu" id="nav-dropdown">
						          <li><a href="winter-collection.php"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Winter Collection</a></li>
						          <li><a href="summer-collection.php"><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Summer Collection</a></li>

						          
       						    </ul>




							</li>
							<li><a href="electronics.php"> <span  class="glyphicon glyphicon-menu-hamburger"> </span> &nbsp;Electronics   </a></li>
							
							<li><a href="aboutus.php"> <span class="glyphicon glyphicon-heart"></span> About Us   </a></li>

							<li><a href="contactus.php"> <span class="glyphicon glyphicon-envelope"></span> Contact Us   </a></li>



							<li>
								
									<?php  if(isset($_SESSION['user_name'])){
												$user_name = $_SESSION['user_name'];
										    echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'  > <span class='glyphicon glyphicon-user' > $user_name<span class='caret' ></span> </span> </a>";
										     echo "
										      <ul class='dropdown-menu' id='nav-dropdown'>
						          				<li><a href='winter-collection.php'><span class='glyphicon glyphicon-th-list'></span> &nbsp;Wish-List Items</a></li>
						          				<li><a href='logout.php'><span class='glyphicon glyphicon-off'></span>&nbsp;&nbsp;Logout Me</a></li>
						          			  </ul>	";

									   }

									 
										else{
											echo " <a href='login.php' > <span class='glyphicon glyphicon-log-in' >  Login </span> </a>";
										}
									?>
								   <!-- <span class="glyphicon glyphicon-log-in"   > </span> Login   
 -->
							</li>



							<li><a href="sign-up.php" > <span class="glyphicon glyphicon-plus-sign"> </span> &nbsp; Sign-up   </a></li>

						</ul>

			     </div>   <!--  end of div for collapsing navbar-->

			</div>
        </div>
    </nav>
        <br><br><br><br>


	<!--end of navbar-->





</body>
</html>

