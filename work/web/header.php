<?php 
  require_once('../app/function.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>tatsumi's-portfolio</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/index.min.css">
<script src="js/myportfolio.js"></script>
<meta name="description" content="たつみのポートフォリオ">
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
            <p><a href="home.php#profile">Profile</a></p>
            <p><a href="contact.php">Contact</a></p>
    </div>
  </div>
  
  <div class="headFootOpenMenu">
    <details>
      <summary>Global Menu</summary>
        <div class="fl">
          <div>
            <p><a href="home.php">HOME</a></p>
            <p>Works</p>
            <p class="indent">Coding Skills included on</p>
            <ul>
              <li class="indent"><a href="      ">This site</a></li>
              <li class="indent"><a href="      ">My first code</a></li>
              <li class="indent"><a href="      ">Processing</a></li>
            </ul>
            <p class="indent"><a href="design.php">Design</a></p>
            <p>Profile</p>
            <ul>
              <li><a href="skills.php">Knowledge & Skill</a></li>
              <li><a href="chara.php">Character</a></li>
              <li><a href="backBone.php">Backbone</a></li>
              <li><a href="blackApron.php">What is Black Apron?</a></li>
              <li><a href="hobby.php">Hobby</a></li>
            </ul>
            <p><a href="contact.php">Contact</a></p>
          </div>
          <hr>
            <div class="siteLogo">
              <a href="index.php">
                <h1>Create a New Experience.</h1>
                  <div>
                    <img src="imgs/logo.png" width="100px">
                    <p><?= h($myName);?> _ Portfolio</p>
                    <p class="ja">石川達実  ポートフォリオサイト</p>
                  </div>
              </a>
            </div>
        </div>
      </details>
  </div>
</header>

<main>