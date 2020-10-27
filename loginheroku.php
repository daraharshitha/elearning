<?php
include("home1.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN FORM</title>
	<style type="text/css">		
		input{
		 	padding: 5px;
		 	border-radius: 2px;
		 	font-size:12px;
		 }
		 label{
		 	width:100px;
		 	display: inline-block;
		 }

	</style>
</head>
<body>
<p>LOGIN TO YOUR ACCOUNT !!!</p>
<hr>
<form method="post" action="homee.php">
<label>UserName</label><input type="text" name="uname" required><br><br>
<label>Password</label><input type="password" name="pswd" required><br><br>
<label><input type="reset" name="reset"></label>
<label><input type="submit" name="submit"></label>
<br>
<p style="color:red;">Don't have account!!!!<a href="regform.php"><b> Register Here</b></a></p>
</form>
</body>
</html>