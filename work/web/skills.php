<?php

$pageName = '';
$menuList = '';
require_once('../app/function.php');
include_once('_header.php');
$links =
  '<a href="skills.php">skill</a>' .
  '<a href="">profile</a>' .
  '<a href="blackApron.php">other</a>';




?>

<section id="area_0">
  <div class="sectionArea">
    <div class="firstView">
      <h2>Knowledge & Skill</h2>
      <div class="content">
        <div class="concept">
          <!-- <img src="./imgs/color.jpg" alt=""> -->
          <div class="contentImg">
            <img src="./imgs/5870.png" alt="">
          </div>
          <div class="text">
            <p>このページでは、石川達実の<strong>現在の知識とスキル</strong>、<strong>今後の方向性</strong>について知ることができます。</p>
          </div>
            <?php
            
              // 学習時間の計算機
              // 2020.11.9.現在　約300時間
              $lean_hour = 300;
              // 週平均　19時間
              // 日平均　2時間（月30日で計算）

              $origin = date_create('2020-10-31');

              $start = date_create('2020-06-01');
              $day_gap1 = date_diff($start, $origin);
              $gap_int1 = $day_gap1 -> format('%a');
              $day_ave = round(($lean_hour / $gap_int1),4);

              $week = round(($gap_int1 / 7),4);


              $today = date('Y-m-d');
              $target = date_create($today);
              $day_gap2 = date_diff($origin, $target);
              $gap_int2 = $day_gap2 -> format('%a');


              $add_hour = $gap_int2 * $day_ave;

              $total_hour =  round(($lean_hour + $add_hour) ,4);


              echo 
              <<< learning_time
               <p>学習時間計算機</p>


                <table border="1">
                  <thead>
                    <tr>
                      <th>学習開始からの経過日数</th>
                      <th>2020.10.31.時点での学習累計時間</th>
                      <th>週平均時間</th>
                      <th>日平均時間</th>
                      <th>$today 時点での合計時間</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>$gap_int1 日</td>
                      <td>300時間</td>
                      <td>$week 時間</td>
                      <td>$day_ave 時間</td>
                      <td>$total_hour 時間</td>
                    </tr>
                  </tbody>
                </table>
              learning_time;

            ?>
          <div class="blank">
          
            <p></p>
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
        <a href="#area_1">Coading成果物</a>
        <a href="#area_2">Design成果物</a>
        <a href="#area_3">プロフィール</a>
      </div>
    </div>
  </div>
</section>
<section id="area_1">

  <div class="tra3d">Knowledge...</div>

  <div class="sectionArea">
    <div class="desc">
    </div>
    <div class="contentsArea">
      <h2>Knowledge</h2>
      <p></p>
      <div class="content">
        <h3>Coding</h3>
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
        <h3>Programing</h3>
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
      <div class="content">
        <h3>Design</h3>
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
    </div>
  </div>
</section>

<section id="area_">
  <div class="sectionArea">
    <h2>Skills</h2>

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

    </div>
  </div>
</section>
<section id="area_">
  <div class="sectionArea">
    <h2>今後の学習予定</h2>

    <div class="tra3d">Future...</div>

    <div class="contentsArea">
      <div class="content">
        <h3>習得必須</h3>
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
          </div>
        </div>
      </div>
      <div class="content">
        <h3>興味のある分野</h3>
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
