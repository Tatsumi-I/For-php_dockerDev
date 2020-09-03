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
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
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
      <h1 class="item5"><?= h($myName);?>_Portfolio</h1>
      <h2>石川達実  ポートフォリオサイト</h2>
    </div>
  </div>
  <div class="linkbtn">
  <!-- <button type="button" name="siteLink"> -->
    <p ><a href="index.php">Click here...</a></p>
  <!-- </button> -->
  </div>
</div>
</body>
</html>