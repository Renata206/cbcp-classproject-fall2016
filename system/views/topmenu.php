<nav>
  <a href="<?php echo url::to(''); ?>">home</a>
  <a href="<?php echo url::to('category'); ?>">products</a>
  <a href="<?php echo url::to('contact'); ?>">contact form</a>
</nav>

<div class="cart_bar">
  In the cart: <?php echo $cart_amount; ?> items. Total price: <?php echo $cart_total; ?> Kč
</div>
