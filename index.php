<?php
error_reporting(-1);
session_start();
function print_arr($arr){
	echo '<pre>' . print_r($arr, true) . '</pre>';
}
print_arr($_GET);
print_arr($_SESSION);
require_once('routers/self_rout.php');
?>

<!DOCTYPE html>
<html lang="ru">
<?php include('include/head.php') ?>
<body>
<div class="all">
<?php include_once("include/menu1.php") ?>
	<div class="big_content">
		<?php include_once("include/left_border.php") ?>
		<!-- Блок содержимого центрального блока -->
<?php include_once($page['page_uri']) ?>
		<!-- Конец блока содержимого центрального блока -->
		<?php include_once("include/right_border.php") ?>
	</div>
</div>
</body>
</html>
