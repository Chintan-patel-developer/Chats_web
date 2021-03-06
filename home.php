<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Home</title>
          <link rel="stylesheet" href="./css/theme.css">
          <link rel="stylesheet" href="./css/home.css">
          <script src="./js/alerts-boxes/js/sweetalert.min.js"></script>
</head>

<body>
          <section class="container">
                    <header>
                              <div class="slide_1">
                                        <div class="search_box">
                                                  <label for="" class="">
                                                            <ion-icon class="s_icon" name="search-outline"></ion-icon>
                                                            <input type="text" name="search" id="search"
                                                                      class="search_bar" placeholder="Search.....">
                                                  </label>
                                        </div>
                              </div>
                              <div class="slide_2">
                                        <div class="icon_box">
                                                  <div class="Togglebtn">
                                                            <button class="btn" onclick="ToggleTheme()"></button>
                                                  </div>
                                        </div>
                                        <div class="icon_box">
                                                  <ion-icon class="icon" name="home-outline" onclick="logout()">
                                                  </ion-icon>
                                                  <input type=" button " value="l" onclick="logout() ">
                                        </div>
                                        <div class="icon_box ">
                                                  <ion-icon name="exit-outline "></ion-icon>
                                        </div>
                                        <a href="./chat_page.html ">
                                                  <div class="icon_box ">
                                                            <ion-icon name="chatbox-outline "></ion-icon>
                                                  </div>
                                        </a>
                                        <div class="icon_box ">
                                                  <ion-icon class="icon " name="notifications-outline "></ion-icon>
                                        </div>
                                        <div class="icon_box ">
                                                  <?php

                                                  ?>
                                                  <img src="./img/6.jpg " alt=" " srcset=" ">
                                        </div>
                              </div>
                    </header>
                    <section class="feedboxs ">
                              <!-- <div class="box b1 ">one</div> -->
                              <div class="box b2 ">
                                        <div class="feedbox ">
                                                  <header>
                                                            <div class="content ">
                                                                      <img src="./img/15.jpg " alt=" ">
                                                                      <div class="details ">
                                                                                <span>Chintan patel</span>
                                                                                <p>Active now</p>
                                                                      </div>
                                                            </div>
                                                            <div class="dots ">
                                                                      <ion-icon name="ellipsis-vertical-outline ">
                                                                      </ion-icon>
                                                            </div>
                                                  </header>
                                                  <section>
                                                            <div class="feed ">
                                                                      <div class="feedimg ">
                                                                                <img src="./img/3.jpg " alt=" "
                                                                                          srcset=" ">
                                                                      </div>
                                                                      <div class="data_send ">
                                                                                <div class="left ">
                                                                                          <ion-icon
                                                                                                    name="heart-outline ">
                                                                                          </ion-icon>
                                                                                          <ion-icon
                                                                                                    name="chatbubble-outline ">
                                                                                          </ion-icon>
                                                                                          <ion-icon
                                                                                                    name="paper-plane-outline ">
                                                                                          </ion-icon>
                                                                                </div>
                                                                                <div class="right ">
                                                                                          <ion-icon
                                                                                                    name="bookmark-outline ">
                                                                                          </ion-icon>
                                                                                </div>
                                                                      </div>
                                                            </div>
                                                  </section>
                                        </div>

                                        <div class="feedbox ">
                                                  <header>
                                                            <div class="content ">
                                                                      <img src="./img/15.jpg " alt=" ">
                                                                      <div class="details ">
                                                                                <span>Chintan patel</span>
                                                                                <p>Active now</p>
                                                                      </div>
                                                            </div>
                                                            <div class="dots ">
                                                                      <ion-icon name="ellipsis-vertical-outline ">
                                                                      </ion-icon>
                                                            </div>
                                                  </header>
                                                  <section>
                                                            <div class="feed ">
                                                                      <div class="feedimg ">
                                                                                <img src="./img/4.jpg " alt=" "
                                                                                          srcset=" ">
                                                                      </div>
                                                                      <div class="data_send ">
                                                                                <div class="left ">
                                                                                          <ion-icon
                                                                                                    name="heart-outline ">
                                                                                          </ion-icon>
                                                                                          <ion-icon
                                                                                                    name="chatbubble-outline ">
                                                                                          </ion-icon>
                                                                                          <ion-icon
                                                                                                    name="paper-plane-outline ">
                                                                                          </ion-icon>
                                                                                </div>
                                                                                <div class="right ">
                                                                                          <ion-icon
                                                                                                    name="bookmark-outline ">
                                                                                          </ion-icon>
                                                                                </div>
                                                                      </div>
                                                            </div>
                                                  </section>
                                        </div>

                                        <div class="feedbox ">
                                                  <header>
                                                            <div class="content ">
                                                                      <img src="./img/15.jpg " alt=" ">
                                                                      <div class="details ">
                                                                                <span>Chintan patel</span>
                                                                                <p>Active now</p>
                                                                      </div>
                                                            </div>
                                                            <div class="dots ">
                                                                      <ion-icon name="ellipsis-vertical-outline ">
                                                                      </ion-icon>
                                                            </div>
                                                  </header>
                                                  <section>
                                                            <div class="feed ">
                                                                      <div class="feedimg ">
                                                                                <img src="./img/1.jpg " alt=" "
                                                                                          srcset=" ">
                                                                      </div>
                                                                      <div class="data_send ">
                                                                                <div class="left ">
                                                                                          <ion-icon
                                                                                                    name="heart-outline ">
                                                                                          </ion-icon>
                                                                                          <ion-icon
                                                                                                    name="chatbubble-outline ">
                                                                                          </ion-icon>
                                                                                          <ion-icon
                                                                                                    name="paper-plane-outline ">
                                                                                          </ion-icon>
                                                                                </div>
                                                                                <div class="right ">
                                                                                          <ion-icon
                                                                                                    name="bookmark-outline ">
                                                                                          </ion-icon>
                                                                                </div>
                                                                      </div>
                                                            </div>
                                                  </section>
                                        </div>

                              </div>
                              <!-- <div class="box b3 ">one</div> -->
                    </section>
          </section>
          <script src="./js/theme.js "></script>
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
          <script src="./js/ionicons.esm.js"></script>
          <script src="./js/ionicons.js"></script>

          <script>
          function logout() {
                    document.location.href = href = "login.php ";
          }
          </script>
</body>

</html>