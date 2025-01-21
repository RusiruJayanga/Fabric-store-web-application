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
    <a href="admin_home.html">
      <button class="butt">
        <i class="fa-sharp fa-solid fa-circle-left"></i> HOME
      </button>
    </a>

    <!-- table -->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Address</th>
          <th scope="col">Edit</th>
        </tr>
      </thead>

<!-- repeat section -->
<?php 
try {
    $conn = new PDO("mysql:host=localhost;dbname=sapiru", "root", "");
    $stmt = $conn->query("SELECT * FROM user");
    while ($row = $stmt->fetch()) {
?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $row['name']; ?></th>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td>
                    <form action="../../back end/user_delete_process.php" method="post">
                            <input type="hidden" name="item_id" value="<?php echo $row['name']; ?>">
                            <button style="width: 100%; background-color:#f00c0c;" type="submit" class="btn btn-primary">Delete</button>
                        </form>
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
