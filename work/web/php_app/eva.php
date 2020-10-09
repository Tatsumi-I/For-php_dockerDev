<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    details{
      background:skyblue;
      color:bule;
      border-radius:10px;
    }
    summary{
      text-align:center;
      padding:20px;
    }
    label {
      margin:20px ;
    }
    input,select,textarea{
      margin:30px -20px 20px 50px;
    }

    table{
      margin:50px;
      /* border:1px solid grey; */
    }
    th{
      text-align:right;
      padding:1em;
      margin:20px;
    }
    td{
      margin:20px;
      padding:1em;
      text-align:center;
    }
  </style>
</head>
<body>

<details>
  <summary>Keep your comments</summary>
  <form method="post" action="eva.php">
  <!-- <input type="hidden" name="number" value="<//?php echo $number; ?>"> -->
  <label for="title">コメントタイトル
    <br>
    <input type="text" name="title">
  </label>
  <br>
  <label for="category">Category
    <br>
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
    <input type="reset" value="リセット">
    <input type="submit" value="KEEP">
  </form>



<p><a href="list_table.php">評価コメント一覧を見る</a></p>
</details>
</body>
</html>