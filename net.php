<!DOCTYPE html>
<head>
	<title> Dot Net QUIZ </title>
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

		<h1>Simple Quiz On Dot Net</h1>
		
		<form action="result.php" method="post" id="quiz">
		<ol>
            <li>
                
                    <h3>Which webserver is developed by Microsoft?</h3><br>
                    
                        <input type="radio" name="q1" id="q1A" value="A" required>
                   A)Internet Information Services (IIS) <br>
                        <input type="radio" name="q1" id="q1B" value="B" />
                        B)apache tomcat<br>
                        <input type="radio" name="q1" id="q1C" value="C" />
                        C)caudium <br>
                        <input type="radio" name="q1" id="q1D" value="D" />
                        D)none<br>
                </li>
                <br>
                <li>
                
                    <h3>Which commands are used to specify settings of an .aspx file?</h3><br>
                        <input type="radio" name="q2" id="q2A" value="A" required />
                        A) class<br>
                        <input type="radio" name="q2" id="q2B" value="B" />
                        B)validation<br>
                        <input type="radio" name="q2" id="q2C" value="C" />
                        C) events <br>
                        <input type="radio" name="q2" id="q2D" value="D" />
                        D)directives <br>
                </li>
                <br>
                <li>
                
                    <h3>Which of the following directive is used to link an assembly to a page or user control ?</h3><br>
                        <input type="radio" name="q3" id="q3A" value="A" required />
                        A) @page<br>
                        <input type="radio" name="q3" id="q3B" value="B" />
                        B)@Assembly<br>
                        <input type="radio" name="q3" id="q3C" value="C" />
                       C)@Import<br>
                        <input type="radio" name="q3" id="q3D" value="D" />
                       D) @Reference<br>
                </li>
                <br>
                <li>
                
                    <h3>Which protocol is used to transfer files frtom localhost to remote host?</h3><br>
                        <input type="radio" name="q4" id="q4A" value="A" required />
                        A) UDP<br>
                        <input type="radio" name="q4" id="q4B" value="B" />
                        B)HTTP<br>
                        <input type="radio" name="q4" id="q4C" value="C" />
                        C)TCP<br>
                        <input type="radio" name="q4" id="q4D" value="D" />
                        D)FTP<br>
                </li>
                <br>
                <li>
                
                    <h3>Which of the following server control shows data in a tabular format and allows sorting, paging, edit, delete each record?</h3><br>
                 
                        <input type="radio" name="q5" id="q5A" value="A" required />
                       A) listbox<br>
                        <input type="radio" name="q5" id="q5B" value="B" />
                        B)gridview<br>
                        <input type="radio" name="q5" id="q5C" value="C" />
                        C)repeater <br>
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