<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign Up Form by Colorlib</title>
    <script
      src="https://kit.fontawesome.com/45a812b4f2.js"
      crossorigin="anonymous"
    ></script>
    <!-- Main css -->
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <div class="main">
      <!-- Sing in  Form -->
      <section class="sign-in">
        <div class="container">
          <div class="signin-content">
            <div class="signin-image">
              <figure>
                <img src="images/signin-image.jpg" alt="sing up image" />
              </figure>
            </div>

            <div class="signin-form">
              <h2 class="form-title">Admin Login</h2>
              <form method="POST" action="../back end/adminlog_process.php" class="register-form" id="login-form">
                <div class="form-group">
                  <label for="your_name"
                    ><i class="zmdi zmdi-account material-icons-name"></i
                  ></label>
                  <input
                    type="text"
                    name="your_name"
                    id="your_name"
                    placeholder="Your User Name"
                  />
                </div>
                <div class="form-group">
                  <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                  <input
                    type="password"
                    name="your_pass"
                    id="your_pass"
                    placeholder="Password"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="checkbox"
                    name="remember-me"
                    id="remember-me"
                    class="agree-term"
                  />
                </div>
                <div class="form-group form-button">
                  <input
                    type="submit"
                    name="signin"
                    id="signin"
                    class="form-submit"
                    value="Log in"
                  />
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
