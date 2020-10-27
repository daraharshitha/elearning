<!DOCTYPE html>
<head>
	<title> HTML QUIZ </title>
	<link rel="stylesheet" type="text/css" href="style.css" />
         <style type="text/css">
        body{
            background-color: #7bed9f;
        }
        h1{
            font-weight: bold;
            text-decoration: underline;
        }
    #but{
      width:90px;
      height:40px;
      border-radius: 10px;
      font-size: 15px;
      margin-left:5px;
      margin-top:5px;
    }

    #but:hover{
      opacity:0.6;
    }
  </style>
<script type="text/javascript">
     function ff()
    {
      window.location="quiz.php";
    }
</script>
</head>
<body>
       <button id="but" onclick="ff()"><b><< BACK</b></button>
<div id="div1">

		<h1>Simple Quiz On HTML</h1>
		
		<form action="result.php" method="post" id="quiz">
		<ol>
            <li>
                
                    <h3>HTML stands for?</h3><br>
                    
                        <input type="radio" name="q1" id="q1A" value="A" required>
                   A) 	Hyper Text Markup Language <br>
                        <input type="radio" name="q1" id="q1B" value="B" />
                        B) 	High Text Markup Language<br>
                        <input type="radio" name="q1" id="q1C" value="C" />
                        C) 	Hyper Tabular Markup Language <br>
                        <input type="radio" name="q1" id="q1D" value="D" />
                        D) 	Hyper Text Makeup Language<br>
                </li>
                <br>
                <li>
                
                    <h3>From which tag descriptive list starts ?</h3><br>
                        <input type="radio" name="q2" id="q2A" value="A" required />
                        A) DS <br>
                        <input type="radio" name="q2" id="q2B" value="B" />
                        B) DD <br>
                        <input type="radio" name="q2" id="q2C" value="C" />
                        C) LL <br>
                        <input type="radio" name="q2" id="q2D" value="D" />
                        D) DL  <br>
                </li>
                <br>
                <li>
                
                    <h3>input tag is</h3><br>
                        <input type="radio" name="q3" id="q3A" value="A" required />
                        A) format tag<br>
                        <input type="radio" name="q3" id="q3B" value="B" />
                        B) empty tag<br>
                        <input type="radio" name="q3" id="q3C" value="C" />
                       C) both a and b<br>
                        <input type="radio" name="q3" id="q3D" value="D" />
                       D) none<br>
                </li>
                <br>
                <li>
                
                    <h3>The attribute of <form> tag</h3><br>
                        <input type="radio" name="q4" id="q4A" value="A" required />
                        A) mrthod<br>
                        <input type="radio" name="q4" id="q4B" value="B" />
                        B) action<br>
                        <input type="radio" name="q4" id="q4C" value="C" />
                        C) None<br>
                        <input type="radio" name="q4" id="q4D" value="D" />
                        D)both A and B<br>
                </li>
                <br>
                <li>
                
                    <h3> 
The text inside the TEXT AREA tag works like</h3><br>
                 
                        <input type="radio" name="q5" id="q5A" value="A" required />
                       A) P formatted text<br>
                        <input type="radio" name="q5" id="q5B" value="B" />
                        B)PRE formatted text<br>
                        <input type="radio" name="q5" id="q5C" value="C" />
                        C) T formatted text<br>
                        <input type="radio" name="q5" id="q5" value="D" />
                        D) none<br>
                </li>
            <br>
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
	
	</div>


</body>

</html>