<!DOCTYPE html>
<head>
	<title> JS QUIZ </title>
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

		<h1>Simple Quiz On JavaScript</h1>
		
		<form action="result.php" method="post" id="quiz">
		<ol>
            <li>
                
                    <h3> Which of the following function of String object extracts a section of a string and returns a new string?</h3><br>
                    
                        <input type="radio" name="q1" id="q1A" value="A" required>
                   A)slice() <br>
                        <input type="radio" name="q1" id="q1B" value="B" />
                        B) 	split()<br>
                        <input type="radio" name="q1" id="q1C" value="C" />
                        C) 	replace() <br>
                        <input type="radio" name="q1" id="q1D" value="D" />
                        D) 	search()<br>
                </li>
                <br>
                <li>
                
                    <h3>Which of the following function of Array object joins all elements of an array into a string?</h3><br>
                        <input type="radio" name="q2" id="q2A" value="A" required />
                        A) concat() <br>
                        <input type="radio" name="q2" id="q2B" value="B" />
                        B) pop() <br>
                        <input type="radio" name="q2" id="q2C" value="C" />
                        C) map() <br>
                        <input type="radio" name="q2" id="q2D" value="D" />
                        D) join()  <br>
                </li>
                <br>
                <li>
                
                    <h3> Which of the following function of Array object adds and/or removes elements from an array?</h3><br>
                        <input type="radio" name="q3" id="q3A" value="A" required />
                        A) toSource()<br>
                        <input type="radio" name="q3" id="q3B" value="B" />
                        B) slice()<br>
                        <input type="radio" name="q3" id="q3C" value="C" />
                       C) sort()<br>
                        <input type="radio" name="q3" id="q3D" value="D" />
                       D) unshift()<br>
                </li>
                <br>
                <li>
                
                    <h3>Which of the following type of variable is visible everywhere in your JavaScript code?</h3><br>
                        <input type="radio" name="q4" id="q4A" value="A" required />
                        A) both b and d<br>
                        <input type="radio" name="q4" id="q4B" value="B" />
                        B)local variables<br>
                        <input type="radio" name="q4" id="q4C" value="C" />
                        C) None<br>
                        <input type="radio" name="q4" id="q4D" value="D" />
                        D)global variables<br>
                </li>
                <br>
                <li>
                
                    <h3> 
Which of the following function of String object creates a string to be displayed in a big font as if it were in a <big> tag?</h3><br>
                 
                        <input type="radio" name="q5" id="q5A" value="A" required />
                       A) anchor()<br>
                        <input type="radio" name="q5" id="q5B" value="B" />
                        B)big()<br>
                        <input type="radio" name="q5" id="q5C" value="C" />
                        C) blink()<br>
                        <input type="radio" name="q5" id="q5" value="D" />
                        D) italics()<br>
                </li>
            <br>
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
	
	</div>


</body>

</html>