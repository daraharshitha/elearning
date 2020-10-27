<!DOCTYPE html>
<head>
	<title> Python QUIZ </title>
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

		<h1>Simple Quiz On python</h1>
		
		<form action="result.php" method="post" id="quiz">
		<ol>
            <li>
                
                    <h3>What is called when a function is defined inside a class?</h3><br>
                    
                        <input type="radio" name="q1" id="q1A" value="A" required>
                   A)method <br>
                        <input type="radio" name="q1" id="q1B" value="B" />
                        B)module<br>
                        <input type="radio" name="q1" id="q1C" value="C" />
                        C) class <br>
                        <input type="radio" name="q1" id="q1D" value="D" />
                        D)function<br>
                </li>
                <br>
                <li>
                
                    <h3>time.time() returns ________</h3><br>
                        <input type="radio" name="q2" id="q2A" value="A" required />
                        A) the current time<br>
                        <input type="radio" name="q2" id="q2B" value="B" />
                        B)the current time in milliseconds<br>
                        <input type="radio" name="q2" id="q2C" value="C" />
                        C) the current time in milliseconds since midnight <br>
                        <input type="radio" name="q2" id="q2D" value="D" />
                        D)the current time in milliseconds since midnight, January 1, 1970 GMT (the Unix time)  <br>
                </li>
                <br>
                <li>
                
                    <h3> Which of the following is the use of id() function in python?</h3><br>
                        <input type="radio" name="q3" id="q3A" value="A" required />
                        A) Every object doesn’t have a unique id<br>
                        <input type="radio" name="q3" id="q3B" value="B" />
                        B)Id returns the identity of the object<br>
                        <input type="radio" name="q3" id="q3C" value="C" />
                       C)both<br>
                        <input type="radio" name="q3" id="q3D" value="D" />
                       D) none<br>
                </li>
                <br>
                <li>
                
                    <h3>Given a function that does not return any value, what value is shown when executed at the shell?</h3><br>
                        <input type="radio" name="q4" id="q4A" value="A" required />
                        A) int<br>
                        <input type="radio" name="q4" id="q4B" value="B" />
                        B)void<br>
                        <input type="radio" name="q4" id="q4C" value="C" />
                        C)bool<br>
                        <input type="radio" name="q4" id="q4D" value="D" />
                        D)none<br>
                </li>
                <br>
                <li>
                
                    <h3>Which module in Python supports regular expressions?</h3><br>
                 
                        <input type="radio" name="q5" id="q5A" value="A" required />
                       A) regex<br>
                        <input type="radio" name="q5" id="q5B" value="B" />
                        B)re<br>
                        <input type="radio" name="q5" id="q5C" value="C" />
                        C)pyregex <br>
                        <input type="radio" name="q5" id="q5" value="D" />
                        D)none <br>
                </li>
            <br>
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
	
	</div>


</body>

</html>