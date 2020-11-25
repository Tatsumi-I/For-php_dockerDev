<!DOCTYPE html>
<html lang="en">

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
  <title>APIによるチャットボット</title>
  <link rel="stylesheet" href="talk.min.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="shortcut icon" href="../imgs/logo.png" type="image/png" sizes="16*16">

</head>

<body>
  <header>



    <?php

    require_once('../../app/function.php');


    if (!empty($_POST['text'])) {
      $text = h($_POST['text']);
    } else {
      $text = '話して';
    }


    $request = array(
      'apikey' => $talk_apiKey,
      'query' => $text
    );
    $url = 'https://api.a3rt.recruit-tech.co.jp/talk/v1/smalltalk';

    $opts['http'] = array(
      'method'    => 'POST',
      'header'    => 'Content-type: application/x-www-form-urlencoded;charset=UTF-8',
      'content'   => http_build_query($request, '', '&', PHP_QUERY_RFC3986)
    );
    $context = stream_context_create($opts);

    $response_json = file_get_contents($url, false, $context);

    $response_arr = json_decode($response_json, true);

    if (empty($response_arr['results'][0]['reply'])) {
      $response = '日本語でお願いします';
    } elseif ($response_arr['results'][0]['reply'] === 'あなたはよくするんですか?') {
      $response = 'そんなことあります?';
    } else {
      $response = $response_arr['results'][0]['reply'];
    }


    $reque = $request['query'];

    $r = rand(1, 4);
    switch ($r) {
      case 1:
        $tag = '';
        break;
      case 2:
        $tag = '前歯にゴマはさんでるとこすみません';
        break;
      case 3:
        $tag = 'ちょwww';
        break;
      case 4:
        $tag = '鼻の穴膨らませてるとこすみません';
        break;
    }

    $r = rand(1, 4);
    switch ($r) {
      case 1:
        $names = 'あやちゃん';
        break;
      case 2:
        $names = 'こといちゃん';
        break;
      case 3:
        $names = 'みきちゃん';
        break;
      case 4:
        $names = 'ウケるwww';
        break;
    }


    $r = rand(1, 14);
    switch ($r) {
      case 1:
        $reply = '今オナラしました?!';
        break;
      case 2:
        $reply = '(社交辞令)';
        break;
      case 3:
        $reply = 'それより病院を紹介しましょうか?!';
        break;
      case 4:
        $reply = 'ウケるwww';
        break;
      case 5:
        $reply = '(ちょっと何言ってるかわかんねーや)';
        break;
      case 6:
        $reply = '(ちょwww<br>頭悪い発言やめてwww)';
        break;
      case 7:
        $reply = '(人の話聞いてwww)';
        break;
      case 8:
        $reply = 'ジャイアンみたいなこと言いますね!';
        break;
      case 9:
        $reply = 'ていうかその髪型は寝癖ですか?';
        break;
      case 10:
        $reply = 'そういえば、私のおすすめの潤滑油をご自宅に送りました!<br>着払いです。';
        break;
      case 11:
        $reply = 'さっきからずっと鼻毛出てますよ。';
        break;
      case 12:
        $reply = '(早く焼きそばパン買ってこいよ…)';
        break;
      case 13:
        $reply = 'そんなこと言ってるとiPadでしばきますよ?';
        break;
      case 14:
        $reply = '(適当に返事しとこ)';
        break;
    }


    $r = rand(0, 6);
    switch ($r) {
      case 0:
        $img = '13089765615165.jpg';
        break;
      case 1:
        $img = '13089765635043.jpg';
        break;
      case 2:
        $img = '13089765692941.jpg';
        break;
      case 3:
        $img = '13089765733333.jpg';
        break;
      case 4:
        $img = '13089765781066.jpg';
        break;
      case 5:
        $img = '13089765838257.jpg';
        break;
      case 6:
        $img = '13089765933043.jpg';
        break;
    }

    ?>

    <div class="base">
      <div class="header">
        <img src="../imgs/logo.png" alt="">
        <i class="fas fa-times"></i>
        <img src="../imgs/api.jpg" alt="">
      </div>

      <h1>TALK APIによる<br><span>\ イラッとする /</span><br>AIチャットボット</h1>
      <hr>
      <h1> ~ 特別 ver.~</h1>

    </div>
  </header>
  <main>
    <div class="imgHolder">
      <img src="../imgs/<?php echo $img; ?>" alt="">
    </div>

    <div class="base">
      <div class="wall_color">
        <div class="container">
          <div class="human">
            <p><?php echo $text; ?></p>
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
            <p><?php echo $tag;
                echo $names; ?></p>
            <p><?php echo $response; ?> !</p>
            <p><?php echo $reply; ?></p>
          </div>
        </div>
      </div>

      <form action="" method="POST" autocomplete="off">
        <input type="text" name="text" autofocus>
        <button><i class="far fa-paper-plane"></i></button>
      </form>
    </div>
    </div>
  </main>
  <footer>
    <div class="base">
      <p class="copyLight"><small>&copy; Tatsumi_Ishikawa.2020</small></p>
    </div>

  </footer>

</body>

</html>