<div class="main">
	<h2>Login</h2>
	
	<?=Form::open()?>

		<div class="row">
			<?=Form::label('username','Username:')?>
			<?=Form::input('text','username')?>
		</div>

		<div class="row">
			<?=Form::label('password','Password:')?>
			<?=Form::input('password', 'password')?>
		</div>

		<div class="row">
			<?=Form::submit()?>
		</div>

		<?php 
			if($error): ?>

			<p class="error"><?=$error?></p>


		 <? endif; ?>

	<?=Form::close()?>
</div>
