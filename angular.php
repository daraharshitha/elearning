<!DOCTYPE html>
<head>
	<title> Angular JS QUIZ </title>
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

		<h1>Simple Quiz On Angular JS</h1>
		
		<form action="result.php" method="post" id="quiz">
		<ol>
            <li>
                
                    <h3>Which of the following is true about uppercase filter?</h3><br>
                    
                        <input type="radio" name="q1" id="q1A" value="A" required>
                   A)uppercase filter converts a text to upper case text <br>
                        <input type="radio" name="q1" id="q1B" value="B" />
                        B)uppercase filter is a function which akes as input<br>
                        <input type="radio" name="q1" id="q1C" value="C" />
                        C) both <br>
                        <input type="radio" name="q1" id="q1D" value="D" />
                        D)none<br>
                </li>
                <br>
                <li>
                
                    <h3>Which of the following is true about ng-disabled directive?</h3><br>
                        <input type="radio" name="q2" id="q2A" value="A" required />
                        A) ng-disabled directive can enable a given control<br>
                        <input type="radio" name="q2" id="q2B" value="B" />
                        B)ng-disabled directive can disable a given control <br>
                        <input type="radio" name="q2" id="q2C" value="C" />
                        C) none <br>
                        <input type="radio" name="q2" id="q2D" value="D" />
                        D)both  <br>
                </li>
                <br>
                <li>
                
                    <h3> Which of the following is true about ng-include directive?</h3><br>
                        <input type="radio" name="q3" id="q3A" value="A" required />
                        A) enabled JS files within a HTML page using ng-include directive<br>
                        <input type="radio" name="q3" id="q3B" value="B" />
                        B)enabled HTML pages within a HTML page using ng-include directive<br>
                        <input type="radio" name="q3" id="q3C" value="C" />
                       C)both<br>
                        <input type="radio" name="q3" id="q3D" value="D" />
                       D) none<br>
                </li>
                <br>
                <li>
                
                    <h3>Which of the following is true about AngularJS service?</h3><br>
                        <input type="radio" name="q4" id="q4A" value="A" required />
                        A) services are JS functions<br>
                        <input type="radio" name="q4" id="q4B" value="B" />
                        B)services are responsible to do specific tasks only<br>
                        <input type="radio" name="q4" id="q4C" value="C" />
                        C) inbuilt services are always prefixed with $ symbol<br>
                        <input type="radio" name="q4" id="q4D" value="D" />
                        D)All the above<br>
                </li>
                <br>
                <li>
                
                    <h3> Inbuilt services are always prefixed with what symbol.</h3><br>
                 
                        <input type="radio" name="q5" id="q5A" value="A" required />
                       A) #<br>
                        <input type="radio" name="q5" id="q5B" value="B" />
                        B)$<br>
                        <input type="radio" name="q5" id="q5C" value="C" />
                        C) &<br>
                        <input type="radio" name="q5" id="q5" value="D" />
                        D)*<br>
                </li>
            <br>
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
	
	</div>


</body>

</html>