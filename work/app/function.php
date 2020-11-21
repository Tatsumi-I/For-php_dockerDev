<?php
function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$myName = 'Tatsumi-Ishikawa';

$date = 'Y/m/d (D) H:i:s';

$icon =
  '
    <div class="icons">
      <i class="fab fa-html5 fa-fw html5" title="HTML5"></i>
      <i class="fab fa-css3 fa-fw css3" title="CSS3"></i>
      <i class="fas fa-mobile-alt rwd" title="RWD"></i>
      <i class="fab fa-sass fa-fw scss" title="Scss"></i>
      <i class="fab fa-js fa-fw js" title="JavaScript"></i>
      <img src="imgs/p5.png" alt="" title="processing">
      <i class="fab fa-wordpress fa-fw wp" title="WordPress"></i>
      <i class="fab fa-github git" title="Git/GitHub"></i>
      <img src="imgs/ps.png" alt="" title="">
      <img src="imgs/ai.png" alt="" title="">
      <i class="fab fa-docker fa-fw docker" title="Docker"></i>
      <i class="fab fa-php fa-fw php" title="PHP"></i>
      <i class="fas fa-database db" title="MYSQL"></i>
      <img src="imgs/api.jpg" alt="" title="">
      <i class="fas fa-cloud"></i>
      <i class="fas fa-network-wired"></i>
    </div>
  ';


$globalMenu =
  '
  <div class="fl">
    <fieldset><legend>HOME</legend>
      <p><a href="index.php"></a></p>
      <fieldset><legend>スキルと知識</legend>
        <p class="indent1">ページ一覧</p>
        <ul class="indent2">
          <li><a href="include.php">This site</a></li>
          <li><a href="include.php">My first code</a></li>
          <li><a href="include.php">Processing</a></li>
          <li><a href="include.php">php & db_App "Hoz_on"</a></li>
          <li><a href="include.php">Web_API</a></li>
          <li><a href="design.php">Design</a></li>
        </ul>
      </fieldset>
      <fieldset><legend>過去</legend>
        <p class="indent1">ページ一覧</p>
        <ul class="indent2">
          <li><a href="backBone.php">Backbone</a></li>
          <li><a href="blackApron.php">What is Black Apron?</a></li>
          <li class="indent2"><a href="tatsumi-jyuku.php">社内試験対策テキスト</a></li>
        </ul>
      </fieldset>
      <fieldset><legend>人物像</legend>
        <p class="indent1">ページ一覧</p>
        <ul class="indent2">
          <li><a href="chara.php">Character</a></li>
          <li><a href="hobby.php">Hobby</a></li>
        </ul>
      </fieldset>
      <fieldset><legend>Contact</legend>
      <p class="indent1">ページ一覧</p>
      <p class="indent2">各種アカウントはこちら</p>
        <ul class="indent2">
          <li><a href="https://github.com/Tatsumi-I/">GitHub</a></li>
          <li><a href="mailto:t.tsumi02@gmail.com">MAILで問い合わせる</a></li>
        </ul>
      </fieldset>
    </fieldset>
    
  </div>
  ';


$apiKey = 'e446264b25946d417b1277c00910b88e'; //weather用

$talk_apiKey = 'DZZlkvEYj5fcbvCwPozV96pHEpx4nbNe';//talk用
