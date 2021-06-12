<?php 

//Development connection
$server="localhost";
$username="root";
$password="";
$db="bank_database";

//Remote database connection
//$server="remotemysql.com";
//$username="QxiwlRmaiO";
//$password="xwUheNygDh";
//$db="QxiwlRmaiO";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
     //Connection is successfully etablished
}

else{
    //Connection not established
    die("connection to this database failed due to " .mysqli_connect_error());
}

?>
