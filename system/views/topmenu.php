<nav>
  <a href="<?php echo url::to(''); ?>">home</a>
  <a href="<?php echo url::to('category'); ?>">products</a>
  <a href="<?php echo url::to('contact'); ?>">contact form</a>
</nav>

<div class="basket">
  <a href="<?php echo url::to('basket'); ?>"><img src="img/cart.png" /> In the cart: <?php echo $basket_count.($basket_count==1?' item':' items'); ?> (<?php echo $basket_price; ?> &euro;)</a>
</div>