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
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<?php
if(isset($_POST['submit']))
{
$servername="localhost";
$username="root";
$password="";
$dbname="phpproject";
$uname=$_POST['uname'];
$pswd=$_POST['pswd'];
//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
  die("Connection Failed : ".mysqli_error());
}
$sql="SELECT UserName,Password from php where UserName='$uname' AND Password='$pswd'";
$run=mysqli_query($conn,$sql);
$row=mysqli_num_rows($run);
if($row<1)
{
	?>
	<script>
		alert('Not found record!!!! Register Now');
		window.location="regform.php";
	</script>
	<?php
}
else{
	header('location:homee.php');
}
mysqli_close($conn);
}
/*if(mysqli_query($conn,$sql) ){
	header('location:homee.php');
}
else{
	echo "error found".mysqli_error($conn);
}
mysqli_close($conn);
}
*/
?>
<label>UserName</label><input type="text" name="uname" required><br><br>
<label>Password</label><input type="password" name="pswd" required><br><br>
<label><input type="reset" name="reset"></label>
<label><input type="submit" name="submit"></label>
<br>
<p style="color:red;">Don't have account!!!!<a href="regform.php"><b> Register Here</b></a></p>
</form>
</body>
</html>