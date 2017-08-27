<?php
    // localhost/category/product
    // localhost/product.php?category=chocolate&product=chocolatename
/*
 * category = category label
 * product = product label
 *
 * $category = $_GET['category'];
 * SELECT * FROM products, category WHERE category = ? AND product_id = AND products.product_id =  ?
 * for ($i = 0;;$i++) {
 *
 *  echo '<img src="img/product/"' . $category_label . '/' . $product_label . $i . '". />'
 * }
 *
 *
 */



/*_______________________________________________________________________________ */

/*
 *  // localhost/chocolate
    // localhost/product.php?category=chocolate
 * category = category label
 *
 * > 0 1,2,3,4,5,6
 *
>
 *SELECT product.* FROM category, product WHERE category.label = ?chocolate AND product.category_id = category.category_id
 *$result = mysqli_query($con,$sql);
  while($product = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
   <div>
  echo '<img src="/product/"' . $category_label . '/' . $product_label . '.jpg" />'
  <p>echo 'RM' . $product['price']</p>
  </div
  }
 */