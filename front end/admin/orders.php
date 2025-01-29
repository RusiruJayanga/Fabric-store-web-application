<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Add Advertisement</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />
    <!-- Font Icon -->
    <script
      src="https://kit.fontawesome.com/45a812b4f2.js"
      crossorigin="anonymous"
    ></script>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/style3.css" rel="stylesheet" />
  </head>
  <body>
    <a href="admin_home.php">
      <button class="butt">
        <i class="fa-sharp fa-solid fa-circle-left"></i> HOME
      </button>
    </a>

    <!-- table -->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">User name</th>
          <th scope="col">Item name</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Item id</th>
          <th scope="col">User address</th>
        </tr>
      </thead>

      <!-- repeat section -->
      <?php 
      try {
          $conn = new PDO("mysql:host=localhost;dbname=sapiru", "root", "");
          $stmt = $conn->query("SELECT * FROM order2");
          while ($row = $stmt->fetch()) {
      ?>
                  <tbody>
                      <tr>
                          <td><?php echo $row['client']; ?></td>
                          <td><?php echo $row['header']; ?></td>
                          <td><?php echo $row['price']; ?></td>
                          <td><?php echo $row['qun']; ?></td>
                          <td><?php echo $row['iid']; ?></td>
                          <td><?php echo $row['address']; ?></td>
                      </tr>
                  </tbody>
      <?php
          }
      } catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
      }
      ?>
      <!-- end of repeat section -->
    </table>
  </body>
</html>
