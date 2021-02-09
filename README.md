# 天気予報アプリの詳細
<img src="https://github.com/Tatsumi-I/For-php_dockerDev/blob/master/weather.gif" width="30%">


## 概要
### 体感気温に特化した天気予報
### 世界中の2万以上の地域を指定可能
### 最大5日先まで参照可能

<img src="https://github.com/Tatsumi-I/For-php_dockerDev/blob/master/weather_shot03.png" width="30%">

  
## 制作の背景と目的

### 「何を知っているか」はQOLや幸福度に影響します。
そしてこれからの時代は
#### 情報をどう活用するか
#### 情報は生活をどう変えるか
これらは重要な考え方だと考えています。

それで、**ただ天気がわかる**ではなく、**それでどうすればいいか**
を可視化できるようなアプリを作りたいと考えて作成しました。

<img src="https://github.com/Tatsumi-I/For-php_dockerDev/blob/master/weather_shot01.png" width="30%">

## それを実現するために選んだもの
### PHP, Web API, レスポンシブデザイン
### その他：Sass, CSSanimation, JSON, HTML5, CSS3, Google Analytics

## 機能詳細
**データの取得**
 1.Open Weather からJSONで提供されているデータをAPIで取得します。
 2.ユーザーの選択に応じてURLに反映させ、必要な情報を表示します。
 **判定**
 1.入力されたデータが適正か判断し、エラーメッセージが表示され、デフォルトに指定されている名古屋の天気が表示されます。
 2.入力されたデータが適正なら、多次元配列のJSONからデータを取り出して表示します。
      2-1.条件により、体感気温に背景色を付与します。

## 操作方法
 **ファーストビューにある3つのメニューバーから都市を選択します**
 3通りの方法で検索できます**
 - 選択肢から選ぶ
 - 文字を入力して指定する
 - 郵便番号で選択する
 <img src="https://github.com/Tatsumi-I/For-php_dockerDev/blob/master/weather_shot.png" width="30%">

## こだわったところ


##　苦労したところ


## さらに学びを深めたいこと
### 
### 
### 

##最後に
### 

