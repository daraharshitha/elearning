<!DOCTYPE html>
<head>
	<title> JAVA QUIZ </title>
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

		<h1>Simple Quiz On java</h1>
		
		<form action="result.php" method="post" id="quiz">
		<ol>
            <li>
                
                    <h3> Which of the following is not a Java features?</h3><br>
                    
                        <input type="radio" name="q1" id="q1A" value="A" required>
                   A) Use of pointers <br>
                        <input type="radio" name="q1" id="q1B" value="B" />
                        B) Architecture Neutral<br>
                        <input type="radio" name="q1" id="q1C" value="C" />
                        C) Dynamic <br>
                        <input type="radio" name="q1" id="q1D" value="D" />
                        D) Object-oriented<br>
                </li>
                <br>
                <li>
                
                    <h3>_____ is used to find and fix bugs in the Java programs.</h3><br>
                        <input type="radio" name="q2" id="q2A" value="A" required />
                        A) JVM <br>
                        <input type="radio" name="q2" id="q2B" value="B" />
                        B) JRE <br>
                        <input type="radio" name="q2" id="q2C" value="C" />
                        C) JDK <br>
                        <input type="radio" name="q2" id="q2D" value="D" />
                        D) JDB  <br>
                </li>
                <br>
                <li>
                
                    <h3>What is the return type of the hashCode() method in the Object class?</h3><br>
                        <input type="radio" name="q3" id="q3A" value="A" required />
                        A) object<br>
                        <input type="radio" name="q3" id="q3B" value="B" />
                        B) int<br>
                        <input type="radio" name="q3" id="q3C" value="C" />
                       C) long<br>
                        <input type="radio" name="q3" id="q3D" value="D" />
                       D) void<br>
                </li>
                <br>
                <li>
                
                    <h3>Which of the following tool is used to generate API documentation in HTML format from doc comments in source code?</h3><br>
                        <input type="radio" name="q4" id="q4A" value="A" required />
                        A) javap tool<br>
                        <input type="radio" name="q4" id="q4B" value="B" />
                        B) javadoc tool<br>
                        <input type="radio" name="q4" id="q4C" value="C" />
                        C) javaw command<br>
                        <input type="radio" name="q4" id="q4D" value="D" />
                        D)javah command<br>
                </li>
                <br>
                <li>
                
                    <h3> Which method of the Class.class is used to determine the name of a class represented by the class object as a String?</h3><br>
                 
                        <input type="radio" name="q5" id="q5A" value="A" required />
                       A) getClass()<br>
                        <input type="radio" name="q5" id="q5B" value="B" />
                        B)intern()<br>
                        <input type="radio" name="q5" id="q5C" value="C" />
                        C) toString()<br>
                        <input type="radio" name="q5" id="q5" value="D" />
                        D) getName()<br>
                </li>
            <br>
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
	
	</div>


</body>

</html>