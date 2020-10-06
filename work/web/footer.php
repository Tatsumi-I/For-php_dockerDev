<?php 
  require_once('../app/function.php')
?>
</main>
<footer>
<div class="headFootOpenMenu">
    <details>
      <summary>Global Menu</summary>
        <div class="fl">
          <div>
            <p><a href="home.php">HOME</a></p>
            <p>Works</p>
            <p class="indent">Coding Skills included on</p>
            <ul>
              <li class="indent"><a href="      ">This site</a></li>
              <li class="indent"><a href="      ">My first code</a></li>
              <li class="indent"><a href="      ">Processing</a></li>
            </ul>
            <p class="indent"><a href="design.php">Design</a></p>
            <p>Profile</p>
            <ul>
              <li><a href="skills.php">Knowledge & Skill</a></li>
              <li><a href="chara.php">Character</a></li>
              <li><a href="backBone.php">Backbone</a></li>
              <li><a href="blackApron.php">What is Black Apron?</a></li>
              <li><a href="hobby.php">Hobby</a></li>
            </ul>
            <p><a href="contact.php">Contact</a></p>
          </div>
          <hr>
            <div class="siteLogo">
              <a href="index.php">
                <h1>Create a New Experience.</h1>
                  <div>
                    <img src="imgs/logo.png" width="100px">
                    <p><?= h($myName);?> _ Portfolio</p>
                    <p class="ja">石川達実  ポートフォリオサイト</p>
                  </div>
              </a>
            </div>
        </div>
      </details>
  </div>
  <p><a href="#header">PageTopへ</a></p>
  <div class="footerContainer">
    <div class="logo">
      <a href="home.php"><img src="imgs/logo.png" width="80px"></a>
    </div>
    <div class="address">
      <address>
        <p><a href="tel:090-9771-0428">TEL</a></p>
        <p><a href="mailto:t.tsumi02@gmail.com">MAIL</a></p>
        <p>各種アカウント</p>
        <p><?= h($myName);?></p>
      </address>
    </div>
  </div>
</footer>

<!-- google.noto-sun日本語 -->
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
<!-- アドビ日本語 -->
<script>
  (function(d) {
    var config = {
      kitId: 'pjg4svf',
      scriptTimeout: 3000,
      async: true
    }
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

</body>
</html>