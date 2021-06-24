<?php
require 'connection.php';
if(isset($_POST['insert'])){
$ENROLL_NO = $_POST['ENROLL_NO'];
$NAME = $_POST['NAME'];
$BRANCH = $_POST['BRANCH'];
$EMAIL = $_POST['EMAIL'];
//insert data
$sql = "INSERT INTO STUDENT (ENROLL_NO , NAME, BRANCH, EMAIL)
VALUES ('$ENROLL_NO','$NAME','$BRANCH','$EMAIL')";
if(mysqli_query($conn, $sql)){
echo"<br> <h1>Data Inserted successfully.</h1>";
}else{
echo "<br>Error: ". mysqli_error($conn);
}
mysqli_close($conn);
}
?>