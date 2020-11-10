
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<?php

require_once('/work/app/function.php');


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

// 表示処理
$response = $response_arr['results'][0]['reply'];
echo $text . '<br>';
echo $response;
$reque = $request['query'];
echo $reque;

// curl_close($ch);
echo 
<<< body
    <div class="base">
      <div class="bot">
        <p>$response</p>

      </div>
      <div class="human">
        <p></p>
      </div>
    </div>
    <form action="" method="POST" autocomplete="off">
      <input type="text" name="text">
      <button>done</button>
    </form>

  body;
?>
  </body>
  </html>
