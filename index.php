<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<style type="text/css">
       *{
		margin:0%;
		padding:0%;
	   }
	   body{
		background:#f0f;
	   }
	   .log{
		margin-top:10;
		width:20%;
		height:20%;
		border-radius:10Px;
		background-color:#fff;
	   }
	   .logg{
		margin-top:10;

	   }
		</style>
</head>
<body>
	<br>
	<br>


	<div class="logg"> <div class="log">
		<span class="loggg"><a href="logout.php">Logout</a></span>
	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</div></div>

	<h1 align="center">welcome,
		<br> but what are you looking for here </h1>

</body>
</html>