<?php
include_once("home1.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	#dd1{
		height:500px;
		width:100%;
	}
	aside{
		float:left;
		width:30%;
		background-color: #f1f2f6;
		height:500px;
		color:#273c75;
		font-size: 30px;
		padding:50px 50px 50px 50px;
	}
	#foot{
		background-color: #1289A7;
		color:white;
		font-size:15px;
		height:40px;
		text-align: center;
		padding:10px;
	}
.mySlides {display:none;}
</style>
</head>
<body>
	<div id="dd1">
		<aside>
			<img src="gg1.gif" height="200" width="350" alt="gif"><br>
			VISIT THE <b>E-LEARNING PORTAL</b>
		</aside>
		<article>
			<!--<img src="p1.jpg" alt="pic" height="250px" width="60%"><br>
			<img src="p3.jpg" alt="pic" height="250px" width="20%">
			<img src="p2.jpg" alt="pic" height="250px" width="20%">
			<img src="p4.png" alt="pic" height="250px" width="15%">-->
  			<img class="mySlides" src="1.jpg" style="width:70%;height:500px;">
 			<img class="mySlides" src="2.jpg" style="width:70%; height:500px;">
 			<img class="mySlides" src="3.jpg" style="width:70%; height:500px;">
 			<img class="mySlides" src="4.png" style="width:70%; height:500px;">
 			<img class="mySlides" src="4.jpg" style="width:70%; height:500px;">
 			<img class="mySlides" src="5.png" style="width:70%; height:500px;">
 			<img class="mySlides" src="6.jpg" style="width:70%; height:500px;">
		</article>
	</div>
	<br>
	<footer id="foot"><marquee>LEARN FROM ANYWHERE AT ANYTIME AS PER YOUR CONVINIENCE</marquee> </footer>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>