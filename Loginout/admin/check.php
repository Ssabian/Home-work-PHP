<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
   


	</style>
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
			<p class="check"><?php 
     $user=$_POST["user"];
     $pass=$_POST["pass"];
     if(isset($user) && isset($pass)){
	     if (empty($user) || empty($pass)) {
	 	     echo "<b>Check your login/password</b>";
	     } else{
	         if($user=="admin" && $pass=="lalafa"){
	         	session_start();
	         	$_SESSION["username"]=$user;
	         	$_SESSION["password"]=$pass;
		     	header("Location:admin.php");

		      }else{
		       header("Location:../index.php");

		     }
	     }
	 } 

     




 ?></p>
			<pre>
			

		</div>

	</div>

</section>
</body>
</html>


