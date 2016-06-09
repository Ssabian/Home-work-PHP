<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
   


	</style>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="../jquery-1.12.4.js"></script>
    <script type="text/javascript" src="../main.js"></script>

</head>
<body>

<section>
	<div class="main">
		<span>Book.Me</span>
	
	<hr>

		<div class="logDiv">
			<h3><bold>Login</bold></h3>
			<div class="error"></div>
			<pre>
			<p class="check"><?php 
     $user=$_POST["user"];
     $pass=$_POST["pass"];
     if(isset($user) && isset($pass)){
	     if (empty($user) || empty($pass)) {
	 	     echo "<script>myFunc('Check your login/password')</script>";
	     } else{
	         if($user=="admin" && $pass=="lalafa"){
	         	session_start();
	         	$_SESSION["username"]=$user;
	         	$_SESSION["password"]=$pass;
	         	echo "<script>myFunc('Welcome')</script>";
		     	header("Location:admin.php");


		      }else{
		       // header("Location:../index.php");
		      	echo "<script>myFunc('Incorrect login/password')</script>";

		     }
	     }
	 } 

     




 ?></p>
			<pre>
			

		</div>

	</div>

</section>
<script type="text/javascript" src="../jquery-1.12.4.js"></script>
<script type="text/javascript" src="../main.js"></script>

</body>
</html>


