<style>
	.form{
		width: 400px;
		background: #fff;
		padding: 20px;
		box-shadow: 0 0 40px 0.2px rgba(79, 81, 147, 0.45);
		margin: 0 auto;
		/* position: absolute; */
		/* top: 100px; */
		margin-top: 100px;
	}
	.errors{
		background: #FF6464;
		color: #fff;
		text-align: center;
		    box-shadow: 2px 0 20px 0 rgba(238, 125, 125, 0.44);
    border-radius: 5px;
	}
	.errors p{
		padding: 10px;
	}
	.forgot_email{
		display: none;
	}
</style>
<div class='form'>
<?php if(isset($_GET['check'])) { ?>
		<?php if($_GET['check'] == 'confirm') { ?>
			<p class="error">На Ваш Email отправлены инструкции</p>
			<a href="<?php echo site_url(); ?>index.php/User/user_login">войти</a>
		<?php }elseif($_GET['check'] == 'error'){ ?>
			<p class="error">Такого Email'a не существует</p>
			<a href="<?php echo site_url(); ?>index.php/User/user_login">войти</a>
		<?php } ?>
<?php }else{ ?>
	<form id="form-signup_v1" name="form-signup_v1" method="POST" action='<?php echo site_url(); ?>index.php/Login/admin_login'>
		<?php if(isset($_GET['error'])){ ?>
		<div class='errors'>
			<?php if($_GET['error'] == 'exist'){ ?>
			<p>Этот пользователь не существует</p>
			<?php }elseif($_GET['error'] == 'confirm'){ ?>
			<p>Пароль не верен, попробуйте еще раз</p>
			<?php } ?>
		</div>
		<?php } ?>
		<div class="form-group hide">
			<label class="form-label" for="signup_v1-username">Логин</label>
			<div class="form-control-wrapper">
				<input id="signup_v1-username"
				class="form-control"
				name="username"
				type="text" data-validation="[L>=5, L<=18, MIXED]"
				data-validation-message="Длина логина должна быть между 6 и 18 символами. Нельзя использовать специальные символы"
				data-validation-regex="/^((?!denis).)*$/i"
				data-validation-regex-message="Слово &quot;Admin&quot; нельзя использовать $">
			</div>
		</div>
		<div class="form-group hide">
			<label class="form-label" for="signup_v1-password">Пароль</label>
			<div class="form-control-wrapper">
				<input id="signup_v1-password"
				class="form-control"
				name="password"
				type="password" data-validation="[L>=5]"
				data-validation-message="В пароле должно быть не менее 6 символов">
			</div>
		</div>
		
		<div class="form-group hide">
			<button type="submit" class="btn">Войти</button>
			<!-- <a class='btn btn-info email_btn'>Забыли пароль?</a> -->
		</div>
		<input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
	</form>
	<!-- <form action="<?php echo site_url(); ?>index.php/User/forgot_pass" method='POST'>
		<div class="form-group forgot_email">
			<label class="form-label" for="signup_v1-email">Введите Ваш Email</label>
			<div class="form-control-wrapper">
				<input id="signup_v1-email"
				class="form-control"
				name="email"
				type="text"
				data-validation="[EMAIL]">
			</div>
	
		</div>
		<div class="form-group forgot_email">
			<input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
			<button type='submit' class='btn btn-info' name='action'>Отправить</button>
		</div>
	</form> -->
	<?php } ?>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('a.email_btn').click(function(){
			$('.hide').hide(300);
			$('.forgot_email').show(300);
		});
	});
</script>