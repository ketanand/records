<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<title>Movies.com <?php echo $product['movie_title']; ?></title> 
<body>
	<div id="product-details">
		<h3>Movie : <?php echo $product['movie_title']; ?></h3>
		<br />
		<b><u>Details:</u></b><br/>
		<div> Category:     <i><?php echo $product['category']; ?></i></div>
		<div> Sub Category:     <i><?php echo $product['sub_category']; ?></i></div>
		<div> Price:     Rs. <i><?php echo $product['price']; ?></div>
		<div> Shipping Duration:     <i><?php echo $product['shipping_duration']; ?></i></div>
	</div>
	<?php if (count($related) > 0): ?>
	<div id="related-products">
		<br /><b>Other Versions:</b>
		<ul>
		<?php foreach ($related as $prod): 
			if ($prod['product_id'] == $product['product_id'])
				continue;
		?>
			<li>
				<a href="http://www.movies.com/movies/product/<?php echo $prod['product_id']; ?>"><?php echo $prod['movie_title']; ?><span></span>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
	<?php endif; ?>
	
</body>
</head> 
</html>
