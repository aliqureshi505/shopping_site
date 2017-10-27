<?php  include("bs_files.php");  ?>
<html>
<head>
	<title></title>
	<style type="text/css">

	#admin-nav li a { color: #D95427; font-weight: bold; border-bottom: 2px solid transparent; }

	#admin-nav li a:hover {border-bottom: 2px solid #D95427; color: black; }
	</style>
</head>
<body>

	<div class="navbar navbar-default  navbar-vertical" >
			<div class="container" id="admin-nav">
				<div class="navbar-header">




                <!--  navbar collpase button -->

                	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
			        </button>

                <!--  end of navbar collapse button -->	





				<div class="collapse navbar-collapse" id="myNavbar">    <!--   this div is just only for collapsing navbar-->

					

					
						<ul class="nav navbar-nav"  >
							
							<li><a href="../index.php"> &nbsp;&nbsp;&nbsp; <span class="glyphicon glyphicon-home "> </span>  &nbsp; My Home &nbsp;&nbsp;&nbsp;</a></li>
							<li><a href="../view-products.php"> <span class="glyphicon glyphicon-th"> </span>   &nbsp;View Products &nbsp;&nbsp;&nbsp;</a></li>
							<li><a href="../add-products.php"> <span class="glyphicon glyphicon-plus"></span>  &nbsp;Add Products  &nbsp;&nbsp;&nbsp;</a></li>
							<li><a href="../manage-products.php"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Manage Products &nbsp;&nbsp;&nbsp; </a></li>
							<li><a href="../update-info.php"> <span class="glyphicon glyphicon-user"></span> &nbsp; Update Info &nbsp;&nbsp;&nbsp; </a></li>


							<li><a href="logout.php"> <span class="glyphicon glyphicon-off"></span>  &nbsp;Logout </a></li>
							<li><a href="contact-dev.php"> <span class="glyphicon glyphicon-envelope"></span>  &nbsp;Contact Developer </a></li>


						</ul>



	

																																											

			     </div>   <!--  end of div for collapsing navbar-->

			    

			   

			</div>
        </div>
      </div>  

        



</body>
</html>