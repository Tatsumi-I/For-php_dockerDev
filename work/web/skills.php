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
          </div>
          <div class="text">
            <p>このページでは、石川達実の<strong>現在の知識とスキル</strong>、<strong>今後の方向性</strong>について知ることができます。</p>
          </div>
          <?php

          // 学習時間の計算機
          $self_learn = 332;
          $other_learn = 111 + 75;
          $for_portfolio = 107;

          $lean_hour = $self_learn + $other_learn + $for_portfolio;

          //システム登録日
          $origin = date_create('2020-11-11');
          $origin_day = $origin -> format('Y/m/d');

          // 学習開始日からの経過日数と日平均の計算
          $start = date_create('2020-05-23');
          $start_day = $start -> format('Y/m/d');
          
          $today = date_create(date('Y-m-d'));
          // 変動する経過日
          $start_today_gap = date_diff($start, $today);
          $s_t_gap = $start_today_gap->format('%a');

          $start_origin_gap = date_diff($start, $origin);
          $so_gap = $start_origin_gap->format('%a');
          $day_ave = round(($lean_hour / $so_gap), 2); //非変動
          // //経過週と週平均の計算
          $week = round(($s_t_gap / 7), 1); //変動
          $week_for_math = round(($so_gap / 7), 1); //非変動

          $week_ave = round(($lean_hour / $week_for_math), 2);

          // // 「登録日から現在との差分」により、累計時間を算出
          $origin_today_gap = date_diff($origin, $today);
          $ot_gap = $origin_today_gap->format('%a');

          $add_hour = $ot_gap * $day_ave;

          $total_hour =  round(($lean_hour + $add_hour), 2);
          $date = date('Y/m/d');

            if (!empty($_GET['form_date']) && ($get_date = date_create(h($_GET['form_date'])))){
              $start_get_gap = date_diff($start, $get_date);
              $sg_gap = $start_get_gap->format('%a');
              $gap_month = round(($sg_gap / 30),2) . 'ヶ月'; 
              $form_date =  $get_date -> format('Y/m/d') . '時点で<br>';
              $today_form_gap = date_diff($today, $get_date);
              $tg_gap = $today_form_gap->format('%R%a');
              $tf_hour = $tg_gap * $day_ave;
              $future_hour = $total_hour + $tf_hour . '時間（自動計算）';
              $error = '';
            } else {
              $error = 'カレンダーから日付を指定して下さい';
              $form_date = '';
              $future_hour = '';
            }

          
          echo
            <<< learning_time
              <div class="learningTable">
                <table>
                <caption><h1>石川達実の学習時間早わかり表！ - 自動計算機能付き</h1></caption>
                <caption>過去半年間の学習平均時間実績を基に算出します</caption>
                 
                  <thead>
                    <tr>
                      <th>title</th>
                      <th>data</th>
                      <th class="coad">算出方法</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>未来の学習累積時間を計算する（自動計算）
                        <form action="" method="GET">
                          <input type="date" name="form_date" autofocus>
                          <button>Done</button>
                        </form>
                      </th>
                      <td>$error $form_date $gap_month<strong>$future_hour</strong></td>
                      <td class="coad"><pre>
                        if (!empty($ _GET['form_date']) 
                            && ($ get_date = date_create(h($ _GET['form_date'])))){
                          $ form_date =  $ get_date -> format('Y/m/d');
                          $ today_form_gap = date_diff($ today, $ get_date);
                          $ tg_gap = $ today_form_gap->format('%R%a');
                          $ tf_hour = $ tg_gap * $ day_ave;
                          $ future_hour = $ total_hour + $ tf_hour;
                          $ error = '';
                        } else {
                          $ error = '正しい入力値ではありません';
                          $ form_date = '';
                          $ future_hour = '??';
                        }
                      </pre></td>
                    </tr>
                    <tr>
                      <th>本日$date 時点での合計時間（自動計算）</th>
                      <td class="data"><strong>$total_hour</strong> 時間</td>
                      <td class="coad"><pre>
                        $ origin_today_gap = date_diff($ origin, $ today);
                        $ ot_gap = $ origin_today_gap->format('%a');
                        $ add_hour = $ ot_gap * $ day_ave;
                        $ total_hour =  round(($ lean_hour + $ add_hour), 2);
                      </pre>
                      </td>
                    </tr>
                    <tr>
                      <th>経過日数/週（自動計算）</th>
                      <td class="data"><strong>$s_t_gap</strong> 日 / $week 週</td>
                      <td class="coad"><pre>
                        $ start_today_gap = date_diff($ start, $ today);
                        $ s_t_gap = $ start_today_gap->format('%a');
                      </pre>
                      </td>
                    </tr>
                    <tr>
                      <th>日平均時間(実績)</th>
                      <td class="data"><strong>$day_ave</strong> 時間/日</td>
                      <td class="coad"><pre>
                        $ day_ave = round(($ lean_hour / $ so_gap), 2);
                      </pre>
                      </td>
                    </tr>
                    <tr>
                      <th>週平均時間(実績)</th>
                      <td class="data"><strong>$week_ave</strong> 時間/週</td>
                      <td class="coad"><pre>
                        $ start_origin_gap = date_diff($ start, $ origin);
                        $ so_gap = $ start_origin_gap->format('%a');
                        $ week = round(($ s_t_gap / 7), 1); //変動
                        $ week_for_math = round(($ so_gap / 7), 1); //非変動
                        $ week_ave = round(($ lean_hour / $ week_for_math), 2);
                      </pre>
                      </td>
                    </tr>
                    <tr>
                      <th>$origin_day 時点での学習累計時間</th>
                      <td class="data"><strong>$lean_hour</strong> 時間</td>
                      <td class="coad"><pre>
                        $ self_learn = 310;
                        $ other_learn = 111 + 75;
                        $ for_portfolio = 107;
                        $ lean_hour = $ self_learn + $ other_learn + $ for_portfolio;
                      </pre></td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>

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