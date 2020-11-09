<?php

$pageName = '';
$menuList = '';
require_once('../app/function.php');
include_once('_header.php');
$links =
  '<a href="skills.php">skill</a>' .
  '<a href="">profile</a>' .
  '<a href="blackApron.php">other</a>';
?>

<section id="area_">
  <fieldset>
    <legend>
      ご意見フォーム
    </legend>
    <form action="index.php" id="testForm" name="testForm">
      <div>
        <label for="title">題名<br></label>
        <input id="title" name="title" type="text" required>
      </div>
      <div>
        <label for="voice"> あなたのご意見聞かせて下さい<br></label>
        <textarea cols="30" rows="10" id="voice" name="voice" type="text" required>
            </textarea>
      </div>
      <div>
        <input id="jj" name="levels" type="checkbox" value="面白い">
        <label for="jj">面白い</label>
        <input id="jj" name="levels" type="checkbox" value="余り">
        <label for="jj">余り</label>
        <input id="jj" name="levels" type="checkbox" value="全然">
        <label for="jj">全然</label>
      </div>
    </form>
    <button onclick="formModule.sumForm()">入力内容を表示する</button>
    <button onclick="formModule.submitForm()">送信</button>
</section>

<?php

include_once('_footer.php');
