<?php
session_start();
$uid = isset($_SESSION['uid']) ? $_SESSION['uid'] : 0;
if ($uid === 0) {
    $uid = 'compass_test_'.rand(1, 100);
    $_SESSION['uid'] = $uid;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/home/styles.css" type="text/css" rel="stylesheet"/>
    <script src="resources/scripts/jquery-1.7.1.min.js"></script>
    <script src="resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="resources/scripts/prototypePre.js"></script>
    <script src="data/document.js"></script>
    <script src="resources/scripts/prototypePost.js"></script>
    <script src="files/home/data.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
    <div id="base" class="">

      <!-- Unnamed (Rectangle) -->
      <div id="u0" class="ax_default box_1">
        <div id="u0_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u1" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Image) -->
      <div id="u2" class="ax_default image">
        <img id="u2_img" class="img " src="images/home/u2.jpg"/>
        <!-- Unnamed () -->
        <div id="u3" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Menu) -->
      <div id="u4" class="ax_default">
        <img id="u4_menu" class="img " src="images/home/u4_menu.png" alt="u4_menu"/>

        <!-- Unnamed (Table) -->
        <div id="u5" class="ax_default">

          <!-- Unnamed (Menu Item) -->
          <div id="u6" class="ax_default menu_item">
            <img id="u6_img" class="img " src="images/home/u6.png"/>
            <!-- Unnamed () -->
            <div id="u7" class="text">
              <p><span>Ali</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u8" class="ax_default menu_item">
            <img id="u8_img" class="img " src="images/home/u6.png"/>
            <!-- Unnamed () -->
            <div id="u9" class="text">
              <p><span>JD</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u10" class="ax_default menu_item">
            <img id="u10_img" class="img " src="images/home/u6.png"/>
            <!-- Unnamed () -->
            <div id="u11" class="text">
              <p><span>VIP</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u12" class="ax_default menu_item">
            <img id="u12_img" class="img " src="images/home/u12.png"/>
            <!-- Unnamed () -->
            <div id="u13" class="text">
              <p><span>...</span></p>
            </div>
          </div>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u14" class="ax_default box_1">
        <div id="u14_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u15" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u16" class="ax_default label">
        <div id="u16_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u17" class="text">
          <p><span>Baby</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u18" class="ax_default label">
        <div id="u18_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u19" class="text">
          <p><span>All</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u20" class="ax_default primary_button">
        <div id="u20_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u21" class="text">
          <p><span>Press to Speak</span></p>
        </div>
      </div>

      <!-- Unnamed (Image) -->
      <div id="u22" class="ax_default image">
        <img id="u22_img" class="img " src="images/home/u22.JPG"/>
        <!-- Unnamed () -->
        <div id="u23" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Image) -->
      <div id="u24" class="ax_default image">
        <img id="u24_img" class="img " src="images/home/u24.JPG"/>
        <!-- Unnamed () -->
        <div id="u25" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Image) -->
      <div id="u26" class="ax_default image">
        <img id="u26_img" class="img " src="images/home/u26.JPG"/>
        <!-- Unnamed () -->
        <div id="u27" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Image) -->
      <div id="u28" class="ax_default image">
        <img id="u28_img" class="img " src="images/home/u28.JPG"/>
        <!-- Unnamed () -->
        <div id="u29" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Image) -->
      <div id="u30" class="ax_default image">
        <img id="u30_img" class="img " src="images/home/u30.JPG"/>
        <!-- Unnamed () -->
        <div id="u31" class="text" style="display:none; visibility: hidden">
          <p><span></span></p>
        </div>
      </div>
    </div>
  </body>
</html>



<!--<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Olay</title>
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">
    <meta content="telephone=no,email=no" name="format-detection">
    <meta name="App-Config" content="fullscreen=yes,useHistoryState=yes,transition=yes">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link href="./assets/style.css" rel="stylesheet" type="text/css">
    <style>
.start {
    border: 0 solid transparent;
    border-radius: 0;
    padding: .5rem 1.65rem;
    font-size: 1.6rem;
    color: #000;
    text-decoration: none;
    text-transform: uppercase;
    cursor: pointer;
    text-align: center;
    background: #868686;
    background-image: -webkit-linear-gradient(left bottom,#868686 0,#e5e5e5 25%,#eaeaea 26%,#bfbfbf 0,#fff 46%,#fff 55%,#bcbcbc 79%,#bababa);
}

.logo {
    width: 65%;
    height: auto;
    max-height: 32rem;
}

.intro {
    color: #d9d9d9;
    font-family: "NeutrafaceText-Light,Microsoft Yahei, 黑体,Heiti SC";
    font-size: 1.5rem;
    line-height: 1.5rem;
    margin: 2.75rem 0 0;
    width: 80%;
}
    </style>    
  </head>
  <body>
    <div class="container">
        <img src="assets/images/logofull.png" background-size="cover" mode="widthFix" class="logo"></img>
        <p class="intro">RIGHT PRODUCTS. RIGHT IN THE PALM OF YOUR HAND.</p>
        <img src="assets/images/youtube_thumbnail.png"></img>

        <a class="start btn btn-block" href="upload.php">Get Started</a>
    </div>    
  </body>
</html>-->
