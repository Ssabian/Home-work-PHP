<?php 
 session_start();
 if(isset($_SESSION["username"])){
 	unset($_SESSION["username"]);
    unset($_SESSION["password"]);
};
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
   


	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<section>
	<div class="main">
		<span>Book.Me</span>
	
	<hr>

		<div class="logDiv">
			<h3><bold>Login</bold></h3>
			<p></p>
			<pre>
			<form action="admin/check.php" method="post">
				<input type="text" name="user" placeholder="example@mail">
					
				<input type="password"  name="pass" placeholder="password">
				<input type="submit" value="submit">
				
			</form>
            
		</div>
                <div class="hint"></div>
                <div class="triqon"></div>
	</div>

</section>
</body>
</html>
