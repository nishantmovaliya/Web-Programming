<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Logged Page</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    
<?php 
$conn = "";
function db_connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    //creating connection
    global $conn;
    
    $conn = new mysqli($servername, $username, $password);
    if (mysqli_connect_error()) {
        die("Connection failed: " .mysqli_connect_error());
    }
    //echo "Connected successfully";
}

function create_db(){
    db_connection();
    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS pr21";
    global $conn;
    if (mysqli_query($conn, $sql)) {
        //echo "<br>Database created successfully";
    } else {
        echo "<br>Error creating database: " . mysqli_error($conn);
    }

    select_db();

    //create table
    $sql = "CREATE TABLE userdata(ID INT(6) AUTO_INCREMENT PRIMARY KEY, USER_NAME VARCHAR(30),
            EMAIL VARCHAR(50), USER_PASSWORD VARCHAR(30))";

    if(mysqli_query($conn, $sql)){
        echo"<br> Table created";
    }else{
        //echo "<br>Error: ". mysqli_error($conn);
    }
}

//select dtabase
function select_db(){
    global $conn;
    mysqli_select_db($conn, "pr21");
}



function insert_data($name , $email , $password){
    create_db();
    //insert data
    $sql = "INSERT INTO userdata (USER_NAME , EMAIL , USER_PASSWORD)
    VALUES ('$name','$email','$password')";
    global $conn;
    if(mysqli_query($conn, $sql)){
        echo"<br> Succesfully Account Created";
    }else{
        echo "<br>Error: ". mysqli_error($conn);
    }
}//f

function retrieve_data($email){
    create_db();
    //retrive data
    $sql = "SELECT * FROM userdata WHERE EMAIL = '$email' ";
    global $conn;
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row =  mysqli_fetch_assoc($result);
    }else{
        $row = "null";
    }
    return $row; 
}



if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $db_name = "";
    $db_email = "";
    $db_password = "";

    $result = retrieve_data($email);

    if ($result != "null") {
        // output data of each row
        $db_name = $result['USER_NAME']; 
        $db_email = $result['EMAIL']; 
        $db_password = $result['USER_PASSWORD']; 
    } else {
        //echo "<br>0 results";
    }

    if($email == $db_email){
       if($password == $db_password){
           echo "Hello ",$db_name,"<br>";
           echo "You have successfully loged in";
       }else{
           echo "wrong password";
       } 
    }else{
        echo "Account not found";
    }
}//login


if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    insert_data($name , $email , $password);
}

?>

</body>
</html>