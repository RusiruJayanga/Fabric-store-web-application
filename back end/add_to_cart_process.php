<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST['item_id'];
    $email = $_POST['header'];
    $password = $_POST['price']; 
    $name1 = $_POST['img'];
    $number = $_POST['qun'];
   
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "sapiru";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

 
    $sql = "INSERT INTO order1 (`iid`, `header`, `price`, `image`, `qun`) VALUES ('$name', '$email', '$password', '$name1', '$number')";
    if ($conn->query($sql) === TRUE) {
        
        $_SESSION['email'] = $email;
    
        header("Location: ../front end/admin/home.php");
        exit();
    } else {
       
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

