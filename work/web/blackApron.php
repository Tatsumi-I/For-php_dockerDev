<?php

$pageName = '';
$menuList = '';
require_once('../app/function.php');
include_once('_header.php');
$links =
  '<a href="area_1">Black　Apronとは</a>' .
  '<a href="area_2">前職での活躍</a>' .
  '<a href="area_3"></a>';
?>


<section id="area_0">
  <div class="sectionArea">
    <div class="firstView">
      <h2>Black　Apronとは</h2>
      <div class="content">
        <div class="concept">
          <!-- <img src="./imgs/color.jpg" alt=""> -->
          <div class="contentImg">
            <img src="./imgs/B_A.jpg" alt="">
          </div>
          <div class="text">

          </div>
          <div class="blank">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="sectionArea">
    <div class="desc">
      <h3>このページでわかること</h3>
      <div class="gaiyou">
        <?php echo $links; ?>
      </div>
    </div>
  </div>
</section>
<section id="area_1">
  <div class="sectionArea">
    <h2>バリスタの憧れの存在</h2>

    <div class="tra3d">Character...</div>

    <div class="contentsArea">
      <div class="desc">
        <p></p>
      </div>
      <div class="content">
        <h3>コーヒーへの情熱の証</h3>
        <div class="container1">
          <div class="text">
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
      </div>
      <div class="content">
        <h3>社内試験　合格率は?</h3>
        <div class="container2">
          <div class="contentImg">
            <img src="imgs/B_A_2.png"></img>
            <b>星の数は合格した数を表している</b>
          </div>
          <div class="text">
            <h4>10%程度</h4>
            <div class="notes">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="area_2">
  <div class="sectionArea">
    <h2>"Black Apron"としての石川達実</h2>

    <div class="tra3d">Lead Coffee Master</div>

    <div class="contentsArea">
      <div class="content">
        <h3>テキストの公開</h3>
        <div class="container1">
          <div class=text>
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
            <img src="imgs/.jpg"></img>
            <b>石川達実は常に成長する意欲と実績を持っている</b>
          </div>
        </div>
      </div>
      <div class="container2">
        <div class="content">
          <h3></h3>
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
        <h3>エリアカップ出場</h3>
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
      <p>私は、自分にとって新しいことについて学んだり、ある物事の詳細について多角的に理解することに特に喜びを感じます</p>
    </div>
  </div>
</section>


<?php

include_once('_footer.php');
