<div class="products">
	<?php foreach ($currentCategory->items as $product): ?>
		<div class='productContainer'>
			<img src="<?=$product['image']?>">
			<div class='catagoryTitle'>
				<?=$product['name']?>
			</div>
			<div class='productDesc'>
				<?=$product['description']?>
			</div>
		</div>
	<? endforeach; ?>
</div>