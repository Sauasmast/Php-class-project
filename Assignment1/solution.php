<?php 

$selectedOption= $_POST['opion'];

$getValue=$_POST['givenVal'];

$second=$_POST['secondVal'];

$calculatedValue=0;

switch($selectedOption){
    
case "Distance":
    
    if ($second=="Kilometer"){
  $calculatedValue=$getValue*1.60934;
    }
     else if ($second=="Miles"){
  $calculatedValue=$getValue*0.621371;
    }
  break;
    
case "Weight":
     
    if ($second=="Pound"){
  $calculatedValue=$getValue*0.453592;
    }
      else if ($second=="Kilogram"){
  $calculatedValue=$getValue*2.20462;
    }
    break;
    
case "Temperature":
    
  if ($second=="Farhenheit"){
  $calculatedValue=(($getValue*9)/5)+32;
    }
      else if ($second=="Celsius"){
  $calculatedValue=(($getValue-32)*5)/9;
    }
  break;
    
  case "Volume":
    
    if ($second=="Gallon"){
   $calculatedValue=$getValue*0.264172;
    }
      else if ($second=="Liter"){
  $calculatedValue=$getValue*3.78541;
    }
  
   break;
    
    default:
    $calculatedValue=0;
}
?>

<html>
  
<head> 
<title> Sauasmast Conversion</title>
   <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="./index.css">
  
  
</head>
  
<body>
    <div class="container">
        <div class="col-xs-offset-3">
  <h1> SAUASMAST CONVERSION</h1>
  <br>
  

  
  <form action="index.php" method="post" name="sau">
  <div class="row converter">
  <div class="form-group col-md-6">
  <label for="sel1" class="text-primary la">Conversion Type</label>
  <select class="form-control" id="sel1" id="jid" onchange="callme()" name="opion" disabled>
    <option selected><?php echo $selectedOption ?></option>
  </select>
</div>
    </div>
  
  <div class="row ">
    <span class="label label-success la int">VALUE :</span>
  <input type="text" class="input-sm int" id="miles" size=10 name="givenVal" value=" <?php echo $getValue ?>" disabled>
  
     <span class="glyphicon glyphicon-random" id="symbol"></span>
  
  
  <span class="label label-success la" id="kilometer"> VALUE :</span>
  <input type="text" class="input-sm int" id="kilo" size=10  value= "<?php echo $calculatedValue ?>" disabled>
    
    </div>
    
    <div class="row btun">
      <button class="btn btn-primary btn-lg" type="submit" id="conve" onclick="goback()"> Go Back </button> 
    </div>
    
    </form>
      </div>
        
  </div>
  
  <script src="./jquery-3.1.1.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="./conversion.js"></script>
 
</body>  
</html>
