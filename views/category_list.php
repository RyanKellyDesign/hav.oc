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
<<<<<<< HEAD
	<? endforeach; ?>
</div>
=======
		<div class='CatagoryDesc'>
			<?=$product['description']?>
		</div>
	</div>
<? endforeach; ?>
>>>>>>> 8c5c426550a976b71452ea419eb8b152a74f12e9
