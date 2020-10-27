<!DOCTYPE html>
<html>
<head>
  <title>Animation</title>
 
</head>
<body>
 <style type="text/css">
*{
  padding :0;
  margin:0;
  font-family:sans-serif;
}

body{
  background: #000;
}

.container{
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width:100%;
}

.container span{
  
  text-transform: uppercase;
  display: block;
}

.text1{
  color: white;
  font-size: 60px;
  font-weight: 700;
  letter-spacing: 8px;
margin-bottom: 20px;
background: black;
position: relative;
animation: text 3s 1;
}

.text2{
  font-size: 30px;
  color: #6ab04c;
}

@keyframes text{
  0%{
    color: black
    margin-bottom:-40px;
  }
  30%
  {
    letter-spacing: 25px;
    margin-bottom:-40px;
  }
  85%
  {
    letter-spacing: 8px;
    margin-bottom:-40px;
  }
}


   
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}


.back{
  color:black;
  font-style: italic;
  font-family: Droid Serif ;
  font-weight: bold;
  text-align: center;
    border-radius: 7px;
   padding: 5px 15px 5px  10px ;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 3px 2px;
  cursor: pointer;
}
.back:hover
{
    border: 2px solid black;
   border-radius: 18px;
 font-size: 20px;
 background-color:  #a74593a3;
 color:white;
 box-shadow: 20px 20px 50px 10px grey;
}

  </style>
  <a href="allcourses2.php"><button class="back"> << all courses </button></a>
<div class="container">
  <span class="text1">Welcome to</span>


    <span class="text2"> SQL </span>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center><a href="https://www.w3schools.com/sql/default.asp"><button class="button" style="vertical-align:middle"><span>click here </span></button></a>
</center>
<h1>Rajesh</h1>
</body>
</html>