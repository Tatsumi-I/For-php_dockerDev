<?php 

  $pageName = 'Home - ';
  require_once('../app/function.php');
  
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title><?php h($pageName);?>tatsumi's_portfolio</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="./css/home.min.css">
<meta name="description" content="たつみのポートフォリオサイト">
<link rel="shortcut icon" href="imgs/myLogoBlack.png" type="image/png" sizes="16*16">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/uie3lbv.css">

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.1.9/p5.min.js"></script> -->
<!-- <script src="./js/ellipse.js"></script> -->
<!-- <script src="./js/processing.min.js"></script> -->

<style>
  </style>
</head>

<!-- <canvas id="app" data-processing-sources="./js/ellpse.js"></canvas> -->
<body>

<header>
  <div id="header" class="headerContainer">

    <div class="homeGroup">
      <div class="copy">
        <a href="home.php">
          <p class="item0">"Feel"</p>
          <p class="item1">Create</p>
          <p class="item2">a</p>
          <p class="item3">New</p>
          <p class="item4">Experience</p>
          <p class="item5">with　your　mind.</p>
        </a>
      </div>
      <div class="logo">
        
          <a href="home.php"><img src="imgs/logo.png"></img></a>
      
        <div class="nameBar">
          <h1>石川達実  ポートフォリオサイト</h1>
          <h2 class="item5"><?= h($myName);?> _ Portfolio</h2>
        </div>
      </div>
    </div>

    <!-- <a href="index.php"><img src="imgs/logo.png"></a>
    <div class="inHeader">
      <a href="home.php">
        <h1><//?= h($myName);?> _ Portofolio</h1>
        <h2>石川達実  ポートフォリオサイト</h2>
      </a>
    </div> -->
  </div>
  
  <div class="headFootOpenMenu">
    <details open>
      <summary>Global Menu</summary>
        <?= $globalMenu; ?>
      </details>
      <?= $icon;?>
    </div>
</header>

<main>
<article>
