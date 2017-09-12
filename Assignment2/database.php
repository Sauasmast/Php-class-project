
<html>
<head> 
  <title> GDP Database</title>
  <link type="text/css" rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
   <link type="text/css" rel="stylesheet" href="./database.css">
</head>
  
<body id="grad">
  
  <center> <h2> <strong> GDP DATABASE INFORAMTION </strong> </h2> </center>
  
  <button onclick="goback()" id="goingback()" class="btn btn-danger btn-lg">Go Back</button>
<br>
<br>
<table class="table table-striped table-condensed table-bordered table-hover table-responsive">
  
  <tr class="success">
    <td> Country code </td>
    <td> Rank </td>
    <td> Country Name </td>
    <td> GDP </td>
  </tr>
 
<?php 
//Get the value from the form
$information= $_POST['get_Value'];
$selectedOption = $_POST['selectionOption'];

// Declaration of varaiable for interconnection in php
$hostname="localhost";
$username="webuser";
$password="d0nkey5";

//Establish connection between php and mysql
$conn= mysql_connect($hostname,$username,$password);
                 
//select a specific database for the execution
mysql_select_db("cs230");

//Check connection between the php and mysql
if(!$conn){
  die($conn->connect_error);
}

//query for the database

if($selectedOption == "first"){
$query="SELECT * FROM SAUGAT WHERE Rank='$information'";
}
else if ($selectedOption == "second"){
$query="SELECT * FROM SAUGAT WHERE CountryCode='$information'";
}
else if ($selectedOption == "third"){
$query="SELECT * FROM SAUGAT WHERE CountryName='$information'";
}

$sql=mysql_query($query);

$result=mysqli_query($conn, $sql);



// To fetch a data out of sql 
      while($row=mysql_fetch_assoc($sql)){
	echo $htmlcoding;
        echo "<tr>
        <td>".$row['CountryCode']."</td>
        <td>".$row['Rank']."</td>
          <td>".$row['CountryName']."</td>
          <td>".$row['GDP']."</td>
          </tr>";
}


//connection closed and secured
mysql_close();

?>

 
  </table>
  

</body>
  
  
<!-- script for the jquery and bootstrap -->
<script src="./jquery-3.1.1.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
  
  <script src="./database.js"></script>
  
</html>


 
