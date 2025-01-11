
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['re_pass'])) {
       
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['pass']; 
        $number = $_POST['re_pass'];
        
        if (empty($name) || empty($email) || empty($password) || empty($number)) {
            echo "All fields are required.";
            exit();
        }
        
        $servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $dbname = "rusiru";

        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
       
        $sql = "INSERT INTO user (`name`, `email`, `password`, `address`) VALUES ('$name', '$email', '$password', '$number')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION['email'] = $email;
           
           header("Location: home.html");
            exit();
        } else {
          
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
      
        echo "All fields are required.";
        exit();
    }
}
?>