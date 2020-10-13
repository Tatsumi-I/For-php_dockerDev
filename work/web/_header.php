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
<script src="js/myportfolio.js"></script>
<meta name="description" content="たつみのポートフォリオサイト">
<link rel="shortcut icon" href="imgs/myLogoBlack.png" type="image/png" sizes="16*16">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/uie3lbv.css">

<style>
</style>
</head>

<body>
<header>
  <div id="header" class="headerContainer">
    <div class="logo">
      <a href="home.php">
        <img src="imgs/logo.png" width="80px">
      </a>
    </div>
    <div class="inHeader">
      <a href="home.php">
        <h1><?= h($myName);?> _ Portofolio</h1>
        <h2>石川達実  ポートフォリオサイト</h2>
      </a>
    </div>
    <div class="navi">
            <p><a href="home.php">HOME</a></p>
            <p>Coding</p>
            <p><a href="design.php">Design</a></p>
            <p><a href="chara.php">Profile</a></p>
            <p><a href="contact.php">Contact</a></p>
    </div>
  </div>
  
  <div class="headFootOpenMenu">
    <details>
      <summary>Global Menu</summary>
        <?= $globalMenu; ?>
      </details>
  </div>
</header>

<main>
<article>
<div class="app">
    <a href="../php_app/eva.php" target="_Hoz_on">Hoz_on</a>
</div>