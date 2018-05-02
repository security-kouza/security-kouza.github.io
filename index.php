<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>阿部・ティブシ研究室 | 京都大学 大学院情報学研究科 社会情報学専攻 情報セキュリティ分野</title>
<meta name="viewport" content="width=device-width">
<meta name="copyright" content="Template Party">
<meta name="description" content="阿部・ティブシ研究室のページ">
<meta name="keywords" content="京都大学,情報学研究科,社会情報学専攻,阿部正幸,ティブシメディ,岡本龍明,真鍋義文,情報セキュリティ,暗号,cryptography">
<link rel="stylesheet" href="css/style.css">
<link href="css/style-s.css" rel="stylesheet" type="text/css" media="only screen and (max-width:480px)">
<link href="css/style-m.css" rel="stylesheet" type="text/css" media="only screen and (min-width:481px) and (max-width:800px)">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<style>
#main h1 {
	background: #1a1a1a url(images/bg1.png);
}
nav#mainmenu ul li a {
	background: #000 url(images/arrow1.png) no-repeat 10px center;
}
</style>
<![endif]-->
<script type="text/javascript" src="js/openclose.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script>
$(function(){
  /*
  $("#menu").load("base/menu.html");
  $("#access").load("base/access.html");
  $("#footer").load("base/footer.html");
  */
});
</script> 
</head>

<body>

<div id="container">

<header id="header">
  <h1><a href="index.html"><img src="images/logo.png"  width="230"  alt=""></img></a></h1>
</header>

<div id="contents">

<div id="main">

<section>
<h1>阿部・ティブシ研究室</h1>
<p>
情報セキュリティ分野は，京都大学とNTTとの協力・連携のもとで発足し，連携分野という形で京都大学内に設置されております．
研究指導はNTTセキュアプラットフォーム研究所の阿部正幸客員教授・ティブシメディ客員准教授が行います．
本研究室は，社会情報学専攻の連携分野で，広域情報ネットワーク分野（基幹分野：石田研究室），市場・組織情報論分野（野村総合研究所連携分野）と共に，社会情報ネットワーク講座を構成しています．<br>
</p>
</section>

<section>
<h1>研究内容</h1>
<p>
<strong class="color1">■安全なネットワーク社会を暗号で実現する</strong><br>
インターネットを用いた電子決済やオークションなどの電子取引さらにネット税務申告などの電子政府機能が普及しつつある現在，ネットワークサービスの安全性を確保することがますます必要となってきています.
このような安全性を保証する技術としては，単に盗聴を防ぐ秘匿技術のみならず，通信相手を認証しデータの正当性（改ざんされていないこと）を保証する電子署名やプライバシーを保証しつつ高度なネットワークサービスを提供する暗号プロトコルなどを総合した技術・理論体系としての現代暗号が活発に研究され発展しています．<br>
本講座では，現代暗号で中心的な役割を果たす公開鍵暗号や電子マネー，電子投票など各種暗号応用技術に関して，その安全性の理論的解明，新たな暗号プロトコルの提案,実用システムへの適用法やネットワーク社会での有効性等を探求します.<br>
<center><img src="images/overview.png" width="450" /></center>
</p>
</section>

<section>
<h1>研究生活</h1>
<p>
普段の生活は,広域情報ネットワーク分野の石田・松原研究室と一緒に行っています．
</p>
</section>


</div>
<!--/main-->

<?php include("base/menu.html") ?>
<?php include("base/access.html") ?>


<p id="pagetop"><a href="#">↑ PAGE TOP</a></p>

</div>
<!--/contents-->

<?php include("base/footer.html") ?>

</div>
<!--/container-->

<script type="text/javascript">
// 表示の幅で設定・PCはウィンドウサイズを反映 */
if (OCwindowWidth() < 480) {
	open_close("newinfo_hdr", "newinfo");
}
</script>
</body>
</html>
