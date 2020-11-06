<?php 
  
  $pageName = '';
  require_once('../app/function.php')

?>

</article>

<section>
  <div class="sectionArea">
    <div class="desc">
      <h3>このサイトの他のページも見る</h3>
      <div class="gaiyou">
        <?php if(isset($links)){
                echo $links;
              }else{
                echo '<a href="home.php">Toppページに戻る</a>';
        }
        ?>
      </div>
    </div>
  </div>
</section>

</main>

<footer>
  <p class="toTop"><a href="#area_0">PageTopへ</a></p>
  
  <div id="footer" class="headFootOpenMenu">
    <details open>
      <summary>Global Menu</summary>
        <?= $globalMenu; ?>
    </details>
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
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<script src="js/myPortfolio.js"></script>
<script>

(function(){
  document.addEventListener('DOMContentLoaded' , function(){
    const appConect = document.querySelector('#appConect');
    appConect.addEventListener('click' , function(event){
      confirm('Hoz_onを使いますか？');
    });
});
})();

</script>

</body>
</html>