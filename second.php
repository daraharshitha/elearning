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
  background-image: url("9.jpg");
  background-color: #cccccc;
  height:1000px;
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
  background-color:#fbfaefa3;
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


<a href="start.php"><button class="back"> Back </button></a>
  <div class="hero-text">  <br><br>
    <h1 style="font-size:50px">chapters in c language</h1>
   
</div>
<div style="margin-left: 100px;"><br><br><br><br><br><br><br><br><br>
   <a href="third.php"><button class="chapters">Introduction to C</button></a>
   <a href="third1.php">   
  <button class="chapters one" style="margin-left: 120px; padding: 18px 170px 18px  170px ;">Operators</button></a>
<a href="third2.php">   
  <button class="chapters one" style="margin-top: 10px; padding-right:260px;">Arrays</button></a>
  <a href="third3.php"> 
  <button class="chapters one" style="margin-left: 130px;padding: 18px 170px 18px  205px ;">strings</button></a>
  <a href="third4.php"> 
  <button class="chapters one" style="margin-top: 10px;padding-right:190px;">Pointers in C</button></a>
  <a href="third5.php"> 
  <button class="chapters one" style="margin-left: 130px;padding: 18px 170px 18px  170px ;">Functions</button> </a>
  <a href="third6.php"> 
  <button class="chapters one" style="margin-top: 10px;padding-right:220px;">Structures</button></a>
  <a href="third7.php"> 
  <button class="chapters one" style="margin-left: 130px;padding: 18px 170px 18px  205px ;">Unions</button></a>
  <a href="third8.php"> 
  <button class="chapters one" style="margin-top: 10px;padding-right:165px;">Storage Classes</button></a>
  
  <button class="chapters one" style="margin-left: 125px;">Exception Handling</button>
  <a href="third10.php"> 
  <button class="chapters one" style="margin-top: 10px">File Handling</button></a>
  <a href="third11.php"> 
  <button class="chapters one" style="margin-left: 150px; font-size: 20px;">Dynamic memory allocation</button></a>
 </div>
  
</div>


</body>
</html>
