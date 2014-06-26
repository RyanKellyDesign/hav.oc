<div class="fullHeightContainer cartContainer">
	<h2><?=$title?></h2>

	<?=$form->open_upload()?>

		<div class="row">
			<?=$form->label('name','Name:')?>
			<?=$form->input('text','name', $product->name)?>
		</div>

		<div class="row">
			<?=$form->label('productImage','Image:')?>
			<?=$form->max_file_size()?>
			<?=$form->file()?>
			<p><img class="currentImage" src="<?=$product->image?>"></p>
		</div>

		<div class="row">
			<?=$form->label('description', 'Description:')?>
			<?=$form->textarea('description', $product->description)?>
		</div>
		
		<div class="row">
			<?=$form->label('price','Price:')?>
			<div class="inline">$</div><?=$form->number('price', $product->price,'min="1"')?>
		</div>

		<div class="row">
			<?=$form->submit('Done')?>
				<?php
					if($_GET['id']){
						echo "<a class='blackRoundedButton' href='delete_product.php?id=".$_GET['id']."'>Delete</a>";
					};
				?>
		</div>
	<?=$form->close()?>
</div>