<?php
error_reporting(-1);

$db = @mysqli_connect('localhost', 'root', '', 'gpmpk') or die('Ошибка соединения с БД');
mysqli_set_charset($db, "utf8") or die('Не установлена кодировка');



 ?>
