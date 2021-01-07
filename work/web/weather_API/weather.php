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
  <!-- <pre> -->



  <?php


  $city_info = json_decode(file_get_contents('city.list.min.json'), true);
  $length = count($city_info);

  $i = 0;
  $area = '?id=' . '1856057';


  if ((isset($_GET['area'])) && (!isset($_GET['area_in'])) && (empty($_GET['zip']))) {
    $area = '?id=' . $_GET['area'];
  } elseif (!isset($_GET['area']) && (!isset($_GET['area_in'])) && (!empty($_GET['zip']))) {
    if (strlen($_GET['zip']) === 8) {
      $area = '?zip=' . h($_GET['zip']) . ',jp';
    } else {
      $area = '?zip=100-0012,jp';
      $error = '郵便番号として正しくありません';
    }
  } elseif (!isset($_GET['area']) && (isset($_GET['area_in'])) && (empty($_GET['zip']))) {
    $input_area = h($_GET['area_in']);
    $city = $city_info[$i]['name'];

    foreach ($city_info as $city) {
      if ($city['name'] === $input_area) {
        $area = '?id=' . $city['id'];
      }
    }
  }


  // if (!empty($_GET['zip'])) {
  //   if (isset($_GET['zip']) && (strlen($_GET['zip']) === 8)) {
  //     $area = '?zip=' . h($_GET['zip']) . ',jp';
  //   } else {
  //     $area = '?zip=100-0012,jp';
  //   }
  // }


  $api_url = 'https://api.openweathermap.org/data/2.5/forecast' . $area . '&appid=' . $apiKey . '&lang=ja&units=metric';
  $response = json_decode(file_get_contents($api_url), true);
  $list = $response['list'];
  $leng = count($list);
  $city = $response['city']['name'];


  $api_url_now = 'https://api.openweathermap.org/data/2.5/weather' . $area . '&lang=ja&appid=' . $apiKey . '&units=metric';
  ?>


  <header>
    <div class="header">
      <img src="../imgs/logo.png" alt="">
      <i class="fas fa-times"></i>
      <img src="../imgs/api.jpg" alt="">
    </div>
    <h1>Tatsumi_Weather</h1>
    <p>OpenWeatherのWeb APIを使用しています</p>
    <hr>

    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script>
      const jqXHR = $.ajax({
        url: '<?php $api_url_now; ?>',
        type: 'GET'
      });
      jqXHR.always(function() {
        <?php
        $response_now = json_decode(file_get_contents($api_url_now), true);

        ?>
        console.log('request_終わり');

      });


      console.log('非同期_終わり');
    </script>

    <?php
    $weather_now = $response_now['weather'][0];
    $unix_time = $response_now['dt'];
    $time_now = date('m/d(D)  H時', $unix_time);
    $city_now = $response_now['name'];
    $temp_now = $response_now['main']['temp'];
    $feels_now = $response_now['main']['feels_like'];
    $wind_now = $response_now['wind']['speed'];



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

    $bg_color = 'darkgreen';
    $color = 'snow';

    switch ($feels_now) {
      case ($feels_now >= 35):
        $bg_color = 'red';
        $color = 'snow';
        break;
      case (($feels_now >= 30) && ($feels_now < 35)):
        $bg_color = 'orange';
        $color = 'snow';
        break;
      case (($feels_now >= 25) && ($feels_now < 30)):
        $bg_color = 'pink';
        $color = 'snow';
        break;
      case (($feels_now <= 10) && ($feels_now >= 5)):
        $bg_color = 'rgb(0, 60, 139)';
        $color = 'snow';
        break;
      case (($feels_now >= 0) && ($feels_now < 5)):
        $bg_color = 'skyblue';
        $color = 'snow';
        break;
      case (($feels_now < 0) && ($feels_now > -100)):
        $bg_color = 'white';
        $color = 'grey';
        break;
    }
    ?>
    <h1><?php if (!empty($error)) {
          echo $error;
        } ?></h1>
    <p class="city">現在<span>"<?php echo $city; ?>"</span>の天気を表示中</p>

    <?php

    echo '<div class="weather_now">';
    echo '<p><strong>' . $city_now . ' ' . $time_now . '現在の天気</strong></p>';
    echo '<p>' . $weather_now['description'] . '/' . $weather_now['main'] . '</p>';
    echo '<img src="../imgs/' . $w_icon . '">';
    echo '<p class="feel_box" style="background-color:' . $bg_color . ';' . 'color:' . $color . '">体感気温' . $feels_now . '℃</p>';
    echo '<p>気温' . $temp_now . '℃   風速' . $wind_now . 'm/秒</p>';
    echo '</div>';
    ?>


    <div class="desc">

      <h1>3つの”分かる！”が詰まった<br>お天気アプリです</h1>

      <div class="memo_1">
        <!-- <fieldset>
            <legend class="text"> -->
        <h2><strong><mark>1</mark>　体感気温</strong>がすぐ分かる！</h2>
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
      <div class="memo_2">
        <h2><strong><mark>2</mark>　世界中</strong>の今が分かる！</h2>
        <div>
          <h3 class="pop">こちらから地域を選択できます</h3>
          <p><strong>20万を超える都市</strong>から選択可能</p>
          <!-- <div class="desc"> -->
          <details>
            <summary><span>
                <p><strong>選択肢から選ぶ</strong></p><i class="fas fa-angle-double-down"></i>
              </span></summary>
            <form action="" method="GET">
              <div class="radio">
                <label><input type="radio" name="area" value="2130037">北海道</label>
                <label><input type="radio" name="area" value="1850147">東京</label>
                <label><input type="radio" name="area" value="1856057">名古屋</label>
                <label><input type="radio" name="area" value="1853909">大阪</label>
                <label><input type="radio" name="area" value="1863967">福岡</label>
                <label><input type="radio" name="area" value="1854345">沖縄</label>
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
                <p><strong>キーボードで入力する</strong></p><i class="fas fa-angle-double-down"></i>
              </span></summary>
            <br>

            <form action="" method="GET">
              <div>
                <label><b>地域名を"アルファベットで"入力</b>
                  <br>
                  <b>”1文字目は大文字”で入力して下さい</b>
                  <input type="text" name="area_in" value=""></label>
                <br>
                <button>Click or Enter!</button>
                <h3>例1)."京都"の場合 → "Kyoto"</h3>
                <h3>例2)."大井"の場合 → "Ooi"</h3>
                <h3>例3)."新宿区"の場合 → "Shinjyuku-ku"</h3>
                <br>
                <b>＊東京23区でもサポートされて<br>いない地域があります！</b>
                <ul>
                  <li>”半角英字”かつ”1文字目は大文字”で入力して下さい</li>
                  <li>最小単位は"市"(もしくは"区")です（町名では検索できません）</li>
                  <li>一部サポートされていない地域があります</li>
                  <li>サポート外の地域や誤入力の場合、デフォルトである名古屋の天気が表示されます</li>
                </ul>
              </div>
            </form>

          </details>
          <details>
            <summary><span>
                <p><strong>郵便番号で入力する</strong></p><i class="fas fa-angle-double-down"></i>
              </span></summary>
            <br>
            <form action="" method="GET">
              <label>試験運用中<br>
                <b>必ず " -　(ハイフン) " を間に入れて下さい</b>
                <input type="text" name="zip" placeholder=" (例) 000-0000">
              </label>
              <button>Try!</button>
            </form>
          </details>
        </div>
      </div>

      <div class="memo_3">
        <!-- <fieldset>
            <legend class="text"> -->
        <h2><strong><mark>3</mark>　 5日先</strong>の天気まで分かる！</h2>
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

    $time = date('m/d(D)  H時頃', $weather_dt);

    $weather = $list[$i]['weather'][0]['main'];
    $weather_icon = $list[$i]['weather'][0]['icon'];

    $weather_desc = $list[$i]['weather'][0]['description'];
    $humidity = $list[$i]['main']['humidity'];
    $wind = $list[$i]['wind']['speed'];
    $temp = $list[$i]['main']['temp'];
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
      case (($feels >= 5) && ($feels <= 10)):
        $bg_color = 'rgb(0, 60, 139)';
        break;
      case (($feels >= 0) && ($feels < 5)):
        $bg_color = 'skyblue';
        break;
      case (($feels > -100) && ($feels <= -0)):
        $bg_color = 'white';
        break;
    }


    echo
      <<< __deta__
    <details open>
      <summary>
        <span>
          <p><strong class="time">$time</strong></p>
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
          <p>気温：</p>
          <p>風速：</p>
        </div>
        <div class="value">
          <p>$weather_desc</p>
          <p>$rains ％</p>
          <p>$humidity %</p>
          <p>$temp ℃</p>
          <p>$wind m/秒</p>
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
      $wind = $list[$i]['wind']['speed'];
      $temp = $list[$i]['main']['temp'];
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

        case (($feels >= 0) && ($feels <= 5)):
          $bg_color = 'skyblue';
          break;
        case (($feels > -100) && ($feels <= -0)):
          $bg_color = 'white';
          break;
      }


      echo
        <<< __deta__
    <details>
      <summary>
        <span>
          <p><strong class="time">$time</strong></p>
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
          <p>気温：</p>
          <p>風速：</p>
        </div>
        <div class="value">
          <p>$weather_desc</p>
          <p>$rains ％</p>
          <p>$humidity %</p>
          <p>$temp ℃</p>
          <p>$wind m/秒</p>
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
      $wind = $list[$i]['wind']['speed'];
      $temp = $list[$i]['main']['temp'];
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

        case (($feels >= 0) && ($feels <= 5)):
          $bg_color = 'skyblue';
          break;
        case (($feels > -100) && ($feels <= -0)):
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
          <p>気温：</p>
          <p>風速：</p>
        </div>
        <div class="value">
          <p>$weather_desc</p>
          <p>$rains ％</p>
          <p>$humidity %</p>
          <p>$temp ℃</p>
          <p>$wind m/秒</p>
        </div>
      </div>
    </details>

    __deta__;
    }

    echo '</details>';




    ?>

  </main>
  <aside>
    <p>このアプリは、以下のサイトより情報を取得しています。</p>
    <a href="https://openweathermap.org/">OpenWeather<br>https://openweathermap.org/</a>

  </aside>

  <footer>
    <img src="../imgs/logo.png" alt="" width="100px">
    <details class="policy">
      <summary>プライバシーポリシー</summary>
      <p>
        当サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を使用しています。このGoogleアナリティクスはデータの収集のためにCookieを使用します。データは匿名で収集されており、個人を特定するものではありません。<br>
        Cookieを無効にすることで収集を拒否することが出来ます。お使いのブラウザの設定をご確認ください。
      </p>
      <p>
        この規約に関しての詳細は<a href="https://marketingplatform.google.com/about/analytics/terms/jp/">Googleアナリティクスサービス利用規約のページ</a>や<a href="https://policies.google.com/technologies/ads?hl=ja">Googleポリシーと規約ページ</a>をご覧ください。
        <br>
      </p>
    </details>
    <p class="copyLight"><small>&copy; Tatsumi_Ishikawa.2020</small></p>

  </footer>
</body>

</html>