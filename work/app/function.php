<?php
  function h($str){
    return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
  }

  $myName = 'Tatsumi-Ishikawa';

  $date = 'Y/m/d (D) H:i:s';

  $n = mt_rand(1, 5);//乱数とランダム表示
    if($n === 1){
    $message = 'php勉強中';
    } elseif($n === 2){
    $message = 'p5勉強中';
    } elseif($n === 3){
    $message = 'Docker導入しました';
    } elseif($n === 4){
    $message = 'React学習中';
    } elseif($n === 5){
    $message = '独習は正直つらい…';
  }

  $icon= 
  '
    <div class="icons">
      <i class="fab fa-html5 fa-fw html5" title="HTML5"></i>
      <i class="fab fa-css3 fa-fw css3" title="CSS3"></i>
      <i class="fas fa-mobile-alt rwd" title="RWD"></i>
      <i class="fab fa-sass fa-fw scss" title="Scss"></i>
      <i class="fab fa-js fa-fw js" title="JavaScript"></i>
      <i class="fab fa-wordpress fa-fw wp" title="WordPress"></i>
      <i class="fab fa-github git" title="Git/GitHub"></i>
      <img src="imgs/ps.png" width="20px" height="16px" alt="" title="">
      <img src="imgs/ai.png" width="20px" height="16px" alt="" title="">
      <i class="fab fa-docker fa-fw docker" title="Docker"></i>
      <i class="fab fa-php fa-fw php" title="PHP"></i>
      <i class="fas fa-database db" title="MYSQL"></i>
      <p><a href="">More about...</a></p>
    </div>
  ';


  $globalMenu = 
  '
  <div class="fl">
  <div>
    <p><a href="home.php">HOME</a></p>
    <p class="indent1">Works</p>
    <p class="indent2">Coding Skills included on</p>
    <ul class="indent2">
      <li><a href="      ">This site</a></li>
      <li><a href="      ">My first code</a></li>
      <li><a href="      ">Processing</a></li>
    </ul>
    <p class="indent2"><a href="design.php">Design</a></p>
    <p class="indent1">Profile</p>
    <ul class="indent2">
      <li><a href="skills.php">Knowledge & Skill</a></li>
      <li><a href="chara.php">Character</a></li>
      <li><a href="backBone.php">Backbone</a></li>
      <li><a href="blackApron.php">What is Black Apron?</a></li>
      <li><a href="hobby.php">Hobby</a></li>
    </ul>
    <p class="indent1"><a href="contact.php">Contact</a></p>
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
  ';

?>