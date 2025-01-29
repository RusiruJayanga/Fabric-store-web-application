<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST['your_name'];
    $password = $_POST['your_pass'];

    
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "sapiru";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "SELECT * FROM user WHERE name='$name' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        
        $_SESSION['uname'] = $name;
       
       header("Location: ../front end/home.php");
        exit();
    } else {
       
        echo "Invalid user name or password.";
        
    }

    $conn->close();
}
?>