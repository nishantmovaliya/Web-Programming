<?php
include 'connection.php';
if (isset($_POST['delete'])){
$id = $_POST['id'];
$sql = "DELETE FROM STUDENT WHERE ID = $id";
if(mysqli_query($conn, $sql)){
echo"<br><h1> Data Delete Successfully.</h1>";
}else{
echo "<br>Error: ". mysqli_error($conn);
}
mysqli_close($conn);
}
?>