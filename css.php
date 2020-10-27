<!DOCTYPE html>
<head>
	<title> CSS QUIZ </title>
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
    

		<h1>Simple Quiz On CSS</h1>
		
		<form action="result.php" method="post" id="quiz">
		<ol>
            <li>
                
                    <h3> Which of the following selector matches a element based on its class attribute?</h3><br>
                    
                        <input type="radio" name="q1" id="q1A" value="A" required>
                   A)The Class Selector <br>
                        <input type="radio" name="q1" id="q1B" value="B" />
                        B)the type selector<br>
                        <input type="radio" name="q1" id="q1C" value="C" />
                        C) the universal selector <br>
                        <input type="radio" name="q1" id="q1D" value="D" />
                        D)the descendant selector<br>
                </li>
                <br>
                <li>
                
                    <h3>Which of the following defines a measurement in millimeters?</h3><br>
                        <input type="radio" name="q2" id="q2A" value="A" required />
                        A) pt<br>
                        <input type="radio" name="q2" id="q2B" value="B" />
                        B) in <br>
                        <input type="radio" name="q2" id="q2C" value="C" />
                        C) pc <br>
                        <input type="radio" name="q2" id="q2D" value="D" />
                        D) mm  <br>
                </li>
                <br>
                <li>
                
                    <h3> Which of the following property is used to make a font italic or oblique?</h3><br>
                        <input type="radio" name="q3" id="q3A" value="A" required />
                        A) font-family<br>
                        <input type="radio" name="q3" id="q3B" value="B" />
                        B)font-style<br>
                        <input type="radio" name="q3" id="q3C" value="C" />
                       C)font-varient<br>
                        <input type="radio" name="q3" id="q3D" value="D" />
                       D) font-weight<br>
                </li>
                <br>
                <li>
                
                    <h3>Which of the following property is used to set the opacity of an image?</h3><br>
                        <input type="radio" name="q4" id="q4A" value="A" required />
                        A) border<br>
                        <input type="radio" name="q4" id="q4B" value="B" />
                        B)height<br>
                        <input type="radio" name="q4" id="q4C" value="C" />
                        C) width<br>
                        <input type="radio" name="q4" id="q4D" value="D" />
                        D)moz-opacity<br>
                </li>
                <br>
                <li>
                
                    <h3> Which of the following property specifies the left padding of an element?</h3><br>
                 
                        <input type="radio" name="q5" id="q5A" value="A" required />
                       A) padding-bottom<br>
                        <input type="radio" name="q5" id="q5B" value="B" />
                        B)padding-left<br>
                        <input type="radio" name="q5" id="q5C" value="C" />
                        C) padding-top<br>
                        <input type="radio" name="q5" id="q5" value="D" />
                        D) padding-right<br>
                </li>
            <br>
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
	
	</div>


</body>

</html>