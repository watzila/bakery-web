<?php
  //註冊
  class RegisreredController extends Controller{

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

    public function registered($memberInfo){
      $member = $this->member("member");
      $result = $member->registered($memberInfo["account"], $memberInfo["password"]);
      header("location:login");
      //$this->view("login", "成功");
      //$this->isMember($result);
    }
    
    function isMember($result){
      if($result != "帳號或密碼錯誤!"){
        //$this->view("home");
      }else{
        $this->view("login", $result);
      }
    }
  }
?>