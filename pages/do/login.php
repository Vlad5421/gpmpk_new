<?php
function print_arr($arr){
	echo '<pre>' . print_r($arr, true) . '</pre>';
}
require_once('../../connect.php');

session_start();
// print_arr($_POST);
// print_arr($_SESSION);
$address = explode('?', $_POST['page_request']);
$login = $_POST['login'];

$query = "SELECT `id`, `pass` FROM `parrents` WHERE `email` = '$login'";
$sql = mysqli_query($db, $query);
echo "<br>Вывод дата<br>";
if (mysqli_num_rows($sql) == '0') {
  $address = $address[0]."?register=on";
}
else {
  $res = mysqli_fetch_assoc($sql);
  if (password_verify($_POST['password'], $res['pass']) == TRUE) {
    $_SESSION['auth'] = 'on';
    $_SESSION['parrent_id'] = $res['id'];
    $_SESSION['login'] = $_POST['login'];
    $address = $address[0];
  }
  else {
    $address = $address[0]."?pass=error";
  }
}

// var_dump($address);
// print_arr($_SESSION);
header("Location: $address");
?>
