<html>
<head>
  <title> Let's make a deal </title>
  <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./design.css">
</head>
  
<body>
  <div class="container-fluid">
       <form action="page.php" method="post">
    
    <div class="row">
      <center> <b> <h1> LET'S MAKE A DEAL </h1> </b></center>
    </div>
         <input type="text" size="10" name="bau" hidden="hidden" class="toknow">
  <br>
      
      <div class="row">

    <div class="col-md-4 col-lg-4 box box1">
      <input name="1" type="submit" class="col-md-12 col-lg-12 but" style="height:100%" value="">
    <h1 class="inside"> DOOR ONE </h1>
      
    </div>
        
    
   <div class="col-md-4 box box2"  style="border: 10px solid red;">
     <input name="2" type="submit" class="col-md-12 col-lg-12 but" style="height:100%" value="">
     <h1 class="inside"> DOOR TWO </h1>
    </div>
      
    <div class="col-md-4 box box3">
      <input name="3" type="submit" class="col-md-12 col-lg-12 but" style="height:100%" value="">
      <h1 class="inside" style="position:absolute; left: 8%;"> DOOR THREE </h1>
    </div>
  </div>
         
    </form>
  </div>
</body>

  <script src="jquery-3.1.1.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"> </script>
  <script src="let.js"></script>
</html>