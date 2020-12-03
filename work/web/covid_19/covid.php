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
  <title>covid_19 DATA - Tatsumi Works</title>
  <link rel="stylesheet" href="covid.min.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

</head>

<body>
  <header>

    <img src="../imgs/covid.jpg" alt="">
    <h1>厚生労働省HPの情報を<br>もっと身近に！わかりやすく！</h1>
    <hr>
    <h2>新型コロナウイルス情報を<br>ちょろろろぉ〜っとできるプログラム<br>をかいたよ</h2>

    <?php
    //日本の状況取得のための処理

    if (isset($_GET['jp_name']) && (!empty($_GET['jp_name']))) {
      $jp_name_list = $_GET['jp_name'];
      echo '<P class="pop_info">' . $jp_name_list . 'の情報を取得しました</p>';
    } else {
      $jp_name_list = '東京都';
    }



    $covid_japan = json_decode(file_get_contents('https://opendata.corona.go.jp/api/Covid19JapanAll' . '?dataName=' . urlencode($jp_name_list), true), true);

    // var_dump($covid_japan['itemList'][0]);
    $data_day = date($covid_japan['itemList'][0]['date']);

    // var_dump($covid_japan['itemList'][0]['name_jp']);
    $selected_name = $covid_japan['itemList'][0]['name_jp'];

    // var_dump($covid_japan['itemList'][0]['npatients']);
    $selected_infections = number_format((int)$covid_japan['itemList'][0]['npatients']);

    $covid_japan_all = json_decode(file_get_contents('https://opendata.corona.go.jp/api/Covid19JapanAll', true), true);



    ?>

    <?php
    //世界の状況取得のための処理

    if (isset($_GET['country']) && (!empty($_GET['country']))) {
      $country_list = $_GET['country'];
      echo '<P class="pop_info">' . $country_list . 'の情報を取得しました</p>';
    } else {
      $country_list = '米国';
    }

    $covid_world = json_decode(file_get_contents('https://opendata.corona.go.jp/api/OccurrenceStatusOverseas' . '?dataName=' . urlencode($country_list), true), true);

    $covid_world_all = json_decode(file_get_contents('https://opendata.corona.go.jp/api/OccurrenceStatusOverseas', true), true);

    // var_dump($covid_world['itemList'][0]);
    /*
  ["date"]=>
  string(10) "2020/12/01"
  ["dataName"]=>
  string(6) "日本"
  ["infectedNum"]=>
  string(7) "148,694"
  ["deceasedNum"]=>
  string(5) "2,139"
}
*/

    // var_dump($covid_world_all['itemList'][~192]['dataName']);
    // var_dump($covid_world_all['itemList'][~192]['infectedNum']);
    // var_dump($covid_world_all['itemList'][~192]['deceasedNum']);

    $n = 0;

    $world_data_day = $covid_world_all['itemList'][$n]['date'];
    $select_country = $covid_world_all['itemList'][$n]['dataName'];
    $country_infection = (int)str_replace(',', '', $covid_world_all['itemList'][$n]['infectedNum']);
    $country_die = (int)str_replace(',', '', $covid_world_all['itemList'][$n]['deceasedNum']);


    $selected_world_date = $covid_world['itemList'][0]['date'];
    $selected_country = $covid_world['itemList'][0]['dataName'];
    $selected_country_infections = (int)str_replace(',', '', $covid_world['itemList'][0]['infectedNum']);
    $selected_country_die = (int)str_replace(',', '', $covid_world['itemList'][0]['deceasedNum']);

    // var_dump($world_data_day);
    // var_dump($select_country);
    // var_dump($country_infection);

    // //以下世界の合計数

    $world_all_infections = (int)str_replace(',', '', $covid_world_all['itemList'][193]['infectedNum']);
    $world_all_die = (int)str_replace(',', '', $covid_world_all['itemList'][193]['deceasedNum']);


    ?>

    <?php


    ini_set("iog_errors", "on");
    ini_set("error_iog", "./php_error.log");


    $csv_you = file_get_contents('https://www.mhlw.go.jp/content/pcr_positive_daily.csv', true);
    // $csv_you = file_get_contents('https://www.mhlw.go.jp/content/pcr_positive_daily.csv', true);
    $lines = explode("\r\n", $csv_you);
    foreach ($lines as $line) {
      $records_you[] = explode(",", $line);
    }
    // var_dump($records_you);
    $leng = count($records_you);
    $i = $leng - 7;


    if (isset($_GET['ago'])) {
      $ago = $_GET['ago'];
      $value_people_past = $records_you[$leng - $ago][1];
      echo '<P class="pop_info">比較しています</P>';
    } else {
      $ago = 30;
    }

    $value_people_today_date = $records_you[$leng - 2][0];
    $value_people_today = $records_you[$leng - 2][1];
    $value_people_past = $records_you[$leng - $ago][1];
    // var_dump($value_people_today_date);

    $diff = number_format((int)$value_people_today - (int)$value_people_past);
    $diff_per = number_format(round((int)$value_people_today / (int)$value_people_past * 100, 1));

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


    <div class="desc">
      <h1>このアプリの特徴とメリットぉ！</h1>
      <dl>
        <dt>1, 政府の公開情報を…</dt>
        <div class="under_dt">
          <div class="dd">
            <dd>自動で取得・表示してるンゴ</dd>
            <dd>死亡率と回復率を自動で計算してくれるンゴよ</dd>
          </div>
          <div class="dd_img">
            <img src="../imgs/brain.jpg" alt="">
          </div>
        </div>
        <br>
        <dt>2, 過去の感染者数の検索と比較ができるっす</dt>
        <div class="under_dt">
          <div class="dd">
            <dd>あの日の感染者数は？</dd>
            <dd>1ヶ月前と比べてどのくらい増えてるの？</dd>
          </div>
          <div class="dd_img">
            <img src="../imgs/stay.jpg" alt="">
          </div>
        </div>
        <br>
        <dt>3, 都道府県別の感染者数を検索ぅ！できる</dt>
        <div class="under_dt">
          <div class="dd">
            <dd>私の住むところは？</dd>
            <dd>あの人の住む街は？</dd>
          </div>
          <div class="dd_img">
            <img src="../imgs/map.jpg" alt="">
          </div>
        </div>
      </dl>
      <p>なーんてことができちゃうよ！！</p>
    </div>
  </header>


  <main>
    <p><strong>Let’s try it !</strong></p>
    <div class="data_container">
      <div class="data_title">
        <h1>日本の感染者<?php echo number_format((int)$infection); ?>人</h1>
        <p><?php echo $value_people_today_date; ?>時点</p>
      </div>

      <?php
      $new_die = substr($records_sum[9], 0, 4);

      $new_nyuuin = substr($records_sum[5], 0, 5);
      $new_kaihuku = substr($records_sum[7], 0, 6);

      $total_kansen = ((int)$infection + (int)$new_kaihuku + (int)$new_die);


      $total_die = (int)$new_die;
      $die_per = round((int)$new_die / $total_kansen * 100, 3);


      $nyuuin = (int)$new_nyuuin;
      $nyuuin_per = round((int)$new_nyuuin /  $total_kansen * 100, 3);



      $kaihuku = (int)$new_kaihuku;
      $kaihuku_per = round((int)$new_kaihuku / $total_kansen * 100, 3);



      ?>
      <div class="data_desc">
        <h1>感染を経験した人<?php echo number_format($total_kansen); ?>人<br>（ 現在感染中 + 回復者 + 死亡者の合計 ）</h1>
        <h2>そのうち死亡 <?php echo number_format($total_die); ?>人 ( <?php echo $die_per; ?>% )</h2>
        <h2>そのうち回復 <?php echo number_format($kaihuku); ?>人 ( <?php echo $kaihuku_per; ?>% )</h2>
        <br>
        <p>＊この情報は自動で更新されます</p>
      </div>
    </div>

    <div class="data_container">
      <div class="data_title">
        <h1>過去との比較ができます</h1>
      </div>
      <div class="data_desc">
        <p><?php echo $value_people_today_date . 'の新規感染者数：' . $value_people_today . '人'; ?></p>

        <h2><?php echo $ago - 2; ?>日前と比較して <?php if ($diff > 0) {
                                              echo '+ ';
                                            }
                                            echo $diff . '人( 増加率: ' . $diff_per . '% )'; ?></h2>
        <?php
        // echo $ago - 2 . '今日 ( ' . $records_you[$leng - $ago][0] . ' ) の新規感染者数';
        echo $ago - 2 . '日前 ( ' . $records_you[$leng - $ago][0] . ' ) の新規感染者数：';
        echo $value_people_past . '人';
        ?>

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
          <button>と比較する</button>
        </form>
      </div>
    </div>

    <div class="data_container">
      <div class="data_title">
        <h1>都道府県別の合計感染者数</h1>
        <p> <?php echo $data_day; ?> 時点</p>
      </div>
      <div class="data_desc">

        <form method="GET" action="">
          <select name="jp_name" id="">
            <option value="">都道府県を選択する</option>

            <?php
            $japan_leng = 47;
            for ($j = 0; $j < $japan_leng; $j++) {
              $jp_name_list = $covid_japan_all['itemList'][$j]['name_jp'];
            ?>
              <option value="<?php echo $jp_name_list; ?>"><?php echo $jp_name_list; ?></option>
            <?php
            }
            ?>
          </select>
          <button>Choice!</button>
        </form>

        <h2><?php echo $selected_name . ' : ' . $selected_infections . ' 人'; ?></h2>

      </div>
    </div>

    <div class="data_container">
      <div class="data_title">
        <h1>国別の感染者数と死者数</h1>
        <p> <?php echo $selected_world_date; ?> 時点</p>
      </div>
      <div class="data_desc">
        <form method="GET" action="">
          <select name="country" id="">
            <option value="">国を選択する</option>

            <?php
            for ($n = 0; $n < 193; $n++) {
              $select_country = $covid_world_all['itemList'][$n]['dataName'];
              $country_infection = (int)str_replace(',', '', $covid_world_all['itemList'][$n]['infectedNum']);
              $country_die = (int)str_replace(',', '', $covid_world_all['itemList'][$n]['deceasedNum']);

            ?>
              <option value="<?php echo $select_country; ?>"><?php echo $select_country; ?></option>
            <?php
            }
            ?>
          </select>
          <button>Push</button>
        </form>
        <h2><?php echo $selected_country . '<br>感染者：' . number_format($selected_country_infections) . ' 人<br>死者：', number_format($selected_country_die); ?> 人</h2>

      </div>
    </div>
    <div class="data_container">
      <div class="data_title">
        <h1>世界の感染者数と死者数</h1>
        <p> <?php echo $selected_world_date; ?> 時点</p>
      </div>
      <div class="data_desc">
        <h2><?php echo
              $covid_world_all['itemList'][193]['dataName']
                . '<br>感染者：' .
                number_format($world_all_infections)
                . ' 人<br>死者：' .
                number_format($world_all_die); ?> 人</h2>

        <h2>世界人口 約77億人に対する感染者率：<?php echo round(($world_all_infections / 7700000000), 3) * 100 . '%'; ?></h2>


      </div>
    </div>

    <div class="container">
      <table>
        <caption>
          <i class="fas fa-ambulance"></i>
          新規陽性者数
          <!-- <br> -->
          <?php
          // echo $ago - 2; 
          ?>
          <!-- 日前と比較した新規感染者数＋ -->
          <?php
          // echo $diff . '人(' . $diff_per . '%)'; 
          ?>
        </caption>
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
    </div>

    <div class="container">
      <table>
        <caption>
          <i class="far fa-meh"></i>
          死亡者数（累計）</caption>
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
    </div>

    <div class="container">
      <table>
        <caption>
          <i class="fas fa-hospital-alt"></i>
          入院治療等を要する者の数</caption>
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
    </div>

    <div class="container">
      <table>
        <caption>
          <i class="fas fa-bed"></i>
          重症者数</caption>
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
    </div>

  </main>
  <footer>

  </footer>
</body>

</html>