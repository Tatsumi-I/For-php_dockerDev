<?php

$menuList = '';
require_once('../app/function.php');
$pageName = 'Home - ';
include_once('_header.php');
$links =
  '<a href="skills.php">skill</a>' .
  '<a href="chara.php">profile</a>' .
  '<a href="blackApron.php">other</a>';

?>


<section id="area_0">
  <div class="sectionArea">
    <div class="firstView">
      <h2>Create a New Experience</h2>
      <div class="content">
        <div class="concept">
          <!-- <img src="./imgs/color.jpg" alt=""> -->
          <div class="contentImg">
            <img src="./imgs/5870.png" alt="">
          </div>
          <div class="text">
            <p><strong>”新しい感動体験を創り出す”</strong></p>
            <p>ユーザーにとって</p>
            <p><em>最良で</em><em>心地よく</em><em>今までにない</em></p>
            <p>感動体験を提供する</p>
            <br>
            <p>そのために努力し、学び続け、手を動かす</p>
            <br>
            <p><strong>それが私の理念です</strong></p>
          </div>
          <div class="blank">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="sectionArea">
    <h2>このサイトを通して得られる情報</h2>
    <div class="desc">
      <p>このサイトのために貴重なお時間を割いていただきありがとうございます!</p>
      <p>このサイトを通してお伝えしたいことを、まず簡潔に列挙いたします。</p>
      <h3>このサイトの目的とゴール</h3>
      <fieldset>
        <legend>
          <p><strong>サイトを構成する3つの柱</strong></p>
        </legend>
        <div class="gaiyou">
          <a href="skills.php" target="">スキルと知識</a>
          <a href="backBone.php" target="">過去</a>
          <a href="chara.php" target="">人物像</a>
        </div>
        <b>このポートフォリオサイトは、この3点について正しく知っていただくために作られました。</b>
      </fieldset>

      <h3>3つの柱別！ 手っ取り早く結論を得るためのリンク集</h3>
      <div class="container1">
        <div class="notes">
          <h4>スキルと知識</h4>
          <ul>
            <li><a href="skills.php"><strong>得意なこと、伸ばしたいこと</strong>は？</a></li>
            <li><a href="skills.php"><strong>累積学習時間とインプット</strong>内容は？</a></li>
            <li><a href="weather.php">"Web_<strong>API</strong>" アプリ</a></li>
            <li><a href="hoz_onTop.php">"CRUD","<strong>DB</strong>連携" アプリ</a></li>
            <li><a href="https://github.com/Tatsumi-I/For-php_dockerDev/tree/tougou/work/web" target="_github">このサイトのコードや管理をGithubで見る</a></li>
            <li><a href="#iconList">スキルと知識<strong>一覧</strong></a></li>
          </ul>
        </div>
        <div class="notes">

          <h4>過去</h4>
          <ul>
            <li><a href="backBone.php">一風変わった<strong>生い立ち</strong>とは？</a></li>
            <li><a href="blackApron.php"><strong>前職</strong>ブラックエプロンとは？</a></li>
          </ul>
        </div>

        <div class="notes">

          <h4>人物像</h4>
          <ul>
            <li><a href="chara.php"><strong>"採用御担当者必見！"</strong>石川達実の性格や思考の型</a></li>
            <li><a href="hobby.php"><strong>”人となりが分かる！”</strong>趣味紹介ページ</a></li>
          </ul>
        </div>
      </div>
      <h3>お気づきのことは…</h3>
      <div class="container1">
        <div class="contentImg">
          <a class="hoz_on" href="../web/php_app/eva.php" target="_Hoz_on">Hoz_on</a>
        </div>
        <div class="text">
          <h4>このアプリに保存して下さい！！</h4>
          <p><strong>あなたの感想やフィードバック、コメント</strong>…</p>
          <p><strong>後からもう一度チェックしたい内容</strong>…</p>
          <p><strong>思いついたその瞬間に！</strong></p>
          <p>とりあえず<strong>”Hoz_on”（保存）</strong>しませんか？ </p>
          <p>オリジナルアプリを是非体感して下さい！</p>
          <p>画面右上からいつでも”Hoz_on”できます！</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="area_1">
  <div class="sectionArea">
    <h2>Coding成果物の概要</h2>

    <div class="tra3d">Coading...</div>

    <div class="contentsArea">
      <!-- <div class="desc">
          <p>2020.6月から学習を始めました完全未経験の初学者ですが、細部までこだわって作り上げました。</p>
          <p>Coading Skillの詳細について以下よりご覧いただけます。</p>
          <a href="skills.php">Knowlegde & Skiis ページへ</a>
        </div> -->
      <div class="contentOuter">
        <div class="content">
          <h3>DB連携アプリ</h3>
          <div class="icons">
            <i class="fab fa-docker fa-fw docker"></i>
            <i class="fab fa-php fa-fw php"></i>
            <i class="fas fa-database db"></i>
            <i class="fab fa-github git" title="Git/GitHub"></i>
          </div>
          <div class="container2">
            <div class="contentImg_over">
              <img src="imgs/app_shot.png" alt="">
            </div>
            <div class="text">
              <h4>初めてのApp - ”Hoz_on”</h4>
              <p>是非お使い下さい！</p>
              <a href="../web/php_app/eva.php" target="_Hoz_on">使ってみる</a>
              <a href="https://github.com/Tatsumi-I/For-php_dockerDev/blob/tougou/work/web/php_app/list_table.php">GitHubでコードを見る</a>

            </div>
          </div>
        </div>

        <div class="content">
          <h3>Web_APIアプリ</h3>
          <div class="icons">
            <img src="imgs/api.jpg" alt="">
            <i class="fab fa-docker fa-fw docker"></i>
            <i class="fab fa-php fa-fw php"></i>
            <i class="fab fa-github git" title="Git/GitHub"></i>
          </div>
          <div class="container2">
            <div class="contentImg">
              <img src="imgs/weather_app.png" title="">
            </div>
            <div class="text">
              <p>Webサービスの可能性を広げる<strong>API</strong></p>
              <p>Web APIによる天気予報アプリです</p>
              <a href="../web/weather_API/weather.php" target="_weather">使ってみる</a>
              <a href="https://github.com/Tatsumi-I/For-php_dockerDev/blob/tougou/work/web/weather_API/weather.php">GitHubでコードを見る</a>
            </div>
          </div>
        </div>

        <div class="content">
          <h3>計算の自動化</h3>
          <div class="icons">
            <i class="fab fa-docker fa-fw docker"></i>
            <i class="fab fa-php fa-fw php"></i>
            <i class="fab fa-github git" title="Git/GitHub"></i>
          </div>
          <div class="container2">
            <div class="contentImg">
              <img src="imgs/auto_calc.png" alt="">
            </div>
            <div class="text">
              <p>自分の学習時間の記録です</p>
              <p>せっかくなので<strong>自動計算機能を付けました</strong></p>
              <a href="skills.php" target="">使ってみる</a>
              <a href="https://github.com/Tatsumi-I/For-php_dockerDev/blob/tougou/work/web/skills.php">GitHubでコードを見る</a>
            </div>
          </div>
        </div>

        <div class="content">
          <h3>チャットボット</h3>
          <div class="icons">
            <img src="imgs/api.jpg" alt="">
            <i class="fab fa-docker fa-fw docker"></i>
            <i class="fab fa-php fa-fw php"></i>
            <i class="fab fa-github git" title="Git/GitHub"></i>
          </div>
          <div class="container2">
            <div class="contentImg">
              <img src="imgs/bot.png" alt="">
            </div>
            <div class="text">
              <p><strong>Web_API</strong>による</p>
              <p><strong>チャットボット</strong></p>
              <a href="../web/talk_API/talk.php" target="_bot">使ってみる</a>
              <a href="https://github.com/Tatsumi-I/For-php_dockerDev/blob/tougou/work/web/talk_API/talk.php">GitHubでコードを見る</a>
            </div>
          </div>
        </div>
        <div class="content">
          <h3>クリエイティブコーディング</h3>
          <div class="icons">
            <i class="fab fa-js fa-fw js"></i>
            <!-- <i class="p5"></i> -->
            <img src="imgs/p5.png" alt="">
          </div>
          <div class="container2">
            <iframe src="sketch_1.php" frameborder="0"></iframe>
            <iframe src="sketch_2.php" frameborder="0"></iframe>
            <div class="text">
              <p>学習開始初期から関心のある<strong>Processing</strong></p>
              <p><strong>これからも理解を深めていきたい言語</strong>・分野の1つです。</p>
            </div>
          </div>
        </div>

        <div class="content">
          <h3>ポートフォリオサイト</h3>
          <div class="icons">
            <i class="fab fa-docker fa-fw docker"></i>
            <i class="fab fa-php fa-fw php"></i>
            <i class="fab fa-github git" title="Git/GitHub"></i>
          </div>
          <div class="container2">
            <div class="contentImg">
              <img src="imgs/top.png" alt="">
            </div>
            <div class="text">
              <p>2020.9月から構想を重ね、今に至ります。</p>
              <p>内容もデザインもすごく悩みましたが、<strong>誰かの真似やコピペはせず</strong>に作りました。</p>
              <p><a href="https://github.com/Tatsumi-I/For-php_dockerDev/tree/tougou/work/web" target="_github">GitHubでコードを見る</a></p>
            </div>

          </div>
        </div>

        <div class="content">
          <h3>"My first code"</h3>
          <div class="icons">
            <i class="fab fa-html5 fa-fw html5"></i>
            <i class="fab fa-css3 fa-fw css3"></i>
            <img src="imgs/jq.png" alt="">
            <i class="fab fa-github git"></i>
          </div>
          <div class="container2">
            <div class="contentImg">
              <img src="imgs/mfc.png" title="GitHubにて公開しています">
            </div>
            <div class="text">

              <p><strong>学習を初めて1ヶ月の間</strong>に制作したものです。</p>
              <p>散らかったコードも<strong>ダサいデザインもそのまま</strong>ですが、”私の最初のコード”としてここに残します。</p>
              <p><a href="https://tatsumi-i.github.io/MyFirstCode/"><strong>Github pages</strong>でサイトを公開しています。</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="area_2">
  <div class="sectionArea">
    <details>
      <summary>
        <h2>Design成果物の概要</h2>
      </summary>

      <div class="tra3d">Design...</div>

      <div class="desc">
        <p><strong>架空サイトのファーストビュー</strong>です</p>
        <ul>
          <li>模写や模倣はありません。</li>
          <li>ジャンルや対象ユーザーの異なるデザインを作りました。</li>
        </ul>

      </div>
      <div class="contentsArea">
        <div class="contentOuter">

          <div class="content">
            <h3>欧州モーターバイクレース協会</h3>
            <div class="icons">
              <img src="imgs/ps.png" alt="">
              <img src="imgs/ai.png" alt="">
            </div>
            <div class="container2">
              <div class="contentImg_over">
                <img src="imgs/art2.png">
              </div>
              <div class=text>

                <p>このデザインは、バイクレースを主宰しているヨーロッパの架空の団体が運営するサイトをイメージしています。</p>
                <p><strong>躍動感、エネルギーやパワー</strong>を表現するためのデザインとして作りました。</p>
                <p><a href="design.php" target="tatsumi_Design">詳細ページ</a></p>
              </div>
            </div>
          </div>

          <div class="content">
            <h3>こどもふれあいパーク</h3>
            <div class="icons">
              <img src="imgs/ps.png" width="20px" alt="">
              <img src="imgs/ai.png" width="20px" alt="">
            </div>
            <div class="container2">
              <div class="contentImg">
                <img src="imgs/art1.png">
              </div>
              <div class=text>
                <p>このデザインは、動物公園のサイトをイメージしています。</p>
                <p><strong>楽しさや可愛らしさ、POPさ</strong>を表現するためのデザインとして作りました。</p>
                <p><a href="design.php" target="tatsumi_Design">詳細ページ</a></p>
              </div>

            </div>
          </div>

          <div class="content">
            <h3>Gentle’s Style</h3>
            <div class="icons">
              <img src="imgs/ps.png" width="20px" alt="">
              <img src="imgs/ai.png" width="20px" alt="">
            </div>
            <div class="container2">
              <div class="contentImg">
                <img src="imgs/GentleStyle.png">
              </div>
              <div class=text>
                <p>このデザインは、40-50代男性向けWebマガジンをイメージしています。</p>
                <p><strong>高級感や男性的な印象、落ち着いた色調</strong>を表現するためのデザインとして作りました。</p>
                <p><a href="design.php" target="tatsumi_Design">詳細ページ</a></p>
              </div>
            </div>
          </div>

          <div class="content">
            <h3>株式会社 b.Next</h3>
            <div class="icons">
              <img src="imgs/ps.png" width="20px" alt="">
              <img src="imgs/ai.png" width="20px" alt="">
            </div>
            <div class="container2">
              <div class="contentImg">
                <img src="imgs/b.Next.png">
              </div>
              <div class=text>
                <p>このデザインは、IT企業のコーポレートサイトをイメージしています。</p>
                <p><strong>シンプルで簡潔な情報の提示、知性や信頼性</strong>を表現するためのデザインとして作りました。</p>
                <p><a href="design.php" target="tatsumi_Design">詳細ページ</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </details>

  </div>
</section>

<section id="area_3">
  <div class="sectionArea">
    <h2>Profileの概要</h2>
    <div class="tra3d">profile...</div>

    <div class="contentsArea">
      <div class="content">
        <h3>石川達実/<?= h($myName); ?></h3>
        <div class="container2">
          <div class="contentImg">
            <img src="imgs/ba.png" style="filter:saturate(0.5);">
          </div>
          <div class="text">
            <p>1986年東京都生まれ。</p>
            <p>学生時代を鹿児島で過ごし、27歳で愛知へ移住。</p>
            <p><strong>性質を表わす言葉：</strong><br>ユーモラス、独特、鋭い、賢い、謎、冷静、穏やか、聡明、大胆、知的、繊細、器用など</p>
            <p><strong>該当しない言葉：</strong><br>にぎやか、面倒見の良い、活発、感情的、情熱的、熱い、明るい、快活、雄弁など</p>
            <p>2020.5月、自店舗の約1か月間のコロナ休業をきっかけに一大決心し、<strong>自分の能力を本当に活かせる仕事を通して感動体験を提供したい</strong>という一心からプログラミングをはじめた</p>
          </div>
        </div>
      </div>
      <div class="content">
        <h3 id="iconList">Knowledgeable about...(このポートフォリオに含まれている要素一覧です)</h3>
        <div class="container1">
          <div class="text">
            <div class="icons">
              <div>
                <p><i class="fab fa-html5 fa-fw html5"></i>HTML5</p>
                <p><i class="fab fa-css3 fa-fw css3"></i>CSS3/animation</p>
                <p><i class="fas fa-mobile-alt rwd"></i>レスポンシブデザイン</p>
                <p><i class="fab fa-sass fa-fw scss"></i>Scss</p>
                <p><i class="fab fa-js fa-fw js"></i>javascript</p>
                <p><img src="imgs/jq.png" alt="">jQuery</p>
                <p><img src="imgs/p5.png" alt="" title="processing">Processing</p>
                <p><i class="fab fa-wordpress fa-fw wp"></i>WordPress</p>
                <p><i class="fab fa-github git"></i>git/github</p>
                <p><img src="imgs/ps.png" alt="">Photoshop</p>
                <p><img src="imgs/ai.png" alt="">Illustrator</p>
                <p><i class="fas fa-laptop-code fa-fw pc"></i>Mac, VScode</p>
                <p class="mamp">MANP</p>
                <p><i class="fab fa-docker fa-fw docker"></i>Docker</p>
                <p><i class="fab fa-php fa-fw php"></i>php</p>
                <p><i class="fas fa-database db"></i>SQL,RDB</p>
                <p><img class="api" src="imgs/api.jpg" alt="">Web_API</p>
                <p><i class="fas fa-cloud"></i><i class="fas fa-network-wired"></i>クラウド(インフラ)</p>
              </div>
            </div>
            <p><a href="skills.php">More about...</a></p>
          </div>
          <!-- <div class="contentImg">
            <img src="./imgs/laptop.jpg" alt="">
          </div> -->
        </div>
      </div>

    </div>
  </div>
</section>

<?php

include_once('_footer.php');
