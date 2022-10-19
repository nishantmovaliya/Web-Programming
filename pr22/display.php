<?php
include 'connection.php';
if (isset($_POST['display'])){
$sql = "SELECT * FROM STUDENT";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
echo "<h1>Student Records</h1>";
echo "<table style=\" border: 1px solid black; border-collapse: collapse;\">";
echo "<tr><th>ID</th><th>Enroll-no</th><th>Name</th><th>Branch</th><th>EmailId</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
echo "<tr style=\" border: 1px solid black;\">";
foreach($row as $key => $value){
echo "<td style=\" border: 1px solid black;\">".$value."</td>";
}
echo "</tr>";
}//while
echo "</table>";
} else {
echo "<br>0 results";
}
mysqli_close($conn);
}
?>