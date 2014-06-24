<script>
	window.onload = function () {
		document.getElementById('quantity').onblur = function () {
			var price = <?=$currentProduct->price?>;
			var num = event.target.value;

			document.getElementById('totalPrice').innerHTML = "Total Price: $" + num * price;
		}
	}
</script>

<div class='product'>
	<img src="<?=$currentProduct->image?>">
	<div class='productTitle'>
		<?=$currentProduct->name?>
	</div>
	<div class='productDesc'>
		<?=$currentProduct->description?>
	</div>
	<div class='price'>
		$<?=$currentProduct->price?>
	</div>
	<div class='buyOpts'>
		<?=Form::open('../public/add_to_cart.php')?>
			<?=Form::hidden('id', $_GET['id']);?>
			<div class="row">
				<?=Form::label('quantity', 'Quantity:')?>
				<?=Form::number('quantity', 0)?>
			</div>
			<div id="totalPrice"></div>

			<div class="row">
				<?=Form::submit()?>
			</div>

		<?=Form::close()?>
	</div>
</div>
