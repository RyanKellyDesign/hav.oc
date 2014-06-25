<div class="products fullHeightContainer">
	<?php foreach ($currentCategory->items as $product): ?>
		<div class='productContainer'>
			<a href="product.php?id=<?=$product['id']?>"><img src="<?=$product['image']?>"></a>
			<div class='productInfoinCat'>
				<p class="productNameinCat">
					<?=$product['name']?>
				</p> 
				<p class="productDescinCat">
					<?=$product['description']?>
				</p> 
			</div>
		</div>
	<? endforeach; ?>
</div>