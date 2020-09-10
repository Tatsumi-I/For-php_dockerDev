<?php 
  require_once('../app/function.php');
  include_once('header.php');
?>

<main>

<section>
  <div id="works" class="contentsArea">
    <h1 id="coading" >Coding</h1>
    <div class="coadingArea">
      <div id="card"  description="Github上で公開しています">
        <div class="cell">
          <a href="https://tatsumi-i.github.io/MyFirstCode/">
          <img src="imgs/mfc.png" width="250px"></a>
        </div>
        <div>
          <p>初めての制作</p>
        </div>
      </div>
      <div id="card"  description="Github上で公開しています">
        <div class="cell">
          <a href="https://tatsumi-i.github.io/MyFirstCode/">
          <img src="imgs/mfc.png" width="250px"></a>
        </div>
        <div>
          <p>初めての制作</p>
        </div>
      </div>
      <div id="card"  description="Github上で公開しています">
        <div class="cell">
          <a href="https://tatsumi-i.github.io/MyFirstCode/">
          <img src="imgs/mfc.png" width="250px"></a>
        </div>
        <div>
          <p>初めての制作</p>
        </div>
      </div>

    </div>
      
    <h1 id="design">Design</h1>
    <div class="designArea">
      <div >
        <div class="cell">
          <img src="imgs/art2.png" width="250px">
        </div>
        <div>
          <p> ファーストビュー</p>
        </div>
      </div>
   
      <div >
        <div class="cell"><img src="imgs/art1.png" width="250px"></div>
        <div>  
        <p> ファーストビュー</p>
        </div>
      </div>

      <div >
        <div class="cell"><img src="imgs/Gentlestyle.png" width="250px"></div>
        <div>
          <p> ファーストビュー</p>
        </div>
      </div>
   
      <div >
        <div class="cell"><img src="imgs/b.Next.png" width="250px"></div>
        <div>
         <p> ファーストビュー</p>
        </div>
      </div>
    
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
      <dd>該当しない言葉：<br>にぎやか、面倒見の良い、活発、感情的、情熱的、熱い、明るい、快活、雄弁など</dd>
      <dd>2020.5月、自店舗の約1か月間のコロナ休業をきっかけに一大決心し、自分の能力を本当に活かせる仕事を通して、暮らしに寄り添う感動体験を提供したいという一心からプログラミングをはじめた</dd>
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


<section style="margin:100px;">
<fieldset>
<legend>
  あなたのご意見聞かせて下さい[複数回答可]
</legend>

<form id="testForm" name="testForm">
  <div>
    <label for="title">あなたのご意見題名</label>
    <input id="title" name="title" type="text">
  </div>
  <div>
    <label for="voice">  あなたのご意見聞かせて下さ</label>
    <input id="voice" name="voice" type="text">
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