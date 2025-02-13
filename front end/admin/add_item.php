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

    <!-- request section -->

    <section
      class="contact_section layout_padding"
      style="
        margin-top: 50px;
        width: 60%;
        margin-left: auto;
        margin-right: auto;
      "
    >
      <div class="container px-0"></div>
      <div class="container container-bg">
        <div class="row">
          <div class="col-lg-7 col-md-6 px-0"></div>
          <div class="col-md-6 col-lg-5 px-0">
            <form
              method="post"
              action="../../back end/add_item_process.php"
              enctype="multipart/form-data"
              id="advertisementForm"
            >
              <h1 class="mb-0" style="text-align: center; margin-bottom: 30px;">Add Advertisement</h1>

              <div>
                <input type="text" placeholder="Header" name="header" />
              </div>
              <div>
                <input type="text" placeholder="Price (Rs)" name="price" />
              </div>
              <div>
                <input
                  type="text"
                  class="message-box"
                  placeholder="Description"
                  name="description"
                />
              </div>
              <input type="file" name="image" />

              <div class="d-flex">
                <button>Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- end request section -->
  </body>
</html>
