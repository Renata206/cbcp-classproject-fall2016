<h2>Browse our products</h2>
<ul>
  <li>
     <a href="index.php?page=category">All product categories</a>
  </li>
  <?php foreach($categories as $category) : ?>
    <li>
      <a href="<?php echo url::to('category', array('category_id' => $category['id'])); ?>"><?php echo $category['name']; ?></a>
    </li>
  <?php endforeach; ?>
</ul>