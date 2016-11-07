<?php

class product_controller
{
  public function run()
  {
    $product_id = !empty($_GET['product_id'])?$_GET['product_id']:null;

    $content = new view('product/detail');
    $content->title = 'Product detail';

    $query = "
      SELECT `product`.*
      FROM `product`
      WHERE `product`.`id` = :product_id
    ";
    $substitutions = array(
      ':product_id' => $product_id
    );
    $result = db::execute($query, $substitutions);
    $content->product = $result->fetch();
    if(!$content->product)
    {
      router::runController('error404');
      return;
    }

    if(!empty($_POST['order']))
    {
      $amount = isset($_POST['amount'])?(float)$_POST['amount']:0;
      if($amount > 0)
      {
        basket::addItem($content->product['id'], $amount, $content->product['price']);
      }  
    }

    if($content->product)
    {
      $content->title = $content->product['name'];
    }

    // main image
    $query = "
      SELECT `product_image`.*
      FROM `product_image`
      WHERE `product_image`.`product_id` = :product_id
      ORDER BY `product_image`.`order` ASC
      LIMIT 1
    ";
    $substitutions = array(
      ':product_id' => $content->product['id']
    );
    $result = db::execute($query, $substitutions);
    $main_image = $result->fetch();
    $content->main_image = $main_image;


    // all images
    $query = "
      SELECT `product_image`.*
      FROM `product_image`
      WHERE `product_image`.`product_id` = :product_id
      ORDER BY `product_image`.`order` ASC
    ";
    $substitutions = array(
      ':product_id' => $content->product['id']
    );
    $result = db::execute($query, $substitutions);
    $images = $result->fetchAll();
    if(count($images))
    {
      $gallery = new view('product/gallery');
      $gallery->product = $content->product;
      $gallery->images = $images;
      $content->gallery = $gallery;
    }
    

    presenter::present($content);
  }
}