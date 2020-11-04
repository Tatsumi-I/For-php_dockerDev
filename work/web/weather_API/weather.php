<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather_API</title>
  <link rel="stylesheet" type="text/css" href="weather.min.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

</head>
<body>
  
<header>
  <div>
    <img class="logo" src="/imgs/logo.png" alt="">
    <h1>OpenWeatherMap_API</h1>
  </div>
  <!-- <img src="/imgs/sun.jpg"> -->
  <img class="api" src="/imgs/api.jpg" alt="">
  <p>phpによる、Web APIを使用した天気アプリです</p>
</header>

<main>
<fieldset>
  <legend><h2>都市を選んでください</h2></legend>
  <form action="" method="GET">
    <div>
      <label><input type="radio" name="area" value="2643744">London(GB)</label>
      <label><input type="radio" name="area" value="5128581">N.Y(US)</label>
      <label><input type="radio" name="area" value="5855797">Hawaii(US)</label>
      <label><input type="radio" name="area" value="3369157">Cape Town(ZA)</label>
      <label><input type="radio" name="area" value="2193732">Auckland(NZ)</label>
      <label><input type="radio" name="area" value="1880252">シンガポール(SG)</label>
    </div>
    <div>
      <label><input type="radio" name="area" value="2130037">北海道</label>
      <label><input type="radio" name="area" value="1850147">東京</label>
      <label><input type="radio" name="area" value="1856057">名古屋</label>
      <label><input type="radio" name="area" value="1853909">大阪</label>
      <label><input type="radio" name="area" value="1863967">福岡</label>
      <label><input type="radio" name="area" value="1854345">沖縄</label>
    </div>
    <button>Chenge!</button>
  </form>
</fieldset>

<?php

require_once('/work/app/function.php');


if (isset($_GET['area'])){
  $area = $_GET['area'];
} else {
  $area = '1856057';
}

$api_url = 'https://api.openweathermap.org/data/2.5/forecast?id='.$area.'&appid='.$apiKey.'&lang=ja&units=metric';

$response = json_decode(file_get_contents($api_url), true);
$list = $response['list'];
$leng = count($list);
$city = $response['city']['name'];


$api_url_now = 'https://api.openweathermap.org/data/2.5/weather?id='.$area.'&appid='.$apiKey.'&lang=ja&units=metric';
$response_now = json_decode(file_get_contents($api_url_now), true);
$weather_now = $response_now['weather'][0];
$unix_time = $response_now['dt'];
$time_now = date('Y.m.d. H時',$unix_time);
$city_now = $response_now['name'];
$feels_now = $response_now['main']['feels_like'];

echo '<div class="weather_now">';
echo '<h3>' . $city_now . ' ' . $time_now . '現在の天気</h3>';
echo $weather_now['main'] . '/';
echo $weather_now['description'] . '<br>';
echo '体感気温' . $feels_now . '℃';
echo '</div><hr>';



echo '<h2>' . $city . ' 24時間天気予報</h2>';

// echo '<div class="tables">';

  for($i = 0; $i < 10; $i++){
    $weather_dt = $list[$i]['dt'];
    $time = date('Y.m.d. H時頃',$weather_dt);
    $weather = $list[$i]['weather'][0]['main'];
    $weather_icon = $list[$i]['weather'][0]['icon'];
    $weather_desc = $list[$i]['weather'][0]['description'];
    $humidity = $list[$i]['main']['humidity'];
    $temp_max = $list[$i]['main']['temp_max'];
    $temp_min = $list[$i]['main']['temp_min'];
    $feels = $list[$i]['main']['feels_like'];
    $rains = $list[$i]['pop'] * 100;

    $bg_color = 'none';
      switch ($feels){
        case (($feels > -10) && ($feels < 0)): $bg_color = 'blue';
        break;
        case (($feels > 0) && ($feels < 5)) : $bg_color = 'skyblue';
        break;
        case (($feels > 25) && ($feels < 30)): $bg_color = 'pink';
        break;
        case (($feels >= 30) && ($feels < 35)): $bg_color = 'orangered';
        break;
        case ($feels >= 35): $bg_color = 'red';
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



echo '<details style="background:none;box-shadow: none;">';
echo '<summary>
        <span>
          <h2>' . $city . 'の向こう5日間の天気</h2>
          <i class="fas fa-angle-double-down"></i>
        </span>
      </summary>';
// echo '<div class="tables">';

  for($i = 10; $i < $leng; $i++){
    
    $weather_dt = $list[$i]['dt'];
    $time = date('Y.m.d. H時頃',$weather_dt);
    $weather = $list[$i]['weather'][0]['main'];
    $weather_icon = $list[$i]['weather'][0]['icon'];
    $weather_desc = $list[$i]['weather'][0]['description'];
    $humidity = $list[$i]['main']['humidity'];
    $temp_max = $list[$i]['main']['temp_max'];
    $temp_min = $list[$i]['main']['temp_min'];
    $feels = $list[$i]['main']['feels_like'];
    $rains = $list[$i]['pop'] * 100;
    
    $bg_color = 'none';
      switch ($feels){
        case (($feels > -10) && ($feels < 5)): $bg_color = 'white';
        break;
        case (($feels > 5) && ($feels < 10)) : $bg_color = 'skyblue';
        break;
        case (($feels > 25) && ($feels < 30)): $bg_color = 'pink';
        break;
        case (($feels >= 30) && ($feels < 35)): $bg_color = 'orangered';
        break;
        case ($feels >= 35): $bg_color = 'red';
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
  <img class="api" src="/imgs/api.jpg" alt="" width="200px">
  <h1>OpenWeatherMap_API</h1>
  <p class="copyLight"><small>&copy; Tatsumi_Ishikawa.2020</small></p>

</footer>
</body>
</html>