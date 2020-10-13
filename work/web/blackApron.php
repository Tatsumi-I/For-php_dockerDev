<?php 
  
  $pageName = '';
  require_once('../app/function.php');
  include_once('header.php');
?>
<article>
  <section>
    <div id="pageTop" class="firstView">
      <div class="contentImg">
        <img src="./imgs/B_A.png" alt="">
      </div>
      <div class="concept">
        <nav>
          <p><i class="fas fa-home"></i><a href="home.php">HOME</a>  >  Profile <a href="backBone.php"> > Backbone</a><a href="blackApron.php"> > What is Black Apron? </a> </p>
        </nav>
          <p><?php echo date($date); ?></p>
        <h2>Black Apronとは?</h2>
        <div>
          <p></p>
        </div>
      </div>
    </div>
  </section>
  
  <section>
    <div class="sectionArea">
      <h2>バリスタの憧れの存在</h2>
      
      <div class="tra3d">Character...</div>
      
      <div id="coading" class="contentsArea">
        <div class="desc">
          <p></p>
        </div>
        <div class="container1">
          <div class="text">
            <h3>コーヒーへの情熱の証</h3>
            <h4></h4>
            <ul>
              <li></li>
            </ul>
              <p></p>
          </div>
          <div class="contentImg">
            <img src="imgs/passion.jpg">
            <b></b>
          </div>
        </div>
        <div class="container2">
           <div class="contentImg">
            <img src="imgs/B_A_2.png"></img>
            <b>星の数は合格した数を表している</b>
          </div>
          <div class="text">
            <h3>社内試験　合格率は?</h3>
            <div class="notes">
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  
  <section>
    <div class="sectionArea">
      <h2>"Black Apron"としての石川達実</h2>
      
      <div class="tra3d">Lead Coffee Master</div>
      
      <div class="contentsArea">
        <div class="container1">
          <div class=text>
            <h3>テキストの公開</h3>
            <h4></h4>
            <p><a href="tatsumi-jyuku.php">textPage</a></p>
            <ul>
              <li></li>
            </ul>
            <div class="notes">
              <p></p>

            </div>
          </div>
          <div class="contentImg">
            <img src="imgs/grow.jpg"></img>
            <b>石川達実は常に成長する意欲と実績を持っている</b>
          </div>
        </div>
        <div class="container2">
          <div class="contentImg">
            <img src="imgs/office.jpg">
          </div>
          <div class="text">
            <h3>先生と呼ばれていました</h3>
            <ul>
              <li></li>
            </ul>
            <p><a></a></p>
          </div>
        </div>
        <div class="container1">
          <div class="text">
            <h3>エリアカップ出場</h3>
            <p></p>
          </div>
          <div class="contentImg">
            <img src="imgs/typeTable.png">
            <b><a href="https://iwamishinji.com/tools/16personalities/" target="chara">いわろぐ - https://iwamishinji.com/tools/16personalities/ より引用</a></b>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="sectionArea">
      <h2>まとめ</h2>
      <div class="desc">    
        <p>私は、自分にとって新しいことについて学んだり、ある物事の詳細について多角的に理解することに特に喜びを感じます</p>
      </div>
    </div>
    </section>
  </article>


<?php 

include_once('footer.php');