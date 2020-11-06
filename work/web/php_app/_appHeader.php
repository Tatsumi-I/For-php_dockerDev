<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="../imgs/logo.png" type="image/png" sizes="16*16">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="./styleForApp/appStyle.min.css">
  <title><?php 
    if (!empty($pageName)) {
      echo $pageName;
    } else{
      echo 'Hoz_on';
    }
    ?>
  </title>
<style>
</style>
</head>

<body>
  <header>
    <p><a href="hoz_onTop.php">PHP & MYSQL_app ”Hoz_on”</a></p>
  </header>
  <main>
    <div class="linkBar">
      <a href="hoz_onTop.php">Hoz_onとは??</a>
      <a href="eva.php">新規登録</a>
      <a href="list_table.php">Hoz_onリスト</a>
    </div>
    <hr>
  <div class="all">
    <div class="title">
      <h1><span>Keep your inspiration!!</span></h1>
      <h2>by "Hoz_on" !!</h2>
      <p>~あなたのアイデア保存します~</p>
    </div>