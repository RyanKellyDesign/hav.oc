<?php foreach ($currentCategory->items as $product): ?>
	<div class='productContainer'>
		<img src="<?=$product['image']?>">
		<div class='catagoryTitle'>
			<?=$product['name']?>
		</div>
		<div class='CatagoryDesc'>
			<?=$product['description']?>
		</div>
	</div>
<? endforeach; ?>