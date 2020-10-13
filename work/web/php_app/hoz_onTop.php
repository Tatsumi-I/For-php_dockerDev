<?php 
  require_once('/work/app/function.php');
  require_once('/work/app/db_cnf.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    <?php
    require_once('./styleForApp/appStyle.min.css');
    ?>
  </style>
</head>
<body>

<header>
  <p><a href="hoz_onTop.php">PHP & MYSQL_app ”Hoz_on”</a></p>
</header>
<main>

<p class="rundum">「<?= h($message).'(ランダムメッセージ-全5種類)';?>」</p>


<div class="all">
  <div class="appDesc">
 
  <h1>Keep your inspiration!!</h1>
  <h2>Hoz_on (ホゾン,仮称)</h2>
  <h3>What's Hoz_on?!</h3>
  <dl>
    <dt>Hoz_onとは?</dt>
    <dd>Hoz_on = (Hands-on"実践" + Hozon"保存")</dd>
    <dd>Hoz_on(ホゾン,仮称)は、その時感じたことをすぐに保存できるアプリです。</dd>
  </dl>
  <h3>Why Hoz_on?!</h3>
  <dl>
    <dt>Web上で見つけた面白い発見や、後でもう少し調べたいことをいつの間にか忘れてしまうことはありませんか？</dt>
    <dd>Hoz_onをあなたのinspirationのために活用してください。</dd>
    <dd>Hoz_onなら、あとでもう一度見たいことを”保存”しておくことができます。</dd>
    <dd>Hoz_onなら、遭難するのを防いでくれます。</dd>
  </dl>
    <p>あなたの感想や貴重なアドバイスも”Hozon”致します！</p>
    <p>あなたのための Hoz_on を今すぐ始めましょう！</p>

       
  </div>

    <p><a href="eva.php">今すぐ Hoz_on する</a></p>
    <p><a href="list_table.php">Hoz_on リストを見る</a></p>
  
</div>
</main>
<footer>
  <p><a href="hoz_onTop.php">PHP & MYSQL_app ”Hoz_on”</a></p>
</footer>
</body>
</html>