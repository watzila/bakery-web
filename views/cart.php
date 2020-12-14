<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>烘培坊-購物車</title>

  <!--<link rel="stylesheet" href="css/common.css">-->
  <!--<link rel="stylesheet" href="css/style.css">-->
  <link rel="stylesheet" href="css/cart.css">
</head>

<body>
  <main>
    <div class="title">
      <ul>
        <li>編號</li>
        <li>商品</li>
        <li>數量</li>
        <li>小計</li>
        <li>變更</li>
      </ul>
    </div>

    <article>
      <form method="POST" action="" name="buyChoose">
        <?php for ($i = 0; $i < count($result2); $i++) : ?>
          <section class="item">
            <div class="itemId">
              <!--<input type="checkbox" name="ok[]" id="ok<?= $i ?>" hidden>
              <label for="ok<?= $i ?>"></label>-->
              <?= $i + 1 ?>.
            </div>
            <div class="itemDetail">
              <img src="<?= $result2[$i]["pimg"] ?>">
              <p>
                <?= $result2[$i]["pname"] ?>
              </p>
            </div>
            <div class="chooseBox">
              <a href="javascript:;" class="_reduceIcon reduce" onclick="reduce(buyChoose.count<?= $i ?>.value, <?= $i ?>, <?= $result2[$i]['price'] ?>)"></a>

              <input type="text" name="count<?= $i ?>" value="<?= $result2[$i]["count"] ?>" class="chooseAmount" onkeypress="if(event.keyCode=='13'){updatePrice(<?= $i ?>, <?= $result2[$i]['price'] ?>); return false;}">

              <a href="javascript:;" class="_addIcon add" onclick="add(buyChoose.count<?= $i ?>.value, <?= $i ?>, <?= $result2[$i]['price'] ?>)"></a>
            </div>
            <span>
              TWD $
              <i class="price">
                <?= $result2[$i]["count"] * $result2[$i]['price'] ?>
              </i>
            </span>
            <!--<div>-->
            <a href="cart?p=<?= $result2[$i]["id"] ?>" class="no">取消</a>
            <!--</div>-->
          </section>
        <?php endfor ?>

        <section class="bill">
          <table>
            <tr>
              <th>
                <i id="itemCount">
                  <?php
                  $c = 0;
                  for ($i = 0; $i < count($result2); $i++) {
                    $c += $result2[$i]["count"];
                  }
                  ?>
                  <?= $c ?>
                </i>
                項商品小計
              </th>
              <td id="billPrice">
                $
                <?php
                $c = 0;
                for ($i = 0; $i < count($result2); $i++) {
                  $c += $result2[$i]["count"] * $result2[$i]['price'];
                }
                ?>
                <?= $c ?>
              </td>
            </tr>

            <tr>
              <th>折扣</th>
              <td>-$10</td>
            </tr>

            <tr>
              <th>運費</th>
              <td>$60</td>
            </tr>

            <tr>
              <th>總計</th>
              <td class="total">
                TWD $
                <i id="totlePrice">
                  <?php
                  $c = 0;
                  for ($i = 0; $i < count($result2); $i++) {
                    $c += $result2[$i]["count"] * $result2[$i]['price'];
                  }
                  ?>
                  <?= $c + 60 - 10 ?>
                </i>
              </td>
            </tr>

            <tr>
              <!--<th></th>-->
              <td class="billBTN" colspan="2">
                <input type="submit" value="結帳">
              </td>
            </tr>
          </table>
        </section>
      </form>
    </article>
  </main>

  <script src="js/breadStore.js"></script>
</body>

</html>