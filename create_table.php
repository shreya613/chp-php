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
    echo "connected successfully";
}


//create a table in the database
$sql = "CREATE TABLE `about2` (`user` INT(10) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `place` VARCHAR(255) NOT NULL , `date` DATE NOT NULL , PRIMARY KEY (`user`))";
$result = mysqli_query($conn,$sql);

//cheake for the table creation success
if($result){
    echo "the table is created successfully";
}
else{
    echo "the table is not created because " . mysqli_error($conn);
}




?>