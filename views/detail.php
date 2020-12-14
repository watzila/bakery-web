<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>烘培坊</title>

  <!--文字圖標-->
  <!--<link rel="stylesheet" href="css/common.css">-->
  <!--<link rel="stylesheet" href="css/style.css">-->
  <link rel="stylesheet" href="css/detail.css">
</head>

<body>
  <!--商品-->
  <main>
    <article class="produce">
      <!--預覽圖-->
      <section>
        <div class="previewIMG">
          <img src="<?= $result2["pIMG"] ?>" alt="">
        </div>

        <!--<ul class="itemList">
          <li><img src="https://picsum.photos/100" alt=""></li>
          <li><img src="https://picsum.photos/100" alt=""></li>
          <li><img src="https://picsum.photos/100" alt=""></li>
        </ul>-->
      </section>

      <!--商品購買-->
      <section class="produceInfo">
        <h3><?= $result2["pName"] ?></h3>

        <div class="price">TWD $<?= $result2["price"] ?></div>

        <div class="tag">
          <ul>
            <li>#招牌</li>
            <li>#蛋奶素</li>
            <li>#午茶時光</li>
          </ul>
        </div>

        <p class="introduction">
          <?= $result2["pDescription"] ?>
        </p>

        <div class="buyInfo">
          <p>運送&付款</p>
          <div>
            <dl>
              <dt><i class="_shipIcon"></i>運送方式：</dt>
              <dd>實體門市取貨、黑貓低溫宅配</dd>
            </dl>

            <dl>
              <dt><i class="_coinIcon"></i>付款方式：</dt>
              <dd>當面付款、信用卡、ATM</dd>
            </dl>
          </div>
        </div>

        <!--訂購數量-->
        <form method="POST" action="detail" class="buyChoose" name="buyChoose">
          <span>數量：</span>
          <div class="chooseBox">
            <a href="javascript:;" class="_reduceIcon reduce" onclick="reduce(buyChoose.count.value)"></a>
            <input type="text" name="count" value="1" class="chooseAmount" id="chooseAmount" autocomplete="off" onkeypress="if(event.keyCode=='13'){return false}">
            <a href="javascript:;" class="_addIcon add" onclick="add(buyChoose.count.value)"></a>
          </div>
          <input type="hidden" name="pid" value="<?= $result2["ID"] ?>">
          <input type="submit" value="加入購物車">
        </form>
      </section>
    </article>

    <!--商品介紹-->
    <article class="description">
      <section>
        <div>
          <h5>商品詳情</h5>
          <span>PRODUCT DETAILS</span>
        </div>

        <table>
          <tr>
            <th>品名</th>
            <td>麵包</td>
          </tr>

          <tr>
            <th>淨重</th>
            <td>60g±5%/個</td>
          </tr>

          <tr>
            <th>規格</th>
            <td>單包裝</td>
          </tr>

          <tr>
            <th>使用食材</th>
            <td>北海道Luxe乳酪、鮮奶、麵粉、新鮮雞蛋、無鹽奶油、玉米粉、細砂糖、馬達加斯加香草醬、蛋白霜</td>
          </tr>

          <tr>
            <th>葷素</th>
            <td>蛋奶素</td>
          </tr>

          <tr>
            <th>保存方式</th>
            <td>冷凍</td>
          </tr>

          <tr>
            <th>保存期限</th>
            <td>常溫1日、冷藏3日、冷凍7日</td>
          </tr>

          <tr>
            <th>過敏原提示</th>
            <td>奶製品、蛋、小麥</td>
          </tr>

          <tr>
            <th>取貨方式取貨方式</th>
            <td>黑貓冷鏈宅配、門市自取</td>
          </tr>
        </table>
      </section>
    </article>

    <!--推薦-->
    <aside class="recommend">
      <h5>你可能有興趣：</h5>
      <div class="cardBox">
        <a href="javascript:;" class="_arrowLeftIcon arrowL"></a>
        <div class="recommendCard">
          <a href=""></a>
          <img src="img/bread1.jpg">
          <div class="text">
            <h5>紅豆麵包</h5>
            <span>TWD $50</span>
          </div>
        </div>

        <div class="recommendCard">
          <a href=""></a>
          <img src="img/cookie1.jpg">
          <div class="text">
            <h5>蝴蝶蘇</h5>
            <span>TWD $10</span>
          </div>
        </div>

        <div class="recommendCard">
          <a href=""></a>
          <img src="img/cake1.jpg">
          <div class="text">
            <h5>檸檬蛋糕</h5>
            <span>TWD $100</span>
          </div>
        </div>

        <a href="javascript:;" class="_arrowRightIcon arrowR"></a>
      </div>
    </aside>

    <!--評論區-->
    <div class="comment">
      <h5>評論</h5>
      <div><?= $result2["pReview"] ?> 評論</div>
      <ul>
        <li></li>
      </ul>
      <form>
        <textarea placeholder="新增回應..."></textarea>
        <input type="submit" value="發布">
      </form>
    </div>
  </main>

  <script src="js/breadStore.js"></script>
</body>

</html>