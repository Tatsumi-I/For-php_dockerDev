<?php 
  require_once('../app/function.php')
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
<!-- 日本語フォント -->
<script src="https://javascript/jquery-3.5.1.min.js"></script>
<script>
  (function(d) {
    var config = {
      kitId: 'pjg4svf',
      scriptTimeout: 3000,
      async: true
    }
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<style>
</style>
</head>

<body>
<header>
  <div class="headerContainer">
    <div class="logo">
      <img src="imgs/logo.png" width=80px>
    </div>
    <div class="inHeader">
      <h1><?= h($myName);?>_Portofolio</h1>
      <h2>石川達実  ポートフォリオサイト</h2>
    </div>
    <?= $nav;?>
  </div>
</header>