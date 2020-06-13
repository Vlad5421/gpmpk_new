<?php
require_once ('connect.php');


function get_services(){
	global $db;
	$sql = "SELECT * FROM services ORDER BY id";
	if(!$result = mysqli_query($db, $sql))
		return false;
	# Тут будет массив для передачи foreach
	$items = array();
	# Пока есть строки в ресурсе
	while( $data = mysqli_fetch_assoc($result) )
		# Дописываем данные в массив
		$items[] = $data;
	mysqli_free_result($result);
	return $items;
}

$g_services = get_services();
?>

<div class="content">
	<div class="telo">
			<span class="hed1">Проект "Поддержка семей, имеющих детей"<br>
				<span style="font-size: 27px">КОНСУЛЬТАЦИИ   ДЛЯ   РОДИТЕЛЕЙ <br>
			(законных представителей)</span>
			</span>
			<span class="hed2">
				Уважаемы родители!<br>
				Консультирование осуществляется в дистанционной форме по видео-конференц связи(Skypе, whatsapp, viber)<br>
				или по телефону.
			</span>
			<span class="hed3">
				Запись на консультацию к специалистам <br>
				Наши услуги оказываюся бесплатно
			</span>
		<div class="telo_content">
			<!--   Блок отображения карточек услуг специалистов   -->
			<?php foreach ($g_services as $value): ?>
				<div class="telo_content_el">
					<div class="t_cont_el_img" style='background: url(<?= nl2br(htmlspecialchars($value['img'])) ?>); background-size: 100% auto;'></div>

					<span class="t_cont_el_hed"><?= nl2br(htmlspecialchars($value['name'])) ?></span>
					<span class="t_cont_el_text"><?= nl2br(htmlspecialchars($value['duration_min'])) ?> мин. <br><?= nl2br(htmlspecialchars($value['price'])) ?></span>
					<div class="t_cont_el_btn"><a href="#">Записаться</a></div>
				</div>
			<?php endforeach; ?>

		</div>
	</div>
</div>
<!-- Конец блока содержимого центрального блока -->
