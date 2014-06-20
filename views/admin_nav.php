<?php $categories = new Category_collection(); ?>
<script>
	window.onload = function () {
		var count = <?=count($categories->items) + 1?>;
		var navThings = document.getElementsByClassName('dropdown')[0];

		document.getElementById('navThings').style.minWidth = document.getElementById('navThings').offsetWidth + 1 + 'px';
	}
</script>
<nav class="over">
	<div id='navThings' class="navthings">
	
		<ul>
			<?php foreach($categories->items as $nav_category): ?>
				<li>
					<a class="noDecor navHead" href="edit_category.php?id=<?=$nav_category['id']?>"><?=$nav_category['name']?></a>
					
					<?php $products = new Product_collection($nav_category['id']); ?>
					<ul>
						<?php foreach($products->items as $nav_product): ?>
							<li class="dropdown"><a href="edit_product.php?category_id=<?=$nav_category['id']?>&id=<?=$nav_product['id']?>"><?=$nav_product['name']?></a></li>
						<?php endforeach; ?>

						<li class="dropdown"><a href="create_product.php?category_id=<?=$nav_category['id']?>" class="bold">New product</a></li>
					</ul>
				</li>
			<?php endforeach; ?>
		<li ><a class="noDecor navHead" href="create_category.php" class="bold">New category</a></li>
		</ul>
	</div>
</nav>