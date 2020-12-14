<?php
$isMember = array();
if (isset($_SESSION["account"])) {
  $isMember = ["登出", "_exitIcon"];
} else {
  $isMember = ["登入", "_enterIcon"];
}
?>

<head>
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<header>
  <div class="logo">
    <a href="home"><img src="img/logo.png" title="首頁"></a>
  </div>

  <nav class="home">
    <ul>
      <li><a href="home">首頁</a></li>
      <li><a href="">促銷活動</a></li>
      <li><a href="produce">商品</a></li>
      <li><a href="home#about">關於</a></li>
      <li><a href="#connect">聯絡我們</a></li>
      <li class="member"><a href="login"><?= $isMember[0] ?><i class="<?= $isMember[1] ?>"></i></a></li>
      <!--<li class="cart"><a href="cart"><i class="_cartIcon"></i></a></li>-->
    </ul>
  </nav>
</header>

<div class="floatCart"><a href="cart"><i class="_cartIcon"></i></a></div>