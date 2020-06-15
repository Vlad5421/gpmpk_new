<form method="post" action="pages/do/zapis_card.php" enctype="multipart/form-data">
	<div class="form_head_div">
		<span class=form_head>On-line подача заявления и документов на ПМПК</span>
	<span class="form_head_2">Все данные и документы передаются в диспетчерскую службу по защищенному каналу.</span> 
	</div>
	
	<!-- РАЗДЕЛ ЛИЧНЫХ ДАННЫХ -->
<div class="zapis_pmpk_fildset">
	<fieldset style="background-color: #f9f9f9">
		<legend >Личная информация:</legend>
		<p>
		<label for="fiorod">Фамилия, имя, отчество родителя/законного представителя ребенка, подающего заявление: </label><br><input size="50" type="text" name="fiorod" autocomplete=off required>
		</p>
		<p>
		<label for="mail">Электронная почта: </label><br><input size="50" type="email" name="mail" autocomplete=off required value="<?=$_SESSION['login'] ?>">
		</p>
		<p>
		<label for="number">Номер телефона 11 цифр (89ххххххххх): </label><br><input type="text" name="number" autocomplete=off pattern="[0-9]{11}" required>
		</p>
		<p>
		<label for="organnapr">Наименование организации, направившей ребенка на ПМПК: </label><br><input size="50" type="text" name="organnapr" autocomplete=off required>
		</p>
		<p>
		<label for="prich">Причина направления на ПМПК: </label><br><input size="50" type="text" name="prich" autocomplete=off required>
		</p>
		<p>
		<label for="fioreb">Фамилия, имя, отчество ребенка: </label><br><input size="50" type="text" name="fioreb" autocomplete=off required>
		</p>
		<p>
		<label for="dateroj">Дата рождения ребенка: </label><br><input type="date" name="dateroj" autocomplete=off required>
		</p>
		<p>
		<label for="shkola">Наименование образовательной организации, в которой обучается ребенок: </label><br><input size="50" type="text" name="shkola" autocomplete=off required>
		</p>
		<p>
		<label for="class">Класс/группа: </label><br><input size="50" type="text" name="class" autocomplete=off required>
		</p>
		<p>
		<label for="datapredpmpk">Дата предыдущего прохождения ПМПК (если было): </label><br><input type="date" name="datapredpmpk" autocomplete=off>
		</p>
		<p>
		<label for="namepredpmpk">Наименование ПМПК, которую проходил ребенок (если было): </label><br><input size="50" type="text" name="namepredpmpk" autocomplete=off >
		</p>
	</fieldset>
</div>
	<!-- РАЗДЕЛ ЗАГРУЗКИ ФАЙЛОВ -->
<div class="zapis_pmpk_fildset">
	<fieldset style="background-color: #f9f9f9">
		<legend>Отсканированные документы:</legend>
		<span class="form_files">Загрузите сканы или фото документов,  по одному в каждое поле.
		<p>Допустимые форматы: .jpg .png или PDF документы.</p></span>
<?php  
$scans = array(
	'zayav' => ['Заявление о проведении или согласие на проведение обследования ребенка в комиссии:', 'zayav'],
	'svidoroj' => ['Cвидетельство о рождении ребенка:', 'svidoroj'],
	'pasport' => ['Копия паспорта ребенка (для ребенка старше 14 лет):' ,'pasport_str1', 'pasport_str2', 'pasport_str3'],
	'pasport2' => ['Hаправление от образовательной организации, организации, осуществляющей социальное обслуживание, медицинской организации, другой организации:' ,'napravlenie'],
	'pasport3' => ['Подробная выписка из истории развития ребенка с заключениями врачей, наблюдающих ребенка в медицинской
			организации по месту жительства ребенка (регистрации), оформленная на бланке с угловым
			штампом БУЗОО, заверенная подписью уполномоченного лица и печатью БУЗОО' ,'vipiska_sr1', 'vipiska_sr2'],
	'pasport4' => ['Характеристика обучающегося, выданная образовательной организацией(для обучающихся образовательных организаций' ,'harkt_str1', 'harkt_str2', 'harkt_str3'],
	'pasport5' => ['Заключение (заключения) психолого-медико-педагогического консилиума образовательной организации
			или специалиста (специалистов), осуществляющего психолого-медико-педагогическое сопровождение
			обучающихся в образовательной организации (для обучающихся образовательных организаций):' ,'konsil_str1', 'konsil_str2', 'konsil_str3'],
	'pasport6' => ['Заключение (заключения) комиссии о результатах ранее проведенного обследования ребенка (при наличии): ' ,'zaklpredpmpk_str1', 'zaklpredpmpk_str2'],
	'pasport7' => ['Справка ФКУ «МСЭ» о присвоении статуса «ребенок-инвалид» (при наличии):' ,'mse_str1', 'mse_str2']
);

foreach ($scans as $key => $value) {
	echo '<div class="filesmini" >';
	echo $value[0].'<br>';
	echo '<div class="filesmini_wrap_files">';
	for ($i=1; $i < count($value) ; $i++) {
		if ($i == 1) 
			$tag = "<b>*</b>";
		else $tag = "";
		echo '<div  id="'.$value[$i].'" class="file_and_img"><label>'.$tag.'Стр.: '.$i.'</label><input id="'.$value[$i].'" type="file" name="file[]"><img class="img_form_pmpk"></div>';
	}
	echo '</div>';
	echo '</div>';
}

?>
		<label for="snopdrod"><b>*</b> Согласие на обработку персональных данных родителя/законного представителя ребенка, подающего заявление: </label><input type="checkbox" name="snopdrod" autocomplete=off required>
		<br>
		<label for="snopdreb"><b>*</b> Согласие на обработку персональных данных ребенка: </label><input type="checkbox" name="snopdreb" autocomplete=off required>
		<p>
		<button class="button_form" type="submit" name="send" value="test">Отправить</button>
		</p>
		<hr>
		<span class="form_end">При необходимости комиссия запрашивает у соответствующих органов<br>
		и организаций или у родителей (законных представителей)<br>
		дополнительную информацию о ребенке.<br></span>
		<span class="form_end_end">Запись на проведение обследования ГПМПК осуществляется при подаче полного пакета документов.</span>
	</fieldset>
</div>
			<!--    КОНЕЦ РАЗДЕЛА ЗАГРУЗКИ ФАЙЛОВ    -->
</form>
<script>
// массив со всеми отслеживаемыми id-шками
var els = [
'zayav',
'svidoroj',
'pasport_str1', 'pasport_str2', 'pasport_str3',
'napravlenie',
'vipiska_sr1', 'vipiska_sr2',
'harkt_str1', 'harkt_str2', 'harkt_str3',
'konsil_str1', 'konsil_str2', 'konsil_str3',
'zaklpredpmpk_str1', 'zaklpredpmpk_str2',
'mse_str1', 'mse_str2'];

var el;
for (let i = 0; i < els.length; i++) {
	var el = els[i];
	document.getElementById(el).addEventListener('change', function (e) {
	const that = e.target;
	var fReader = new FileReader();
	fReader.readAsDataURL(that.files[0]);
	fReader.onloadend = function(event){
	    that.nextElementSibling.src= event.target.result;
	}
});
}
</script>