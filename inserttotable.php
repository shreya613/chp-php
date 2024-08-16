<?php
//connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "example";

//create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//die if connection was not successful
if (!$conn){
    die("sorry we failed to connect " . mysqli_connect_error());
}
else {
    echo "connected successfully<br>";
}


$sql = "INSERT INTO `about` (`name`, `place`) VALUES ('rahul', 'UP')";
$result = mysqli_query($conn,$sql);

//cheake for the table creation success
if($result){
    echo "the record is inserted successfully";
}
else{
    echo "the record is not inserted because " . mysqli_error($conn);
}


?>