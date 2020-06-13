<div class="content">
<!-- Блок содержимого центрального блока -->
	<div class="telo">
		<span class="hed1">Подача документов для записи на ПМПК<br>
			<span style="font-size: 27px; color:blue;">On-Line<br></span>
		</span>
		<span class="hed2">
			<!-- Место для подзаголовка -->
		</span>
		<span class="hed3">
			<!-- Место для под-под-заголовка -->
		</span>
		<hr>
		<!--   Блок отображения карточек услуг специалистов   -->

<?php if (isset($_SESSION['auth']) and  $_SESSION['auth'] == 'on'): ?>
"Начинаем процесс внесения данных для записи на ПМПК
<b>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna
aliqua. Ut enim ad minim veniam, quis nostrud exercitation
ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit
esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
occaecat cupidatat non proident, sunt in culpa qui officiag
deserunt mollit anim id est laborum.</b>

<?php elseif (isset($_GET['doauth']) and $_GET['doauth'] == 'on'): ?>
	<div class="alert alert-dismissible alert-success">
	  <h4 class="alert-heading">Внимание!</h4>
	  <p class="mb-0">Профиль с таким Email уже зарегистрирован,<br><a href="zapis_pmpk" class="alert-link"><b>АВТОРИЗУЙТЕСЬ</b></a>.</p>
	</div>
	<?require_once('include_pages/auth_form.php')?>


<?php elseif (isset($_GET['reg']) and $_GET['reg'] == 'error'): ?>
	<div class="alert alert-dismissible alert-warning">
	  <h4 class="alert-heading">Внимание!</h4>
	  <p class="mb-0">Произошла ошибка при регистрации<br><a href="zapis_pmpk" class="alert-link"><b>попробуйте снова</b></a>.</p>
	</div>
	<?require_once('include_pages/reg_form.php');?>
<?php elseif (isset($_GET['register']) and $_GET['register'] == 'on'):?>
	<div class="alert alert-dismissible alert-warning">
	  <h4 class="alert-heading">Внимание!</h4>
	  <p class="mb-0">Профиля с таким Email не зарегистрированно, зарегистрируйте профиль или <br><a href="zapis_pmpk" class="alert-link"><b>попробуйте снова</b></a>.</p>
	</div>
	<?require_once('include_pages/reg_form.php');?>
<?php else: ?>
	<?php if (isset($_GET['pass']) and $_GET['pass'] == 'error'): ?>
		<div class="alert alert-dismissible alert-warning">
		  <h4 class="alert-heading">Внимание!</h4>
		  <p class="mb-0">Не верный пароль<br><a href="zapis_pmpk" class="alert-link"><b>попробуйте снова</b></a>.</p>
		</div>
		<?require_once('include_pages/auth_form.php');?>
	<?php endif; ?>
	<?require_once('include_pages/auth_form.php');?>
<?php endif; ?>
<?php
// echo "<br>Сесссии<br>";
// print_arr($_SESSION);
// echo "<br>GET<br>";
// print_arr($_GET);
// echo "<br>сервер<br>";
// print_arr($_SERVER);
?>



		<script src="pages/js/fileselect.js"></script>
	</div>
</div>
<!-- Конец блока содержимого центрального блока -->
