<div class="main">
	<h2><?=$title?></h2>

	<?=$form->open()?>

		<div class="row">
			<?=$form->label('name','Name:')?>
			<?=$form->input('text','name', $page->name)?>
		</div>

		<div class="row">
			<?=$form->
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