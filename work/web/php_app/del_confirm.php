<?php 
  require_once('/work/app/function.php');
  require_once('/work/app/db_cnf.php');
  require_once('_header.php');
  
?>


<?php

 //require_once('.../app/db_cnf.php');


  //編集機能
  try{
    if (empty($_GET['id'])) throw new Exception('idの取得エラー'); 
    $id = (int) $_GET['id'];
    // var_dump($id);
    // print_r($id);
    $dbh = new PDO('mysql:host=mysql_host;dbname=db_4portfolio;charset=utf8', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM eva WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $dbh = null;
    // echo "ID: " . h($id, ENT_QUOTES, 'UTF-8') . "の削除完了";
  } catch (Exception $e) {
    echo "ERROR: " . h($e->getMessage(), ENT_QUOTES,'UTF-8') . "<br>";
    die();
  }
?>

<body>
  <p>No.
    <?php echo h($result['id'],ENT_QUOTES,'UTF-8'); ?>
    :"
    <?php 
      if (!empty($result['title'])){
        echo h($result['title'],ENT_QUOTES,'UTF-8'); 
      } else {
        echo "No-title";
      }
      ?>"
    を本当に削除しますか？</p>
  
  <form method="GET" action="remove.php">
  <input type="hidden" name="id" value="
    <?php echo h($result['id'],ENT_QUOTES,'UTF-8'); 
    ?>
  ">
  <input type="hidden" name="title" value="
    <?php echo h($result['title'],ENT_QUOTES,'UTF-8'); 
    ?>
  ">
  <p><a href="list_table.php">キャンセル</a></p>
  <button>
    削除する
  </button>
  </form>

</div>
</main>
<footer>
  <p><a href="hoz_onTop.php">PHP & MYSQL_app ”Hoz_on”</a></p>

</footer>
</body>
</html>