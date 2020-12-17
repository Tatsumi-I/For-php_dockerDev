<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VE5M164E5N"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-VE5M164E5N');
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../imgs/logo.png" type="image/png" sizes="16*16">
  <title>Covid_19 Data analysis - Tatsumi Works</title>
  <link rel="stylesheet" href="covid.min.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

</head>

<body>
  <header>

    <img src="../imgs/covid.jpg" alt="">
    <h1>厚生労働省と内閣官房の情報を<br>もっと身近に！わかりやすく！</h1>
    <hr>
    <h2>新型コロナウイルス情報を<br>自動で取得、計算・表示するアプリです</h2>
  </header>

  <main>
    <section>
      <div class="desc">
        <details open class="desc_sum">
          <summary>
            <span>
              <h1>このアプリの特徴とメリット！</h1>
              <p class="open">"非表示中"　<i class="fas fa-toggle-off"></i></p>
              <p class="close">"表示中"　<i class="fas fa-toggle-on"></i></p>
            </span>
          </summary>
          <dl>
            <dt>1, 政府の公開情報を自動で取得</dt>
            <div class="under_dt">
              <div class="dd">
                <dd>最新情報を自動で取得して</dd>
                <dd>死亡率と回復率を自動で計算します</dd>
                <a href="#open_data">この機能をすぐ使う</a>
              </div>
              <div class="dd_img">
                <img src="../imgs/brains.jpg" alt="">
              </div>
            </div>
            <br>
            <dt>2, 過去の感染者数の検索と比較ができる</dt>
            <div class="under_dt">
              <div class="dd">
                <dd>あの日の感染者数は？</dd>
                <dd>1ヶ月前と比べてどのくらい増えてるの？</dd>
                <a href="#path_data">この機能をすぐ使う</a>
              </div>
              <div class="dd_img">
                <img src="../imgs/drawer.jpg" alt="">
              </div>
            </div>
            <br>
            <dt>3, 都道府県別の感染者数を検索できる</dt>
            <div class="under_dt">
              <div class="dd">
                <dd>私の住むところは？</dd>
                <dd>あの人の住む街は？</dd>
                <a href="#japan_data">この機能をすぐ使う</a>
              </div>
              <div class="dd_img">
                <img src="../imgs/map.jpg" alt="">
              </div>
            </div>
            <br>
            <dt>4, 国別の状況を検索できる</dt>
            <div class="under_dt">
              <div class="dd">
                <dd>国別感染者数と死者数の検索</dd>
                <dd>感染者と死者の割合を自動で計算！</dd>
                <a href="#country_data">この機能をすぐ使う</a>
              </div>
              <div class="dd_img">
                <img src="../imgs/world.jpg" alt="">
              </div>
              <br>
              <dt>5, 世界全体の現状</dt>
              <div class="under_dt">
                <div class="dd">
                  <dd>感染者数と死者数の自動取得</dd>
                  <dd>感染者の割合を自動で計算（世界人口を77億人で計算）</dd>
                  <a href="#world_data">この機能をすぐ確認する</a>
                </div>
                <div class="dd_img">
                  <img src="../imgs/map_world.jpg" alt="">
                </div>
              </div>
          </dl>

        </details>
        <p>そんなことができるアプリです</p>
      </div>

      <p><strong>Try it !</strong></p>
    </section>

    <?php



    //日本の状況取得のための処理
    if (isset($_GET['jp_name'])) {
      if (!empty($_GET['jp_name'])) {
        $jp_name_list = htmlspecialchars($_GET['jp_name'], ENT_QUOTES, 'UTF-8');
        echo '<P class="pop_info">' . $jp_name_list . 'の情報を取得しました</p>';
      }
    } else {
      $jp_name_list = '東京都';
    }

    $japan_url = 'https://opendata.corona.go.jp/api/Covid19JapanAll';
    $world_url = 'https://opendata.corona.go.jp/api/OccurrenceStatusOverseas';


    $covid_japan = json_decode(file_get_contents($japan_url . '?dataName=' . urlencode($jp_name_list), true), true);

    // var_dump($covid_japan['itemList'][0]);
    $data_day = date($covid_japan['itemList'][0]['date']);

    // var_dump($covid_japan['itemList'][0]['name_jp']);
    $selected_name = $covid_japan['itemList'][0]['name_jp'];

    // var_dump($covid_japan['itemList'][0]['npatients']);
    $selected_infections = (int)str_replace(',', '', $covid_japan['itemList'][0]['npatients']);


    $country_list = '日本';
    $country_data = json_decode(file_get_contents($world_url . '?dataName=' . urlencode($country_list), true), true);
    $covid_japan_all = $country_data;

    $japan_infections = (int)str_replace(',', '', $covid_japan_all['itemList'][0]['infectedNum']);


    //世界の状況取得のための処理

    if (isset($_GET['country'])) {
      if (!empty($_GET['country'])) {
        $country_list = htmlspecialchars($_GET['country'], ENT_QUOTES, 'UTF-8');
        echo '<P class="pop_info">' . $country_list . 'の情報を取得しました</p>';
      }
    } else {
      $country_list = '米国';
    }


    $csv_you = file_get_contents('https://www.mhlw.go.jp/content/pcr_positive_daily.csv', true);
    $lines = explode("\r\n", $csv_you);
    foreach ($lines as $line) {
      $records_you[] = explode(",", $line);
    }
    // var_dump($records_you);
    $leng = count($records_you);
    $i = $leng - 7;

    if (isset($_GET['ago'])) {
      if (!empty($_GET['ago'])) {
        $ago = htmlspecialchars($_GET['ago'], ENT_QUOTES, 'UTF-8');
        $value_people_past = $records_you[$leng - $ago][1];
        echo '<P class="pop_info">' . ($ago - 2) . '日前と比較しています</P>';
      }
    } else {
      $ago = 32;
    }

    $value_people_today_date = $records_you[$leng - 2][0];
    $value_people_today = $records_you[$leng - 2][1];
    $value_people_past = $records_you[$leng - $ago][1];
    // var_dump($value_people_today_date);

    $diff = number_format((int)$value_people_today - (int)$value_people_past);
    $diff_per = number_format(round((int)$value_people_today / (int)$value_people_past * 100, 2));

    $csv_die = file_get_contents('https://www.mhlw.go.jp/content/death_total.csv', true);
    $lines = explode("\r\n", $csv_die);
    foreach ($lines as $line) {
      $records_die[] = explode(",", $line);
    }

    $csv_nyuuinn = file_get_contents('https://www.mhlw.go.jp/content/cases_total.csv', true);
    $lines = explode("\r\n", $csv_nyuuinn);
    foreach ($lines as $line) {
      $records_nyu[] = explode(",", $line);
    }

    $csv_jyu = file_get_contents('https://www.mhlw.go.jp/content/severe_daily.csv', true);
    $lines = explode("\r\n", $csv_jyu);
    foreach ($lines as $line) {
      $records_jyu[] = explode(",", $line);
    }

    // $csv_summary1 = file_get_contents('https://www.mhlw.go.jp/content/current_situation.csv', true);
    // $csv_summary1_1 = str_getcsv($csv_summary1, '#', '"');
    $csv_summary = file_get_contents('https://www.mhlw.go.jp/content/current_situation.csv', true);
    $lines = explode("\r\n", $csv_summary);
    foreach ($lines as $line) {
      $records_sum[] = explode('"', $line);
    }

    $pattern = array(',', '\n', '"', '(', ')');
    $records_sum = str_replace($pattern, '', $records_sum[4]);
    $infection = substr($records_sum[3], 0, 6);



    ?>

    <section>
      <h1 class="section_head">In Japan</h1>
      <img src="../imgs/japan.jpg" alt="" class="ja">

      <div class="data_container">
        <div class="data_title" id="open_data">
          <h1>1, 日本の感染者<?php echo number_format($japan_infections); ?>人</h1>
          <p><?php echo $value_people_today_date; ?>時点</p>
        </div>

        <?php
        $new_die = substr($records_sum[9], 0, 4);

        $new_kaihuku = substr($records_sum[7], 0, 6);

        $total_kansen = ($japan_infections + (int)$new_kaihuku + (int)$new_die);

        $total_die = (int)$new_die;
        $die_per = round((int)$new_die / $total_kansen * 100, 2);

        $kaihuku = (int)$new_kaihuku;
        $kaihuku_per = round((int)$new_kaihuku / $total_kansen * 100, 2);

        ?>
        <div class="data_desc">
          <h1>感染を経験した人<?php echo number_format($total_kansen); ?>人</h1>
          <p>（ 現在感染中 + 回復者 + 死亡者の合計 ）</p>
          <h2>そのうち死亡 <?php echo number_format($total_die); ?>人 ( <?php echo $die_per; ?>% )</h2>
          <h2>そのうち回復 <?php echo number_format($kaihuku); ?>人 ( <?php echo $kaihuku_per; ?>% )</h2>
          <br>
          <p>＊この情報は自動で更新されます</p>
        </div>
      </div>

      <div class="data_container">
        <div class="data_title" id="path_data">
          <h1>2, 過去と比較ができます</h1>
          <p><?php echo $value_people_today_date . 'の新規感染者数：' . $value_people_today . '人'; ?></p>
        </div>
        <div class="data_desc">
          <h2><?php echo $ago - 2; ?>日前と比較して<br> <?php if ($diff > 0) {
                                                    echo '+ ';
                                                  }
                                                  echo $diff . '人( 増加率: ' . $diff_per . '% )'; ?></h2>
          <p>( <?php
                echo $ago - 2 . '日前 - ' . $records_you[$leng - $ago][0] . '  の新規感染者数：';
                echo $value_people_past . '人';
                ?> )</p>

          <form method="GET" action="">
            <select name="ago" id="">
              <option>選択</option>

              <?php
              for ($ago = 1; $ago < $leng; $ago++) {
              ?>
                <option value="<?php echo $ago + 2; ?>"><?php echo $ago . '日前 (' . $records_you[$leng - $ago][0]; ?>)</option>
              <?php
              }
              ?>
            </select>
            <button>
              と比較する
            </button>
          </form>
        </div>
      </div>

      <div class="data_container">
        <div class="data_title" id="japan_data">
          <h1>3, 都道府県別の合計感染者数</h1>
          <p> <?php echo $data_day; ?> 時点</p>
        </div>
        <div class="data_desc">
          <h2><?php echo $selected_name . ' : ' . number_format($selected_infections) . ' 人'; ?></h2>
          <p>( 日本の感染者全体に対する割合<?php echo round($selected_infections / $japan_infections * 100, 2); ?> % )</p>

          <form method="GET" action="">
            <select name="jp_name" id="">
              <option value="">都道府県を選択する</option>

              <?php

              $japan_url_json = json_decode(file_get_contents($japan_url, true), true);
              $japan_leng = 47;

              for ($j = 0; $j < $japan_leng; $j++) {
                $jp_name_list = $japan_url_json['itemList'][$j]['name_jp'];
              ?>
                <option value="<?php echo $jp_name_list; ?>"><?php echo $jp_name_list; ?></option>
              <?php
              }
              ?>
            </select>
            <button>
              Choice!
            </button>
          </form>


        </div>
      </div>

    </section>
    <?php

    $covid_world = json_decode(file_get_contents($world_url . '?dataName=' . urlencode($country_list), true), true);
    $selected_world_date = $covid_world['itemList'][0]['date'];
    $selected_country = $covid_world['itemList'][0]['dataName'];
    $selected_country_infections = (int)str_replace(',', '', $covid_world['itemList'][0]['infectedNum']);
    $selected_country_die = (int)str_replace(',', '', $covid_world['itemList'][0]['deceasedNum']);

    $covid_world_all = json_decode(file_get_contents($world_url, true), true);
    $covid_world_all_list = $covid_world_all['itemList'];


    // //以下世界の合計数
    for ($i = 190; $i < 200; $i++) {
      if ($covid_world_all_list[$i]['dataName'] === '計') {

    $world_all_infections = (int)str_replace(',', '', $covid_world_all_list[$i]['infectedNum']);
    $world_all_die = (int)str_replace(',', '', $covid_world_all_list[$i]['deceasedNum']);

    ?>
    <!-- <pre> -->
    <?php
    // var_dump($covid_world_all_list);
    ?>
    <!-- </pre> -->


    <section>
      <h1 class="section_head">In the World</h1>
      <img src="../imgs/earth.jpg" alt="">

      <div class="data_container">
        <div class="data_title" id="country_data">
          <h1>4, 国別の感染者数と死者数</h1>
          <p> <?php echo $selected_world_date; ?> 時点</p>
        </div>
        <div class="data_desc">
          <h2><?php echo $selected_country; ?></h2>
          <h2>感染者：<?php echo number_format($selected_country_infections); ?> 人</h2>
          <br>
          <p>( 世界全体に対する割合：<?php echo round($selected_country_infections / $world_all_infections * 100, 2); ?> % )</p>
          <h2>死者：<?php echo number_format($selected_country_die); ?> 人</h2>
          <p>( 世界全体に対する割合：<?php echo round($selected_country_die / $world_all_die * 100, 2); ?> % )</p>
          <form method="GET" action="">
            <select name="country" id="">
              <option value="">国を選択する</option>

              <?php
              for ($n = 0; $n < 193; $n++) {
                $select_country = $covid_world_all_list[$n]['dataName'];
                $country_infection = (int)str_replace(',', '', $covid_world_all_list[$n]['infectedNum']);
                $country_die = (int)str_replace(',', '', $covid_world_all_list[$n]['deceasedNum']);

              ?>
                <option value="<?php echo $select_country; ?>"><?php echo $select_country; ?></option>
              <?php
              }
              ?>
            </select>
            <button>
              Push
            </button>
          </form>

        </div>
      </div>
      <div class="data_container">
        <div class="data_title" id="world_data">
          <h1>5, 世界の感染者数と死者数</h1>
          <p> <?php echo $selected_world_date; ?> 時点</p>
        </div>
        <div class="data_desc">
          <h2><?php
          
                  echo $covid_world_all_list[$i]['dataName']; ?></h2>
          <h2>感染者：<?php echo $covid_world_all_list[$i]['infectedNum']; ?>人</h2>
          <h2>死者：<?php echo $covid_world_all_list[$i]['deceasedNum']; ?> 人</h2>

                  <!-- echo $covid_world_all_list[$i]['infectedNum'];
                } else {
                  echo 'NOT ';
                } -->
                <?php
               
                }
              }
      ?>

      <h2>世界人口 約77億人に対する感染者率：<br><?php echo round(($world_all_infections / 7700000000 * 100), 5); ?> %</h2>
        </div>
      </div>

    </section>


    <section>
      <h1 class="section_head">日本の直近データ</h1>
      <img src="../imgs/tokyo.jpg" alt="">
      <b>参考情報</b>
      <div class="container">
        <details>
          <summary>新規感染者数</summary>
          <table>
            <thead>
              <tr>
                <td>日付</td>
                <td>新規陽性者数</td>
              </tr>
            </thead>
            <tbody>

              <?php


              foreach (array_reverse($records_you) as $value) {
                $i++;
                // var_dump($records_you);

                if (($i >  $leng - 6) && ($i < $leng)) {
                  $value_date = $value[0];
                  $value_people = number_format($value[1]);
                  // $diff = $value_people_today - $value_people;
                  echo '<tr><td>' . $value_date . '</td>';
                  echo '<td class="value">' . $value_people . '</td></tr>';
                }
              }
              ?>
            </tbody>
          </table>
        </details>

      </div>

      <div class="container">
        <details>
          <summary>死亡者数（累計）</summary>
          <table>
            <thead>
              <tr>
                <td>日付</td>
                <td>数</td>
              </tr>
            </thead>
            <tbody>

              <?php
              $leng = count($records_die);
              $i = $leng - 7;
              foreach (array_reverse($records_die) as $value) {
                $i++;
                // var_dump($records_die);

                if (($i >  $leng - 6) && ($i < $leng)) {
                  $value_date = $value[0];
                  $value_people = number_format($value[1]);
                  echo '<tr><td>' . $value_date . '</td>';
                  echo '<td class="value">' . $value_people . '</td></tr>';
                }
              }
              ?>

            </tbody>
          </table>
        </details>

      </div>

      <div class="container">
        <details>
          <summary>入院治療等が必要な方の数（累計）</summary>
          <table>
            <thead>
              <tr>
                <td>日付</td>
                <td>数</td>
              </tr>
            </thead>
            <tbody>

              <?php
              $leng = count($records_nyu);
              $i = $leng - 7;
              foreach (array_reverse($records_nyu) as $value) {
                $i++;

                if (($i >  $leng - 6) && ($i < $leng)) {
                  // var_dump($records_nyu);
                  $value_date = $value[0];
                  $value_people = number_format($value[1]);
                  echo '<tr><td>' . $value_date . '</td>';
                  echo '<td class="value">' . $value_people . '</td></tr>';
                }
              }
              ?>

            </tbody>
          </table>
        </details>

      </div>

      <div class="container">
        <details>
          <summary>重症者数（累計）</summary>
          <table>
            <thead>
              <tr>
                <td>日付</td>
                <td>数</td>
              </tr>
            </thead>
            <tbody>

              <?php
              $leng = count($records_jyu);
              $i = $leng - 7;
              foreach (array_reverse($records_jyu) as $value) {
                $i++;
                // var_dump($records_jyu);

                if (($i >  $leng - 6) && ($i < $leng)) {
                  $value_date = $value[0];
                  $value_people = number_format($value[1]);
                  echo '<tr><td>' . $value_date . '</td>';
                  echo '<td class="value">' . $value_people . '</td></tr>';
                }
              }
              ?>

            </tbody>
          </table>
        </details>
      </div>
    </section>
    <section>
      <h1 class="section_head">私たちにできること</h1>
      <img src="../imgs/stay.jpg" alt="">
      <div class="data_title">
        <h2>できることからはじめよう</h2>
      </div>
      <div class="data_desc">
        <br>
        <p>明日の世界を変えるのは、<br>他でもない私たちだから</p>
        <br>
      </div>
    </section>

  </main>
  <div id="data"></div>

  <aside>
    <h1>このアプリは、以下サイトの情報を自動で取得し、計算・表示しています。</h1>
    <a href="https://corona.go.jp/dashboard/">内閣官房<br>https://corona.go.jp/dashboard/</a>
    <a href="https://www.mhlw.go.jp/stf/covid-19/open-data.html">厚生労働省<br>https://www.mhlw.go.jp/stf/covid-19/open-data.html</a>
  </aside>
  <footer>
    <img src="../imgs/logo.png" alt="">
    <h1>Covid_19 Data analysis - Tatsumi Works</h1>
    <details class="policy">
      <summary>プライバシーポリシー</summary>
      <p>
        当サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を使用しています。このGoogleアナリティクスはデータの収集のためにCookieを使用します。データは匿名で収集されており、個人を特定するものではありません。<br>
        Cookieを無効にすることで収集を拒否することが出来ます。お使いのブラウザの設定をご確認ください。
      </p>
      <p>
        この規約に関しての詳細は<a href="https://marketingplatform.google.com/about/analytics/terms/jp/">Googleアナリティクスサービス利用規約のページ</a>や<a href="https://policies.google.com/technologies/ads?hl=ja">Googleポリシーと規約ページ</a>をご覧ください。
        <br>
      </p>

    </details>
    <p class="copyLight"><small>&copy; Tatsumi_Ishikawa.2020</small></p>

  </footer>
  <script>
    $getJSON('covid.php', function(json) {
      var html = '<p>';
      html += <?php $covid_world_all_list[193]; ?>;
      html += '</p>';
      $('#data').html(html);
    });
  </script>
</body>

</html>