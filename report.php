<?php
session_start();

require './library/azure.php';
require './library/upload.php';
require './library/compass.php';

$url = Upload::save($_FILES['photo']);
$report = Compass::upload($url);

// 如果要调试这个接口的返回值，请将下面一行取消注释
echo '<hr />';var_dump($report);echo '<hr />';exit;
?>
<!DOCTYPE html>
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
    <link href="./assets/report.css" rel="stylesheet" type="text/css">
    <style>

    </style>    
  </head>
  <body>
    <div class="container report">
        <div class="report-head">
            <div class="age-presenter">
                <img class="uploaded" src='<?php echo $url;?>' alt='' />
            </div>

            <?php
            $msg = '';
            switch ($report['code']) {
                case 70410:
                    $msg = '请摘掉眼镜及避免微笑，以达到更精准检测结果';
                    break;
                case 70411:
                    $msg = '请摘掉眼镜，以达到更精准检测结果';
                    break;
                case 70412:
                    $msg = '请维持舒展表情并避免微笑，以达到更精准检测结果';
                    break;
                case 70413:
                    $msg = '无法识别面部，请重新拍照以达到更精准检测结果';
                    break;
                case 0:
                    break;
                default:
                    $msg = '未知异常： '. $report['code']; 
                    break;
            }
            ?>
            <?php
            if ($msg !== '') {
            ?>
            <p class="text text-view intro"><?php echo $msg;?></p>
            <?php
            } else {
            ?>
            <p class="text text-view intro">Your skin age: <?php echo (int)$report['data']['skinResult']['skinAge'];?></p>  
            <p class="text text-view intro">Skin Advisor has analyzed your five aging areas to prioritize how to best care for your skin.</p>            
            <?php
            }
            ?>
        </div>

        <div class="buttons">
            <button class="myproducts" onclick="window.location='index.php';">Retake Analysis</button>
        </div>
    </div>
 
  </body>
</html>
