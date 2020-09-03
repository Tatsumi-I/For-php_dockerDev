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
    $mesagge = '時々頭がパンクします';
  }

  $nav= 
    '<nav>
      <p><a href="#works">実績/Works</a></p>
        <ul>
          <li><a href="#coading">Coding</a></li>
          <li><a href="#design">Design</a></li>
        </ul>
      <p><a href="">人物/Character</a></p>
      <p><a href="">経歴/Backbone</a></p>
      <p><a href="">将来/Prospects</a></p>
    </nav>'


?>