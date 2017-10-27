<?php 



if (isset($_POST['submit'])) {
	
	$subject = $_POST['subject'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$header = "From:".$email;

	 if( mail("ali-developer@gmail.com", $subject, $message, $header) ){
	 	echo "<h3> Email sent we will contact you soon  </h3>";
	 }
	 else{
	 	echo "<h3> Email not send try again  </h3>";
	 }
}

?>
<html>
<head>
	<title></title>
</head>
<body>

	<center>
		<form action="#" method="post"> 

		<label>Enter Name:</label>  <br>
		<input type="text"required name="name" > <br><br>

		<label>Enter Email:</label> <br>
		<input type="email"required name="email" > <br><br>

		<label>Enter Name:</label>  <br>
		<input type="text"required name="subject" > <br><br>

		<label>Enter Message:</label> <br>

		<textarea rows=8 cols=35  name="message" required ></textarea> <br><br>


		<button name="submit">Send Message</button>

	</form>

	</center>

</body>
</html>