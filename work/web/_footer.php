<?php 
  
  $pageName = '';
  require_once('../app/function.php')

?>


</main>
</article>
<footer>
  <p class="toTop"><a href="#area_0">PageTopへ</a></p>
  <div id="footer" class="headFootOpenMenu">
    <details open>
      <summary>Global Menu</summary>
        <?= $globalMenu; ?>
    </details>
      <address>
        <p><a href="tel:090-****-****">TEL</a></p>
        <p><a href="mailto:t.tsumi02@gmail.com">MAIL</a></p>
        <p>各種アカウント</p>
      </address>
    <p class="copyLight"><small>&copy; <?= $myName; ?>.2020</small></p>
  </div>
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
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<script src="js/myPortfolio.js"></script>

</body>
</html>