<?php
function print_arr($arr){
	echo '<pre>' . print_r($arr, true) . '</pre>';
}
require_once('../../connect.php');
$login = $_POST['login'];
$query = "SELECT `id` FROM `parrents` WHERE ( `email` = $login )";
$address = explode('?', $_POST['page_request']);

if (mysqli_query($db, $query) == !false) {
	$address = $address[0].'?doauth=on';
}
else {
  $fio = $_POST['fio'];
  $number = $_POST['number'];
  $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$query = "INSERT INTO `parrents`(`fio`, `email`, `number`, `pass`) VALUES ('$fio', '$login', '$number', '$pass')";
	$res = mysqli_query($db, $query);
	if ($res == !false) $address = $address[0];
	else {
		$err = mysqli_error($db);
		echo "$err";
	}
}

header("Location: $address");

$_SESSION['login'] = $_POST['login'];
echo $address[0];
print_arr($_SESSION);
print_arr($_SERVER);
//header("Location: $_POST[page_request]")
?>
