<?php
global $account;
echo $account;
?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>烘培坊-登入註冊</title>

  <!--<link rel="stylesheet" type="text/css" href="css/common.css">-->
  <!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
  <main>
    <div class="container">
      <div class="page">
        <form class="current" method="POST" action="login">
          <h1>登入</h1>
          <div class="otherLogin">
            <a href="" class="_fbIcon"></a>
            <a href="" class="_googleIcon"></a>
          </div>
          <p>or use your account</p>

          <p class="error"><?= $result ?></p>

          <!--<span>帳號</span>-->
          <input type="text" name="account" placeholder="Account" autocomplete="off" required>
          <!--<span>密碼</span>-->
          <input type="password" name="password" placeholder="Password" autocomplete="off" required>

          <a href="" class="forget">忘記密碼?</a>

          <input type="submit" value="登入">
        </form>
      </div>

      <div class="page">
        <form class="" method="POST" action="registered">
          <h1>註冊</h1>

          <!--<span>暱稱</span>-->
          <input type="text" name="username" placeholder="Username" autocomplete="off" required>

          <!--<span>帳號</span>-->
          <input type="text" name="account" placeholder="Account" autocomplete="off" required>

          <!--<span>密碼</span>-->
          <input type="password" name="password" placeholder="Password" autocomplete="off" required>

          <input type="email" name="email" placeholder="Email" autocomplete="off" required>

          <div class="ruleAgree">
            <input type="checkbox" name="rule">
            <span>同意</span>
          </div>

          <input type="submit" value="註冊">
        </form>
      </div>

      <div class="changePage">
        <div class="change current">
          <p>沒有帳號嗎?</p>
          <button>立即註冊</button>
        </div>

        <div class="change">
          <p>歡迎回來</p>
          <button>立即登入</button>
        </div>
      </div>
    </div>
  </main>

  <script src="js/breadStore.js"></script>
</body>

</html>