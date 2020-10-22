<?php 
  
  $pageName = '';
  require_once('../app/function.php');
  include_once('_header.php');
  
?>
<article>
  <section id="area_">
    <div class="firstView">
      <div class="contentImg">
        <img src="./imgs/.jpg" alt="">
      </div>
      <div class="concept">
        <nav>
          <p><i class="fas fa-home"></i><a href="home.php">HOME</a>  >  <a href="design.php">Design</a></p>
          <p><?php echo date($date); ?></p>
        </nav>
        <h2>Design</h2>
        <div>
          <p>
            Adobeツールでの成果物についての詳解ページ
          </p>
        </div>
      </div>
    </div>
  </section>
  
  <section id="area_">
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
              <img src="imgs/art2.png">
            </div>
          </div>
        </div>
        <div class="content">
          <h3></h3>
          <div class="container2">
            <div class="contentImg">
              <img src="imgs/art1.png"></img>
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
  </article>


<?php 

include_once('_footer.php');