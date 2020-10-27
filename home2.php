
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>E-learning</title>
<style type="text/css">
	*{
		box-sizing: border-box;
	}
	#d1{
		background-color: #1289A7;
		color:white;
		font-weight: bold;
		font-family: serif;
		padding:30px;
		font-size: 20px;
	}
	#h1{
		list-style-type: none;
		background-color: #1289A7;
		overflow:hidden;
		padding:0;
		margin-top:2px;
		width:100%;
	}
	li a {
		text-decoration: none;
		color:white;
		display:block;
		border:1px solid white;
		height:35px;
		width:200px;
		padding:6px;
		
	}
	.li{
		float:left;
		text-align: center;
	}
	li a:hover{
		background-color: #33d9b2;
	}
</style>
</head>
<body>
	<div id="d1">E-LEARNING MANAGEMENT SYSTEM</div>
<nav>
	<ul id="h1">
		<li class="li"><a href="homee.php">HOME</a></li>
		<li class="li"><a href="aboutt.php">ABOUT US</a></li>
		<li class="li"><a href="allcourses2.php">AVAILABLE COURSES</a></li>		
		<li class="li"><a href="report.php">REPORT</a></li>
		<li class="li"><a href="quiz.php">QUIZ</a></li>
		<li class="li" onclick="logout()"><a href="#">LOGOUT</a></li>
	</ul>	
</nav>
</body>
<script type="text/javascript">
	function logout()
	{
		alert("Logged Out Successfully!!!");
		window.location="index.php";
	}
</script>
</html>