<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    html,
    body {
      text-align: center;
    }

    dl {
      text-align: initial;
    }

    table {
      width: 100%;
      border: none;
    }
  </style>
</head>

<body>

  <?php


  ini_set("iog_errors", "on");
  ini_set("error_iog", "./php_error.log");


  $csv_you = file_get_contents('https://www.mhlw.go.jp/content/pcr_positive_daily.csv', true);
  $lines = explode("\r\n", $csv_you);
  foreach ($lines as $line) {
    $records_you[] = explode(",", $line);
  }

  $leng = count($records_you);
  $i = $leng - 12;
  $value_people_today = $records_you[$leng - 2][1];
  $value_people_passed = $records_you[$leng - 30];
  var_dump($value_people_passed);
  $diff = (int)$value_people_today - (int)$value_people_passed;

  $csv_nyuuinn = file_get_contents('https://www.mhlw.go.jp/content/cases_total.csv', true);
  $lines = explode("\r\n", $csv_nyuuinn);
  foreach ($lines as $line) {
    $records_nyu[] = explode(",", $line);
  }

  $csv_die = file_get_contents('https://www.mhlw.go.jp/content/death_total.csv', true);
  $lines = explode("\r\n", $csv_die);
  foreach ($lines as $line) {
    $records_die[] = explode(",", $line);
  }

  $csv_jyu = file_get_contents('https://www.mhlw.go.jp/content/severe_daily.csv', true);
  $lines = explode("\r\n", $csv_jyu);
  foreach ($lines as $line) {
    $records_jyu[] = explode(",", $line);
  }



  // echo $i;
  // // $i = 0;



  ?>

  <h1>厚生労働省HPの情報を<br>もっと身近に！<br>わかりやすく！<br>をテーマに</h1>
  <h2>新型コロナウイルス情報<br>をひっぱてこれるプログラム<br>をかいたよ</h2>
  <h3>マジ独学</h3>
  <b>（同じことやってる人いなかったから大変だった…）</b>
  <dl>
    <dt>使用リソースと技術</dt>
    <dd>厚生労働省オープンデータ</dd>
    <dd>CSV形式データの変換と取得</dd>
  </dl>



  <p></p>
  <table border="1">
    <caption>陽性者数<br>1ヶ月前との比較<?php echo $diff; ?></caption>
    <thead>
      <tr>
        <td>日付</td>
        <td>陽性者数</td>
        <!-- <td>前日比</td> -->
      </tr>
    </thead>
    <tbody>
      <pre>

    <?php


    foreach (array_reverse($records_you) as $value) {
      $i++;
      // var_dump($records_you);

      if (($i >  $leng - 11) && ($i < $leng)) {
        $value_date = $value[0];
        $value_people = $value[1];
        // $diff = $value_people_today - $value_people;
        echo '<tr><td>' . $value_date . '</td>';
        echo '<td>' . $value_people . '</td></tr>';
      }
    }
    ?>


        <!-- <td><//?php echo $diff;?></td> -->
    </pre>
    </tbody>
  </table>

  <table border="1">
    <caption>入院治療等を要する者の数</caption>
    <thead>
      <tr>
        <td>日付</td>
        <td>数</td>
      </tr>
    </thead>
    <tbody>
      <pre>

        <?php
        $leng = count($records_nyu);
        $i = $leng - 12;
        foreach (array_reverse($records_nyu) as $value) {
          $i++;

          if (($i >  $leng - 11) && ($i < $leng)) {
            // var_dump($records_nyu);
            $value_date = $value[0];
            $value_people = $value[1];
            echo '<tr><td>' . $value_date . '</td>';
            echo '<td>' . $value_people . '</td></tr>';
          }
        }
        ?>
      
    </pre>
    </tbody>
  </table>
  <table border="1">
    <caption>死亡者数</caption>
    <thead>
      <tr>
        <td>日付</td>
        <td>数</td>
      </tr>
    </thead>
    <tbody>
      <pre>

        <?php
        $leng = count($records_die);
        $i = $leng - 12;
        foreach (array_reverse($records_die) as $value) {
          $i++;
          // var_dump($records_die);

          if (($i >  $leng - 11) && ($i < $leng)) {
            $value_date = $value[0];
            $value_people = $value[1];
            echo '<tr><td>' . $value_date . '</td>';
            echo '<td>' . $value_people . '</td></tr>';
          }
        }
        ?>
      
    </pre>
    </tbody>
  </table>
  <table border="1">
    <caption>重症者数</caption>
    <thead>
      <tr>
        <td>日付</td>
        <td>数</td>
      </tr>
    </thead>
    <tbody>
      <pre>

        <?php
        $leng = count($records_jyu);
        $i = $leng - 12;
        foreach (array_reverse($records_jyu) as $value) {
          $i++;
          // var_dump($records_jyu);

          if (($i >  $leng - 11) && ($i < $leng)) {
            $value_date = $value[0];
            $value_people = $value[1];
            echo '<tr><td>' . $value_date . '</td>';
            echo '<td>' . $value_people . '</td></tr>';
          }
        }
        ?>
      
    </pre>
    </tbody>
  </table>

</body>

</html>