<!DOCTYPE html>
<head>
	<title> QUIZ C++</title>
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

		<h1>Simple Quiz On C++</h1>
		
		<form action="result.php" method="post" id="quiz">
		<ol>
            <li>
                
                    <h3> A user defined header file is included by following statement in general.</h3>
                    
                    <div>
                        <input type="radio" name="q1" id="q1A" value="A" required/>
                        <label for="q1A">A) #include"file.h" </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1" id="q1B" value="B" />
                        <label for="q1B">B) #include<file.h> </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1" id="q1C" value="C" />
                        <label for="q1C">C) #includes<file></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q1" id="q1D" value="D" />
                        <label for="q1D">D) #include file.h</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>The following operator can be used to calculate the value of one number raised to another.</h3>
                    
                    <div>
                        <input type="radio" name="q2" id="q2A" value="A" required />
                        <label for="q2A">A) ^</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2" id="q2B" value="B" />
                        <label for="q2B">B) **</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2" id="q2C" value="C" />
                        <label for="q2C">C) ^^</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q2" id="q2D" value="D" />
                        <label for="q2D">D) none of the above </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>The pointer which stores always the current active object address is __</h3>
                    
                    <div>
                        <input type="radio" name="q3" id="q3A" value="A" required />
                        <label for="q3A">A) auto_ptr</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3" id="q3B" value="B" />
                        <label for="q3B">B) this</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3" id="q3C" value="C" />
                        <label for="q3C">C) p</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q3" id="q3D" value="D" />
                        <label for="q3D">D) None Of Above These</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>The programs machine instructions are store in __ memory segment.</h3>
                    
                    <div>
                        <input type="radio" name="q4" id="q4A" value="A" required />
                        <label for="q4A">A) data</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q4" id="q4B" value="B" />
                        <label for="q4B">B) stack</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q4" id="q4C" value="C" />
                        <label for="q4C">C) heap</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q4" id="q4D" value="D" />
                        <label for="q4D">D)code</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3> Compiler generates ___ file</h3>
                    
                    <div>
                        <input type="radio" name="q5" id="q5A" value="A" required />
                        <label for="q5A">A) executable code</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5" id="q5B" value="B" />
                        <label for="q5B">B) object code</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5" id="q5C" value="C" />
                        <label for="q5C">C) assembly code</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="q5" id="q5" value="D" />
                        <label for="q5D">D) All Above These</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
	
	</div>


</body>

</html>