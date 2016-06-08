<?php 
session_start();
if(isset($_SESSION["username"])){
	echo "succest";
}else{
	echo "error";
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
			<pre>
			<p>WELCOME</p>
			<pre>
			<a href="logout.php"><button>LogOUT</button> </a>
		</div>

	</div>

</section>
</body>
</html>
