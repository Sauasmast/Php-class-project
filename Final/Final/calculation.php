
<?php 
//Saugat Dahal 

$combination= $_POST['gotit'];
$choice=$_POST['get_Value'];

if($combination>$choice){
  echo "Your required digits is less than the number of choices";
}

else{
  
$factorial1=1;
$factorial2=1;

for($i=1;$i<=$choice;$i++){
  $factorial1=$factorial1*$i;
}

$divide=($choice-$combination);

for($i=1;$i<=$divide;$i++){
  $factorial2=$factorial2*$i;
}

$possibles=$factorial1/$factorial2;

echo "No of possible combinations if not repeated is:".$possibles;
}

?> 
