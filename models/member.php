<?php
  class Member{
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "chat";

    //登入
    public function checkLogin($account, $password){
      $dblink = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
      if(!$dblink) die("no");
      
      $dblink->query("SET NAMES 'utf8'");

      $sql = <<<msg
        select `member` 
        from `mymember` 
        where `account` = "$account" and `password` = "$password";
      msg;

      $result = $dblink->query($sql);

      if($row = $result->fetch_assoc()){
        //echo $row["member"];
        return $row["member"];
      }else{
        return "帳號或密碼錯誤!";
      }
    }

    //註冊
    public function registered($newMember){
      $dblink = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
      if(!$dblink) die("no");

      $dblink->query("SET NAMES 'utf8'");

      $sql = <<<msg
        insert into `mymember`(
          `member`, `account`, `password`, `email`
        )
        values(
          "{$_POST["username"]}", "{$_POST["account"]}", "{$_POST["password"]}", "{$_POST["email"]}"
        );
      msg;

      $dblink->query($sql);
    }
  }
