<?php
error_reporting(-1);
session_start();
function print_arr($arr){
	echo '<pre>' . print_r($arr, true) . '</pre>';
}
// print_arr($_GET);
// print_arr($_SESSION);
require_once('routers/self_rout.php');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?=$page['page_title']?></title>
	<link rel="stylesheet" type="text/css" href="css/zapis.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="all">
<?php
include_once("include/menu1.php");
?>
	<div class="big_content">
		<div class="left">
		  <div class="zapis_img"><a href="#zapis"><img src="img/logo.png"></a></div>
		  <div class="zapis_img"><img src="img/nac_pro_obr.jpg"></div>
		  <div class="zapis_img"><img src="img/logoza_edited.webp"></div>
		  <div class="zapis_img"><img src="img/cons_punkt.webp"></div>
		</div>
		<!-- Блок содержимого центрального блока -->
<?php
include_once($page['page_uri']);
?>
		<!-- Конец блока содержимого центрального блока -->
		<div class="left">
		  <div class="zapis_img"><img src="img/nacproekty_logo_obrazovanie_edited.png"></div>
		  <div class="zapis_img"><img src="img/rastim_detey.png"></div>
		  <div class="zapis_img"><img src="img/operator.jpg"></div>
		</div>
	</div>
</div>
</body>
</html>
