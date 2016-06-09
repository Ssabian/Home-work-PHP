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
	<script type="text/javascript" src="../jquery-1.12.4.js"></script>
    <script type="text/javascript" src="../main.js"></script>

</head>
<body>
<section>
	<div class="main">
		<span><b>Book.Me</b></span>
	
	<hr>

		<div class="logDiv">
			<h3 class="log"><bold>Login</bold></h3>
			
			
			<form action="admin/check.php" method="post">
				<input type="text" name="user" placeholder="example@mail">
					
				<input type="password"  name="pass" placeholder="password">
				<input class="btn" type="submit" value="submit">
				
			</form>
            
		</div>
                <div class="hint"></div>
                <div class="triqon"></div>
	</div>

</section>
<script type="text/javascript" src="../jquery-1.12.4.js"></script>
<script type="text/javascript" src="../main.js"></script>

</body>
</html>
