<?php

class basket_controller
{
  public function run()
  {
    $content = new view('basket/detail');
    $content->title = 'Basket';

    $product_ids = basket::getProductIds();

    $content->items = basket::getItems();
    $query = "
      SELECT `product`.*
      FROM `product`
      WHERE `product`.`id` IN (".join(", ", $product_ids).")
      ORDER BY `product`.`id` DESC
    ";
    $result = db::query($query);
    $products = array();
    foreach($result as $row)
    {
      $products[$row['id']] = $row;
    }
    $content->products = $products;

    presenter::present($content);
  }
}