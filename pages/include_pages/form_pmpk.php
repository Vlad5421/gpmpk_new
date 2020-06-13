<form method="post" action="index.php" enctype="multipart/form-data">
	<div class="form_head_div">
		<span class=form_head>On-line подача заявления и документов на ПМПК</span>
	<span class="form_head_2">Все данные и документы передаются в диспетчерскую службу по защищенному каналу.</span> 
	</div>
	
	<!-- РАЗДЕЛ ЛИЧНЫХ ДАННЫХ -->

	<fieldset style="background-color: #f9f9f9">
		<legend >Личная информация:</legend>
		<p>
		<label for="number">Номер телефона 11 цифр (89ххххххххх): </label><br><input type="text" name="number" autocomplete=off pattern="[0-9]{11}" required>
		</p>
		<p>
		<label for="organnapr">Наименование организации, направившей ребенка на ПМПК: </label><br><input type="text" name="organnapr" autocomplete=off required>
		</p>
		<p>
		<label for="prich">Причина направления на ПМПК: </label><br><input type="text" name="prich" autocomplete=off required>
		</p>
		<p>
		<label for="fiorod">Фамилия, имя, отчество родителя/законного представителя ребенка, подающего заявление: </label><br><input type="text" name="fiorod" autocomplete=off required>
		</p>
		<p>
		<label for="mail">Электронная почта: </label><br><input type="email" name="mail" autocomplete=off required>
		</p>
		
		<p>
		<label for="fioreb">Фамилия, имя, отчество ребенка: </label><br><input type="text" name="fioreb" autocomplete=off required>
		</p>
		<p>
		<label for="dateroj">Дата рождения ребенка: </label><br><input type="date" name="dateroj" autocomplete=off required>
		</p>
		<p>
		<label for="shkola">Наименование образовательной организации, в которой обучается ребенок: </label><br><input type="text" name="shkola" autocomplete=off required>
		</p>
		<p>
		<label for="class">Класс/группа: </label><br><input type="text" name="class" autocomplete=off required>
		</p>
		<p>
		<label for="datapredpmpk">Дата предыдущего прохождения ПМПК (если было): </label><br><input type="date" name="datapredpmpk" autocomplete=off>
		</p>
		<p>
		<label for="namepredpmpk">Наименование ПМПК, которую проходил ребенок (если было): </label><br><input type="text" name="namepredpmpk" autocomplete=off >
		</p>
	</fieldset>

	<!-- РАЗДЕЛ ЗАГРУЗКИ ФАЙЛОВ -->

	<fieldset style="background-color: #f9f9f9">
		<legend>Отсканированные документы:</legend>
		<span class="form_files">Загрузите сканы или фото документов,  по одному в каждое поле.
		<p>Допустимые форматы: .jpg .png или PDF документы.</p></span>

		<div class="filesmini">
			Заявление о проведении или согласие на проведение обследования ребенка в комиссии:<br>
			<div style="display: inline-block;">
				<label><b>*</b> Стр.1:</label><br>
				<input id="zayav" type="file" name="file[]" required><br>
				<img src="" id="zayavImg">
			</div>
		</div>

		<div class="filesmini">
			Cвидетельство о рождении ребенка:<br>
			<div style="display: inline-block;">
				<label><b>*</b> Стр.1:</label><br>
				<input id="svidoroj" type="file" name="file[]" required><br>
				<img src="" id="svidorojImg">
			</div>
		</div>

		<div class="filesmini">
			Копия паспорта ребенка (для ребенка старше 14 лет)<br>
			<div style="display: inline-block;">
				<label>Стр.1:</label><br>
				<input id="pasport_str1" type="file" name="file[]"><br>
				<img src="" id="pasport_str1Img">
			</div>
			<div style="display: inline-block;">
				<label>Стр.2:</label><br>
				<input id="pasport_str2" type="file" name="file[]"><br>
				<img src="" id="pasport_str2Img">
			</div>
		</div>

		<div class="filesmini">
			<div>
				Hаправление от образовательной организации, организации, осуществляющей социальное
				обслуживание, медицинской организации, другой организации:
			</div>
			<div style="display: inline-block;">
				<label><b>*</b> Стр.1:</label><br>
				<input id="napravlenie" type="file" name="file[]" required><br>
				<img src="" id="napravlenieImg">
			</div>
		</div>

		<div class="filesmini">
			Подробная выписка из истории развития ребенка с заключениями врачей, наблюдающих ребенка в медицинской
			организации по месту жительства ребенка (регистрации), оформленная на бланке с угловым
			штампом БУЗОО, заверенная подписью уполномоченного лица и печатью БУЗОО<br>
			<div style="display: inline-block;">
				<label><b>*</b> Стр.1:</label><br>
				<input id="vipiska_str1" type="file" name="file[]" required><br>
				<img src="" id="vipiska_str1Img">
			</div>
			<div style="display: inline-block;">
				<label>Стр.2:</label><br>
				<input id="vipiska_str2" type="file" name="file[]"><br>
				<img src="" id="vipiska_str2Img">
			</div>
		</div>


		<div class="filesmini">
			Характеристика обучающегося, выданная образовательной организацией(для обучающихся образовательных организаций)<br>
			<div style="display: inline-block;">
				<label><b>*</b> Стр.1:</label><br>
				<input id="harkt_str1" type="file" name="file[]" required><br>
				<img src="" id="harkt_str1Img">
			</div>
			<div style="display: inline-block;">
				<label>Стр.2:</label><br>
				<input id="harkt_str2" type="file" name="file[]"><br>
				<img src="" id="harkt_str2Img">
			</div>
			<div style="display: inline-block;">
				<label>Стр.3:</label><br>
				<input id="harkt_str3" type="file" name="file[]" ><br>
				<img src="" id="harkt_str3Img">
			</div>
		</div>


		<div class="filesmini">
			Заключение (заключения) психолого-медико-педагогического консилиума образовательной организации
			или специалиста (специалистов), осуществляющего психолого-медико-педагогическое сопровождение
			обучающихся в образовательной организации (для обучающихся образовательных организаций):<br>
			<div style="display: inline-block;">
				<label><b>*</b> Стр.1:</label><br>
				<input id="konsil_str1" type="file" name="file[]" required><br>
				<img src="" id="konsil_str1Img">
			</div>
			<div style="display: inline-block;">
				<label>Стр.2:</label><br>
				<input id="konsil_str2" type="file" name="file[]"><br>
				<img src="" id="konsil_str2Img">
			</div>
			<div style="display: inline-block;">
				<label>Стр.3:</label><br>
				<input id="konsil_str3" type="file" name="file[]"><br>
				<img src="" id="konsil_str3Img">
			</div>
		</div>


		<div class="filesmini">
			Заключение (заключения) комиссии о результатах ранее проведенного обследования ребенка (при наличии): <br>
			<div style="display: inline-block;">
				<label>Стр.1:</label><br>
				<input id="zaklpredpmpk_str1" type="file" name="file[]"><br>
				<img src="" id="zaklpredpmpk_str1Img">
			</div>
			<div style="display: inline-block;">
				<label>Стр.2:</label><br>
				<input id="zaklpredpmpk_str2" type="file" name="file[]"><br>
				<img src="" id="zaklpredpmpk_str2Img">
			</div>
		</div>


		<div class="filesmini">
			Справка ФКУ «МСЭ» о присвоении статуса «ребенок-инвалид» (при наличии):<br>
			<div style="display: inline-block;">
				<label>Стр.1:</label><br>
				<input id="mse_str1" type="file" name="file[]"><br>
				<img src="" id="mse_str1Img">
			</div>
			<div style="display: inline-block;">
				<label>Стр.2:</label><br>
				<input id="mse_str2" type="file" name="file[]"><br>
				<img src="" id="mse_str2Img">
			</div>
		</div>


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
</form>
<script type="text/javascript">
	
	document.getElementById('zayav').addEventListener('change', selectZayav, false);
function selectZayav(){
var fReader = new FileReader();
fReader.readAsDataURL(zayav.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('zayavImg');
    img.style="height: 110px";
    img.src = event.target.result;

}
}
document.getElementById('svidoroj').addEventListener('change', selectSvidoroj);
function selectSvidoroj(){
var fReader = new FileReader();
fReader.readAsDataURL(svidoroj.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('svidorojImg');
    img.style="height: 110px";
    img.src = event.target.result;
}
}
document.getElementById('pasport_str1').addEventListener('change', selectPasport_str1);
function selectPasport_str1(){
var fReader = new FileReader();
fReader.readAsDataURL(pasport_str1.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('pasport_str1Img');
    img.style="height: 110px";
    img.src = event.target.result;
}
}
document.getElementById('pasport_str2').addEventListener('change', selectPasport_str2);
function selectPasport_str2(){
var fReader = new FileReader();
fReader.readAsDataURL(pasport_str2.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('pasport_str2Img');
    img.style='height: 110px';
    img.src = event.target.result;
}
}
document.getElementById('napravlenie').addEventListener('change', selectNapravlenie);
function selectNapravlenie(){
var fReader = new FileReader();
fReader.readAsDataURL(napravlenie.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('napravlenieImg');
    img.style='height: 110px';
    img.src = event.target.result;
}
}
document.getElementById('vipiska_str1').addEventListener('change', selectVipiska_str1);
function selectVipiska_str1(){
var fReader = new FileReader();
fReader.readAsDataURL(vipiska_str1.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('vipiska_str1Img');
    img.style='height: 110px';
    img.src = event.target.result;
}
}
document.getElementById('vipiska_str2').addEventListener('change', selectVipiska_str2);
function selectVipiska_str2(){
var fReader = new FileReader();
fReader.readAsDataURL(vipiska_str2.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('vipiska_str2Img');
    img.style='height: 110px';
    img.src = event.target.result;
}
}
document.getElementById('harkt_str1').addEventListener('change', selectHarkt_str1);
function selectHarkt_str1(){
var fReader = new FileReader();
fReader.readAsDataURL(harkt_str1.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('harkt_str1Img');
    img.style='height: 110px';
    img.src = event.target.result;
}
}
document.getElementById('harkt_str2').addEventListener('change', selectHarkt_str2);
function selectHarkt_str2(){
var fReader = new FileReader();
fReader.readAsDataURL(harkt_str2.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('harkt_str2Img');
    img.style='height: 110px';
    img.src = event.target.result;
}
}
document.getElementById('harkt_str3').addEventListener('change', selectHarkt_str3);
function selectHarkt_str3(){
var fReader = new FileReader();
fReader.readAsDataURL(harkt_str3.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('harkt_str3Img');
    img.style='height: 110px';
    img.src = event.target.result;
}
}
document.getElementById('konsil_str1').addEventListener('change', selectKonsil_str1);
function selectKonsil_str1(){
var fReader = new FileReader();
fReader.readAsDataURL(konsil_str1.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('konsil_str1Img');
    img.style='height: 110px';
    img.src = event.target.result;
}
}
document.getElementById('konsil_str2').addEventListener('change', selectKonsil_str2);
function selectKonsil_str2(){
var fReader = new FileReader();
fReader.readAsDataURL(konsil_str2.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('konsil_str2Img');
    img.style='height: 110px';
    img.src = event.target.result;
}
}
document.getElementById('konsil_str3').addEventListener('change', selectKonsil_str3);
function selectKonsil_str3(){
var fReader = new FileReader();
fReader.readAsDataURL(konsil_str3.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('konsil_str3Img');
    img.style='height: 110px';
    img.src = event.target.result;
}
}
document.getElementById('zaklpredpmpk_str1').addEventListener('change', selectZaklpredpmpk_str1);
function selectZaklpredpmpk_str1(){
var fReader = new FileReader();
fReader.readAsDataURL(zaklpredpmpk_str1.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('zaklpredpmpk_str1Img');
    img.style='height: 110px';
    img.src = event.target.result;
}
}
document.getElementById('zaklpredpmpk_str2').addEventListener('change', selectZaklpredpmpk_str2);
function selectZaklpredpmpk_str2(){
var fReader = new FileReader();
fReader.readAsDataURL(zaklpredpmpk_str2.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('zaklpredpmpk_str2Img');
    img.style='height: 110px';
    img.src = event.target.result;
}
}
document.getElementById('mse_str1').addEventListener('change', selectMse_str1);
function selectMse_str1(){
var fReader = new FileReader();
fReader.readAsDataURL(mse_str1.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('mse_str1Img');
    img.style='height: 110px';
    img.src = event.target.result;
}
}
document.getElementById('mse_str2').addEventListener('change', selectMse_str2);
function selectMse_str2(){
var fReader = new FileReader();
fReader.readAsDataURL(mse_str2.files[0]);
fReader.onloadend = function(event){
    var img = document.getElementById('mse_str2Img');
    img.style='height: 110px';
    img.src = event.target.result;
}
}

</script>