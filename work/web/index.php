<?php 
  require_once('../app/function.php')
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>tatsumi's-portfolio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/top.min.css">
<meta name="description" content="たつみのポートフォリオ">
<link rel="shortcut icon" href="imgs/myLogoBlack.png" type="image/png" sizes="16*16">
<link rel="stylesheet" href="https://use.typekit.net/uie3lbv.css">

  <style>
  
  </style>
    <!-- <script src="p5sketch/p5.min.js"></script>
  <script src="p5sketch/p5sketch.js"></script> -->
</head>
<body>

<header>

  <hr class="hr">

  <div class="topOpenMenu">
    <details>
      <summary>Global Menu</summary>
        <div class="fl">
          <div>
            <p><a href="home.php">HOME</a></p>
            <p>Coding</p>
            <ul>
              <li><a href="      ">Skills included on this site</a></li>
              <li><a href="      ">My first code</a></li>
              <li><a href="      ">Processing</a></li>
            </ul>
            <p><a href="design.php">Design</a></p>
            <p>Profile</p>
            <ul>
              <li><a href="skills.php">Knowledge & Skill</a></li>
              <li><a href="chara.php">Character</a></li>
              <li><a href="backBone.php">Backbone</a></li>
              <li><a href="hobby.php">Hobby</a></li>
            </ul>
            <p><a href="contact.php">Contact</a></p>
          </div>
          <hr>
          <a href="home.php">
            <div class="siteLogo">
              <h2>Create a New Experience.</h2>
              <div>
                <img src="imgs/logo.png" width="100px">
                <h3><?= h($myName);?> _ Portfolio</h3>
                <h4>石川達実  ポートフォリオサイト</h4>
              </div>
            </div>
          </a>
        </div>
      </details>
  </div>
  
  <div class="homeGroup">
    <div class="copy">
      <a href="home.php">
        <p class="item0">"Feel"</p>
        <p class="item1">Create</p>
        <p class="item2">a</p>
        <p class="item3"> New</p>
        <p class="item4">Experience</p>
        <p class="item5">with your mind.</p>
      </a>
    </div>
    <div class="logo">
      
        <img src="imgs/logo.png"><a href="home.php"> </a></img>
     
      <div class="nameBar">
        <h1>石川達実  ポートフォリオサイト</h1>
        <h2 class="item5"><?= h($myName);?> _ Portfolio</h2>
      </div>
    </div>
  </div>
</header>
<main>
</main>
<footer></footer>


</body>

</html>