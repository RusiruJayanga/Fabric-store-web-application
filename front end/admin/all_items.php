<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Warden All Advertisement</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <!-- Font Icon -->
    <script
      src="https://kit.fontawesome.com/45a812b4f2.js"
      crossorigin="anonymous"
    ></script>
    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />

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
          <th scope="col">Header</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
          <th scope="col">Image</th>
          <th scope="col">Edit</th>
        </tr>
      </thead>

      <!-- repeat section -->
      <?php 
      try {
          $conn = new PDO("mysql:host=localhost;dbname=sapiru", "root", "");
          $stmt = $conn->query("SELECT * FROM advertisement");
          while ($row = $stmt->fetch()) {
      ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $row['header']; ?></th>
                    <td>Rs.<?php echo $row['price']; ?>.00</td>
                    <td><?php echo $row['description']; ?></td>
                    <td><img src="img/<?php echo $row['image']; ?>" style="width:50px; hight:50px;"></td>
                    <td>
                        delete
                    </td>
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
