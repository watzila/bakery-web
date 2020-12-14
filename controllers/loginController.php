<?php
//登入
class LoginController extends Controller
{

  //public function __construct(){
  //  $method = $_SERVER["REQUEST_METHOD"];
  //  $url = explode("/", rtrim($_GET["url"], "/"));
  //  //echo $method,$url[0];

  //  switch($method." ".$url[0]){
  //    case "GET login":
  //      $result = "";
  //      require_once "views/login.php";
  //    break;

  //    case "POST login":
  //      $this->login($_POST);
  //    break;

  //    default:
  //      header("location:login");
  //    break;
  //  }
  //}
  //登入
  public function login($memberInfo)
  {
    $member = $this->member("member");
    $result = $member->checkLogin($memberInfo["account"], $memberInfo["password"]);
    $this->isMember($result, $memberInfo);
  }

  function isMember($result, $memberInfo)
  {
    if ($result != "帳號或密碼錯誤!") {
      $_SESSION["account"] = $memberInfo["account"];
      $this->view2("home", ["登出", "_exitIcon"]);
      //$this->view("login", $result);
    } else {
      $this->view("login", $result);
    }
  }

  //登出
  public function logout()
  {
    session_unset();
    session_destroy();
    header("location:home");
  }
}
