<?php
include("home2.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ALL COURSES</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	#srch{
		width:95%;
		height:35px;
		position:absolute;
		padding:10px;
		border: 1px solid grey;
	}
	.icon{
		padding: 9px; 
        width: 40px;
        border: 1px solid grey;
        background-color: grey;
	}
	.left{
		float:left;
		border:1px solid lightgrey;
		width:33%;
		height:300px;
		margin:2px;
	}
	.center{
		float:left;
		border:1px solid lightgrey;
		width:32%;
		height:300px;
		margin:2px;

	}
	.right{
		float:left;
		border:1px solid lightgrey;
		width:33%;
		height:300px;
		margin:2px;
	}
	img{
		height:150px;
		width:100px;
		
	}
	#uu{
			list-style-type: none;
			padding:0px;
	}
	ul li{
		overflow: hidden;
	}
	table tr,td{
		border:1px solid lightgrey;
	}
	td{
		text-align: center;
	}
	#btn{
		background-color: #1289A7;
		color:white;
		height:30px;
		width:150px;
		border:1px solid #1289A7;
	}
	h3{
		color:#1289A7;
	}
	
</style>	
</head>
<body>
	<h3><marquee> ALL AVAILABLE COURSES</marquee></h3>
 <i class="fa fa-search icon" aria-hidden="true"></i>
 <input id="srch" type="text" name="search" placeholder="Search Here for the course u want to Learn................................" onkeyup="fun()">
 
 
 <br>
<ul id="uu">
	<li>
		<div class="left">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a2.png" alt="java"></td>
					<td>Title</td>
					<td>C Language</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>5 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Beginner</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="start.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
		<div class="center">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a3.png" alt="java"></td>
					<td>Title</td>
					<td>C++</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>6 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Beginner</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="animation.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
		<div class="right">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a1.png" alt="java"></td>
					<td>Title</td>
					<td>Java</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>8 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Beginner</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="startjava.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
	</li>

	<li>
		<div class="left">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a4.jfif" alt="java"></td>
					<td>Title</td>
					<td>PHP</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>8 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Beginner</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="animationphp.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
		<div class="center">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a5.png" alt="java"></td>
					<td>Title</td>
					<td>HTML</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>5 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Intermediate</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="starthtml.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
		<div class="right">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a6.png" alt="java"></td>
					<td>Title</td>
					<td>CSS</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>4 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Intermediate</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="startcss.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
	</li>

		<li>
		<div class="left">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a7.jfif" alt="java"></td>
					<td>Title</td>
					<td>JAVA SCRIPT</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>7 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Intermediate</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="startjavascript.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
		<div class="center">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a8.jfif" alt="java"></td>
					<td>Title</td>
					<td>JQUERY</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>5 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Beginner</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="startjquery.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
		<div class="right">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a9.jfif" alt="java"></td>
					<td>Title</td>
					<td>ANGULAR JS</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>6 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Beginner</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="startangular.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
	</li>

			<li>
		<div class="left">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a10.jfif" alt="java"></td>
					<td>Title</td>
					<td>BOOT STRAP</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>6 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Intermediate</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="startbootstrap.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
		<div class="center">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a11.jfif" alt="java"></td>
					<td>Title</td>
					<td>LARAVEL</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>5 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Beginner</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="startlaravel.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
		<div class="right">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a12.jfif" alt="java"></td>
					<td>Title</td>
					<td>PYTHON</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>6 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Beginner</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="startpython.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
	</li>

	<li>
		<div class="left">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a13.png" alt="java"></td>
					<td>Title</td>
					<td>MY SQL</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>5 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Beginner</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="startsql.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
		<div class="center">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a14.png" alt="java"></td>
					<td>Title</td>
					<td>ANDROID</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>9 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Beginner</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="startandroid.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
		<div class="right">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a15.png" alt="java"></td>
					<td>Title</td>
					<td>C#</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>6 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Beginner</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="startcs.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
	</li>

	</li>

	<li>
		<div class="left">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a16.png" alt="java"></td>
					<td>Title</td>
					<td>.NET</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>7 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Beginner</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="startdotnet.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
		<div class="center">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a18.jfif" alt="java"></td>
					<td>Title</td>
					<td>REACT JS</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>8 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Beginner</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="startreact.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
		<div class="right">
			<table height="300px" width="100%">
				<tr>
					<td rowspan="5"><img src="a17.png" alt="java"></td>
					<td>Title</td>
					<td>NODE JS</td>
				</tr>
				<tr>
					<td>Duration</td>
					<td>9 Months</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>Beginner</td>
				</tr>
				<tr>
					<td>Type</td>
					<td>Computer Science</td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="startnode.php" id="btn" type="submit" name="details" >View Details</a></center></td>
				</tr>
			</table>
		</div>
	</li>
</ul>
	
</div>
<script type="text/javascript">
	function fun()
	{
		var i;
		var input=document.getElementById("srch").value;
		input=input.toLowerCase();
		var x=document.getElementsByTagName("div");
		for(i=0;i<x.length;i++)
		{
			if(x[i].innerHTML.toLowerCase().includes(input))
			{
				x[i].style.display="list-item";
			}
			else
			{
				x[i].style.display="none";
			}
		}
	}
</script>
</body>
</html>