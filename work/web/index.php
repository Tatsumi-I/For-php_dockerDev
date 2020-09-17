<?php 
  require_once('../app/function.php');
  include_once('header.php');
?>

<section>




  <div id="pageTop" class="fastView">
    <div>
      <img src="./imgs/img_5870.png" width="400px" height="auto" alt="tatsumi's Face">
    </div>
    <div class="concept">
      <h1>Create a New Experience</h1>
        <div>
          <h2>”新しい感動体験を創り出す”</h2>
          <h3>ユーザーにとって</h3>
          <p><em>最良で</em><em>心地よく</em><em>今までにない</em></p>
          <p>感動体験を提供する</p>
          <h4>そのために努力し、学び続け、手を動かす</h4>
          <h2>それが私の理念です</h2>
        </div>
    </div>
  </div>
</section>

<section>
<div class="contentsArea">
    <h1 id="works">Coding</h1>
    <div id="coading" class="coadingArea">
      <div>
        <div class="cell" id="card" title="GitHubにて公開しています">
          <a href="https://tatsumi-i.github.io/MyFirstCode/">
          <img src="imgs/mfc.png" width="350px"></a>
        </div>
        <p>初めての制作</p>
      </div>
      <div id="card"  description="Github上で公開しています">
        <div class="cell">
        <iframe src="p5test.php" width="350px" height="350px"></iframe>
        </div>
        <p>クリエイティブコーディング</p>
      </div>
    </div>

    <h1 id="design">Design</h1>
    <div class="designArea">
      <div class="design_des">
        <div class="cell">
          <img src="imgs/art2.png" width="350px">
        </div>
        <p>
          <a href="design.php" target="tatsumi_Design">
            このデザインはテキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力
          </a>
        </p>
      </div>
      <div class="design_des">
          <p><a href="design.php" target="tatsumi_Design">
            このデザインはテキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力
          </a>
        </p>
        <div class="cell">
          <img src="imgs/art1.png" width="350px">
        </div>
      </div>
      <div class="design_des">
        <div class="cell">
          <img src="imgs/Gentlestyle.png" width="350px">
        </div>
        <p> 
          <a href="design.php" target="tatsumi_Design">
            ファーストビュー
            このデザインはテキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力
          </a>
        </p>
      </div>
      <div class="design_des">
        <p> 
          <a href="design.php" target="tatsumi_Design">  
            ファーストビュー
            このデザインはテキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力テキスト-説明文を入力
          </a>
        </p>
        <div class="cell">
          <img src="imgs/b.Next.png" width="350px">
        </div>
      </div>
    </div>
</div>
</section>



<section>
  <h1>Profile</h1>
  <div class="wrap">
    <div class="info1">
      <img src="imgs/IMG_6619.JPG" width="350px" style="filter:saturate(0.2);">
      <h2><?= h($myName);?></h2>
      <h3>石川達実</h3>
    </div>
    <div class="charaInfo">
      <dl>
        <dt>概要</dt>
        <dd>1986年東京都生まれ。</dd>
        <dd>学生時代を鹿児島で過ごし、結婚を機に愛知へ移住。</dd>
        <dd>性質を表わす言葉：<br>ユーモラス、独特、鋭い、賢い、謎、冷静、穏やか、聡明、大胆、知的、繊細、器用など</dd>
        <dd>該当しない言葉：<br>にぎやか、面倒見の良い、活発、感情的、情熱的、熱い、明るい、快活、雄弁など</dd>
        <dd>2020.5月、自店舗の約1か月間のコロナ休業をきっかけに一大決心し、自分の能力を本当に活かせる仕事を通して感動体験を提供したい、という一心からプログラミングをはじめた</dd>
      </dl>
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
      <p><a href="skills.php">More about...</a></p>
    </div>
    <div style="background:black;box-shadow:0 0 10px grey;">
      <img src="./imgs/laptop.jpg" width="400px" height="auto" alt="" style=" margin:100px auto;">
    </div>
    <!-- <div class="dtext1">
      <dl>
        <dt>Works</dt>
        <dd>Coding</dd>
        <dd>Design</dd>
      </dl>
    </div> -->
    <div style="background:black;box-shadow:0 0 10px grey;">
      <img src="./imgs/brain.jpg" width="400px" height="auto" alt="" style=" margin:100px auto;">
    </div>
    <div class="dtext2">
      <dl>
        <dt>人物像</dt>
          <dd><a href="character.php">性格や気質</a></dd>
          <dd><a href="backBone.php">経験</a></dd>
          <dd><a href="hobby.php">趣味や嗜好</a></dd>
          <dd>
            <a href=""></a>
          </dd>
          <dd>
            <a href=""></a>
          </dd>
          <dd>
            <a href=""></a>
          </dd>
          <dd>
            <a href=""></a>
          </dd>
      </dl>
    </div>
  </div>
</section>

<section style=" margin:100px;">
<fieldset>
<legend>
  ご意見フォーム
</legend>
<form action="index.php" id="testForm" name="testForm">
  <div>
    <label for="title">題名<br></label>
    <input id="title" name="title" type="text" required>
  </div>
  <div>
    <label for="voice">  あなたのご意見聞かせて下さい<br></label>
    <textarea cols="30" rows="10" id="voice" name="voice" type="text" required>
</textarea>
  </div>
  <div>
    <input id="jj" name="levels" type="checkbox" value="面白い">
    <label for="jj">面白い</label>
    <input id="jj" name="levels" type="checkbox" value="余り">
    <label for="jj">余り</label>
    <input id="jj" name="levels" type="checkbox" value="全然">
    <label for="jj">全然</label>
  </div>
</form>
<button onclick="formModule.sumForm()">入力内容を表示する</button>
<button onclick="formModule.submitForm()">送信</button>
</section>

<?php 

include_once('footer.php');