# 私の成果物の一例をご紹介致します
<br>

**その他成果物のリンク先もご紹介させていただいております。**<br>**こちらもぜひ御覧ください。**

<br>
<br>


# 天気予報アプリの詳細
<img src="https://github.com/Tatsumi-I/For-php_dockerDev/blob/master/weather.gif" width="30%">
<br>＊実際はこんなに遅くありません

<br>[使ってみる](http://myfirstdeploy.s3.coreserver.jp/work/web/weather_API/weather.php)

<br>

## 機能概要

  - 体感気温に特化した天気予報
  - 世界中の20万以上の地域を指定可能
  - 最大5日先まで参照可能
<br>

## 制作の背景とゴール

  ### 「どうすべきかを知っている」ことはQOLや幸福度に影響します。
  #### ただ天気が分かるではなく、それでどうすればいいか、を可視化できるようなアプリを作りたい と考えて作成しました。
  
<img src="https://images.unsplash.com/photo-1484627147104-f5197bcd6651?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80" width="50%">

そしてこれからの時代において重要な

  - 情報をどう活用するか
  - 情報は生活をどう変えるか
 
を表現できるアプリを目指しました。
  
  
<br><br>
## それを実現するために使用している技術
<br>

### PHP,Web_API,レスポンシブデザイン

<img src="https://images.unsplash.com/photo-1599507593362-50fa53ed1b40?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDl8fHBocHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" width="50%">
<br>

  ### その他：Sass,CSSanimation,JSON,HTML5,CSS3,Google_Analytics
  <br>
  
  ## 機能詳細  

### Open Weather から提供されているAPIを活用しています。

<img src="https://openweathermap.org/themes/openweathermap/assets/img/landing/one_call_api.png" width="50%">


### データの取得
 1.Open Weather からJSONで提供されているデータをAPIで取得します。  
 2.ユーザーの選択に応じてURLに反映させ、必要な情報を表示します。  
 
 ````
  $api_url = 'https://api.openweathermap.org/data/2.5/forecast' . $area . '&appid=' . $apiKey . '&lang=ja&units=metric';
  $response = json_decode(file_get_contents($api_url), true);
  $list = $response['list'];
  $leng = count($list);
  $city = $response['city']['name'];
  
````
### 判定
 1.入力されたデータが適正か判断し、エラーメッセージが表示され、デフォルトに指定されている名古屋の天気が表示されます。  
 <br>
 2.入力されたデータが適正なら、JSONからデータを取り出して表示します。  
<br> 

````
  if ((isset($_GET['area'])) && (!isset($_GET['area_in'])) && (empty($_GET['zip']))) {
    $area = '?id=' . $_GET['area'];
  } 
  
  if (!isset($_GET['area']) && (!isset($_GET['area_in'])) && (!empty($_GET['zip']))) {
    if (strlen($_GET['zip']) === 8) {
      $area = '?zip=' . $_GET['zip'] . ',jp';
    } else {
      $area = '?zip=100-0012,jp';
      $error = '郵便番号として正しくありません';
    }
  } 
  
  if (!isset($_GET['area']) && (isset($_GET['area_in'])) && (empty($_GET['zip']))) {
    $input_area = $_GET['area_in'];
    $city = $city_info[$i]['name'];

    foreach ($city_info as $city) {
      if ($city['name'] === $input_area) {
        $area = '?id=' . $city['id'];
      }
    }
  }
  
````

 <br>
  3.条件により、体感気温に背景色を付与します。 
  <br><br>
  
## 操作方法
### ファーストビューにある3つのメニューバーから都市を選択します
 <img src="https://github.com/Tatsumi-I/For-php_dockerDev/blob/master/weather_shot.png" width="55%">

 - 選択肢から選ぶ
 - 文字を入力して指定する
 - 郵便番号で選択する
 <br>
 
## こだわったところ

### ユーザビリティ

<img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80" width="50%">
  
- 多様な使用を想定した機能（地域カバー率、検索方法の選択肢）
- 毎日見たくなるようなUI/UX
- jQueryやBootstrapを使用しないUI
- レスポンシブデザイン

  <br>
  
## 苦労したところ

<img src="https://github.com/Tatsumi-I/For-php_dockerDev/blob/master/weather_shot01.png" width="55%">
  
<br>

### バリデーション

入力された地域が有効なデータか、照合する機能の実装
<br>
入力された情報によってどのURLに反映すべきか分岐する機能の実装
<br>

## 今後さらに学びたいこと
<br>

  - 複数のDBとユーザーが関わるアプリ作成

  - 関数やMVCの理解（保守性や可読性）

  - サーバーサイドとインフラ両面の深い知識

<br>

## 最後に

  #### お忙しい中 最後まで読んでいただきありがとうございます。

もしご興味を持っていただけたようでしたら、以下のリンクからさらに情報を得ることもできます。
  
[コロナデータ取得アプリ](http://myfirstdeploy.s3.coreserver.jp/work/web/covid_19/covid.php)

[AIチャットボット](http://myfirstdeploy.s3.coreserver.jp/work/web/talk_API/talk.php)

[Tatsumi's portfolio](http://ec2-35-72-191-104.ap-northeast-1.compute.amazonaws.com)
