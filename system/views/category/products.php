<h2>Products</h2>
<ul ckass="list">
  
  <?php foreach($products as $product) : ?>

    <li>
      <a href="<?php echo url::to('product', array('product_id' => $product['id'])); ?>"><?php echo $product['name']; ?></a>
      <span class="price"><?php echo $product['price']; ?> &euro;</span>
    </li>

  <?php endforeach; ?>


</ul>
