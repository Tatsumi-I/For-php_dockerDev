<?php 
  
  $pageName = '';
  require_once('../app/function.php')


?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?php h($pageName);?>tatsumi's_portfolio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/index.min.css">
<meta name="description" content="たつみのポートフォリオ">
<link rel="shortcut icon" href="imgs/myLogoBlack.png" type="image/png" sizes="16*16">
<link rel="stylesheet" href="https://use.typekit.net/uie3lbv.css">

  <style>
  
  </style>

</head>
<body>

<header>

  <hr class="hr">

  <div class="topOpenMenu">
    <details>
      <summary>Global Menu</summary>
        <?= $globalMenu; ?>
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
        <p class="item5">with　your　mind.</p>
      </a>
    </div>
    <div class="logo">
      
        <a href="index.php"><img src="imgs/logo.png"></img></a>
     
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