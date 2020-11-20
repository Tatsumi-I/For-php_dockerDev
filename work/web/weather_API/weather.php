<?php 

ini_set("iog_errors", "on");
ini_set("error_iog", "./php_error.log");

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather_API</title>
  <link rel="stylesheet" type="text/css" href="weather.min.css">
  <link rel="shortcut icon" href="../imgs/logo.png" type="image/png" sizes="16*16">

  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

</head>

<body>

  <header>
    <div class="logo">
      <img class="img" src="../imgs/logo.png" alt="">
      <h1>OpenWeatherMap_API</h1>
    </div>
    <!-- <img src="/imgs/sun.jpg"> -->
    <img class="api" src="../imgs/api.jpg" alt="">
    <p>phpによる、Web APIを使用した天気アプリです</p>
    <hr>

    <h2>3つの”分かる！”が詰まった お天気アプリです</h2>
    <div class="desc">
      <div class="memo">
        <h2 class="text"><strong>体感気温</strong>がすぐ分かる！</h2>
        <p class="red">体感気温 35 ~ ℃</p>
        <p class="orange">体感気温 30 ~ 35 ℃</p>
        <p class="pink">体感気温 25 ~ 30 ℃</p>
        <p class="skyblue">体感気温 0 ~ 5 ℃</p>
        <p class="blue">体感気温 -10 ~ 0 ℃</p>
      </div>
      <div class="memo">
        <h2 class="text">世界中の今が分かる！</h2>
        <p><strong>20万を超える都市</strong>から選択可能</p>
      </div>
      <div class="memo">
        <h2 class="text">5日先の天気まで分かる！</h2>
        <p>24時間天気はもちろん、<br><strong>5日先の天気まで</strong>分かっちゃう</p>
      </div>
    </div>

    <?php

    require_once('../../app/function.php');
    $city_info = json_decode(file_get_contents('city.list.min.json'), true);
    $length = count($city_info);


    if (isset($_GET['area'])) {
      $area = $_GET['area'];
    } else {
      $area = '1856057';
    }




    $i = 0;

    if (isset($_GET['area_in'])) {
      $input_area = h($_GET['area_in']);
      $area_name = $city_info[$i]['name'];

      foreach ($city_info as $area_name) {
        if (!empty($input_area) && $area_name['name'] === $input_area) {
          $area = $area_name['id'];
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
    $time_now = date('m/d - H時', $unix_time);
    $city_now = $response_now['name'];
    $feels_now = $response_now['main']['feels_like'];



    ?>
    <div class="desc">

      <fieldset>
        <legend>20万を超える地域から指定する</legend>
        <!-- <summary><span>都市を変更する</span></summary> -->
        <form action="" method="GET">
          <div>
            <form action="" method="GET">
              <h1>例)."京都"の場合 → "Kyouto"</h1>
              <label>地域名を入力して表示<br><input type="text" name="area_in" value=""></label>
              <ul>
                <li>”半角英字”かつ”1文字目は大文字”で入力して下さい</li>
                <li>最小単位は"市"です（町名では検索できません）</li>
                <li>一部サポートされていない地域があります</li>
                <li>サポート外の地域や誤入力の場合、デフォルトである名古屋の天気が表示されます</li>
              </ul>
              <button>Click or Enter!</button>
            </form>
          </div>
        </form>
      </fieldset>

      <fieldset>
        <legend>ボタンで選択する</legend>
        <!-- <summary><span>都市を変更する</span></summary> -->
        <form action="" method="GET">
        <div>
            <label><input type="radio" name="area" value="2130037">北海道</label>
            <label><input type="radio" name="area" value="1850147">東京</label>
            <label><input type="radio" name="area" value="1856057">名古屋</label>
            <label><input type="radio" name="area" value="1853909">大阪</label>
            <label><input type="radio" name="area" value="1863967">福岡</label>
            <label><input type="radio" name="area" value="1854345">沖縄</label>
          </div>
          <div>
            <label><input type="radio" name="area" value="2643744">London(GB)</label>
            <label><input type="radio" name="area" value="5128581">N.Y(US)</label>
            <label><input type="radio" name="area" value="5855797">Hawaii(US)</label>
            <label><input type="radio" name="area" value="3369157">Cape Town(ZA)</label>
            <label><input type="radio" name="area" value="2193732">Auckland(NZ)</label>
            <label><input type="radio" name="area" value="1880252">シンガポール(SG)</label>
          </div>
          <button>Click or Enter!</button>

        </form>
      </fieldset>

    </div>
  </header>

  <main>
    <?php

    echo '<div class="weather_now">';
    echo '<h1>' . $city_now . ' ' . $time_now . '現在の天気</h1>';
    echo $weather_now['main'] . '/';
    echo $weather_now['description'] . '<br>';
    echo '体感気温' . $feels_now . '℃';
    echo '</div>';




    echo '<h1>' . $city . ' 24時間天気予報</h1>';

    // echo '<div class="tables">';
    $i = 0;
    $weather_dt = $list[$i]['dt'];
    $time = date('m/d - H時頃', $weather_dt);
    $weather = $list[$i]['weather'][0]['main'];
    $weather_icon = $list[$i]['weather'][0]['icon'];
    $weather_desc = $list[$i]['weather'][0]['description'];
    $humidity = $list[$i]['main']['humidity'];
    $temp_max = $list[$i]['main']['temp_max'];
    $temp_min = $list[$i]['main']['temp_min'];
    $feels = $list[$i]['main']['feels_like'];
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
      case (($feels > 0) && ($feels <= 5)):
        $bg_color = 'skyblue';
        break;
      case (($feels > -10) && ($feels <= 0)):
        $bg_color = 'blue';
        break;
    }

    echo
      <<< __deta__
    <details open>
      <summary>
        <span>
          <h3>$time</h3>
          <img src='https://openweathermap.org/img/w/$weather_icon.png' style='width:50px'>
          <p style="background-color:$bg_color">体感気温：$feels ℃</p>
          <i class="fas fa-angle-double-down"></i>
        </span>
      </summary>
        <p>概況：$weather_desc</p>
        <p>降水確率$rains ％</p>
        <p>湿度：$humidity %</p>
        <p>最高気温：$temp_max ℃</p>
        <p>最低気温：$temp_min ℃</p>
    </details>

    __deta__;

    // echo
    //   <<< mail_form
    // <form action="" method="POST">
    // <label>Mail<input type="email" name="address" autocomplete="off"></label>
    // <button>Done!</button>
    // </form>


    // mail_form;


    $message = $time . $city . $feels . '℃';
    // $headers = "From: t.tsumi02@gmail.com";

    // if (isset($_POST['address'])) {
    //   $address = ($_POST['address']);
    //   var_dump($address);
    //   echo 'OK';
    // } else {
    //   $address = "";
    //   echo 'emptyAddress';
    // }
    // mb_send_mail($address, '[Forecast]', $message);

    // if (mb_send_mail($address, '[Forecast]', $message) === true) {
    //   echo 'true';
    // } else {
    //   echo 'false';
    // }


    for ($i = 1; $i < 10; $i++) {
      $weather_dt = $list[$i]['dt'];
      $time = date('m/d - H時頃', $weather_dt);
      $weather = $list[$i]['weather'][0]['main'];
      $weather_icon = $list[$i]['weather'][0]['icon'];
      $weather_desc = $list[$i]['weather'][0]['description'];
      $humidity = $list[$i]['main']['humidity'];
      $temp_max = $list[$i]['main']['temp_max'];
      $temp_min = $list[$i]['main']['temp_min'];
      $feels = $list[$i]['main']['feels_like'];
      $rains = $list[$i]['pop'] * 100;

      $bg_color = 'none';
      switch ($feels) {
        case (($feels > -10) && ($feels < 0)):
          $bg_color = 'blue';
          break;
        case (($feels > 0) && ($feels < 5)):
          $bg_color = 'skyblue';
          break;
        case (($feels > 25) && ($feels < 30)):
          $bg_color = 'pink';
          break;
        case (($feels >= 30) && ($feels < 35)):
          $bg_color = 'orange';
          break;
        case ($feels >= 35):
          $bg_color = 'red';
          break;
      }

      echo
        <<< __deta__
    <details>
      <summary>
        <span>
          <h3>$time</h3>
          <img src='https://openweathermap.org/img/w/$weather_icon.png' style='width:50px'>
          <p style="background-color:$bg_color">体感気温：$feels ℃</p>
          <i class="fas fa-angle-double-down"></i>
        </span>
        
      </summary>
        <p>概況：$weather_desc</p>
        <p>降水確率$rains ％</p>
        <p>湿度：$humidity %</p>
        <p>最高気温：$temp_max ℃</p>
        <p>最低気温：$temp_min ℃</p>
    </details>

    __deta__;
    }

    // echo '</div>';



    echo '<details  class="five_days" style="background:none;box-shadow: none;">';
    echo '<summary>
        <span>
          <h1>' . $city . 'の向こう5日間の天気</h1>
          <i class="fas fa-angle-double-down"></i>
        </span>
      </summary>';
    // echo '<div class="tables">';

    for ($i = 10; $i < $leng; $i++) {

      $weather_dt = $list[$i]['dt'];
      $time = date('m/d - H時頃', $weather_dt);
      $weather = $list[$i]['weather'][0]['main'];
      $weather_icon = $list[$i]['weather'][0]['icon'];
      $weather_desc = $list[$i]['weather'][0]['description'];
      $humidity = $list[$i]['main']['humidity'];
      $temp_max = $list[$i]['main']['temp_max'];
      $temp_min = $list[$i]['main']['temp_min'];
      $feels = $list[$i]['main']['feels_like'];
      $rains = $list[$i]['pop'] * 100;

      $bg_color = 'none';
      switch ($feels) {
        case (($feels > -10) && ($feels < 5)):
          $bg_color = 'white';
          break;
        case (($feels > 5) && ($feels < 10)):
          $bg_color = 'skyblue';
          break;
        case (($feels > 25) && ($feels < 30)):
          $bg_color = 'pink';
          break;
        case (($feels >= 30) && ($feels < 35)):
          $bg_color = 'orange';
          break;
        case ($feels >= 35):
          $bg_color = 'red';
          break;
      }

      echo
        <<< __deta__
    <details>
      <summary>
        <span>
          <h3>$time</h3>
          <img src='https://openweathermap.org/img/w/$weather_icon.png' style='width:50px'>
          <p style="background-color:$bg_color">体感気温：$feels ℃</p>
          <i class="fas fa-angle-double-down"></i>
        </span>
      </summary>
        <p>概況：$weather_desc</p>
        <p>降水確率$rains ％</p>
        <p>湿度：$humidity %</p>
        <p>最高気温：$temp_max ℃</p>
        <p>最低気温：$temp_min ℃</p>
    </details>

    __deta__;
    }

    echo '</details>';

    ?>

  </main>
  <footer>
    <img class="api" src="../imgs/api.jpg" alt="" width="200px">
    <h1>OpenWeatherMap_API</h1>
    <p class="copyLight"><small>&copy; Tatsumi_Ishikawa.2020</small></p>

  </footer>
</body>

</html>