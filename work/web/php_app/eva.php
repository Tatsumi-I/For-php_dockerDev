<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    <?php
    require_once('appStyle.min.css');
    ?>
  </style>
</head>
<body>
<header>
  <p>PHP & MYSQL_app ”Hoz_on”</p>
</header>
<main>
<div class="all">

  <form method="post" action="add.php">
  <label for="title">コメントタイトル
    <!-- <br> -->
    <input type="text" name="title">
  </label>
  <br>
  <label for="category">Category
    <!-- <br> -->
    <select name="category" id="">
      <option value="0">カテゴリ選択</option>
      <option value="1">Code</option>
      <option value="2">Design</option>
    </select>
  </label>
  <br>
  <label for="radio">評価
    <br>
    <input type="radio" name="checked" value="1">
      <label for="checked">Good !</label>
    <input type="radio" name="checked" value="2">
      <label for="checked">Bad...</label>
    <input type="radio" name="checked" value="3">
      <label for="checked">What's?!</label>
  </label>
  <br>
  <label for="textarea">コメント
    <br>
    <textarea name="comments" col="20" row="5" maxlength="100"></textarea>
    <br>
  </label>
    <button type="reset">Reset</button>
    <button type="submit">Keep!</button>
  </form>


<p><a href="list_table.php">評価コメント一覧を見る</a></p>
  
</div>
</main>
<footer>
  <p>PHP & MYSQL_app ”Hoz_on”</p>
</footer>
</body>
</html>