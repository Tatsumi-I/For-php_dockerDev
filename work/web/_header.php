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
  <meta charset="utf-8">
  <title><?php echo $pageName; ?>tatsumi's_portfolio</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="たつみのポートフォリオサイト">
  <link rel="stylesheet" type="text/css" href="./css/index.min.css">
  <link rel="shortcut icon" href="./imgs/logo.png" type="image/png" sizes="16*16">
  <!-- <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet"> -->
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"> -->

  <style>
    <?php

    $rand = rand(1, 6);

    switch ($rand) {
      case 1:
        $bgi = 'forest';
        break;
      case 2:
        $bgi = 'cherry';
        break;
      case 3:
        $bgi = 'whiteFlower';
        break;
      case 4:
        $bgi = 'sky';
        break;
      case 5:
        $bgi = 'pink';
        break;
      case 6:
        $bgi = 'mountain';
        break;
      case 7:
        $bgi = 'flower';
        break;
    }


    echo
      'html{background: url(./imgs/' . $bgi . '.jpg) top left 50% / cover no-repeat;}'; ?>
  </style>
</head>

<body>

  <header>

    <?php
    // require_once('../app/function.php');
    $myName = 'Tatsumi-Ishikawa';

    $date = 'Y/m/d (D) H:i:s';

    $icon =
      '
    <div class="icons">
      <i class="fab fa-html5 fa-fw html5" title="HTML5"></i>
      <i class="fab fa-css3 fa-fw css3" title="CSS3"></i>
      <i class="fas fa-mobile-alt rwd" title="RWD"></i>
      <i class="fab fa-sass fa-fw scss" title="Scss"></i>
      <i class="fab fa-js fa-fw js" title="JavaScript"></i>
      <img src="imgs/p5.png" alt="" title="processing">
      <i class="fab fa-wordpress fa-fw wp" title="WordPress"></i>
      <i class="fab fa-github git" title="Git/GitHub"></i>
      <img src="imgs/ps.png" alt="" title="">
      <img src="imgs/ai.png" alt="" title="">
      <i class="fab fa-docker fa-fw docker" title="Docker"></i>
      <i class="fab fa-php fa-fw php" title="PHP"></i>
      <i class="fas fa-database db" title="MYSQL"></i>
      <img src="imgs/api.jpg" alt="" title="">
      <i class="fas fa-cloud"></i>
      <i class="fas fa-network-wired"></i>
    </div>
  ';


    $globalMenu =
      '
  <div class="fl">
    <h1>HOME</h1>
      <p><a href="index.php"></a></p>
      <fieldset><legend>スキルと知識</legend>
        <p class="indent1">ページ一覧</p>
        <ul class="indent2">
          <li><a href="include.php">This site</a></li>
          <li><a href="include.php">My first code</a></li>
          <li><a href="include.php">Processing</a></li>
          <li><a href="include.php">php & db_App "Hoz_on"</a></li>
          <li><a href="include.php">Web_API</a></li>
          <li><a href="design.php">Design</a></li>
        </ul>
      </fieldset>
      <fieldset><legend>過去</legend>
        <p class="indent1">ページ一覧</p>
        <ul class="indent2">
          <li><a href="backBone.php">Backbone</a></li>
          <li><a href="blackApron.php">What is Black Apron?</a></li>
          <li class="indent2"><a href="tatsumi-jyuku.php">社内試験対策テキスト</a></li>
        </ul>
      </fieldset>
      <fieldset><legend>人物像</legend>
        <p class="indent1">ページ一覧</p>
        <ul class="indent2">
          <li><a href="chara.php">Character</a></li>
          <li><a href="hobby.php">Hobby</a></li>
        </ul>
      </fieldset>
      <fieldset><legend>Contact</legend>
      <p class="indent1">ページ一覧</p>
      <p class="indent2">各種アカウントはこちら</p>
        <ul class="indent2">
          <li><a href="https://github.com/Tatsumi-I/">GitHub</a></li>
          <li><a href="mailto:t.tsumi02@gmail.com">MAILで問い合わせる</a></li>
        </ul>
      </fieldset>
    
  </div>
  ';


    if ($pageName == 'Home - ') {
      echo
        <<< __header
      <div id="header" class="headerContainer">

        <div class="homeGroup">
        
          <div class="copy">
            <a href="index.php">
              <p class="item0">"Feel"</p>
              <p class="item1">Create</p>
              <p class="item2">a</p>
              <p class="item3">New</p>
              <p class="item4">Experience</p>
              <p class="item5">with　your　mind.</p>
            </a>
          </div>
          <div class="logo">
            
              <a href="index.php"><img src="./imgs/logo.png"></a>
          
            <div class="nameBar">
              <h1>石川達実  ポートフォリオサイト</h1>
              <h2 class="item5">$myName _ Portfolio</h2>
            </div>
          </div>
        </div>

        <div id="globalMenu" class="headFootOpenMenu">
          <details>
            <summary>Global Menu<span>Open</span></summary>
            $globalMenu
          </details>
        </div>
      </div>
        
      

      __header;
    } else {

      echo
        <<< __header_2

      
        <a href="index.php">
          <img class="logoImg" src="./imgs/myLogoWhite.png">
        </a>
        <div class="inHeader">
          <a href="index.php">
            <h1>$myName _ Portofolio</h1>
          </a>
        </div>
        <div id="globalMenu" class="headFootOpenMenu">
          <details>
            <summary>Global Menu<span>Open</span></summary>
            $globalMenu
          </details>
        </div>

       

    __header_2;
    }

    ?>


    <!-- </div> -->
  </header>

  <main>
    <nav class="top_nav">
      <a href="index.php" class="miniLogo">
        <img src="./imgs/myLogoWhite.png" alt="">
      </a>
      <a class="globalMenu" href="#globalMenu">Global menu</a>
      <p class="nav"><a href="index.php"><i class="fas fa-home"></i>HOME</a>
        <?= $menuList; ?>
      </p>
      <a id="appConect" class="app" href="./php_app/eva.php" target="_Hoz_on">Hoz_on</a>
    </nav>
    <article>