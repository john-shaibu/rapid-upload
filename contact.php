<?php

      /* echo '<link rel="stylesheet" href="static/styles/privacypolicy?v.css">'; */

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" href="static/styles/contact.css?<?php echo time(); ?>">
      <link rel="stylesheet" href="static/styles/index.css?<?php echo time(); ?>">
      <!-- <link rel="stylesheet" href="static/styles/privacypolicy.css"> -->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <title>Contact | RapidUpload</title>
</head>
<body>
      <div id="page" class="site">
            <header>
                  <div class="container">
                        <nav>
                              <div class="logo">
                                    <a href="index.php">
                                          <p>rapidUpload.io</p>
                                    </a>
                              </div>
                              <a href="#" class="menu-trigger">
                                    <i class="ri-menu-3-line"></i>
                              </a>
                              <div class="menu">
                                    <a href="#" class="close"><i class="ri-close-line"></i></a>
                                    <ul>
                                          <li><a href="index.php">Home</a></li>
                                          <li><a href="about.php">About</a></li>
                                          <li><a href="why_rapidupload.php">Why RapidUpload</a></li>
                                          <li><a href="pricing.php">Pricing</a></li>
                                          <!-- <li><a href="/about.html">Why rapidUpload?</a></li> -->
                                          <li><a href="affiliate.php">Affiliate</a></li>
                                          <li class="cta-button">
                                                <a href="register.php"><button>Get 5 free uploads</button></a>
                                          </li>
                                    </ul>
                              </div>
                        </nav>
                  </div>
            </header>
            <main>
                  <div class="contact">
                        <div class="container">
                              <div class="grid">
                                    <div class="contact_header">
                                          <h2>Contact Us</h2>
                                          <p>
                                                Eiusmod aliquip nostrud excepteur sunt <br>
                                                irure minim reprehenderit nostrud in cillum est cillum sunt amet.
                                          </p>
                                    </div>
                                    <div class="contact-form">
                                          <h3>Send us a message</h3>
                                          <form action="" method="post">
                                                <div>
                                                      <div>
                                                            <label for="">Fullname</label>
                                                            <input type="text" placeholder="Fullname">
                                                      </div>
                                                      <div>
                                                            <label for="">Email</label>
                                                            <input type="email" placeholder="Email">
                                                      </div>
                                                </div>
                                                <div>
                                                      <div>
                                                            <label for="">Phone</label>
                                                            <input type="tel" placeholder="Phone number">
                                                      </div>
                                                      <div>
                                                            <label for="">Subject</label>
                                                            <input type="email" placeholder="Subject">
                                                      </div>
                                                </div>
                                                <div>
                                                      <label for="message">Messsage</label>
                                                      <textarea name="message" id="" placeholder="Message"></textarea>
                                                </div>
                                           
                                                <button type="submit">Send Message</button>
                                          </form>
                                    </div>
                              </div>
                        </div>
                  </div>

            </main>
            <footer>
                  <div class="container">
                        <div class="grid">
                              <div>
                                    <div class="logo">
                                          <a href="/index.php">
                                                <p>rapidUpload.io</p>
                                          </a>
                                    </div>
                                    <p>
                                          Save hundred of hours & thousands of dollars by instantly exporting 
                                          Google Docs to wordpress and Medium.
                                    </p>
                              </div>
                              <div>
                                    <h4>Company</h4>
                                    <ul>
                                          <li><a href="about.php">About</a></li>
                                          <li><a href="pricing.php">Pricing</a></li>
                                          <li><a href="privacy_policy.php">Privacy Policy</a></li>
                                          <li><a href="terms_and_condition.php">Terms and condition</a></li>
                                    </ul>
                              </div>
                              <div>
                                    <h4>Support</h4>
                                    <ul>
                                          <li><a href="#">Help</a></li>
                                          <li><a href="contact.php">Contact</a></li>
                                          <li><a href="affiliate.php">Affiliate Program</a></li>
                                          <!-- <li><a href="">Terms and condition</a></li> -->
                                    </ul>
                                    
                              </div>
                              <div>
                                    <h4>Resources</h4>
                                    <ul>
                                          <li><a href="#">Blogs</a></li>
                                          <li><a href="">Products</a></li>
                                          <li><a href="">FAQ</a></li>
                                          <!-- <li><a href="">Terms and condition</a></li> -->
                                    </ul>                                    
                              </div>
                        </div>
                  </div>
                  <div class="socials">
                        <div class="container">
                              <p>Copyright &copy; 2023 • RapidUpload.io</p>
                              <div>
                                    <a href="#"><i class="ri-twitter-fill"></i></a>
                                    <a href="#"><i class="ri-facebook-fill"></i></a>
                                    <a href="#"><i class="ri-instagram-fill"></i></a>
                                    <a href="#"><i class="ri-linkedin-fill"></i></a>
                                    <a href="#"><i class="ri-youtube-fill"></i></a>
                              </div>
                        </div>
                  </div>
            </footer>
      </div>
      <script src="static/js/index.js?<?php echo time(); ?>"></script>
</body>
</html>