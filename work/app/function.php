<?php
  function h($str){
    return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
  }

  $myName = 'Tatsumi-Ishikawa';

  $date = 'Y/F/d (D) H:i:s';

  $n = mt_rand(1, 5);//乱数とランダム表示
    if($n === 1){
    $mesagge = 'php勉強中';
    } elseif($n === 2){
    $mesagge = 'p5勉強中';
    } elseif($n === 3){
    $mesagge = 'Docker導入しました';
    } elseif($n === 4){
    $mesagge = 'React学習中';
    } elseif($n === 5){
    $mesagge = '独習は正直つらい…';
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
  '


?>