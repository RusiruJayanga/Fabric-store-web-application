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
    <link rel="stylesheet" href="./css/style2.css" />
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Retrieve form data
        $id = $_POST['item_id'];

        // Connect to database
        $conn = new PDO("mysql:host=localhost;dbname=sapiru", "root", "");
        $stmt = $conn->prepare("SELECT * FROM advertisement WHERE iid = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Fetch and display rows
        while ($row = $stmt->fetch()) {
?>

<main style="margin-top: 100px">
  <div class="card">
    <div class="card__title">
      <div class="icon">
        <a href="#"></a>
      </div>
      <h3>New products</h3>
    </div>
    <div class="card__body">
      <div class="half">
        <div class="featured_text">
          <p class="sub"><?php echo $row['header']; ?> : 1m</p>
          <p class="price">Rs.<?php echo $row['price']; ?>.00</p>
        </div>
        <div class="image">
        <img class="img-fluid img1" src="uploads/<?php echo $row['image']; ?>" alt="" style="  width: 100%; height: 250px; object-fit: cover;"/>
        </div>
      </div>
      <div class="half">
        <div class="description">
          <p>
          <?php echo $row['description']; ?>
          </p>
        </div>
        <form action="../back end/add_to_cart_process.php" method="post">
        <span class="stock"><i class="fa fa-pen"></i> In stock</span>
        <div class="reviews">
          <ul class="stars">
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star-o"></i></li>
          </ul>
          <span>(64 reviews)</span>
        </div>
        <br>
        <p style="font-size: 18px;">Quantity</p>
              <input
              class="numberstyle"
              name="qun"
              type="number"
              min="1"
              step="1"
              value="1"
              style="width: 50px; margin-bottom: auto; margin-top: 10px; font-size: 18px;"
            />
      </div>
    </div>
    <div class="card__footer">
      <div class="action">
              <input type="hidden" name="item_id" value="<?php echo $row['iid']; ?>">
              <input type="hidden" name="header" value="<?php echo $row['header']; ?>">
              <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
              <input type="hidden" name="img" value="<?php echo $row['image']; ?>">
              <button  type="submit">Add to cart</button>
              </form>
      </div>
    </div>
  </div>
</main>

    <?php
  }
} catch (PDOException $e) {
  // errors
  echo "Database Error: " . $e->getMessage();
}
}
?>

    <script src="./js/behav.js"></script>
  </body>
</html>
