<?php

$pageName = '';
require_once('../app/function.php')

?>

</article>

<section>
  <h2>こちらも是非ご覧ください！</h2>
  <div class="content">
    <h3>一風変わった過去やBackboneについて知ることができます</h3>
    <div class="container2">
      <div class="text">
        <!-- <p>是非ご参照下さい！ -->
        <a href="chara.php" class="chara">性格と働き方</a>
        <a href="backBone.php" class="backBone">過去/Backbone</a>
        <a href="blackApron.php" class="blackApron">ブラックエプロンとは?</a>
        <a href="hobby.php" class="hobby">趣味や嗜好</a>
        <p>全てのページを知るには,<a href="#footer">Global Menu</a>をご参照下さい。</p>
      </div>
    </div>
  </div>
</section>
</main>

<footer>
  <p class="toTop"><a href="#area_0">PageTopへ</a></p>

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
    <p><a href="https://github.com/Tatsumi-I/">GitHub</a></p>
    <p><a href="mailto:t.tsumi02@gmail.com">MAILで問い合わせる</a></p>
  </address>
  <p class="copyLight"><small>&copy; <?= $myName; ?>.2020</small></p>
</footer>

<!-- google.noto-sun日本語 -->
<!-- アドビ日本語 -->

<script>
  (function(d) {
    var config = {
        kitId: 'pjg4svf',
        scriptTimeout: 3000,
        async: true
      },
      h = d.documentElement,
      t = setTimeout(function() {
        h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
      }, config.scriptTimeout),
      tk = d.createElement("script"),
      f = false,
      s = d.getElementsByTagName("script")[0],
      a;
    h.className += " wf-loading";
    tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
    tk.async = true;
    tk.onload = tk.onreadystatechange = function() {
      a = this.readyState;
      if (f || a && a != "complete" && a != "loaded") return;
      f = true;
      clearTimeout(t);
      try {
        Typekit.load(config)
      } catch (e) {}
    };
    s.parentNode.insertBefore(tk, s)
  })(document);
</script>

<script src="js/myPortfolio.js"></script>
<script>
  (function() {
    document.addEventListener('DOMContentLoaded', function() {
      const appConect = document.querySelector('#appConect');
      appConect.addEventListener('click', function(event) {
        confirm('Hoz_onを使いますか？');
      });
    });
  })();
</script>

</body>

</html>