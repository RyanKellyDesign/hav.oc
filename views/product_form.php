<div class="main">
	<h2><?=$title?></h2>

	<?=$form->open()?>

		<div class="row">
			<?=$form->label('name','Name:')?>
			<?=$form->input('text','name', $page->name)?>
		</div>

		<div class="row">
			<?=$form->label('productImage','Image:')?>
			<?=$form->max_file_size()?>
			<?=$form->file()?>
		</div>

		<div class="row">
			<?=$form->label('description', 'Description:')?>
			<?=$form->textarea('description')?>
		</div>
		
		<div class="row">
			<?=$form->label('price','Price:')?>
			<div class="inline">$</div><?=$form->number('price','1','min="1"')?>
		</div>

		<div class="row">
			<?=$form->submit()?>
				<?php
					if($_GET['id']){
						echo "<a class='blackRoundedButton' href='delete_page.php?id=".$_GET['id']."'>Delete</a>";
					};
				?>
		</div>
	<?=$form->close()?>
</div>