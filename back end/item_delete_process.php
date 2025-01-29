<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id0 = $_POST['item_id'];

   
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "sapiru";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM advertisement WHERE iid = '$id0'";
    if ($conn->query($sql) === TRUE) {
      
        if ($conn->affected_rows > 0) {
            
            header("Location: ../front end/admin/all_items.php");
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