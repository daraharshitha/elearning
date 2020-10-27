<!DOCTYPE html>
<head>
	<title> JSON QUIZ </title>
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

		<h1>Simple Quiz On JSON</h1>
		
		<form action="result.php" method="post" id="quiz">
		<ol>
            <li>
                
                    <h3>JSON stands for ?</h3><br>
                    
                        <input type="radio" name="q1" id="q1A" value="A" required>
                   A)JavaScript Object Notation<br>
                        <input type="radio" name="q1" id="q1B" value="B" />
                        B)JavaScript output Notation<br>
                        <input type="radio" name="q1" id="q1C" value="C" />
                        C)JavaScript Object name <br>
                        <input type="radio" name="q1" id="q1D" value="D" />
                        D)JavaScript Output Name<br>
                </li>
                <br>
                <li>
                
                    <h3>Which of the following is not a type of JSON</h3><br>
                        <input type="radio" name="q2" id="q2A" value="A" required />
                        A) string<br>
                        <input type="radio" name="q2" id="q2B" value="B" />
                        B)object <br>
                        <input type="radio" name="q2" id="q2C" value="C" />
                        C)array <br>
                        <input type="radio" name="q2" id="q2D" value="D" />
                        D)data  <br>
                </li>
                <br>
                <li>
                
                    <h3> how do JSON provide internationalization?</h3><br>
                        <input type="radio" name="q3" id="q3A" value="A" required />
                        A) keys<br>
                        <input type="radio" name="q3" id="q3B" value="B" />
                        B)unicode<br>
                        <input type="radio" name="q3" id="q3C" value="C" />
                       C)lang<br>
                        <input type="radio" name="q3" id="q3D" value="D" />
                       D) data type<br>
                </li>
                <br>
                <li>
                
                    <h3>for what is a JSONStringer used for?</h3><br>
                        <input type="radio" name="q4" id="q4A" value="A" required />
                        A) To quickly create number to JSON text.<br>
                        <input type="radio" name="q4" id="q4B" value="B" />
                        B)To create JSON ordered pairs.<br>
                        <input type="radio" name="q4" id="q4C" value="C" />
                        C) To converts JSON to Java strings<br>
                        <input type="radio" name="q4" id="q4D" value="D" />
                        D)To quickly create JSON text<br>
                </li>
                <br>
                <li>
                
                    <h3> which two main structures compose JSON</h3><br>
                 
                        <input type="radio" name="q5" id="q5A" value="A" required />
                       A) keys and values<br>
                        <input type="radio" name="q5" id="q5B" value="B" />
                        B)arrays and objects<br>
                        <input type="radio" name="q5" id="q5C" value="C" />
                        C) classes and objects<br>
                        <input type="radio" name="q5" id="q5" value="D" />
                        D)none<br>
                </li>
            <br>
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
	
	</div>


</body>

</html>