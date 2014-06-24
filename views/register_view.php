<div class="main">
	<h2>Register</h2>
	
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

	<?=Form::close()?>
</div>