<?php 
session_start();
if(isset($_SESSION["username"])){
	// echo "succest";
}else{
	// echo "error";
	header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<section>
	<div class="main">
		<span>Book.Me</span>
	
	<hr>

		<div class="logDiv">
			<h3><bold>Login</bold></h3>
			
			<div class="wel"><b>Welcome</b></div>
			
			<a href="logout.php"><button class="lbtn">LogOUT</button> </a>
		</div>

	</div>

</section>
</body>
</html>
