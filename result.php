<!DOCTYPE html>
 <head>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 <body style="background:#00ccff;height:200px;
 
 width:400px;
 top:25%;
left:30%;
	position: absolute;
 margin:0;">
 <div id="div1" style="background-image: radial-gradient( #739e8c,#4dadb2);width:500px;height:400px;text-align:center;">
 
		<h1> <b>Result</b> </h1>
		

	<?php
		$answer1 = $_POST['q1'];
            $answer2 = $_POST['q2'];
            $answer3 = $_POST['q3'];
            $answer4 = $_POST['q4'];
            $answer5 = $_POST['q5'];
	 $tcorrect = 0;
            
            if ($answer1 == "A") { $tcorrect++; }
            if ($answer2 == "D") { $tcorrect++; }
            if ($answer3 == "B") { $tcorrect++; }
            if ($answer4 == "D") { $tcorrect++; }
            if ($answer5 == "B") { $tcorrect++; }
            $t=5-$tcorrect;
            
            echo "<div id='results'>$tcorrect / 5 correct <br><br>";
            echo "Total correct :" .$tcorrect ."<br>";
            echo "total wrong :". $t ; ?><br><br>
            <a href="homee.php"><button style="background-color:#00ccff;border:none;
padding:10px 70px;
cursor:pointer;
font-size:30px;
float:center;
font-family:cursive;
border-radius:50%;" > Continue </button></a></div>
            
       <br> </div>  
	</div>
 </body> </html>