# このページでは私の成果物の一例をご紹介致します。
<br>
その他成果物のリンク先も文末にてご紹介させていただいておりますので、ぜひ御覧ください。


<br>


# 作例1）.天気予報アプリの詳細
<img src="https://github.com/Tatsumi-I/For-php_dockerDev/blob/master/weather.gif" width="30%">＊実際はこんなに遅くありません。
<br>[使ってみる](http://myfirstdeploy.s3.coreserver.jp/work/web/weather_API/weather.php)
<br>

## 機能概要

  - 体感気温に特化した天気予報
  - 世界中の20万以上の地域を指定可能
  - 最大5日先まで参照可能

## 制作の背景と目的

  ### 「どうすべきかを知っている」ことはQOLや幸福度に影響します。
<img src="https://images.unsplash.com/photo-1484627147104-f5197bcd6651?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80" width="50%">

そしてこれからの時代において

  - 情報をどう活用するか
  - 情報は生活をどう変えるか
  
<br>
これらは重要な考え方だと考えています。

**ただ天気が分かる**ではなく、**それでどうすればいいか**
<br>
を可視化できるようなアプリを作りたいと考えて作成しました。
<br>
## それを実現するために使用している技術
<br>
<img src="https://images.unsplash.com/photo-1599507593362-50fa53ed1b40?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDl8fHBocHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" width="50%">
<br>

  ### PHP,Web_API,レスポンシブデザイン

<br>

  ### その他：Sass,CSSanimation,JSON,HTML5,CSS3,Google_Analytics
  
## 機能詳細  
  **データの取得**  
 1.Open Weather からJSONで提供されているデータをAPIで取得します。  
 2.ユーザーの選択に応じてURLに反映させ、必要な情報を表示します。  
  **判定**  
 1.入力されたデータが適正か判断し、エラーメッセージが表示され、デフォルトに指定されている名古屋の天気が表示されます。  
 2.入力されたデータが適正なら、多次元配列のJSONからデータを取り出して表示します。  
 3.条件により、体感気温に背景色を付与します。  
  
## 操作方法
 **ファーストビューにある3つのメニューバーから都市を選択します**
 <br>
 <img src="https://github.com/Tatsumi-I/For-php_dockerDev/blob/master/weather_shot.png" width="55%">

 3通りの方法で検索できます**
 - 選択肢から選ぶ
 - 文字を入力して指定する
 - 郵便番号で選択する
 
## こだわったところ
  
<img src="https://images.unsplash.com/photo-1523726491678-bf852e717f6a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80" width="50%">
  
- 多様な使用を想定した機能（地域カバー率、検索方法の選択肢）
- 毎日見たくなるようなUI/UX
- jQueryやBootstrapを使用しないUI
- レスポンシブデザイン
  
## 苦労したところ

<img src="https://github.com/Tatsumi-I/For-php_dockerDev/blob/master/weather_shot01.png" width="55%">
  
  ### 文字列の判定

<br>
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

  #### お忙しい中、最後まで読んでいただきありがとうございます。

もしご興味を持っていただけたようでしたら、以下のリンクからさらに情報を得ることもできます。
  
[コロナデータ取得アプリ](http://myfirstdeploy.s3.coreserver.jp/work/web/covid_19/covid.php)

[AIチャットボット](http://myfirstdeploy.s3.coreserver.jp/work/web/talk_API/talk.php)

[コメントCRUDアプリ](http://myfirstdeploy.s3.coreserver.jp/work/web/covid_19/covid.php)

[自己紹介サイト](http://myfirstdeploy.s3.coreserver.jp/work/web/chara.php)

  
