<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>烘培坊-商品</title>

  <!--<link rel="stylesheet" href="css/common.css">-->
  <!--<link rel="stylesheet" href="css/style.css">-->
  <link rel="stylesheet" href="css/produce.css">
</head>

<body>
  <main>
    <h1>商品</h1>

    <nav class="itemSort">
      <ul>
        <li><a href="produce" class=<?= (!isset($_GET["p"])) ? "current" : '' ?>>全部</a></li>
        <li><a href="produce?p=bread" class=<?= (isset($_GET["p"]) && $_GET["p"] == 'bread') ? "current" : '' ?>>麵包</a></li>
        <li><a href="produce?p=cake" class=<?= (isset($_GET["p"]) && $_GET["p"] == 'cake') ? "current" : '' ?>>甜點</a></li>
        <li><a href="produce?p=cookie" class=<?= (isset($_GET["p"]) && $_GET["p"] == 'cookie') ? "current" : '' ?>>餅乾</a></li>
      </ul>
    </nav>

    <article>
      <?php for ($i = 0; $i < count($result2); $i++) : ?>
        <section>
          <a href="detail?p=<?= $result2[$i]["ID"] ?>" class="card"></a>
          <div class="linkIcon">
            <ul>
              <li><a href="javascript:;" class="_heartEmptyIcon" onclick="this.className='_heartIcon'"></a></li>
              <li><a href=" javascript:;" class="_shareIcon"></a></li>
            </ul>
          </div>

          <img src="<?= $result2[$i]["pIMG"] ?>">
          <div class="content">
            <h3><?= $result2[$i]["pName"] ?></h3>
            <p><?= $result2[$i]["pDescription"] ?></p>
            <div class="appraise"><?= $result2[$i]["pReview"] ?> 條評價</div>
            <div class="info">
              <span>NT<?= $result2[$i]["price"] ?></span>
              <a href="" class="buy">購買</a>
            </div>
          </div>
        </section>
      <?php endfor ?>
    </article>
  </main>
</body>

</html>