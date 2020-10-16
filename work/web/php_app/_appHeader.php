<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php h($pageName);?></title>
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
    <div class="all">
      <div class="linkBar">
        <a href="hoz_onTop.php">Hoz_onとは??</a>
        <a href="eva.php">新規登録</a>
        <a href="list_table.php">Hoz_onリスト</a>
      </div>
      <hr>
        <p><?= "\"" . h($message) .  "\"" . '  (ランダムメッセージ)';?></p>
        <p><a href="../home.php">Tatsumi's_Portfolioに戻る</a></p>