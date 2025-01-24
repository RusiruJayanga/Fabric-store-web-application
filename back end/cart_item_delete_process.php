<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id0 = $_POST['cart_id'];

   
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "sapiru";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $sql = "DELETE FROM order1 WHERE iid = '$id0'";
    if ($conn->query($sql) === TRUE) {
      
        if ($conn->affected_rows > 0) {
            
            header("Location: ../front end/cart.php");
            exit();
        } else {
            echo "No rows affected";
        }
    } else {
        
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>