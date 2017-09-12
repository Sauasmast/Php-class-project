<?php

session_start();

$divclick=$_POST['bau'];

$array= array(1,2,3);

shuffle($array);

$a= $array[0];
$b = $array[1];
$c = $array[2];

$srca="";
$srcb="";
$srcc="";

if($divclick==1){
  
  if (($b==1 && $c==3)||($b==3 && $c==1)){
  $srcb="./1.jpg";
  }
      
  else if ($b==1 || $b==3){
  $srcb="./1.jpg";
  }
  else if ($c==1 || $c==3){
  $srcc="./1.jpg";
  }
}

else if($divclick==2){
  
   if (($a==1 && $c==3)||($a==3 && $c==1)){
    $srca="./1.jpg";
  }
  else if ($a==1||$a==3){
  $srca="./1.jpg";
  }
  else if ($c==1||$c==3){
  $srcc="./1.jpg";
}
}

else{
  
if (($a==1 && $b==3)||($a==3 && $b==1)){
    $srcb="./1.jpg";
  }
  
  else if ($a==1||$a==3){
  $srca="./1.jpg";
  }
  
  else if ($b==1||$b==3){
  $srcb="./1.jpg";
}
}

$_SESSION['srca']= $srca;
$_SESSION['srcb']= $srcb;
$_SESSION['srcc']= $srcc;
$_SESSION['a']=$a;
$_SESSION['b']=$b;
$_SESSION['c']=$c;
$_SESSION['divclick']=$divclick;  

if ($srca=="./1.jpg"){
$myhtml=<<<'EOD'
  <html>
<head>
  <title> Lets make a deal </title>
  <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./design.css">
</head>
  
<body>
  <div class="container-fluid">
    
    <div class="row">
      <center> <b> <h1 style="font-size:3em"> LET US MAKE A DEAL </h1> </b></center>
    </div>
  <br>
    
    <form action="second.php" method="post">
      <div class="row">
    <div class="col-md-4 col-lg-4 box box1">
      <button name="1" type="submit" class="col-md-12 col-lg-12 but" style="height:100%" value="1" disabled>
  <div>
EOD;

$myhtml1='<img src="'.$srca.'">';

$myhtml2=<<<'EOD'
  <h1 class="inside"> DOOR ONE </h1>
    </button>
    </div>      

   <div class="col-md-4 box box2"  style="border: 10px solid red;">
     <button name="2" type="submit" class="col-md-12 col-lg-12 but" style="height:100%" value="2">
EOD;

$myhtml3='<img src="'.$srcb.'">';
  
$myhtml4=<<<'EOD'
  <h1 class="inside"> DOOR TWO </h1>
     </button>
    </div>
      
    <div class="col-md-4 box box3">
      <button name="3" type="submit" class="col-md-12 col-lg-12 but" style="height:100%" value="3">
EOD;

$myhtml5='<img src="'.$srcc.'">';

      $myhtml6=<<<'EOD'
  <h1 class="inside" style="position:absolute; left: 8%;"> DOOR THREE </h1>
      </button>
    </div>
  </div>
EOD;
    
$myhtml65='<center> <strong> <h3 style="color:white; font-weight:900"> Your Chose Door Number: '. $divclick ;

$myhtml7=<<<'EOD'
  </h3> </strong> </center>

</form>
</div>
</body>
  
  <script src="jquery-3.1.1.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"> </script>
  <script src="let.js"></script>
</html>
EOD;

$final= $myhtml.$myhtml1.$myhtml2.$myhtml3.$myhtml4.$myhtml5.$myhtml6.$myhtml65.$myhtml7;

echo $final;
}

else if ($srcb=="./1.jpg"){
$myhtml=<<<'EOD'
  <html>
<head>
  <title> Lets make a deal </title>
  <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./design.css">
</head>
  
<body>
  <div class="container-fluid">
    
    <div class="row">
      <center> <b> <h1 style="font-size:3em"> LET US MAKE A DEAL </h1> </b></center>
    </div>
  <br>
    
    <form action="second.php" method="post">
      <div class="row">
    <div class="col-md-4 col-lg-4 box box1">
      <button name="1" type="submit" class="col-md-12 col-lg-12 but" style="height:100%" value="1">
  <div>
EOD;

$myhtml1='<img src="'.$srca.'">';

$myhtml2=<<<'EOD'
  <h1 class="inside"> DOOR ONE </h1>
      </button>
    </div>      

   <div class="col-md-4 box box2"  style="border: 10px solid red;">
     <button name="2" type="submit" class="col-md-12 col-lg-12 but" style="height:100%" value="2" disabled>
EOD;

$myhtml3='<img src="'.$srcb.'">';
  
$myhtml4=<<<'EOD'
  <h1 class="inside"> DOOR TWO </h1>
     </button>
    </div>
      
    <div class="col-md-4 box box3">
      <button name="3" type="submit" class="col-md-12 col-lg-12 but" style="height:100%" value="3">
EOD;

$myhtml5='<img src="'.$srcc.'">';

      $myhtml6=<<<'EOD'
  <h1 class="inside" style="position:absolute; left: 8%;"> DOOR THREE </h1>
     </button>
    </div>
  </div>
EOD;
    
$myhtml65='<center> <strong> <h3 style="color:white; font-weight:900"> Your Chose Door Number: '. $divclick ;

$myhtml7=<<<'EOD'
  </h3> </strong> </center>

</form>
</div>
</body>
  
  <script src="jquery-3.1.1.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"> </script>
  <script src="let.js"></script>
</html>
EOD;

$final= $myhtml.$myhtml1.$myhtml2.$myhtml3.$myhtml4.$myhtml5.$myhtml6.$myhtml65.$myhtml7;

echo $final;
}

else {
$myhtml=<<<'EOD'
  <html>
<head>
  <title> Lets make a deal </title>
  <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./design.css">
</head>
  
<body>
  <div class="container-fluid">
    
    <div class="row">
      <center> <b> <h1 style="font-size:3em"> LET US MAKE A DEAL </h1> </b></center>
    </div>
  <br>
    
    <form action="second.php" method="post">
      <div class="row">
    <div class="col-md-4 col-lg-4 box box1">
      <button name="1" type="submit" class="col-md-12 col-lg-12 but" style="height:100%" value="1">
  <div>
EOD;

$myhtml1='<img src="'.$srca.'">';

$myhtml2=<<<'EOD'
  <h1 class="inside"> DOOR ONE </h1>
     </button>
    </div>      

   <div class="col-md-4 box box2"  style="border: 10px solid red;">
     <button name="2" type="submit" class="col-md-12 col-lg-12 but" style="height:100%" value="2">
EOD;

$myhtml3='<img src="'.$srcb.'">';
  
$myhtml4=<<<'EOD'
  <h1 class="inside"> DOOR TWO </h1>
     </button>
    </div>
      
    <div class="col-md-4 box box3">
      <button name="3"  type="submit" class="col-md-12 col-lg-12 but" style="height:100%" value="3" disabled>
EOD;

$myhtml5='<img src="'.$srcc.'">';

      $myhtml6=<<<'EOD'
  <h1 class="inside" style="position:absolute; left: 8%;"> DOOR THREE </h1>
     </button>
    </div>
  </div>
EOD;
    
$myhtml65='<center> <strong> <h3 style="color:white; font-weight:900"> Your Chose Door Number: '. $divclick ;

$myhtml7=<<<'EOD'
  </h3> </strong> </center>

</form>
</div>
</body>
  
  <script src="jquery-3.1.1.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"> </script>
  <script src="let.js"></script>
</html>
EOD;

$final= $myhtml.$myhtml1.$myhtml2.$myhtml3.$myhtml4.$myhtml5.$myhtml6.$myhtml65.$myhtml7;

echo $final;
}

?>
