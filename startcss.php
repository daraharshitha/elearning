<!DOCTYPE html>
<html>
<head>
	<title>Animation 2</title>
	<link rel="stylesheet" type="text/css" href="animation.css">
	<style type="text/css">
		
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

	</style>
</head>
<body>
	  <a href="allcourses2.php"><button class="back"> all courses </button></a>
	  <br><br><br><br><br><br><br><br><br><br><br>
    <div>
	<video src="particles.mp4" muted="" autoplay=""></video>
    <h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span>W</span>elcome to  &nbsp<span>CSS</span> course</h2>
    </div><br><br><br><br>
     <center>
     	<a href="css1.php"><button class="button" style="vertical-align:middle"><span>click here </span></button>
     	</a>
    </center>
</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
      $(document).ready(function () {
          // Hide the div
          $(".button").hide();
          // Show the div after 5s
          $(".button").delay(6000).fadeIn(100);  
      });    
  </script>
