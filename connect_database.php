<?php
//connecting to database
$servername = "localhost";
$username = "root";
$password = "";

//create a connection
$conn = mysqli_connect($servername, $username, $password);

//die if connection was not successful
if (!$conn){
    die("sorry we failed to connect " . mysqli_connect_error());
 
}

echo "connected successfully";

?>