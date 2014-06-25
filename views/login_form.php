<div class="main">
<<<<<<< HEAD
	<div class="logfrm">
		<h2>Login</h2>
		
		<?=Form::open()?>
=======
	
	<h2>Login</h2>
	
	<?=Form::open()?>
>>>>>>> 988cad9a78c9d5a3756a7578339ae539d235150f

			<div class="row">
				<?=Form::label('username','Username:')?>
				<?=Form::input('text','username')?>
			</div>

			<div class="row">
				<?=Form::label('password','Password:')?>
				<?=Form::input('password', 'password')?>
			</div>

<<<<<<< HEAD
			<div class="row">
				<?=Form::submit()?>
				<a href='register.php'>Register</a>
			</div>
=======
		<div class="row">
			<?=Form::submit('Log in')?>
			<a class="blackRoundedButton" href='register.php'>Register</a>
		</div>
>>>>>>> 988cad9a78c9d5a3756a7578339ae539d235150f

			<?php 
				if($error): ?>

				<p class="error"><?=$error?></p>


			 <? endif; ?>

		<?=Form::close()?>
	</div>
</div>
