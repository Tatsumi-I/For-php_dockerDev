<?php 
  require_once('../app/function.php')
?>
</main>
<footer>
  <p><a href="#header">PageTopへ</a></p>
    <div class="footerContainer">
    <?= $nav;?>
    <div class="logo">
      <img src="imgs/logo.png" width="80px">
    </div>
    <div class="inFooter">
      <p><?= h($myName);?></p>
      <p>各種アカウント</p>
      <p><a href="mailto:t.tsumi02@gmail.com">MAIL</a></p>
      <p><a href="tel:090-9771-0428">TEL</a></p>
    </div>
  </div>
</footer>


</body>
</html>