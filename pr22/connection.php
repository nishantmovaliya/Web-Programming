<?php
$servername = "localhost";
$username = "root";
$password = "";
//creating connection
$conn = new mysqli($servername, $username, $password);
if (mysqli_connect_error()) {
die("Connection failed: " .mysqli_connect_error());
}
//echo "Connected successfully";
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS Stddb";
if (mysqli_query($conn, $sql)) {
//echo "<br>Database created successfully";
} else {
echo "<br>Error creating database: " . mysqli_error($conn);
}
//select dtabase
mysqli_select_db($conn, "Stddb");
//create table
$sql = "CREATE TABLE STUDENT (ID INT(6) AUTO_INCREMENT PRIMARY KEY, ENROLL_NO INT(10)
,
NAME VARCHAR(20), BRANCH VARCHAR(20), EMAIL VARCHAR(20))";
if(mysqli_query($conn, $sql)){
echo"<br> Table created";
}else{
//echo "<br>Error: ". mysqli_error($conn);
}
?>