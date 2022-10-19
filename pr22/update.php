<?php
include 'connection.php';
if(isset($_POST['update'])){
$id = $_POST['id'];
$ENROLL_NO = $_POST['ENROLL_NO'];
$NAME = $_POST['NAME'];
$BRANCH = $_POST['BRANCH'];
$EMAIL = $_POST['EMAIL'];
$sql = "UPDATE STUDENT SET ENROLL_NO = '$ENROLL_NO', NAME = '$NAME', BRANCH = '$BRANCH
H', EMAIL = '$EMAIL' WHERE id = '$id' ";
if(mysqli_query($conn, $sql)) {
echo "<br>","<h1> Data Updated Successfully. </h1>";
}else{
echo "<br>Error: ". mysqli_error($conn);
}
mysqli_close($conn);
}
?>