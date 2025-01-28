<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cart_id'])) {
    $user_email = $_POST['cart_id'];
    
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "sapiru";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql_user_info = "SELECT name, address FROM user WHERE email = '$user_email'";
    $result_user_info = $conn->query($sql_user_info);

    if ($result_user_info->num_rows > 0) {
    
        $row_user_info = $result_user_info->fetch_assoc();
        $username = $row_user_info['name'];
        $user_address = $row_user_info['address'];

        $sql_order1 = "SELECT header, price, qun, id FROM order1";
        $result_order1 = $conn->query($sql_order1);

        if ($result_order1->num_rows > 0) {
         
            while ($row_order1 = $result_order1->fetch_assoc()) {
                $header = $row_order1['header'];
                $price = $row_order1['price'];
                $quantity = $row_order1['qun'];
                $item_id = $row_order1['id'];

                $sql_insert_order2 = "INSERT INTO order2 (header, price, qun, client, iid, address) 
                                      VALUES ('$header', '$price', '$quantity', '$username', '$item_id', '$user_address')";

                if ($conn->query($sql_insert_order2) === TRUE) {

                    $subject = "Thanks for your order.";
                    $message = "Hey $username, just want to drop a quick note to express our genuine gratitude. Your purchase allows us to continue to do what we love and provide you with quality products.";
                    $headers = "From: rusirujayanga@gmail.com";
                    
                    if (mail($user_email, $subject, $message, $headers)) {
                        header("Location: thankyou.php");
                        exit();
                    } else {
                        header("Location: thankyou.php");
                    }
                } else {
                    echo "Error inserting data into order2 table: " . $conn->error;
                }
            }
        } else {
            echo "No orders found for this user.";
        }
    } else {
        echo "User not found.";
    }

    $conn->close();
}
?>