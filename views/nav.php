<?php $categories = new Category_collection(); ?>

<nav class="over">
	<div class="navthings">
		<ul>
			<?php foreach($categories->items as $nav_category): ?>
				<li>
					<a class="noDecor navHead" href="category.php?id=<?=$nav_category['id']?>"><?=$nav_category['name']?></a>
					
					<?php $products = new Product_collection($nav_category['id']); ?>
					<ul class="topLine">
						<?php foreach($products->items as $nav_product): ?>
							<a href="product.php?id=<?=$nav_product['id']?>"><li class="dropdown"><?=$nav_product['name']?></li></a>
						<?php endforeach; ?>

					</ul>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</nav>