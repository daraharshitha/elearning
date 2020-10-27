<!doctype html>
<html lang="en">

<head>
  <style type="text/css">
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
  <title> Quiz </title>
  <link rel="stylesheet" type="text/css" href="h.css">
  <script type="text/javascript">
    function goToNewPage()
    {
        var url = document.getElementById('list').value;
        if(url != 'none') {
            window.location = url;
        }
    }
    function ff()
    {
      window.location="homee.php";
    }
</script>
 </head>
 
 <body>
  <h1 class="h1"> QUIZ </h1>
   <div id="background">
    <button id="but" onclick="ff()"><b><< BACK</b></button>
    <div id="content">
      <h2> course </h2>
      
      <select id="list"> 
      <option value="css.php"> CSS </option>
      <option value="html.php"> HTML </option>
      <option value="android.php"> Android </option>
      <option value="angular.php"> Angular JS </option>
      <option value="c.php"> C language </option>
      <option value="c++.php"> C++ </option>
      <option value="java.php"> JAVA </option>
      <option value="js.php"> JavaScript </option>
      <option value="json.php"> JSON </option>
      <option value="laravel.php"> Laravel </option>
      <option value="net.php"> Dot Net </option>
      <option value="python.php"> Python </option>
      
      </select>
      <br><br>
      <input type=button class="button" value="Go" onclick="goToNewPage()" />
     </div></div><br><br>
      <div class="row">
        <div class="col">
         <img src="down.jpg" alt="responsive image" class="im">
           <h2> Python </h2>
           
         </div>
          <div class="col">
          <img src="images.jpg" alt="responsive image" class="im" >
          <h2> C++ programing </h2>
           
         </div>
          <div class="col">
          <img src="download.jpg" alt="responsive image" class="im" >
          <h2> java </h2>
           
         </div>
         <div class="col">
          <img src="n.png" alt="responsive image" class="im" >
           <h2> .NET </h2>
           
         </div>
         <div class="col">
          <img src="p.png" alt="responsive image" class="im" >
           <h2> PHP </h2>
           
         </div>
         <div class="col">
          <img src="j.png" alt="responsive image" class="im" >
           <h2> JavaScript </h2>
           
         </div></div>
     
     
</body>
</html>