<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>烘培坊-首頁</title>

  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/home.css">
</head>

<body>
  <main>
    <article class="homePage">
      <div class="homeIMGBox" style="transform: translateX(0%)">
        <img src="img/home1.jpg">
        <img src="img/home2.jpg">
        <img src="img/home3.jpg">
      </div>
      <span class="_arrowLeftIcon arrowL"></span>
      <span class="_arrowRightIcon arrowR" onclick="carouselIMG()"></span>
    </article>

    <!--<article>
      <div>
        <img src="https://picsum.photos/500/300">
      </div>
    </article>-->

    <!--今日推薦-->
    <article class="today">
      <ul>
        <li>
          <div class="todayText">
            <img src="img/clock.png"></img>
            <h2>今日推薦</h2>
          </div>
        </li>

        <li>
          <a href=""></a>
          <h3>菠蘿麵包</h3>
          <img src="img/today1.jpg" class="food">
        </li>

        <li>
          <a href=""></a>
          <h3>核桃餅乾</h3>
          <img src="img/today2.jpg" class="food">
        </li>

        <li>
          <a href=""></a>
          <h3>雙倍甜甜圈</h3>
          <img src="img/today3.jpg" class="food">
        </li>
      </ul>
    </article>

    <!--商品-->
    <article class="produce">
      <h2>商品</h2>
      <a href="produce" class="more">更多商品 <span class="_arrowRightIcon"></span></a>
      <ul>
        <li>
          <div>
            <a href="produce" class="c"></a>
            <h3>麵包</h3>
            <span>更多 <i class="_arrowRightIcon"></i></span>
          </div>
        </li>

        <li>
          <div>
            <a href="produce" class="c"></a>
            <h3>麵包</h3>
            <span>更多 <i class="_arrowRightIcon"></i></span>
          </div>

        </li>

        <li>
          <div>
            <a href="produce" class="c"></a>
            <h3>麵包</h3>
            <span>更多 <i class="_arrowRightIcon"></i></span>
          </div>
        </li>
      </ul>
    </article>

    <!--關於我們-->
    <article class="about" id="about">
      <img src="img/about.jpg">
      <h4>關於我們</h4>
      <h1>烘培坊</h1>
      <pre>

          十多坪的空間窗明几淨，訴求簡單樸實的「烘培坊」
              以多達多種口味變化的麵包甜點，
        每分每秒都提供顧客最新鮮、最多選擇的產品，
                  店裡不時有顧客提著褐色的提袋，帶著笑容走出來。
                「烘培坊」不只賣的是麵包甜點，而是一種悠閒。
        </pre>
      <a href="home" class="readMore">READ MORE ...</a>
    </article>
  </main>
  <script src="js/breadStore.js"></script>
</body>

</html>