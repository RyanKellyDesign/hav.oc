<div class="cartContainer fullHeightContainer">
	
	<table>
		<tr class="tableHeads">
			<th class="lightColumn" width="250px">Image</th>
			<th class="darkColumn" width="130px">Name</th>
			<th class="lightColumn" width="100px">Price</th>
			<th class="darkColumn" width="170px">Quantity</th>
			<th class="lightColumn" width="100px">Total Price</th>
			<th class="darkColumn" width="100px">Remove Item</th>
		</tr>
		<tr>
			<td class="grey" colspan="6"></td>
		</tr>

		<?php if(count($cart_products)): ?>
		<?php foreach($cart_products as $product): ?>

		<tr class="cartProducts">
			<td class="lightColumn"><div class="cartImage" ><img class="withShadow" src="<?=$product['image']?>"></div></td>
			<td class="darkColumn"><?=$product['name']?></td>
			<td class="lightColumn">$<?=$product['price']?></td>
			<td class="darkColumn">
				
				<?=Form::open('update_quantity.php')?>
					<?=Form::hidden('id', $product['id'])?>
					<?=Form::number('quantity', $product['quantity'], 'min="1"')?>
					<?=Form::submit('Save')?>
				<?=Form::close()?>				
			</td>
			<td class="lightColumn">$<?=$product['total_price']?></td>
			<td class="darkColumn"><a href="remove_from_cart.php?id=<?=$product['id']?>">Remove</a></td>
		</tr>
		<tr>
			<td class="grey" colspan="6"></td>
		</tr>

		<?php endforeach; ?>
	<?php else: ?>
		<td colspan="6">There's nothing in the cart</td>
	<?php endif; ?>
	</table>

	<p class="total">Grand Total: $<?=$grand_total?></p>

</div>