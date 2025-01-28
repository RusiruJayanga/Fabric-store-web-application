<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>viztoza co</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <!-- Main css -->
    <link rel="stylesheet" href="./css/style1.css" />
  </head>
  <body>
    <header class="header">
      <a href="#" class="logo"> <i class="fas fa-wallet"></i> viztoza </a>
      <nav class="navbar">
        <a href="home.html">home</a>
        <a
          href="https://bot.dialogflow.com/c7a73d05-58f0-4d89-a291-3c8a99bdf809"
          target="_blank"
          >chatbot</a
        >
      </nav>
      <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="cart.html" class="fas fa-shopping-cart"></a>
        <div class="fas" id="login-btn"></div>
      </div>
    </header>
    <?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $id = $_POST['name'];
        $conn = new PDO("mysql:host=localhost;dbname=sapiru", "root", "");
        $stmt = $conn->prepare("SELECT * FROM user WHERE name = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
?>
    <section class="plan" id="plan" style="margin-top: 50px">
    <form action="../back end/conformation_email_send_process.php" method="post">
        <div class="box-container">
          <div class="box">
            <h3 class="title">Check out</h3>
            <div class="list">
              <p style=" font-size: 18px;">Your email address is : <?php echo $row['email']; ?><span class="fas fa-check"></span></p>
              <p style=" font-size: 18px;">Your home address is : <?php echo $row['address']; ?><span class="fas fa-check"></span></p>
              <p style=" font-size: 18px;">Estimate dates for delivery : 3<span class="fas fa-check"></span></p>
              <p style=" font-size: 18px;">Delivery method : Cash on Delivery <span class="fas fa-check"></span></p>
              <input type="hidden" name="cart_id" value="<?php echo $row['email']; ?>" />
            </div>
            <?php
        }
    } catch (PDOException $e) {
        echo "Database Error: " . $e->getMessage();
    }
}
?>
<?php 
try {
    $conn = new PDO("mysql:host=localhost;dbname=sapiru", "root", "");
    $stmt = $conn->query("SELECT * FROM order1");
    $total_purchase_price = 0; 
    while ($row = $stmt->fetch()) {
        $total_price = $row['qun'] * $row['price'];
        $total_purchase_price += $total_price;
?>   
      <?php
    }
    echo '<div class="amount"><span>Rs.</span>' . number_format($total_purchase_price, 2) . '</div>';
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
          <input type="submit" value="conform" class="btn" />
          </div></form>
      </section>
    <script src="test.js"></script>
  </body>
</html>
