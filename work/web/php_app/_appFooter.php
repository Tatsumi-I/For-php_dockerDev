<?php
require_once('/work/app/function.php');
require_once('/work/app/db_cnf.php');
require_once('_appHeader.php');
require_once('_appFooter.php');
?>


</div>
<hr>
<p><?= "\"" . h($message) .  "\"" . '  (ランダムメッセージ)'; ?></p>
<p><a href="../index.php">Tatsumi's_Portfolioに戻る</a></p>
<br>
</main>
<footer>
  <p><a href="hoz_onTop.php">PHP & MYSQL_app ”Hoz_on”</a></p>
  <p class="copyLight"><small>&copy; <?= $myName; ?>.2020</small></p>

</footer>
<script src="../js/myPortfolio.js"></script>
</body>

</html>