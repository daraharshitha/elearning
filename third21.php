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
  background-image: url("20.jpg");
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
  background-color:#fbfaefa3;
  color:black;
  font-style: italic;
  font-family: Droid Serif ;
  font-weight: bold;
  border-radius: 12px;
    padding: 18px 230px 18px  150px ;
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

.t
{
  border: 1px solid black;
  background-color:#fbfaefa3;
  color:green;
  font-style: italic;
 font-family: "Times New Roman", Times, serif;
  font-weight: bold;
  border-radius: 12px;
    padding: 1px 10px 1px  10px ;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 3px 2px;
  }
  .t:hover
{
     cursor: pointer;

   border-radius: 15px;
 font-size: 20px;
 background-color:  green;
 color:white;
 box-shadow: 20px 20px 50px 10px grey;
}

.t a:hover{
  color: white;
}
</style>
</head>
<body>

<div class="hero-image">


<a href="cpp.php"><button class="back"> Back </button></a>
  <div class="hero-text">  <br><br>
    <h1 style="font-size:50px">Dynamic memory Allocation</h1>
   
</div>
<div style="margin-left: 100px;"><br><br><br><br><br><br><br>
   <div class="chapters">DMA &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class="t"> preview</button>
   &nbsp&nbsp



<?php
//downloading files from system
//downloading is not in our syllabus but uploading is there....
$files=scandir("c++");
  ?>
   <button class="t">
  <a href="c++/<?php echo $files[14]; ?>" download="<?php echo $files[14]; ?>"   style="text-decoration: none;">Download</a></button></div>
 <!-- <a href="delete.php?name=c++/<?php echo $files[$i]; ?>" style="color:red;">Delete</a>  -->
 </div>
  






 </div>





 </div>




 </div>

</div>


</body>
</html>
