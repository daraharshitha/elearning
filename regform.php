<?php
include("home1.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
<style type="text/css">
		.error
		 {color: red;}
		 input{
		 	padding: 5px;
		 	border-radius: 2px;
		 	font-size:12px;
		 }
		 label{
		 	width:150px;
		 	display: inline-block;
		 }
     input[type="text"],[type="password"],[type="email"]{
      width:250px;
      height:30px;
     }
	#as{
	float:right;
	}
</style>

</head>
<body>
	<p>REGISTER HERE !!! <span id="as">Already have account!!! <a href="loginheroku.php">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
<hr>
<form id="ff" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<?php
//database connection to add data into db
if(!empty($_POST["name"]) && !empty($_POST["uname"]) && !empty($_POST["pswd"]) && !empty($_POST["cpswd"]) && !empty($_POST["email"]) && !empty($_POST["m_num"]) && !empty($_POST["gender"]) && !empty($_POST["dob"]) && !empty($_POST["addr"]) && !empty($_POST["city"]) && !empty($_POST["state"]) && !empty($_POST["country"]) && $_POST["pswd"] == $_POST["cpswd"]) 
//password should contain atleast one capital one small one digit and any characters of length 8(special characters are optional)
 //preg_match("/^[A-Z]{1}[a-z]{1,6}[0-9]{1,2}[\w]{1,2}$/",$_POST["pswd"]))
{
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
$sql="INSERT INTO php(UserName,Password) VALUES('$uname','$pswd')";
if(!mysqli_query($conn,$sql))
{
  echo "error in adding data : ".mysqli_error($conn);
}
else{
  ?>
  <script>
    alert('Registered successfully......Login Now!!!!!');
    window.location="loginform.php";
  </script>
  <?php
}
mysqli_close($conn);
}
}
?>
	<label>Full Name: </label>  <input type="text" name="name" required><br><br>
  <label>UserName: </label>  <input type="text" name="uname" required><br><br>
  <label>Password: </label>  <input type="password" name="pswd" required><br><br>
  <label>Confirm Password: </label>  <input type="password" name="cpswd"><br><br>
	<label>Mobile:</label>   <input type="text" name="m_num"><br><br>
	<label> Email: </label>  <input type="email" name="email" required><br><br>
	 <label>Gender:</label>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
	<label>Date of Birth:</label>  <input type="date" name="dob"><br><br>
	<label>Address:</label> <textarea rows="3" cols="30" name="addr"></textarea><br><br>
	<label>City: </label> <input type="text" name="city"><br><br>
	<label>State:</label>  <input type="text" name="state"><br><br>
	<label>Country:</label> <input type="text" name="country"><br><br>
	<label><input type="reset" name="reset"></label>
	<label><input type="submit" name="submit"></label>
</form>

</body>
</html>
