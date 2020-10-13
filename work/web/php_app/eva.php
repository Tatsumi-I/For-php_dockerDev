<?php 
  require_once('/work/app/function.php');
  require_once('/work/app/db_cnf.php');
  require_once('_header.php');
  

?>


  <form method="post" action="add.php">
  <label for="title">Title/タイトル
    <input type="text" class="textInput" name="title">
  </label>
  <br>
  <label for="category">Category/カテゴリ
    <!-- <br> -->
    <select name="category" id="">
      <option value="0">カテゴリ選択</option>
      <option value="1">Code</option>
      <option value="2">Design</option>
    </select>
  </label>
  <br>
  <label for="radio">Evaluation/評価
    <br>
    <label><input type="radio" name="checked" value="1">Good !</label>
    <label><input type="radio" name="checked" value="2">Bad...</label>
    <label><input type="radio" name="checked" value="3">What's?!</label>
  </label>
  <br>
  <label for="textarea">Comments/コメント
    <br>
    <textarea name="comments" col="20" row="5" maxlength="100"></textarea>
    <br>
  </label>
    <button type="reset" class="reset">! Reset</button>
    <button type="submit">Hoz_on !</button>
  </form>

  
</div>
</main>
<footer>
  <p><a href="hoz_onTop.php">PHP & MYSQL_app ”Hoz_on”</a></p>
</footer>
</body>
</html>