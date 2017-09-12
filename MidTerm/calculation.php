<!-- Comment about myInformation
Name: Saugat Dahal
Class: Web Application Using ASP.NET

CSS355 Midterm Exam A
Question No: 2(Check for a Prime Number)
-->


<!-- This is all the html code to display the result and the format from the calculation of the prime number --> 
<html>
<head> 
  <title> Prime Numbers </title>
    
<!-- Connection to the bootstrap -->
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  
</head>
  
<!-- This is the section of my body for the displaying of the html-->  
<body style="background-color: grey;">
<div class="container-fluid col-md-offset-4">
  <h2 style="font-size:2em; font-weight:bold"><strong>Prime Number Table (1-100) </strong> </h2>
  </div>  
<div class="container">
<table class="table table-striped table-hover table-responsive col-md-4">
<thead>
    <tr>
      <th>Numbers From 1 to 100</th>
      <th>Result</th>
    </tr>
  </thead>
  
  <tbody>
    
<?php 
    
    $calculatednumber=$_POST['get_Value'];
    
    $prime="Is a prime number";
    $notprime="Is not a prime number";

    for($j=1; $j<=$calculatednumber; $j++){
    $check= PrimeNumber($j);
    if($check == 2 || $j==1){
    echo ("<tr> 
    <td>".$j."</td>
    <td>".$prime."</td>
    </tr>");
    }
    else{
    echo ("<tr> 
    <td>".$j."</td>
    <td>".$notprime."</td>
    </tr>");
          }
  }

function PrimeNumber($number){
  $count=0;
  for($i=1; $i<=$number; $i++){
    if ($number % $i==0){
      $count++;
    }
  }
    return $count++;
}

?> 
  </tbody>
  
</table>  
</div>
  
  <button class="btn btn-primary" onclick="goBack()" style="position: relative; top: -6px; left: 50%"> Go Back</button>
  
</body>
  
  <!-- Connection to the jquery file -->
  <script src="jquery-3.1.1.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  
  <script>
function goBack() {
    window.history.back()
  }
</script>

</html>