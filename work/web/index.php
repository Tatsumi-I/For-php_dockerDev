<?php 
  require_once('../app/function.php');
  include_once('header.php');
?>

<main>
<section>
  <div class="headLine">
    <p class="date"><?= date($date).'　　最終更新時刻';?></p>
    <p class="rundum">  <?= h($mesagge).'(ランダムメッセージ-全5種類)';?></p>
  </div>
  <div class="gestForm">
    <p>ようこそ
        <?php
          if(isset($_GET['gestName'])){
            $gestName = $_GET['gestName'];
            echo h($gestName);
          }
        ?>
      さん</p>
    <form action="index.php" method="get">
      <label for="gest">
      <input id="gest" type="text" name="gestName" autocomplete="off" placeholder="Your name">
      <input type="submit" value="OK">
      </label>
    </form>
  </div>
  <div class="discription">
    <p>テキストを入力する予定です</p>
  </div>
</section>
<section>
  <div   class="contentsArea">
    <h1 id="hide">Coding</h1>
      <div class="contents1">
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
      </div>
    <h1>Design</h1>
      <div class="contents2">
        <div class="cell"><img src="imgs/art2.png" width=250px></div>
        <div class="cell"><img src="imgs/art1.png" width=250px></div>
        <div class="cell"><img src="imgs/Gentlestyle.png" width=250px></div>
        <div class="cell"><img src="imgs/b.Next.png" width=250px></div>
      </div>
  </div>
</section>

<section>
  <h1>Profile</h1>
  <div class="wrap">
    <div class="charaInfo">
      <img src="imgs/IMG_6619.JPG" width=250px style="filter:saturate(0.2);">
      <p><?= h($myName);?></p>
      <p>石川達実</p>
      <p>Birth year:1986</p>
    </div>
    <div class="infoList">
      <dl>
        <dt>Knowledgeable about...</dt>
          <dd><i class="fab fa-html5 fa-fw html5"></i>HTML5</dd>
          <dd><i class="fab fa-css3 fa-fw css3"></i>CSS3/animation, <i class="fab fa-sass fa-fw scss"></i>Scss</dd>
          <dd><i class="fab fa-js fa-fw js"></i>javascript, jQuery</dd>
          <dd class="p5">Processing</dd>
          <dd><i class="fab fa-php fa-fw php"></i>php</dd>
          <dd><i class="fab fa-wordpress fa-fw wp"></i>WordPress</dd>
          <dd><i class="fab fa-git fa-fw git"></i>git/github</dd>
          <dd><i class="fab fa-adobe fa-fw adobe"></i>Adobe/Ai, Ps, Xd</dd>
          <dd><i class="fas fa-laptop-code fa-fw pc"></i>Mac, VScode</dd>
          <dd><i class="fab fa-docker fa-fw docker"></i>Docker, MANP</dd>
      </dl>
    </div>
    <div class="dtext">
      <dl>
        <dt>Works</dt>
          <dd>Coding</dd>
          <dd>Design</dd>
        <dt>どんな人？</dt>
          <dd>石川達実の適性や思考について知る</dd>
          <dd>石川達実5つのKeywords</dd>
      </dl>
    </div>
  </div>
</section>
<?php 
include_once('footer.php');