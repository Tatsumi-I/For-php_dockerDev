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
    <p id="hide">ようこそ
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
  <div id="works" class="contentsArea">
    <h1 id="coading" >Coding</h1>
      <div class="contents1">
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
      </div>
    <h1 id="design">Design</h1>
      <div class="contents2">
        <div class="cell"><img src="imgs/art2.png" width="250px"></div>
        <div class="cell"><img src="imgs/art1.png" width="250px"></div>
        <div class="cell"><img src="imgs/Gentlestyle.png" width="250px"></div>
        <div class="cell"><img src="imgs/b.Next.png" width="250px"></div>
      </div>
  </div>
</section>

<section>
  <h1>Profile</h1>
  <div class="wrap">
    <div class="info1">
      <img src="imgs/IMG_6619.JPG" width="250px" style="filter:saturate(0.2);">
      <h2><?= h($myName);?></h2>
      <h3>石川達実</h3>
      </div>
    <div class="charaInfo">
      <dt>概要</dt>
      <dd>1986年東京都生まれ。学生時代を鹿児島で過ごし、結婚を機に愛知へ移住</dd>
      <dd>学生時代を鹿児島で過ごし、結婚を機に愛知へ移住</dd>
      <dd>座右の銘：前途多難</dd>
      <dd>性質を表わす言葉：<br>ユーモラス、独特、鋭い、賢い、謎、冷静、穏やか、聡明、大胆、知的、繊細、器用など</dd>
      <dd>該当しない言葉：<br>にぎやか、面倒見の良い、活発、感情的、情熱的、義理人情にあつい、明るい、快活、雄弁など</dd>
      <dd>2020.5月、自店舗の約1か月間のコロナ休業をきっかけに一大決心し、自分の能力を本当に活かせる仕事を通して、人々の暮らしに寄り添う感動体験を提供したいという一心からプログラミングをはじめた</dd>
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
    <div class="dtext1">
      <dl>
        <dt>Works</dt>
        <dd>Coding</dd>
        <dd>Design</dd>
      </dl>
    </div>
    <div class="dtext2">
      <dl>
        <dt>どんな人？</dt>
          <dd>石川達実の適性や思考について知る</dd>
          <dd>石川達実5つのKeywords</dd>
      </dl>
    </div>
  </div>
</section>

<section>



<div class=contact>

</div>

<fieldset>
<legend>
  あなたのご意見聞かせて下さい[複数回答可]
</legend>
  <label><input type="checkbox">面白い</label>
  <label><input type="checkbox">面白くない</label>
  <label><input type="checkbox">並み</label>
  <label><input type="checkbox">改善すべき</label>
  <!-- <label><input type="checkbox">終わっている</label>
  <label><input type="checkbox">神がかっている</label> -->
</fieldset>

<fieldset>
  <legend>
    あなたのご意見聞かせて下さい（どれか一つを選択）
  </legend>
    <label><input type="radio" name="feel">面白い</label>
    <label><input type="radio" name="feel">面白くない</label>
    <label><input type="radio" name="feel">並み</label>
    <label><input type="radio" name="feel">改善すべき</label>
    <!-- <label><input type="radio" name="feel">終わっている</label>
    <label><input type="radio" name="feel">神がかっている</label> -->
 </fieldset>

</section>

<?php 
include_once('footer.php');