<?php

require_once('../app/function.php');

$rand = rand(1, 6);

switch ($rand) {
  case 1:
    $bgi = 'forest';
    break;
  case 2:
    $bgi = 'cherry';
    break;
  case 3:
    $bgi = 'growth_2';
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
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title><?php echo $pageName; ?>tatsumi's_portfolio</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./css/index.min.css">
  <meta name="description" content="たつみのポートフォリオサイト">
  <link rel="shortcut icon" href="imgs/myLogoBlack.png" type="image/png" sizes="16*16">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/uie3lbv.css">

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js"></script> -->
  <!-- <script src="./js/ellipse.js"></script> -->
  <!-- <script src="./js/processing.min.js"></script> -->

  <style>
    <?php echo
      'html{background: url(../imgs/' . $bgi . '.jpg) top left 50% / cover no-repeat;}'; ?>
  </style>
</head>

<!-- <canvas id="app" data-processing-sources="./js/ellpse.js"></canvas> -->

<body>

  <header>
    
    <?php if ($pageName == 'Home - ') {
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
          <details open>
            <summary>Global Menu<span>Open</span></summary>
            $globalMenu
          </details>
          $icon
        </div>
      </div>
        
      

      __header;
      } else {

        echo
          <<< __header_2
        
      <a href="index.php">
        <img class="logoImg" src="./imgs/myLogowhite.png">
      </a>
      <div class="inHeader">
        <a href="index.php">
          <h1>$myName _ Portofolio</h1>
          <h2>石川達実  ポートフォリオサイト</h2>
        </a>
      </div>
      <div id="globalMenu" class="headFootOpenMenu">
        <details>
          <summary>Global Menu<span>Open</span></summary>
          $globalMenu
        </details>
       

    __header_2;
      }

      ?>


    </div>
  </header>

  <main>
    <nav class="top_nav">
      <a href="index.php" class="miniLogo">
        <img src="./imgs/myLogoWhite.png" alt="">
      </a>
      <p class="nav"><a href="index.php"><i class="fas fa-home"></i>HOME</a>
        <?= $menuList; ?>
      </p>
      <a class="globalMenu" href="#globalMenu">Global menu</a>
      <a id="appConect" class="app" href="../php_app/eva.php" target="_Hoz_on">Hoz_on</a>
    </nav>
    <article>