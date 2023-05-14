<?php

      // echo '<link rel="stylesheet" href="static/styles/home.css">';

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" href="static/styles/register.css?<?php echo time(); ?>">
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <title>Register | RapidUpload</title>
</head>
<body>
      <div id="page" class="site">
            <div class="container">
                  <div class="left">
                        <div>
                              <div class="thumbnail">
                                    <img src="static/assets/illustrations/Sign up png.png" alt="Sign up Illusration">
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
                                    <a href="index.php">
                                          <p>rapidUpload.io</p>
                                    </a>
                              </div>
                              <div class="register_header">
                                    <h3>Sign Up</h3>
                                    <p>Create an account</p>
                              </div>
                              <div class="google-drive-link">
                                    <a href="onboarding.php">
                                          <button>
                                                <i class="ri-drive-fill"></i>
                                                Continue With Google Drive
                                          </button>
                                    </a>
                              </div>
                              <!-- <span>Or</span> -->
                              <!-- <form action="#" method="post">
                                    <div>
                                          <label for="Email">Continue with Email</label>
                                          <input type="email" name="emial" id="" placeholder="Enter your email">
                                    </div>  
                                    <button type="submit">Create Account</button>  
                              </form> -->
                              <p>Already have an account? <a href="login.php">Login</a></p>

                        </div>
                  </div>
            </div>
      </div>
      <script src="static/js/index.js?<?php echo time(); ?>"></script>
</body>
</html>