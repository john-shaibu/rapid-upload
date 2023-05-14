<?php

      // echo '<link rel="stylesheet" href="static/styles/home.css">';

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" href="static/styles/onboarding.css?<?php echo time(); ?>">
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <title>Onboarding | RapidUpload</title>
</head>
<body>
      <div id="page" class="site">
            <div class="container">
                  <div class="onboarding-container">
                        <form action="" method="post">
                              <div class="form-container">
                                    <div class="one form-step active">
                                          <h2>What best describe your role?</h2>
                                          <div class="radio-list">
                                                <input type="radio" name="user_role" id="option1">
                                                <input type="radio" name="user_role" id="option2">
                                                <input type="radio" name="user_role" id="option3">
                                                <input type="radio" name="user_role" id="option4">
                                                <input type="radio" name="user_role" id="option5">
                                                <label for="option1" class="option1">
                                                      <div class="dot"></div>
                                                      <div class="text">
                                                            In-house Marketer
                                                      </div>
                                                </label>
                                                <label for="option2" class="option2">
                                                      <div class="dot"></div>
                                                      <div class="text">
                                                            Agency or service marketer
                                                      </div>
                                                </label>
                                                <label for="option3" class="option3">
                                                      <div class="dot"></div>
                                                      <div class="text">
                                                            Affiliate or Publishing marketer
                                                      </div>
                                                </label>
                                                <label for="option4" class="option4">
                                                      <div class="dot"></div>
                                                      <div class="text">
                                                            Business owner
                                                      </div>
                                                </label>
                                                <label for="option5" class="option5">
                                                      <div class="dot"></div>
                                                      <div class="text">
                                                            Freelance Writer/Editor/Others
                                                      </div>
                                                </label>
                                          </div>
                                    </div>                          
                                    <div class="two form-step">
                                          <h2>How did you hear about Us?</h2>
                                          <div class="radio-list">
                                                <input type="radio" name="information_sorce" id="optiona">
                                                <input type="radio" name="information_sorce" id="optionb">
                                                <input type="radio" name="information_sorce" id="optionc">
                                                <input type="radio" name="information_sorce" id="optiond">
                                                <input type="radio" name="information_sorce" id="optione">

                                                <label for="optione" class="optione">
                                                      <div class="dot"></div>
                                                      <div class="text">
                                                            Social Media
                                                      </div>
                                                </label>
                                                <label for="optiona" class="optiona">
                                                      <div class="dot"></div>
                                                      <div class="text">
                                                            Google Ads
                                                      </div>
                                                </label>
                                                <label for="optionb" class="optionb">
                                                      <div class="dot"></div>
                                                      <div class="text">
                                                            Social media
                                                      </div>
                                                </label>
                                                <label for="optionc" class="optionc">
                                                      <div class="dot"></div>
                                                      <div class="text">
                                                            Through a friend
                                                      </div>
                                                </label>
                                                <label for="optiond" class="optiond">
                                                      <div class="dot"></div>
                                                      <div class="text">
                                                            Other medium
                                                      </div>
                                                </label>
                                          </div>
                                    </div>
                                    <div class="three form-step">
                                          <p>
                                                What has been the <b>The most challenging part</b>
                                                about exporting contents from Google to your Website.
                                          </p>
                                          <div class="response_box">
                                                <label for="">Your response</label>
                                                <input type="text" name="frustration" id="" placeholder="Enter your response">
                                          </div>
                                          
                                    </div>
                                    <div class="btn-group">
                                          <button type="button" class="btn-prev" disabled="disabled">Prev</button>
                                          <button type="button" class="btn-next">Next</button>
                                          <button type="submit" class="btn-submit">Submit</button>
                                    </div>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
      <script src="static/js/onboarding.js?<?php echo time(); ?>"></script>
</body>
</html>