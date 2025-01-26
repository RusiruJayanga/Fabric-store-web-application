<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number']; 
    $message = $_POST['message'];

    
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "sapiru";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $sql = "INSERT INTO message (`name`, `email`, `phonenumber`, `message`) VALUES ('$name', '$email', '$number', '$message')";
    if ($conn->query($sql) === TRUE) {
        
        $_SESSION['email'] = $email;
        
        header("Location: maintest.php");
        exit();
    } else {
        
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
