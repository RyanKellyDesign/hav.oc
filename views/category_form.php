<div class="fullHeightContainer cartContainer">
	<h2><?=$title?></h2>

	<?=$form->open()?>

		<div class="row">
			<?=$form->label('name','Name:')?>
			<?=$form->input('text','name', $category->name)?>
		</div>

		<div class="row">
			<?=$form->submit('Done')?>
				<?php
					if($_GET['id']){
						echo "<a class='blackRoundedButton' href='delete_category.php?id=".$_GET['id']."'>Delete</a>";
					};
				?>
		</div>
	<?=$form->close()?>
</div>