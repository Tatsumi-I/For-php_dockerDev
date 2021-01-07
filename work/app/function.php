<?php
function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}



$apiKey = 'e446264b25946d417b1277c00910b88e'; //weather用


$talk_apiKey = 'DZZlkvEYj5fcbvCwPozV96pHEpx4nbNe';//talk用

$policy = 
'
<p>当サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を使用しています。「Googleアナリティクス」はデータの収集のためにCookieを使用しています。このデータは匿名で収集されており、個人を特定するものではありません。</p>

<p>Cookieを無効にすることで、情報の収集を拒否することが出来ます。お使いのブラウザの設定をご確認ください。</p>

<p>この規約に関しての詳細は<a href="https://marketingplatform.google.com/about/analytics/terms/jp/">Googleアナリティクスサービス利用規約</a>のページや<a href="https://policies.google.com/technologies/ads?hl=ja">Googleポリシーと規約ページ</a>をご覧ください。</p>
<br><br>
';