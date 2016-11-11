<nav>
  <a href="<?php echo url::to(''); ?>">home</a>
  <a href="<?php echo url::to('category'); ?>">products</a>
  <a href="<?php echo url::to('contact'); ?>">contact form</a>
</nav>

<div class="cart_bar">
  Cart: <?php echo $cart_amount; ?> items, <?php echo number_format($cart_total, 0, ',', ' '); ?> Kč
</div>
