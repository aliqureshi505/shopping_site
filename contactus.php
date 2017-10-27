<?php include("navbar.php"); ?>

<html>
<head>
	<title></title>
	<style type="text/css">
	
	#contact-form-input input{ border-radius: 0px; margin-top: 10px;}
	#contact-form-input .glyphicon{color: orange;}
	#contact-form-input textarea{ border-radius: 0px; margin-top: 10px;}
	#contact-form-input .btn{border-radius: 0px; margin-top: 10px;}
	</style>
</head>
<body>
	<div class="container-fluid" >

		<div class="container" >

			<div class="row" id="contact-form-input">

				<div class="col-md-6">

					 <center>  <h3> <span class="glyphicon glyphicon-user"></span> Contact Us</h3>  </center>
					 <hr>

					<div class="col-md-6">
						<input type="text" class="form-control" placeholder="Enter Name">
				    </div>

				    <div class="col-md-6">
						<input type="email" class="form-control" placeholder="Enter Email">
				    </div>


				    <div class="col-md-12">
				    	<textarea rows=10 cols=66 class="form-control" placeholder="Enter Message"></textarea>


				    </div>

				    <center>  <button class="btn btn-danger"><span style="color:white;" class="glyphicon glyphicon-send">&nbsp;</span>Leave Message</button></center>




				</div>


				<div class="col-md-6">
					 <center>  <h3> <span class="glyphicon glyphicon-map-marker"></span> Our Location</h3>  </center>  
					 <hr>

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3448.2173447102336!2d71.50932831472262!3d30.20234358182516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b3427b21b83a7%3A0x98471d1b8ac35242!2sGulshan+Market+Rd%2C+Multan%2C+Pakistan!5e0!3m2!1sen!2s!4v1487650616016" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

						
						<p>
							<br>
							<center>
							<span class="glyphicon glyphicon-earphone">&nbsp;</span><b>Phone No:</b> 0312-1600686  <br>
							<span class="glyphicon glyphicon-map-marker">&nbsp;</span><b>Address: </b> 32/Y, Street 1, New Multan
							<center>
					    </p>
					

				</div>



			 </div>

		</div>

	</div>
	<br><br>
	<hr>
	<?php include("footer.php"); ?>
</body>
</html>