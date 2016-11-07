<div id="product_detail">
  <h1><?php echo $title; ?></h1>

  <div class="description">
    <?php echo $product['description']; ?>
  </div>

  <div class="order">
    <form action="" method="POST">
      <input type="submit" value="Order" name="order" />
      <input type="text" value="1" name="amount" />
      * <?php echo $product['price']; ?> &euro;
    </form>
  </div>
</div>