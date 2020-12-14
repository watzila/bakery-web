<?php
class Controller
{

  //資料庫
  public function member($model)
  {
    require_once "models/$model.php";
    return new $model();
  }

  //畫面顯示
  public function view($view, $result = "")
  {
    require_once "views/header.php";
    require_once "views/$view.php";
    require_once "views/footer.php";
  }

  public function view2($view, $result2 = array())
  {
    require_once "views/header.php";
    require_once "views/$view.php";
    require_once "views/footer.php";
  }
}
