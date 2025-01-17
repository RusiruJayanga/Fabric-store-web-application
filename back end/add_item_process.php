<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET" || isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
 
    $name1 = $_POST['header'];
    $number0 = $_POST['price'];
    $name2 = $_POST['description'];
    $name = $_FILES['image']['name'];
    $type = $_FILES['image']['type'];
    $data = file_get_contents($_FILES['image']['tmp_name']);


    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "sapiru";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO advertisement (`header`, `price`, `description`, `image`) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siss", $name1, $number0, $name2, $name);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Advertisement added successfully.";
        header("Location: add_item.php");
        exit();
    } else {
        
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Error: Form data is not submitted.";
}
?>
