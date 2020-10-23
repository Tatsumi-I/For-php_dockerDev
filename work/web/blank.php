<?php 
  
  $pageName = '';
  require_once('../app/function.php');
  include_once('_header.php');
  
?>
  <nav>
    <p><i class="fas fa-home"></i><a href="home.php">HOME</a>  >  Profile  >  <a href="skills.php">Knowledge & Skill</a></p>
    <p><?php echo date($date); ?></p>
  </nav>
  <section id="area_0">
    <div class="firstView">
      <div class="contentImg">
        <img src="./imgs/office.jpg" alt="">
      </div>
      <div class="concept">
        <h2>Knowledge & Skill</h2>
        <div>
          <p>このページでは、石川達実の<strong>現在の知識とスキル</strong>、<strong>今後の方向性</strong>について知ることができます。</p>
        </div>
      </div>
    </div>
  </section>
  
    <div class="app">
    <a href="../php_app/eva.php" target="_Hoz_on">Hoz_on</a>
  </div>



      <p>このページでわかること</p><div class="gaiyou">
        <div class="a">Coading成果物の概要</div>
        <div class="b">Design成果物の概要</div>
        <div class="c">プロフィールの概要</div>
      </div>

  
  <section id="area_1">
    <div class="sectionArea">
      <h2></h2>
      
      <div class="tra3d">Knowledge...</div>
      
      <div class="contentsArea">
        <div class="desc">
          <p></p>
        </div>
        <div class="content">
          <h3></h3>
          <div class="container1">
            <div class="text">
              <h4></h4>
              <ul>
                <li></li>
              </ul>
              <p></p>
            </div>
            <div class="contentImg">
              <img src="imgs/.png">
            </div>
          </div>
        </div>
        <div class="content">
          <h3></h3>
          <div class="container2">
            <div class="contentImg">
              <img src="imgs/.jpg"></img>
            </div>
            <div class="text">
              <div class="notes">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="area_">
    <div class="sectionArea">
      <h2></h2>
      
      <div class="tra3d">Skills...</div>

      <div class="contentsArea">
        <div class="content">
          <h3></h3>
          <div class="container1">
            <div class=text>
              <h4></h4>
              <ul>
                <li></li>
              </ul>
              <div class="notes">
                <p></p>
              </div>
            </div>
            <div class="contentImg">
              <img src="imgs/.jpg"></img>
              <b>石川達実は常に成長する意欲と実績を持っている</b>
            </div>
          </div>
        </div>
        <div class="content">
          <h3></h3>
          <div class="container2">
            <div class="contentImg">
              <img src="imgs/.jpg">
            </div>
            <div class="text">
              <ul>
                <li></li>
              </ul>
              <p><a></a></p>
            </div>
          </div>
        </div>
        <div class="content">
          <h3></h3>
          <div class="container1">
            <div class="text">
              <p></p>
            </div>
            <div class="contentImg">
              <img src="imgs/.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="area_">
    <div class="sectionArea">
      <h2>まとめ</h2>
      <div class="desc">
        <p>

        </p>
      </div>
    </div>
    </section>


<?php 

include_once('_footer.php');