<!DOCTYPE html>
<head>
	<title> Laravel QUIZ </title>
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

		<h1>Simple Quiz On laravel</h1>
		
		<form action="result.php" method="post" id="quiz">
		<ol>
            <li>
                
                    <h3>Android is developed by ?</h3><br>
                    
                        <input type="radio" name="q1" id="q1A" value="A" required>
                   A)Android Inc<br>
                        <input type="radio" name="q1" id="q1B" value="B" />
                        B)apple<br>
                        <input type="radio" name="q1" id="q1C" value="C" />
                        C)google<br>
                        <input type="radio" name="q1" id="q1D" value="D" />
                        D)microsoft<br>
                </li>
                <br>
                <li>
                
                    <h3>Android web browser is based on ?</h3><br>
                        <input type="radio" name="q2" id="q2A" value="A" required />
                        A) chrome<br>
                        <input type="radio" name="q2" id="q2B" value="B" />
                        B)safari<br>
                        <input type="radio" name="q2" id="q2C" value="C" />
                        C) firefox <br>
                        <input type="radio" name="q2" id="q2D" value="D" />
                        D)Open-source Webkit <br>
                </li>
                <br>
                <li>
                
                    <h3>Android is based on which kernal?</h3><br>
                        <input type="radio" name="q3" id="q3A" value="A" required />
                        A) windows<br>
                        <input type="radio" name="q3" id="q3B" value="B" />
                        B)linux<br>
                        <input type="radio" name="q3" id="q3C" value="C" />
                       C)mac<br>
                        <input type="radio" name="q3" id="q3D" value="D" />
                       D) redhat<br>
                </li>
                <br>
                <li>
                
                    <h3>Which media format is not supported by android?</h3><br>
                        <input type="radio" name="q4" id="q4A" value="A" required />
                        A) MPEG<br>
                        <input type="radio" name="q4" id="q4B" value="B" />
                        B)MIDI<br>
                        <input type="radio" name="q4" id="q4C" value="C" />
                        C)MP4<br>
                        <input type="radio" name="q4" id="q4D" value="D" />
                        D)AVI<br>
                </li>
                <br>
                <li>
                
                    <h3>Which code used by android is not a open source?</h3><br>
                 
                        <input type="radio" name="q5" id="q5A" value="A" required />
                       A) Bluetooth Driver<br>
                        <input type="radio" name="q5" id="q5B" value="B" />
                        B)wifi Driver<br>
                        <input type="radio" name="q5" id="q5C" value="C" />
                        C)device Driver <br>
                        <input type="radio" name="q5" id="q5" value="D" />
                        D)video driver <br>
                </li>
            <br>
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
	
	</div>
</body>

</html>