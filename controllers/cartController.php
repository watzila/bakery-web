<?php

//購物車
class cartController extends Controller
{
  //購物車
  public function cart($account)
  {
    $member = $this->member("produce");
    $result = $member->cart($account);
    $this->view2("cart", $result);
  }

  //購物車項目刪除
  public function deleteItem($item)
  {
    $member = $this->member("produce");
    $result = $member->deleteItem($item["p"]);
    header("location:cart");
  }
}
