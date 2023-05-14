<?php

      // echo '<link rel="stylesheet" href="static/styles/home.css">';

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" href="static/styles/login.css?<?php echo time(); ?>">
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <title>Register | RapidUpload</title>
</head>
<body>
      <div id="page" class="site">
            <div class="container">
                  <div class="left">
                        <div>
                              <div class="thumbnail">
                                    <img src="static/assets/illustrations/Login png.png" alt="Sign up Illusration">
                              </div>
                              <div>
                                    <h3>Veniam laboris nisi aute proident pariatur reprehenderit.</h3>
                                    <p>
                                          In elit ad Lorem ad consectetur nostrud occaecat nulla. <br>
                                          In elit ad Lorem ad consectetur  nulla.
                                    </p>
                              </div>
                        </div>
                  </div>
                  <div class="right">
                        <div class="login-container">
                              <div class="logo">
                                    <a href="/index.php">
                                          <p>RapidUpload.io</p>
                                    </a>
                              </div>
                              <div class="register_header">
                                    <h3>Login</h3>
                                    <p>Login to RapidUpload.iio</p>
                              </div>
                              <div>
                                    <form action="#" method="post">
                                          <div>
                                                <label for="email">Email</label>
                                                <input type="email" name="email" id="" autofocus placeholder="Enter your Email">
                                          </div>
                                          <div>
                                                <label for="email">Password</label>
                                                <input type="email" name="password" id="" placeholder="Enter your Password">
                                          </div>
                                          <button type="submit">Login</button>
                                    </form>
                              </div>
                              <span>Or</span>
                              <a href="#" class="google-drive-link">
                                    <button>
                                          <i class="ri-google-line"></i>
                                          Sign in with Google
                                    </button>
                              </a>
                              <p>Don't have an account? <a href="register.php">Register</a></p>

                        </div>
                  </div>
            </div>
      </div>
      <script src="static/js/index.js?<?php echo time(); ?>"></script>
</body>
</html>