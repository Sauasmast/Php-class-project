<?php 

session_start();

$srca = $_SESSION['srca'];
$srcb = $_SESSION['srcb'];
$srcc = $_SESSION ['srcc'];
$a = $_SESSION['a'];
$b= $_SESSION['b'];
$c= $_SESSION['c'];
$divclick= $_SESSION['divclick'];

$aclicked= $_POST['1'];
$bclicked= $_POST['2'];
$cclicked= $_POST['3'];

if($srca!==""){
  $chosendoor=1;
}
else if($srcb!==""){
  $chosendoor=2;
}
else{
  $chosendoor=3;
}


if($srca==""){
  if($a==1 || $a==3){
    $srca="./3.jpg";
  }
  else{
    $srca="./2.jpeg";
  }
}

if ($srcb==""){
  if ($b==1 || $b==3){
    $srcb="./3.jpg";
  }
  else{
    $srcb="./2.jpeg";
  }
}

if ($srcc==""){
  if ($c==1 || $c==3){
    $srcc="./3.jpg";
  }
  else{
    $srcc="./2.jpeg";
  }
}

if($srca=="./2.jpeg"){
  $winningdoor=1;
}
else if($srcb=="./2.jpeg"){
   $winningdoor=2;
}
else{
  $winningdoor=3;
}

if($divclick==$aclicked || $divclick==$bclicked || $divclick== $cclicked){
  
  if ($aclicked==1){
    
    if($srca=="./2.jpeg"){
    $result="YOU STAYED AND YOU WON";
      $wonword="YES";
      $secondchoice=1;
        $won=0;
      $wonword="YES";
      $wonb=1;
    }
    else if ($srca=="./3.jpg"){
    $result="YOU STAYED AND YOU LOST";
      $secondchoice=1;
        $won=0;
      $wonword="NO";
      $wonb=0;
    }  
}
  
else if($bclicked==2){
  if ($srcb=="./2.jpeg"){
    $secondchoice=2;
  $result="YOU STAYED AND YOU WON";
            $won=0;
    $wonword="YES";
    $wonb=1;
  }
else if ($srcb=="./3.jpg"){
  $secondchoice=2;
  $result="YOU STAYED AND YOU LOST";
          $won=0;
  $wonword="NO";
  $wonb=0;
  }
}

else if($cclicked==3){
    if ($srcc=="./2.jpeg"){
      $secondchoice=3;
  $result="YOU STAYED AND YOU WON";
              $won=0;
      $wonword="YES";
      $wonb=1;
    }
  
else if ($srcc=="./3.jpg"){
  $secondchoice=3;
  $result="YOU STAYED AND YOU LOST";
          $won=0;
  $wonword="NO";
  $wonb=0;
    } 
}
}

else{
  
    if ($aclicked==1){
      if($srca=="./2.jpeg"){
        $secondchoice=1;
        $result="YOU CHANGED AND YOU WON";
                $won=1;
                  $wonword="YES";
        $wonb=1;
        }
      else if ($srca=="./3.jpg"){
        $secondchoice=1;
      $result="YOU CHANGED AND YOU LOST";
                $won=0;
                  $wonword="NO";
        $wonb=0;
        }
  }
  else if ($bclicked==2){
    if ($srcb=="./2.jpeg"){
      $secondchoice=2;
  $result="YOU CHANGED  AND YOU WON";
              $won=1;
      $wonword="YES";
      $wonb=1;
}
else if ($srcb=="./3.jpg"){
$secondchoice=2;
  $result="YOU CHANGED  AND YOU LOST";
          $won=0;
  $wonword="NO";
  $wonb=0;
}
  }
  else if ($cclicked==3){
    if ($srcc=="./2.jpeg"){
      $secondchoice=1;
  $result="YOU CHANGED AND YOU WON";
              $won=1;
                $wonword="YES";
      $wonb=1;
      }
    else if ($srcc=="./3.jpg"){
    $secondchoice=3;
    $result="YOU CHANGED AND YOU LOST";
              $won=0;
                $wonword="NO";
                  $wonb=0;
      } 
  }
}

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
      <button  type="submit" class="col-md-12 col-lg-12 but" style="height:100%" disabled>
  <div>
EOD;

$myhtml1='<img src="'.$srca.'">';

$myhtml2=<<<'EOD'
  <h1 class="inside"> DOOR ONE </h1>
      </button>
    </div>      

   <div class="col-md-4 box box2"  style="border: 10px solid red;">
     <button  type="submit" class="col-md-12 col-lg-12 but" style="height:100%" disabled>
EOD;

$myhtml3='<img src="'.$srcb.'">';
  
$myhtml4=<<<'EOD'
  <h1 class="inside"> DOOR TWO </h1>
     </button>
    </div>
      
    <div class="col-md-4 box box3">
      <button  type="submit" class="col-md-12 col-lg-12 but" style="height:100%" disabled>
EOD;

$myhtml5='<img src="'.$srcc.'">';

      $myhtml6=<<<'EOD'
  <h1 class="inside" style="position:absolute; left: 8%;"> DOOR THREE </h1>
      </button>
    </div>
  </div>
EOD;
    
$myhtml65='<center> <strong> <h3 style="color:white; font-weight:900">'. $result;

$myhtml7=<<<'EOD'
  </h3> </strong> </center>

</form>
  <button onclick="window.location.href='index.php'" class="btn btn-danger btn-lg button" style="position:absolute;top: 4%; width: 20%;">Play Again</button>
</div>
</body>
  
  <script src="jquery-3.1.1.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"> </script>
  <script src="let.js"></script>
</html>
EOD;

$final= $myhtml.$myhtml1.$myhtml2.$myhtml3.$myhtml4.$myhtml5.$myhtml6.$myhtml65.$myhtml7;

echo $final;

$conn=new mysqli("localhost","webuser","d0nkey5");

if($conn->connect_errno){
   die("Connection failed: " . $conn->connect_error);
} 

$conn->select_db("cs230");

$sql = "INSERT INTO lmad (chosendoor,openeddoor, winningdoor,secondchoice,wonB,wonword,WonWithChange)
VALUES ('$divclick','$chosendoor','$winningdoor','$secondchoice','$wonb','$wonword','$won')";

$result=$conn->query($sql);


$result->close;
$conn->close;

?>
