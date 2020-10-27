<?php
include("home1.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about">
  <h1>About Us Page</h1><br><br><br>
  <p>we are students of lovely professional university , we all together prepared a platform of E - learning which is usefull mainly for coders </p><br><br><br><br>
  
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
   
      <div class="container"><br>
        <h2>rajesh sirigiri</h2><br>
        <p class="title">LPU student </p><br>
        
        <p>He added videos and files to the platform <br>
        he prepared downloading, uploading part <br>
        and description of the chapters available in the platform <br></p><br>
        <p>sirigirirajesh@gmail.com</p><br>
        <p><button class="button" onclick="fun()">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      
      <div class="container"><br>
        <h2>Harshitha </h2><br>
        <p class="title">LPU student</p><br>
        <p>She created quizes module <br>
        she prepared about us page <br>
        and stored the data of all the users in tables </p><br><br>
        <p>harshitha@gmail.com</p><br>
        <p><button class="button" onclick="fun()" >Contact</button></p>
      </div>
    </div>
  </div>
  
   <div class="column">
    <div class="card">
      
      <div class="container"><br>
        <h2>shaik farzana </h2><br>
        <p class="title">LPU student </p><br>
        <p>she prepared the home page <br>
        she prepared login, signup and logout pages 
       <br> The total available courses module and linking all pages <br> </p><br>
        <p>shaikfarzana@gmail.com</p><br>
        <p><button class="button" onclick="fun()">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      
      <div class="container"><br>
        <h2>Ayushi priya</h2><br> 
        <p class="title">LPU student</p><br>
        <p>she prepared dashboard of the student <br>
        report about the course <br>
        each course detaiul <br>
        admin login form and register form <br></p><br>
        <p>ayushipriya@gmail.com</p><br>
        <p><button class="button" onclick="fun()">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function fun()
  {
    alert("we will contact you within 24hrs.......Feel free to ask your queries!!!!");
  }
</script>
</body>
</html>
