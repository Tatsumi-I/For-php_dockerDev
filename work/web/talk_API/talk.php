
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APIによるチャットボット</title>
  <link rel="stylesheet" href="talk.min.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="shortcut icon" href="../imgs/logo.png" type="image/png" sizes="16*16">

</head>
<body>


<?php

require_once('../../app/function.php');


if(!empty($_POST['text'])){
  $text = h($_POST['text']);
} else {
  $text = '話して';
}
 

$request = array(
  'apikey' => $talk_apiKey,
  'query'=> $text
);
$url = 'https://api.a3rt.recruit-tech.co.jp/talk/v1/smalltalk';

$opts['http'] = array(
  'method'    => 'POST',
  'header'    => 'Content-type: application/x-www-form-urlencoded;charset=UTF-8',
  'content'   => http_build_query($request, '', '&', PHP_QUERY_RFC3986)
);
$context = stream_context_create($opts);

// リクエスト実行
$response_json = file_get_contents($url, false, $context);

// JSON を 配列に変換
$response_arr = json_decode($response_json, true);

if(empty($response_arr['results'][0]['reply'])){
    $response ='ちょっとわかりません…';
  } else{
  $response = $response_arr['results'][0]['reply'];
}
  // var_dump($response_arr);


  $reque = $request['query'];

echo 
<<< body
 
  body;
?>

<div class="base">
    <div class="header">
      <img src="../imgs/logo.png" alt="">
      <i class="fas fa-times"></i>
      <img src="../imgs/api.jpg" alt="">
    </div>

    <h1>TALK APIによるチャットボット</h1>
    <hr>
    <div class="wall_color">
      <div class="container">
        <div class="human">
          <p><?php echo $text;?></p>
        </div>
        <div class="triangle_right">
        </div>
        <div class="acount">
          <i class="fas fa-user-alt"></i>
        </div>
      </div>
      <div class="container">
        <div class="acount">
          <i class="fas fa-robot"></i>
        </div>
        <div class="triangle_left">
        </div>
        <div class="bot">
          <p><?php echo $response; ?>!</p>
        </div>
      </div>
    </div>

    <form action="" method="POST" autocomplete="off">
    <input type="text" name="text" autofocus>
    <button><i class="far fa-paper-plane"></i></button>
    </form>
  </div>

  </body>
  </html>
