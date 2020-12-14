<?php

//產品
class detailController extends Controller
{

  public function detail($id)
  {
    $member = $this->member("produce");
    $result = $member->itemDetail($id);
    //var_dump($result);
    $this->view2("detail", $result);
  }

  public function addCart($info, $account)
  {
    $member = $this->member("produce");
    $member->addCart($info, $account);

    header("location:detail?p={$info["pid"]}");
  }
}
