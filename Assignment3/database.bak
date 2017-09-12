<?php 

$tv=0; $phone =0; $window=0; $apple=0; $office=0;

$university= $_POST['collegeName'];
$year= $_POST['year'];
$expectedDate=$_POST['expectedDate'];
$cables=$_POST['internetInformation'];

foreach($cables as $item){
switch($item){
  case 1:
    $tv=1;
    break;
  case 2:
    $phone=1;
    break;
  case 3:
    $window=1;
    break;
  case 4:
    $apple=1;
    break;
  case 5:
    $office=1;
    break;
  default: 
    break;
}
}


for($j=0; $j<10;$j++){
  $name[$j]= "q".$j;
  $values[$j]=$_POST["$name[$j]"];
}

$conn = mysql_connect('localhost','webuser','d0nkey5');

if(!$conn){
  die("There was a problem during connection ".$conn->error);
}
  else{
    echo "Your connection has been established";
  }

$cd = mysql_select_db("cs230");

if(!$cd){
echo'there is error'.mysqli_error($conn);
}
else{
echo'selected';
}


$query="INSERT INTO studsurv1(college,cclass,cyear,havetv,havecable,havephone,havewindows,haveapple,havelinux,haveoffice,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10) VALUES ('$university',$year,$expectedDate,$tv,$tv,$phone,$window,$apple,$office,$office,$values[0],$values[1],$values[2],$values[3],$values[4],$values[5],$values[6],$values[7],$values[8],$values[9])";


if(mysql_query($query)){
  echo "Record was  inserted into the data.";
}
else{
  echo "Record was not inserted". mysql_error();
}


?>

