<!DOCTYPE html>
<head>
	<title> C QUIZ </title>
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

		<h1>Simple Quiz On C language</h1>
		
		<form action="result.php" method="post" id="quiz">
		<ol>
            <li>
                
                    <h3> An exception is __</h3><br>
                    
                        <input type="radio" name="q1" id="q1A" value="A" required>
                   A) run time error<br>
                        <input type="radio" name="q1" id="q1B" value="B" />
                        B) compile time error<br>
                        <input type="radio" name="q1" id="q1C" value="C" />
                        C) logical error <br>
                        <input type="radio" name="q1" id="q1D" value="D" />
                        D) none of the above<br>
                </li>
                <br>
                <li>
                
                    <h3>Which of the following functions disconnects the stream from the file pointer.</h3><br>
                        <input type="radio" name="q2" id="q2A" value="A" required />
                        A) fremove() <br>
                        <input type="radio" name="q2" id="q2B" value="B" />
                        B) the pointer to be set to null  <br>
                        <input type="radio" name="q2" id="q2C" value="C" />
                        C) remove() <br>
                        <input type="radio" name="q2" id="q2D" value="D" />
                        D) fclose()  <br>
                </li>
                <br>
                <li>
                
                    <h3> Which library functions help users to dynamically allocate memory?</h3><br>
                        <input type="radio" name="q3" id="q3A" value="A" required />
                        A) memalloc() and alloc()<br>
                        <input type="radio" name="q3" id="q3B" value="B" />
                        B)malloc() and calloc()<br>
                        <input type="radio" name="q3" id="q3C" value="C" />
                       C) malloc() and memalloc()<br>
                        <input type="radio" name="q3" id="q3D" value="D" />
                       D)memalloc() and calloc()<br>
                </li>
                <br>
                <li>
                
                    <h3>Which of the following variable cannot be used by switch-case statement?</h3><br>
                        <input type="radio" name="q4" id="q4A" value="A" required />
                        A) double<br>
                        <input type="radio" name="q4" id="q4B" value="B" />
                        B) char<br>
                        <input type="radio" name="q4" id="q4C" value="C" />
                        C) int<br>
                        <input type="radio" name="q4" id="q4D" value="D" />
                        D)float<br>
                </li>
                <br>
                <li>
                
                    <h3> What value strcmp() function returns when two strings are the same?</h3><br>
                 
                        <input type="radio" name="q5" id="q5A" value="A" required />
                       A) 1<br>
                        <input type="radio" name="q5" id="q5B" value="B" />
                        B)2<br>
                        <input type="radio" name="q5" id="q5C" value="C" />
                        C) 0<br>
                        <input type="radio" name="q5" id="q5" value="D" />
                        D) error<br>
                </li>
            <br>
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
	
	</div>


</body>

</html>