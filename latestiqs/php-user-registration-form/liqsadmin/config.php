<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "latestiqs";
$conn;
$conn = mysqli_connect($host,$user,$password,$database);

if($conn){
	echo "Database Connected Successfully";
}
else{
   echo "Database Connection Error";
}

?>
