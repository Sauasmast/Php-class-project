<?php

  session_start();

  $firstdice = mt_rand(1,6);

  $seconddice = mt_rand(1,6);

 switch($firstdice){
   case 1:
     $src='./pictures/1.jpg';
     break;
       case 2:
     $src='./pictures/2.jpg';
     break;
      case 3:
     $src='./pictures/3.jpg';
     break;
       case 4:
     $src='./pictures/4.jpg';
     break;
       case 5:
     $src='./pictures/5.jpg';
     break;
       case 6:
     $src='./pictures/6.jpg';
     break;  
 }

 switch($seconddice){
   case 1:
     $src1='./pictures/1.jpg';
     break;
       case 2:
     $src1='./pictures/2.jpg';
     break;
      case 3:
     $src1='./pictures/3.jpg';
     break;
       case 4:
     $src1='./pictures/4.jpg';
     break;
       case 5:
     $src1='./pictures/5.jpg';
     break;
       case 6:
     $src1='./pictures/6.jpg';
     break;  
 }

  $sum= $firstdice + $seconddice;

  firstcheck($sum,$src,$src1);

  //This function deals with checking the dice for the firstroll

  function firstcheck($rollednumbers,$src,$src1){
  
  if($rollednumbers == 2 or $rollednumbers == 3 or $rollednumbers == 12){
    
       $myhtml=<<<'EOD'
    <html>
<head>
  <title> Casino Game</title>
  <link rel="stylesheet" type="text/css" href="./design.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
         
    <body>
          <div class="container">
    <h1> <strong> <b> <center> CASINO CRAPS </center> </b> </strong> </h1>
    
    <div class="small-part">
      <div class="second-part">
EOD;
    
    $myhtml1='<br> <h2 class= "you"> <strong> <center> <b> You Rolled: '.$rollednumbers.'</b> </center> </strong> </h2> <img class="src1" src="'.$src.'"> <img class="src" src="'.$src1.'">';
    
$myhtml2=<<<'EOD'
  <button onclick="window.location.href='index.html'" class="btn btn-danger btn-lg button">Play Again</button>
    </div>
      </div>
    
        <div id="typewriter">
          <h3> <strong> <b> YOUR GUIDE </b> </strong> </h3>
          <p class="typingtest"> </p>
    </div>
    
  </div>
</body>
  
<script src="jquery-3.1.1.js"></script>
  <script src="typed.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
  
  <script>
  document.addEventListener('DOMContentLoaded', function(){
      Typed.new('.typingtest', {
        strings: ["Sorry for this time. <br/> You losed this game <br/> Thank you so much for playing  <br/>"],
        typeSpeed: 10
      });
  });
</script>
    
    </body>
    </html>
EOD;
    
    $final = $myhtml . $myhtml1 . $myhtml2; 
    echo "$final";
  }
  
  else if ($rollednumbers == 7 or $rollednumbers == 11){
      $myhtml=<<<'EOD'
    <html>
<head>
  <title> Casino Game</title>
  <link rel="stylesheet" type="text/css" href="./design.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
         
    <body>
          <div class="container">
    <h1> <strong> <b> <center> CASINO CRAPS </center> </b> </strong> </h1>
    
    <div class="small-part">
      <div class="second-part">
EOD;

    $myhtml1='<br> <h2 class= "you"> <strong> <center> <b> You Rolled: '.$rollednumbers.'</b> </center> </strong> </h2> <img class="src1" src="'.$src.'"> <img class="src" src="'.$src1.'">';
    
     $myhtml2 =<<<'EOD'
       <button onclick="window.location.href='index.html'" class="btn btn-danger btn-lg button">Play Again</button>
    </div>
      </div>
    
        <div id="typewriter">
          <h3> <strong> <b> YOUR GUIDE </b> </strong> </h3>
          <p class="typingtest"> </p>
    </div>
    
  </div>
</body>
  
<script src="jquery-3.1.1.js"></script>
  <script src="typed.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
  
  <script>
  document.addEventListener('DOMContentLoaded', function(){
      Typed.new('.typingtest', {
        strings: ["Congratulation. <br/> You won this game. <br/> Thank you so much for playing.  <br/> If you want to play again click: <br /> PLAY AGAIN"],
        typeSpeed: 10
      });
  });
</script>
    
    </body>
    </html>
EOD;
    
    $final ="{$myhtml}{$myhtml1}{$myhtml2}";
    
    echo "$final";
  }
  
  else{
  $_SESSION['firstroll']=$rollednumbers;
  
  $myhtml=<<<'EOD'
    <html>
<head>
  <title> Casino Game</title>
  <link rel="stylesheet" type="text/css" href="./design.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
         
    <body>
          <div class="container">
    <h1> <strong> <b> <center> CASINO CRAPS </center> </b> </strong> </h1>
    
    <div class="small-part">
      <div class="second-part">
EOD;
     
    $myhtml1='<br> <h2 class= "you"> <strong> <center> <b> You Rolled: '.$rollednumbers.'</b> </center> </strong> </h2> <img class="src1" src="'.$src.'"> <img class="src" src="'.$src1.'">';
    
    $myhtml2=<<<'EOD'
      <form action="secondroll.php" method='POST'>
    <input type="submit" value="Roll Again" class="btn btn-primary btn-lg button">
    </form>
    </div>
      </div>
    
        <div id="typewriter">
          <h3> <strong> <b> YOUR GUIDE </b> </strong> </h3>
          <p class="typingtest"> </p>
    </div>
    
  </div>
</body>
  
<script src="jquery-3.1.1.js"></script>
  <script src="typed.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
  
  <script>
  document.addEventListener('DOMContentLoaded', function(){
      Typed.new('.typingtest', {
        strings: ["You have entered Second Round. <br/> In this round you must exactly bring the same number <br/> that you brought earlier  <br/> If you get 7 you will lose <br /> Are you ready? "],
        typeSpeed: 10
      });
  });
</script>
    
    </body>
    </html>
EOD;
    
    $final ="{$myhtml}{$myhtml1}{$myhtml2}";
    
    echo "$final";
  }
}

?>
