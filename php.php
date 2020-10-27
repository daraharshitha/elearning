<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url("16.jpg");
  background-color: #cccccc;
  height:700px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 10%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: black;
  font-style: italic;
  font-family: Droid Serif ;
}

.chapters
{
  border: 1px solid black;
  background-color:#fbfaef7d;
  color:black;
  font-style: italic;
  font-family: Droid Serif ;
  font-weight: bold;
  border-radius: 12px;
    padding: 18px 150px 18px  150px ;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 27px;
  margin: 3px 2px;
  cursor: pointer;
}
.chapters:hover
{
  border: 2px solid black;
   border-radius: 18px;
 font-size: 28px;
 background-color:  #a74593a3;
 color:white;
 box-shadow: 20px 20px 50px 10px grey;
}
.chapters one{
    float: left;
margin-left: 50px;
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
</head>
<body>

<div class="hero-image">


<a href="animationphp.php"><button class="back"> Back </button></a>
  <div class="hero-text">  <br><br>
    <h1 style="font-size:50px">Chapters in php</h1>
   
</div>
<div style="margin-left: 100px;"><br><br><br><br><br><br><br><br><br>
   <a href="https://www.w3schools.com/PHP/DEfaULT.asP"><button class="chapters" style=" padding: 18px 130px 18px  150px ;">Introduction to PHP</button></a>
   <a href="https://www.w3schools.com/PHP/DEfaULT.asP">   
  <button class="chapters one" style="margin-left: 100px; padding: 18px 170px 18px  200px ;">superglobals</button></a>
<a href="https://www.w3schools.com/PHP/DEfaULT.asP">   
  <button class="chapters one" style="margin-top: 10px; padding-right:280px;">Arrays</button></a>
  <a href="https://www.w3schools.com/PHP/DEfaULT.asP"> 
  <button class="chapters one" style="margin-left: 110px;padding: 18px 170px 18px  255px ;">strings</button></a>
  <a href="https://www.w3schools.com/PHP/DEfaULT.asP"> 
  <button class="chapters one" style="margin-top: 10px;padding-right:255px;">sessions</button></a>
  <a href="https://www.w3schools.com/PHP/DEfaULT.asP"> 
  <button class="chapters one" style="margin-left: 130px;padding: 18px 170px 18px  200px ;">Functions</button> </a>
  <a href="https://www.w3schools.com/PHP/DEfaULT.asP"> 
  <button class="chapters one" style="margin-top: 10px;padding-right:250px;">cookies</button></a>
  <a href="https://www.w3schools.com/PHP/DEfaULT.asP"> 
  <button class="chapters one" style="margin-left: 130px;padding: 18px 170px 18px  205px ;">form handling</button></a>
  <a href="https://www.w3schools.com/PHP/DEfaULT.asP"> 
  <button class="chapters one" style="margin-top: 10px;padding-right:225px;">database</button></a>
  
  <button class="chapters one" style="margin-left: 125px;">Exception Handling</button>
  <a href="https://www.w3schools.com/PHP/DEfaULT.asP"> 
  <button class="chapters one" style="margin-top: 10px">File Handling</button></a>
  <a href="https://www.w3schools.com/PHP/DEfaULT.asP"> 
  <button class="chapters one" style="margin-left: 150px; font-size: 20px;">OOPS</button></a>
 </div>
  
</div>


</body>
</html>
