<?php

      // echo '<link rel="stylesheet" href="static/styles/home.css">';

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" href="static/styles/dashboard.css?<?php echo time(); ?>">
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <title>Dashboard | RapidUpload</title>
</head>
<body>
      <div id="page" class="site">
            <header>
                 <div class="container">
                  <nav>
                        <div class="logo">
                              <a href="index.php">
                                    <p class="widesreen">rapidUpload.io</p>
                                    <p class="smallscreen"><i class="ri-flashlight-fill"></i></p>
                              </a>
                        </div>
                        <div class="primary-nav">
                              <ul>
                                    <li class="uploads_left">
                                          <div>
                                                <i class="ri-gift-line"></i>
                                                5 uploads left
                                          </div>
                                    </li>
                                    <li class='notification'>
                                          <i class="ri-notification-3-fill"></i>
                                    </li>
                                    <li class="menu-opener">
                                          <div class="dp">
                                                <img src="static/assets/img/demo-user-2.jpg" alt="">
                                          </div>
                                          <div class="user_menu">
                                                <ul>
                                                      <li><i class="ri-user-fill"></i>My Account</li>
                                                      <li><i class="ri-logout-fill"></i>Logout</li>
                                                </ul>
                                          </div>
                                    </li>
                              </ul>
                        </div>
                  </nav>
                 </div>
            </header>

            <main>
                  <div class="upload-panel-container">
                        <div class="container">
                              <div class="panel-wrapper">
                                    <div class="panel left">
                                          <div class="panel_header">
                                                <form action="#" method="post">
                                                      <div class="email-select">
                                                            <i class="ri-drive-fill"></i>
                                                            <select name="drive" id="">
                                                                  <option value="johndoe@gmail.com">
                                                                        johndoe@gmail.com
                                                                  </option>
                                                            </select>
                                                      </div>
                                                </form>
                                                <form action="#" method="get">
                                                      <div class="search_panel">
                                                            <div>
                                                                  <i class="ri-search-line"></i>
                                                                  <input type="text" name="document_name" id="" placeholder="Search for a document">
                                                            </div>
                              
                                                            <button class="filter" type="button">
                                                                  <i class="ri-filter-3-line"></i>
                                                                  Filter
                                                            </button>
                                                      
                                                      </div>
                                                </form>
                                          </div>
                                          <div class="panel_body">
                                                <ul class="available-document-container">
                                                      <li class="available-documents">
                                                            <h4>How to Upload Google Docs to WordPress</h4>
                                                            <span>12-1-2023 • 1 : 00pm</span>
                                                            <div>
                                                                  <p>
                                                                        <span class="state">Ready to download</span>
                                                                        <a href="#" class="edit-btn" title="Edit Document">
                                                                              <button>
                                                                                    <i class="ri-edit-line"></i>
                                                                              </button>
                                                                        </a>
                                                                  </p>
                                                                  <button class="btn-import">
                                                                        import
                                                                        <i class="ri-arrow-right-line"></i>
                                                                  </button>
                                                            </div>
                                                      </li>
                                                      <li class="available-documents">
                                                            <h4>How to Upload Google Docs to WordPress</h4>
                                                            <span>12-1-2023</span>
                                                            <div>
                                                                  <p>
                                                                        <span class="state">Ready to download</span>
                                                                        <a href="#" class="edit-btn" title="Edit Document">
                                                                              <button>
                                                                                    <i class="ri-edit-line"></i>
                                                                              </button>
                                                                        </a>
                                                                  </p>
                                                                  <button class="btn-import">
                                                                        import
                                                                        <i class="ri-arrow-right-line"></i>
                                                                  </button>
                                                            </div>
                                                      </li>
                                                      <li class="available-documents">
                                                            <h4>How to Upload Google Docs to WordPress</h4>
                                                            <span>12-1-2023</span>
                                                            <div>
                                                                  <p>
                                                                        <span class="state">Ready to download</span>
                                                                        <a href="#" class="edit-btn" title="Edit Document">
                                                                              <button>
                                                                                    <i class="ri-edit-line"></i>
                                                                              </button>
                                                                        </a>
                                                                  </p>
                                                                  <button class="btn-import">
                                                                        import
                                                                        <i class="ri-arrow-right-line"></i>
                                                                  </button>
                                                            </div>
                                                      </li>
                                                      <li class="available-documents">
                                                            <h4>How to Upload Google Docs to WordPress</h4>
                                                            <span>12-1-2023</span>
                                                            <div>
                                                                  <p>
                                                                        <span class="state">Ready to download</span>
                                                                        <a href="#" class="edit-btn" title="Edit Document">
                                                                              <button>
                                                                                    <i class="ri-edit-line"></i>
                                                                              </button>
                                                                        </a>
                                                                  </p>
                                                                  <button class="btn-import">
                                                                        import
                                                                        <i class="ri-arrow-right-line"></i>
                                                                  </button>
                                                            </div>
                                                      </li>
                                                      <li class="available-documents">
                                                            <h4>How to Upload Google Docs to WordPress</h4>
                                                            <span>12-1-2023 </span>
                                                            <div>
                                                                  <p>
                                                                        <span class="state">Ready to download</span>
                                                                        <a href="#" class="edit-btn" title="Edit Document">
                                                                              <button>
                                                                                    <i class="ri-edit-line"></i>
                                                                              </button>
                                                                        </a>
                                                                  </p>
                                                                  <button class="btn-import">
                                                                        import
                                                                        <i class="ri-arrow-right-line"></i>
                                                                  </button>
                                                            </div>
                                                      </li>
                                     
                                                </ul>
                                          </div>
                                    </div>
                                    <div class="panel right">
                                          <div class="panel_header">
                                                <div class="heading">
                                                      <h3>Imported Documents</h3>
                                                      <div class="advance_search">
                                                            Filter imports
                                                            <i class="ri-arrow-down-s-line"></i>
                                                      </div>
                                                </div>
                                                <div class="search-filter">
                                                      

                                                </div>
                                          </div>
                                          <div class="panel_body">

                                          </div>
                                    </div>

                              </div>
                        </div>
                  </div>



                 <div class="registration-process-container">
                        <div class="registration-process">
                              <span>
                                    3/5
                              </span>
                              <div>
                                    <b>Registration completed</b>
                                    <div class="progress-line-container">
                                          <div class="progress-line"></div>
                                    </div>
                              </div>
                              <i class="ri-arrow-down-s-line reg-details-trigger"></i>
                        </div>
                        <div class="registration-details">
                              <ul>
                                    <li class="action-done">
                                          <p>1</p>
                                          <div>
                                                <b>Register</b>
                                                <span>Create an acount</span>
                                          </div>
                                    </li>
                                    <li class="action-done">
                                          <p>2</p>
                                          <div>
                                                <b>Connect Drive</b>
                                                <span>Connect your Google Drive account</span>
                                          </div>
                                    </li>
                                    <li class="action-done">
                                          <p>3</p>
                                          <div>
                                                <b>Connect Blog</b>
                                                <span>Connect destination Blogg</span>
                                          </div>
                                    </li>
                                    <li>
                                          <p>4</p>
                                          <div>
                                                <b>Import Document</b>
                                                <span>Import your first doucument</span>
                                          </div>
                                    </li>
                                    <li>
                                          <p>5</p>
                                          <div>
                                                <b>Export Document</b>
                                                <span>Export your first doucument</span>
                                          </div>
                                    </li>
                                    <li>
                                          <p><i class="ri-check-line"></i></p>
                                          <div>
                                                <b>Done</b>
                                                <span>Registraion complete</span>
                                          </div>
                                    </li>
                              </ul>
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
                                          <li><a href="privacypolicy.css">Privacy Policy</a></li>
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
      <script src="static/js/dashboard.js?<?php echo time(); ?>"></script>
</body>
</html>