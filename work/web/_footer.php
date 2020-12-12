
</article>

<section>
  <h2>こちらも是非ご覧ください！</h2>
  <div class="content">
    <h3>一風変わった過去やBackboneについて知ることができます</h3>
    <div class="container2">
      <div class="text">
        <!-- <p>是非ご参照下さい！ -->
        <a href="chara.php" class="chara">性格と思考</a>
        <a href="backBone.php" class="backBone">過去/Backbone</a>
        <a href="blackApron.php" class="blackApron">ブラックエプロンとは?</a>
        <a href="hobby.php" class="hobby">趣味や嗜好</a>
        <p>全てのページを知るには,<a href="#footer">Global Menu</a>をご参照下さい。</p>
      </div>
    </div>
  </div>
  <p class="toTop"><a href="#area_0">PageTopへ</a></p>
</section>
</main>

<footer>

  <div id="footer" class="headFootOpenMenu">
    <details>
      <summary>Global Menu</summary>
      <?= $globalMenu; ?>
    </details>
  </div>
  <div class="siteLogo">
    <a href="index.php">
      <h1>Create a New Experience.</h1>
      <div class="inHeader">
        <img src="imgs/logo.png">
        <h1>Tatsumi-Ishikawa _ Portfolio</h1>
        <p class="ja">石川達実 ポートフォリオサイト</p>
      </div>
    </a>
  </div>
  <address>

  </address>
  <p class="copyLight"><small>&copy; Tatsumi-Ishikawa.2020</small></p>
</footer>


<!-- <script src="js/myPortfolio.js"></script> -->
<script>
  (function() {
    document.addEventListener('DOMContentLoaded', function() {
      const appConect = document.querySelector('#appConect');
      appConect.addEventListener('click', function(event) {
        confirm('Hoz_onを使いますか？');
      });
    });
  })();

  requestAnimationFrame(function(e) {
  e = document.createElement('link');
  e.rel = 'stylesheet';
  e.href = 'https://use.fontawesome.com/releases/v5.6.1/css/all.css';
  document.head.appendChild(e);
  });
  requestAnimationFrame(function(e) {
  e = document.createElement('link');
  e.rel = 'preconnect';
  e.href = 'https://fonts.gstatic.com">';
  document.head.appendChild(e);
  });
  requestAnimationFrame(function(e) {
  e = document.createElement('link');
  e.rel = 'stylesheet';
  e.href = 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap';
  document.head.appendChild(e);
  });
  requestAnimationFrame(function(e) {
  e = document.createElement('link');
  e.rel = 'stylesheet';
  e.href = 'https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Noto+Sans+JP:wght@300&display=swap';
  document.head.appendChild(e);
  });

</script>

</body>

</html>