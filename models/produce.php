<?php
//$aa = new Produce();

class Produce
{
  private $dbhost = "localhost";
  private $dbuser = "root";
  private $dbpass = "";
  private $dbname = "breadstore";

  public $info = array();

  //產品
  public function items($kind)
  {
    $dblink = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
    if (!$dblink) die("no");

    $dblink->query("SET NAMES 'utf8'");

    $sql = $this->search($kind);

    $result = $dblink->query($sql);

    while ($row = $result->fetch_assoc()) {
      $this->info[] = $row;
      //$this->info[]="1";
    }
    return $this->info;
    //var_dump($this->info);
  }

  private function search($kind)
  {
    if ($kind != 0) {
      $sql = <<<msg
        select *
        from `produce`
        where `kindNumber`={$kind};
        msg;
    } else {
      $sql = <<<msg
        select *
        from `produce`;
        msg;
    }
    return $sql;
  }

  //產品購買
  public function itemDetail($id)
  {
    $dblink = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
    if (!$dblink) die("no");

    $dblink->query("SET NAMES 'utf8'");

    $sql = <<<msg
        select *
        from `produce`
        where `ID`={$id["p"]};
        msg;

    $result = $dblink->query($sql);
    return $result->fetch_assoc();
  }

  //加入購物車
  public function addCart($info, $account)
  {
    $dblink = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
    if (!$dblink) die("no");

    $dblink->query("SET NAMES 'utf8'");

    $sql = <<<msg
        insert into `cart`(
          `pid`, `count`, `account`
        )
        values(
          "{$info["pid"]}", "{$info["count"]}", "{$account}"
        );
      msg;

    $dblink->query($sql);
  }

  //購物車
  public function cart($account)
  {
    $dblink = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
    if (!$dblink) die("no");

    $dblink->query("SET NAMES 'utf8'");

    $sql = <<<msg
      select c.`id`, p.`pname`, p.`price`, `count`, p.`pimg`
      from `cart` as c,`produce`as p
      where `account`="{$account}" and c.`pid`=p.id;
      msg;

    $result = $dblink->query($sql);
    while ($row = $result->fetch_assoc()) {
      $this->info[] = $row;
      //$this->info[]="1";
    }
    return $this->info;
  }

  //購物車項目刪除
  public function deleteItem($item)
  {
    $dblink = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
    if (!$dblink) die("no");

    $dblink->query("SET NAMES 'utf8'");

    $sql = <<<msg
      delete
      from `cart`
      where `id`="{$item}";
      msg;

    $dblink->query($sql);
  }
}
