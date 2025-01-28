<?php

$servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "sapiru";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_delete = "DELETE FROM order1";

if ($conn->query($sql_delete) === TRUE) {
    header("Location: ../front end/home.php");
} else {
    echo "Error clearing data: " . $conn->error;
}

$conn->close();
?>