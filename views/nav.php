<?php $categories = new Category_collection(); ?>

<nav>	
	<ul>
		<?php foreach($categories->items as $nav_category): ?>
			<li>
				<a class="noDecor navHead" href="category.php?id=<?=$nav_category['id']?>"><?=$nav_category['name']?></a>
				
				<?php $products = new Product_collection($nav_category['id']); ?>
				<ul>
					<?php foreach($products->items as $nav_product): ?>
						<li class="dropdown"><a href="product.php?category_id=<?=$nav_category['id']?>&id=<?=$nav_product['id']?>"><?=$nav_product['name']?></a></li>
					<?php endforeach; ?>

				</ul>
			</li>
		<?php endforeach; ?>
	</ul>

</nav>