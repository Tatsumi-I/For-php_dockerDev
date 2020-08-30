<?php 
  require_once('../app/function.php')
?>
</main>
<footer>
  <b>footer</b>
  <div class="footerContainer">
    <?= $nav;?>
    <div class="logo">
      <img src="imgs/logo.png" width=80px>
    </div>
    <div class="inFooter">
      <h1><?= h($myName);?>_Portofolio</h1>
    </div>
  </div>
</footer>

</body>
</html>