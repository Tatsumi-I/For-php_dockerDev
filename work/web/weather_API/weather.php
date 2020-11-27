<?php

ini_set("iog_errors", "on");
ini_set("error_iog", "./php_error.log");

require_once('../../app/function.php');

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VE5M164E5N"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-VE5M164E5N');
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather_API</title>
  <link rel="stylesheet" type="text/css" href="weather.min.css">
  <link rel="shortcut icon" href="../imgs/logo.png" type="image/png" sizes="16*16">

  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

</head>

<body>



  <?php

  $city_info = json_decode(file_get_contents('city.list.min.json'), true);
  $length = count($city_info);

  $i = 0;
  $area = '1856057';


  if ((isset($_GET['area'])) && (!isset($_GET['area_in']))) {
    $area = $_GET['area'];
    // echo 'GET area!';
  } elseif (!isset($_GET['area']) && (isset($_GET['area_in']))) {
    $input_area = h($_GET['area_in']);
    $city = $city_info[$i]['name'];

    foreach ($city_info as $city) {
      if ($city['name'] === $input_area) {
        $area = $city['id'];
      }
    }
  }

  $api_url = 'https://api.openweathermap.org/data/2.5/forecast?id=' . $area . '&appid=' . $apiKey . '&lang=ja&units=metric';

  $response = json_decode(file_get_contents($api_url), true);
  $list = $response['list'];
  $leng = count($list);
  $city = $response['city']['name'];


  $api_url_now = 'https://api.openweathermap.org/data/2.5/weather?id=' . $area . '&appid=' . $apiKey . '&lang=ja&units=metric';
  $response_now = json_decode(file_get_contents($api_url_now), true);
  $weather_now = $response_now['weather'][0];
  $unix_time = $response_now['dt'];
  $time_now = date('m/d(D)  H時', $unix_time);
  $city_now = $response_now['name'];
  $feels_now = $response_now['main']['feels_like'];




  ?>


  <header>
    <div class="header">
      <img src="../imgs/logo.png" alt="">
      <i class="fas fa-times"></i>
      <img src="../imgs/api.jpg" alt="">
    </div>
    <p><strong>Tatsumi's_Weather</strong></p>
    <p>OpenWeatherMapのWeb APIを使用</p>
    <hr>


    <?php
    $weather_icon = $weather_now['icon'];
    switch ($weather_icon) {
      case '01d':
        $w_icon = 'sun.png';
        break;
      case '01n':
        $w_icon = 'moon.png';
        break;
      case '02d':
        $w_icon = 'clouds.png';
        break;
      case '02n':
        $w_icon = 'clouds_night.png';
        break;
      case '03d':
        $w_icon = 'clouds_2.png';
        break;
      case '03n':
        $w_icon = 'clouds_2.png';
        break;
      case '04d':
        $w_icon = 'cloud_dark.png';
        break;
      case '04n':
        $w_icon = 'cloud_dark.png';
        break;
      case '09d': //霧雨
        $w_icon = 'little_rain.png';
        break;
      case '09n': //霧雨
        $w_icon = 'little_rain.png';
        break;
      case '10d': //雨
        $w_icon = 'rain.png';
        break;
      case '10n': //雨
        $w_icon = 'rain.png';
        break;
      case '11d': //雷雨
        $w_icon = 'sunder.png';
        break;
      case '11n': //雷雨
        $w_icon = 'sunder.png';
        break;
      case '13d': //雪
        $w_icon = 'snow.png';
        break;
      case '13n': //雪
        $w_icon = 'snow_2.png';
        break;
      case '50d': //霧など
        $w_icon = 'wind.png';
        break;
      case '50n': //霧など
        $w_icon = 'wind.png';
        break;
    }

    echo '<div class="weather_now">';
    echo '<p><strong>' . $city_now . ' ' . $time_now . '現在の天気</strong></p>';
    echo '<img src="../imgs/' . $w_icon . '">';

    echo $weather_now['description'] . '/';
    echo $weather_now['main'] . '<br>';
    echo '体感気温' . $feels_now . '℃';
    echo '</div>';
    ?>
    <p class="city">現在<span>"<?php echo $city; ?>"</span>の天気を表示中</p>


    <h1>3つの”分かる！”が詰まった<br>お天気アプリです</h1>
    <div class="desc">

      <div class="memo_1">
        <!-- <fieldset>
          <legend class="text"> -->
        <h2><strong>世界中</strong>の今が分かる！</h2>
        <div class="">
          <p><strong>20万を超える都市</strong>から選択可能</p>
          <!-- <div class="desc"> -->
          <details>
            <summary><span>
                <p><strong>クイック選択</strong></p><i class="fas fa-angle-double-down"></i>
              </span></summary>
            <form action="" method="GET">
              <div class="radio">
                <label><input type="radio" name="area" value="2130037">北海道</label>
                <label><input type="radio" name="area" value="1850147">東京</label>
                <label><input type="radio" name="area" value="1856057">名古屋</label>
                <label><input type="radio" name="area" value="1853909">大阪</label>
                <label><input type="radio" name="area" value="1863967">福岡</label>
                <label><input type="radio" name="area" value="1854345">沖縄</label>
                <!-- </div> -->
                <!-- <div> -->
                <label><input type="radio" name="area" value="2643744">London(GB)</label>
                <label><input type="radio" name="area" value="5128581">N.Y(US)</label>
                <label><input type="radio" name="area" value="5855797">Hawaii(US)</label>
                <label><input type="radio" name="area" value="3369157">Cape Town(ZA)</label>
                <label><input type="radio" name="area" value="2193732">Auckland(NZ)</label>
                <label><input type="radio" name="area" value="1880252">シンガポール(SG)</label>
              </div>
              <button>Click or Enter!</button>

            </form>
          </details>

          <details>
            <summary><span>
                <p><strong>地域を指定する</strong></p><i class="fas fa-angle-double-down"></i>
              </span></summary>
            <br>
            <form action="" method="GET">
              <div>
                <form action="" method="GET">
                  <label><b>地域名を"アルファベットで"入力</b>
                    <br>
                    <b>”1文字目は大文字”で入力して下さい</b>
                    <input type="text" name="area_in" value=""></label>
                  <br>
                  <button>Click or Enter!</button>
                  <h1>例1)."京都"の場合 → "Kyoto"</h1>
                  <h1>例2)."大井"の場合 → "Ooi"</h1>
                  <h1>例3)."新宿区"の場合 → "Shinjyuku-ku"</h1>
                  <br>
                  <b>＊東京23区でもサポートされて<br>いない地域があります！</b>
                  <ul>
                    <li>”半角英字”かつ”1文字目は大文字”で入力して下さい</li>
                    <li>最小単位は"市"(もしくは"区")です（町名では検索できません）</li>
                    <li>一部サポートされていない地域があります</li>
                    <li>サポート外の地域や誤入力の場合、デフォルトである名古屋の天気が表示されます</li>
                  </ul>
                </form>
              </div>
            </form>
          </details>



        </div>
      </div>



      <div class="memo_2">
        <!-- <fieldset>
            <legend class="text"> -->
        <h2><strong>体感気温</strong>がすぐ分かる！</h2>
        <div class="feel_color">
          <!-- <img src="../imgs/cold_img2.jpg" alt=""> -->
          <div class="feel_color1">
            <p class="red">体感気温 35 ~ ℃</p>
            <p class="orange">体感気温 30 ~ 35 ℃</p>
            <p class="pink">体感気温 25 ~ 30 ℃</p>
          </div>
          <div class="feel_color2">
            <p class="blue">体感気温 5 ~ 10 ℃</p>
            <p class="skyblue">体感気温 0 ~ 5 ℃</p>
            <p class="white">体感気温 0 ℃ 以下</p>
          </div>
        </div>
      </div>


      <div class="memo_3">
        <!-- <fieldset>
            <legend class="text"> -->
        <h2><strong>5日先</strong>の天気まで分かる！</h2>
        <div class="">
          <p>24時間天気はもちろん<br>5日先の天気まで分かっちゃう</p>
        </div>
      </div>


    </div>


  </header>

  <main>
    <?php
    //   echo
    //   <<< mail_form
    // <form action="" method="POST">
    // <label>現在の情報をMailで受け取ることができます<br><input type="email" name="address" autocomplete="off"></label>
    // <button>Done!</button>
    // </form>


    // mail_form;


    // $message = $time . $city . $feels . '℃';
    // // $headers = "From: t.tsumi02@gmail.com";

    // if (isset($_POST['address'])) {
    //   $address = h($_POST['address']);
    //   echo '登録しました';
    // } else {
    //   $address = "";
    //   echo '入力して下さい';
    // }
    // mb_send_mail($address, '[Forecast]', $message );
    // //   echo 'true';
    // // } else {
    // //   echo 'false';
    // // }





    echo '<h1>' . $city . ' 24時間天気予報</h1>';

    // echo '<div class="tables">';
    $i = 0;
    $weather_dt = $list[$i]['dt'];
    // var_dump(date('D'));

    // switch (date('D')) {
    //   case 'Sun':
    //     $d = '日';
    //     break;

    //   case 'Mon':
    //     $d = '月';
    //     break;

    //   case 'Tue':
    //     $d = '火';
    //     break;

    //   case 'Wed':
    //     $d = '水';
    //     break;

    //   case 'Thu':
    //     $d = '木';
    //     break;

    //   case 'Fri':
    //     $d = '金';
    //     break;

    //   case 'Sat':
    //     $d = '土';
    //     break;
    // };
    $time = date('m/d(D)  H時頃', $weather_dt);

    $weather = $list[$i]['weather'][0]['main'];
    $weather_icon = $list[$i]['weather'][0]['icon'];

    $weather_desc = $list[$i]['weather'][0]['description'];
    $humidity = $list[$i]['main']['humidity'];
    $temp_max = $list[$i]['main']['temp_max'];
    $temp_min = $list[$i]['main']['temp_min'];
    $feels = round($list[$i]['main']['feels_like'], 2);
    $rains = $list[$i]['pop'] * 100;

    $bg_color = 'none';
    switch ($feels) {
      case ($feels >= 35):
        $bg_color = 'red';
        break;
      case (($feels >= 30) && ($feels < 35)):
        $bg_color = 'orange';
        break;
      case (($feels >= 25) && ($feels < 30)):
        $bg_color = 'pink';
        break;
      case (($feels <= 10) && ($feels >= 5)):
        $bg_color = 'rgb(0, 60, 139)';
        break;
      case (($feels > 0) && ($feels <= 5)):
        $bg_color = 'skyblue';
        break;
      case (($feels > -100) && ($feels <= 0)):
        $bg_color = 'white';
        break;
    }


    echo
      <<< __deta__
    <details open>
      <summary>
        <span>
          <p><strong>$time</strong></p>
          <img src="../imgs/$w_icon">

          <p class="feel_box" style="background-color:$bg_color">体感：$feels ℃</p>
          <i class="fas fa-angle-double-down"></i>
        </span>
      </summary>
      <div class="box">
        <div class="key">
          <p>概況：</p>
          <p>降水確率：</p>
          <p>湿度：</p>
          <p>最高気温：</p>
          <p>最低気温：</p>
        </div>
        <div class="value">
          <p>$weather_desc</p>
          <p>$rains ％</p>
          <p>$humidity %</p>
          <p>$temp_max ℃</p>
          <p>$temp_min ℃</p>
        </div>
      </div>
    </details>

    __deta__;



    for ($i = 1; $i < 10; $i++) {
      $weather_dt = $list[$i]['dt'];
      $time = date('m/d(D)  H時頃', $weather_dt);

      $weather = $list[$i]['weather'][0]['main'];
      $weather_icon = $list[$i]['weather'][0]['icon'];
      switch ($weather_icon) {
        case '01d':
          $w_icon = 'sun.png';
          break;
        case '01n':
          $w_icon = 'moon.png';
          break;
        case '02d':
          $w_icon = 'clouds.png';
          break;
        case '02n':
          $w_icon = 'clouds_night.png';
          break;
        case '03d':
          $w_icon = 'clouds_2.png';
          break;
        case '03n':
          $w_icon = 'clouds_2.png';
          break;
        case '04d':
          $w_icon = 'cloud_dark.png';
          break;
        case '04n':
          $w_icon = 'cloud_dark.png';
          break;

        case '09d': //霧雨
          $w_icon = 'little_rain.png';
          break;
        case '09n': //霧雨
          $w_icon = 'little_rain.png';
          break;
        case '10d': //雨
          $w_icon = 'rain.png';
          break;
        case '10n': //雨
          $w_icon = 'rain.png';
          break;
        case '11d': //雷雨
          $w_icon = 'sunder.png';
          break;
        case '11n': //雷雨
          $w_icon = 'sunder.png';
          break;
        case '13d': //雪
          $w_icon = 'snow.png';
          break;
        case '13n': //雪
          $w_icon = 'snow_2.png';
          break;
        case '50d': //霧など
          $w_icon = 'wind.png';
          break;
        case '50n': //霧など
          $w_icon = 'wind.png';
          break;
      }
      $weather_desc = $list[$i]['weather'][0]['description'];
      $humidity = $list[$i]['main']['humidity'];
      $temp_max = $list[$i]['main']['temp_max'];
      $temp_min = $list[$i]['main']['temp_min'];
      $feels = round($list[$i]['main']['feels_like'], 1);
      $rains = $list[$i]['pop'] * 100;

      $bg_color = 'none';
      switch ($feels) {
        case ($feels >= 35):
          $bg_color = 'red';
          break;
        case (($feels >= 30) && ($feels < 35)):
          $bg_color = 'orange';
          break;
        case (($feels >= 25) && ($feels < 30)):
          $bg_color = 'pink';
          break;
        case (($feels <= 10) && ($feels >= 5)):
          $bg_color = 'rgb(0, 60, 139)';
          break;

        case (($feels > 0) && ($feels <= 5)):
          $bg_color = 'skyblue';
          break;
        case (($feels > -100) && ($feels <= 0)):
          $bg_color = 'white';
          break;
      }


      echo
        <<< __deta__
    <details>
      <summary>
        <span>
          <p><strong>$time</strong></p>
          <img src="../imgs/$w_icon">
          <p class="feel_box" style="background-color:$bg_color">体感：$feels ℃</p>
          <i class="fas fa-angle-double-down"></i>
        </span>
        
      </summary>
      <div class="box">
        <div class="key">
          <p>概況：</p>
          <p>降水確率：</p>
          <p>湿度：</p>
          <p>最高気温：</p>
          <p>最低気温：</p>
        </div>
        <div class="value">
          <p>$weather_desc</p>
          <p>$rains ％</p>
          <p>$humidity %</p>
          <p>$temp_max ℃</p>
          <p>$temp_min ℃</p>
        </div>
      </div>
    </details>

    __deta__;
    }

    // echo '</div>';



    echo '<details  class="five_days" style="background:none;box-shadow: none;">';
    echo '<summary>
        <span>
          <h1>' . $city . '<br>向こう5日間の天気</h1>
          <i class="fas fa-angle-double-down"></i>
        </span>
      </summary>';
    // echo '<div class="tables">';

    for ($i = 10; $i < $leng; $i++) {

      $weather_dt = $list[$i]['dt'];
      $time = date('m/d(D)  H時頃', $weather_dt);

      $weather = $list[$i]['weather'][0]['main'];
      $weather_icon = $list[$i]['weather'][0]['icon'];
      switch ($weather_icon) {
        case '01d':
          $w_icon = 'sun.png';
          break;
        case '01n':
          $w_icon = 'moon.png';
          break;
        case '02d':
          $w_icon = 'clouds.png';
          break;
        case '02n':
          $w_icon = 'clouds_night.png';
          break;
        case '03d':
          $w_icon = 'clouds_2.png';
          break;
        case '03n':
          $w_icon = 'clouds_2.png';
          break;
        case '04d':
          $w_icon = 'cloud_dark.png';
          break;
        case '04n':
          $w_icon = 'cloud_dark.png';
          break;

        case '09d': //霧雨
          $w_icon = 'little_rain.png';
          break;
        case '09n': //霧雨
          $w_icon = 'little_rain.png';
          break;
        case '10d': //雨
          $w_icon = 'rain.png';
          break;
        case '10n': //雨
          $w_icon = 'rain.png';
          break;
        case '11d': //雷雨
          $w_icon = 'sunder.png';
          break;
        case '11n': //雷雨
          $w_icon = 'sunder.png';
          break;
        case '13d': //雪
          $w_icon = 'snow.png';
          break;
        case '13n': //雪
          $w_icon = 'snow_2.png';
          break;
        case '50d': //霧など
          $w_icon = 'wind.png';
          break;
        case '50n': //霧など
          $w_icon = 'wind.png';
          break;
      }

      $weather_desc = $list[$i]['weather'][0]['description'];
      $humidity = $list[$i]['main']['humidity'];
      $temp_max = $list[$i]['main']['temp_max'];
      $temp_min = $list[$i]['main']['temp_min'];
      $feels = round($list[$i]['main']['feels_like'], 2);
      $rains = $list[$i]['pop'] * 100;

      $bg_color = 'none';
      switch ($feels) {
        case ($feels >= 35):
          $bg_color = 'red';
          break;
        case (($feels >= 30) && ($feels < 35)):
          $bg_color = 'orange';
          break;
        case (($feels >= 25) && ($feels < 30)):
          $bg_color = 'pink';
          break;
        case (($feels <= 10) && ($feels >= 5)):
          $bg_color = 'rgb(0, 60, 139)';
          break;

        case (($feels > 0) && ($feels <= 5)):
          $bg_color = 'skyblue';
          break;
        case (($feels > -100) && ($feels <= 0)):
          $bg_color = 'white';
          break;
      }


      echo
        <<< __deta__
    <details>
      <summary>
        <span>
          <p><strong>$time</strong></p>
          <img src="../imgs/$w_icon">

          <p class="feel_box" style="background-color:$bg_color">体感：$feels ℃</p>
          <i class="fas fa-angle-double-down"></i>
        </span>
      </summary>
      <div class="box">
        <div class="key">
          <p>概況：</p>
          <p>降水確率：</p>
          <p>湿度：</p>
          <p>最高気温：</p>
          <p>最低気温：</p>
        </div>
        <div class="value">
          <p>$weather_desc</p>
          <p>$rains ％</p>
          <p>$humidity %</p>
          <p>$temp_max ℃</p>
          <p>$temp_min ℃</p>
        </div>
      </div>
    </details>

    __deta__;
    }

    echo '</details>';




    ?>

  </main>
  <footer>
    <img src="../imgs/logo.png" alt="" width="100px">
    <p class="copyLight"><small>&copy; Tatsumi_Ishikawa.2020</small></p>

  </footer>
</body>

</html>