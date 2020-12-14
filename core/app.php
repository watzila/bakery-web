<?php
class App
{
  private $controller;

  public function __construct()
  {
    $method = $_SERVER["REQUEST_METHOD"];
    $url = explode("/", rtrim($_GET["url"], "/"));
    $controllerName = "{$url[0]}Controller";

    session_start();

    switch ($method . " " . $url[0]) {
      case "GET home":
        $this->controller = new Controller();
        if (isset($_SESSION["account"])) {
          $this->controller->view2("home", ["登出", "_exitIcon"]);
        } else {
          $this->controller->view2("home", ["登入", "_enterIcon"]);
        }
        break;

      case "GET login":
        if (isset($_SESSION["account"])) {
          require_once "controllers/$controllerName.php";
          $this->controller = new LoginController();
          $this->controller->logout();
        } else {
          $this->controller = new Controller();
          $this->controller->view("login");
        }
        break;

      case "POST login":
        require_once "controllers/$controllerName.php";
        $this->controller = new LoginController();
        $this->controller->login($_POST);
        break;

      case "POST registered":
        require_once "controllers/$controllerName.php";
        $this->controller = new RegisreredController();
        $this->controller->registered($_POST);
        break;

      case "GET produce":
        //require_once "models/produce.php";
        require_once "controllers/$controllerName.php";
        $this->controller = new ProduceController();

        if (isset($_GET["p"]) != "") {
          switch ($_GET["p"]) {
            case "bread":
              $this->controller->produce(1);
              break;

            case "cake":
              $this->controller->produce(2);
              break;

            case "cookie":
              $this->controller->produce(3);
              break;
          }
        }
        $this->controller->produce();
        break;

      case "GET detail":
        require_once "controllers/$controllerName.php";
        $this->controller = new detailController();
        $this->controller->detail($_GET);
        break;

      case "POST detail":
        if (isset($_SESSION["account"])) {
          require_once "controllers/$controllerName.php";
          $this->controller = new detailController();
          $this->controller->addCart($_POST, $_SESSION["account"]);
        } else {
          header("location:login");
        }
        break;

      case "GET cart":
        require_once "controllers/$controllerName.php";
        $this->controller = new cartController();
        if (isset($_GET["p"])) {
          $this->controller->deleteItem($_GET);
        } else {
          if (isset($_SESSION["account"])) {
            $this->controller->cart($_SESSION["account"]);
          } else {
            header("location:login");
          }
        }
        break;

      default:
        header("location:home");
        break;
    }
  }
}
