<?php

require_once('/work/app/function.php');

$nagoya = '1856057';
$api_url = 'https://api.openweathermap.org/data/2.5/forecast?id='.$nagoya.'&appid='.$apiKey.'&lang=ja&units=metric';

$response = json_decode(file_get_contents($api_url), true);
$list = $response['list'];
$leng = count($list);
$city = $response['city']['name'];

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather_API</title>
  <link rel="stylesheet" type="text/css" href="weather.min.css">
</head>
<body>
  
<header>
  <h1>OpenWeatherMap_API</h1>
  <!-- <img src="/imgs/sun.jpg"> -->
</header>

<main>



<?php

echo '<p>' . $city . '24時間以内の天気</p>';
echo '';
echo '<div class="tables">';


  for($i = 0; $i < 10; $i++){
    
    $weather_dt = $list[$i]['dt_txt'];
    $weather = $list[$i]['weather'][0]['main'];
    $weather_icon = $list[$i]['weather'][0]['icon'];
    $weather_desc = $list[$i]['weather'][0]['description'];
    $humidity = $list[$i]['main']['humidity'];
    $temp_max = $list[$i]['main']['temp_max'];
    $temp_min = $list[$i]['main']['temp_min'];
    $feels = $list[$i]['main']['feels_like'];
    $rains = $list[$i]['pop'];
    
    $number = $i+1;

    echo 
    <<< __table__
    <div class="tables">
    <table>
    <tr>
        <th>$number</th>
        <td></td>
      </tr>
      <tr>
        <th>予報日時</th>
        <td>$weather_dt</td>
      </tr>
      <tr>
        <th>天気</th>
        <td>$weather</td>
      </tr>
      <tr>
        <th>イメージ</th>
        <td><img src='https://openweathermap.org/img/w/$weather_icon.png' style='width:50px'></td>
      </tr>
      <tr>
        <th>湿度</th>
        <td>$humidity %</td>
      </tr>
      <tr>
        <th>降水量</th>
        <td>$rains mm</td>
      </tr>
      <tr>
        <th>概況</th>
        <td>$weather_desc</td>
      </tr>
      <tr>
        <th>最高気温</th>
        <td>$temp_max ℃</td>
      </tr>
      <tr>
        <th>最低気温</th>
        <td>$temp_min ℃</td>
      </tr>
      <tr>
        <th>体感気温</th>
        <td>$feels ℃</td>
      </tr>

    </table>
    </div>

    __table__;

  }


echo '</div>';


echo '<details>';
echo '<summary>' . $city . 'の向こう5日間の天気</summary>';
echo '<div class="tables">';

  for($i = 10; $i < $leng; $i++){
    
    $weather_dt = $list[$i]['dt_txt'];
    $weather = $list[$i]['weather'][0]['main'];
    $weather_icon = $list[$i]['weather'][0]['icon'];
    $weather_desc = $list[$i]['weather'][0]['description'];
    $humidity = $list[$i]['main']['humidity'];
    $temp_max = $list[$i]['main']['temp_max'];
    $temp_min = $list[$i]['main']['temp_min'];
    $feels = $list[$i]['main']['feels_like'];
    $rains = $list[$i]['pop'];
    
    echo 
    <<< __table__
    <table>
      <tr>
        <th>予報日時</th>
        <td>$weather_dt</td>
      </tr>
      <tr>
        <th>天気</th>
        <td>$weather</td>
      </tr>
      <tr>
        <th>イメージ</th>
        <td><img src='https://openweathermap.org/img/w/$weather_icon.png' style='width:50px'></td>
      </tr>
      <tr>
        <th>湿度</th>
        <td>$humidity %</td>
      </tr>
      <tr>
        <th>降水量</th>
        <td>$rains mm</td>
      </tr>
      <tr>
        <th>概況</th>
        <td>$weather_desc</td>
      </tr>
      <tr>
        <th>最高気温</th>
        <td>$temp_max ℃</td>
      </tr>
      <tr>
        <th>最低気温</th>
        <td>$temp_min ℃</td>
      </tr>
      <tr>
        <th>体感気温</th>
        <td>$feels ℃</td>
      </tr>

    </table>
    __table__;

  }

 echo '</div>';
 echo '</details>';


?>

</main>
<footer>
  
</footer>
</body>
</html>