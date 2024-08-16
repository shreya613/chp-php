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
else {
    echo "connected successfully";
}


//create a database
$sql = "CREATE DATABASE sara3";
$result = mysqli_query($conn,$sql);

//cheake for the database creation success
if($result){
    echo "the database is created successfully";
}
else{
    echo "the database is not created because " . mysqli_error($conn);
}




?>