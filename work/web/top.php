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
<script src="https://javascript/jquery-3.5.1.min.js"></script>

<script>//日本語font
  (function(d) {
    var config = {
      kitId: 'pjg4svf',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
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
            <p><a href="index.php">HOME</a></p>
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
              <li><a href="character.php">Character</a></li>
              <li><a href="backBone.php">Backbone</a></li>
              <li><a href="hobby.php">Hobby</a></li>
            </ul>
            <p><a href="contact.php">Contact</a></p>
          </div>
          <hr>
          <a href="index.php">
            <div class="siteLogo">
              <h1>Create a New Experience.</h1>
              <div>
                <img src="imgs/logo.png" width="100px">
                <h2><?= h($myName);?> _ Portfolio</h2>
                <h3>石川達実  ポートフォリオサイト</h3>
              </div>
            </div>
          </a>
        </div>
      </details>
  </div>
  
  <div class="homeGroup">
    <div class="copy">
      <p class="item1">Create</p>
      <p class="item2">a</p>
      <p class="item3"> New</p>
      <p class="item4">Experience.</p>
    </div>
    <div class="logo">
      <img src="imgs/logo.png">
      <div class="nameBar">
        <p>石川達実  ポートフォリオサイト</p>
        <h1 class="item5"><?= h($myName);?> _ Portfolio</h1>
      </div>
    </div>
  </div>
</header>
<main>
  </main>
  <footer>
    
    </footer>
  </body>
  
  </html>