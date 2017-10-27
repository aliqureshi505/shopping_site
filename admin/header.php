<?php  include("bs_files.php"); 
session_start();
  ?>

<html>
<head>
	<title></title>
	<style type="text/css">

	*{margin: 0px; padding: 0px; }

	#top-admin h3{background-color: #7CC577; padding: 15px; color: white;}
	</style>
</head>
<body>
	
	<div class="container-fluid" id="top-admin" >
	
<div class="row">
	<center>	<h3> <span class="glyphicon glyphicon-ok"></span> Welcome : <?php  echo $_SESSION['admin_name']; ?></h3>  </center>
</div>
	
     </div>
</body>
</html>