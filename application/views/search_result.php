<?php
if ($result): ?>

<b>We have found <?php echo count($result) ?> Results.</b> <br /><br />

<table border="1">
	<tr>
		<th>Movie Title</th>
		<th>Category</th>
		<th>Sub Category</th>
		<th>Price</th>
		<th>Shipping Duration</th>
	</tr>
<?php foreach ($result as $row): ?>
	<?php 
		if (isset($displayed[$row['product_id']])) {
			continue;
		}
	?>		
	<tr>
		<td><a href="http://www.movies.com/movies/product/<?php echo $row['product_id']; ?>" ><?php echo $row['movie_title']; ?></a></td>
		<td><?php echo $row['category']; ?></td>
		<td><?php echo $row['sub_category']; ?></td>
		<td><?php echo $row['price']; ?></td>
		<td><?php echo $row['shipping_duration']; ?></td>
	</tr>
<?php	$displayed[$row['product_id']] = true; 
	endforeach; ?>
</table>
<?php else: ?>

Sorry We found no result. Click <a href="/" >here</a> to search again.

<?php endif; ?>

