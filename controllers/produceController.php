<?php

//產品
class ProduceController extends Controller
{

  public function produce($kind = 0)
  {
    $member = $this->member("produce");
    $result = $member->items($kind);
    //var_dump($result[0]);
    $this->view2("produce", $result);
  }
}
