<?
$mysqli = false;
function connctDB() 
  {
    global $mysqli;               //инициализируем глобальную переменную
    $mysqli = new mysqli("localhost", "Yarik", "l1e3o5n9", "turagenstvo");     //Подключаемся к базе данных
    $mysqli->query("SET NAMES 'utf8'");          //Ставим кодировку utf-8
 }

  //Функция закрытия базы данных
  function closeDB() 
  {
    global $mysqli; 
  $mysqli->close();               //закрываем базы данных
 }
function checkUser($login, $password) {
	 global $mysqli;
	 connctDB();
	 $result_set = $mysqli->query("SELECT * FROM `klient` WHERE `login`='$login' AND `pasword`='$password'");
	 closeDB();
	 if ($result_set->fetch_assoc()) return true;
	 else return false;
}
function isAdmin($loginn) {
	global $mysqli;
	 connctDB();
	 $result_set = $mysqli->query("SELECT * FROM `klient` WHERE `login`='$loginn'");
	 $row = $result_set->fetch_assoc();
	 closeDB();
	 return $row["admin"];
}
function getuslugiTravels(){
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `uslugi`");
  	 closeDB();
  	 return resultSetToArray($result_set);
}
function resultSetToArray($result_set){
  $array = array();
  while (($row = $result_set->fetch_assoc()) != false)
  $array[]=$row;
  return $array;
}
function getallNews()
 {
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `news`");
  	 closeDB();
  	 return resultSetToArray($result_set);
}
function getallKlient()
 {
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `klient`");
  	 closeDB();
  	 return resultSetToArray($result_set);
}
function getallVidTur()
 {
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `vidputevk`");
  	 closeDB();
  	 return resultSetToArray($result_set);
}
function getallFastorder()
 {
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `fastzakaz`");
  	 closeDB();
  	 return resultSetToArray($result_set);
}
function getallZakkl()
 {
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `zakaz`");
  	 closeDB();
  	 return resultSetToArray($result_set);
}
function getallPutevk()
 {
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `putevki`");
  	 closeDB();
  	 return resultSetToArray($result_set);
}
function getaKlient($id_kl) {
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `klient` WHERE `id_klient`='$id_kl'");
  	 closeDB();
	 return $result_set->fetch_assoc(); 
}
function getallZakdk($id_zdkk) {
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `zakaz` WHERE `id_zakaz`='$id_zdkk'");
  	 closeDB();
	 return $result_set->fetch_assoc(); 
}
function delClient($id_dk){
  global $mysqli;
  connctDB();
  $result_set = $mysqli->query("DELETE FROM `klient` WHERE `id_klient`='$id_dk'");
  closeDB();
  return $success;
}
function delOrdezak($id_dkz){
  global $mysqli;
  connctDB();
  $result_set = $mysqli->query("DELETE FROM `zakaz` WHERE `id_zakaz`='$id_dkz'");
  closeDB();
  return $success;
}
 function delFastz($id_dz){
  global $mysqli;
  connctDB();
  $result_set = $mysqli->query("DELETE FROM `fastzakaz` WHERE `id_zak`='$id_dz'");
  closeDB();
  return $success;
}
 function dellNews($id_dnews){
  global $mysqli;
  connctDB();
  $result_set = $mysqli->query("DELETE FROM `news` WHERE `id_news`='$id_dnews'");
  closeDB();
  return $success;
}
 function dellTurr($id_dtur){
  global $mysqli;
  connctDB();
  $result_set = $mysqli->query("DELETE FROM `putevki` WHERE `id_putevk`='$id_dtur'");
  closeDB();
  return $success;
}
 function dellUslug($id_dusl){
  global $mysqli;
  connctDB();
  $result_set = $mysqli->query("DELETE FROM `uslugi` WHERE `id_uslug`='$id_dusl'");
  closeDB();
  return $success;
}
 function dellVidt($id_vidt){
  global $mysqli;
  connctDB();
  $result_set = $mysqli->query("DELETE FROM `vidputevk` WHERE `id_vidput`='$id_vidt'");
  closeDB();
  return $success;
}
function getnewsRedak($id_n_r) {
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `news` WHERE `id_news`='$id_n_r'");
  	 closeDB();
	 return $result_set->fetch_assoc(); 
}
function getuslugRedak($id_u_r) {
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `uslugi` WHERE `id_uslug`='$id_u_r'");
  	 closeDB();
	 return $result_set->fetch_assoc(); 
}
function getvidtRedak($id_vt_r) {
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `vidputevk` WHERE `id_vidput`='$id_vt_r'");
  	 closeDB();
	 return $result_set->fetch_assoc(); 
}
function getturRedak($id_tur) {
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `putevki` WHERE `id_putevk`='$id_tur'");
  	 closeDB();
	 return $result_set->fetch_assoc(); 
}
 function addNews($name_news, $opis_news, $text_news, $date, $apend){
  global $mysqli;
  connctDB();
  $success = $mysqli->query("INSERT INTO `news` (`name_news`, `text_news`, `v_text_news`, `data_news`, `img_news`) VALUES ('$name_news', '$opis_news', '$text_news', '$date', '$apend')");
  closeDB();
  return $success;
}
 function addUslug($name_usl, $opis_usl, $apend){
  global $mysqli;
  connctDB();
  $success = $mysqli->query("INSERT INTO `uslugi` (`name_uslug`, `img_uslug`, `text_uslug`) VALUES ('$name_usl', '$apend', '$opis_usl')");
  closeDB();
  return $success;
}
 function addVidt($name_vid_t, $apend){
  global $mysqli;
  connctDB();
  $success = $mysqli->query("INSERT INTO `vidputevk` (`name_vidput`, `img_vidput`) VALUES ('$name_vid_t', '$apend')");
  closeDB();
  return $success;
}
 function addTurv($name_tur_v, $opis_tur_v, $data_tur_v, $col_d_turv, $price_tur_v, $data_priezd_turv, $hotel_tur_v, $countr_tur_v, $citi_tur_v, $road_tur_v, $vid_tur_v, $pitanie_tur_v, $viezd_citi_turv, $raspolog_tur_v, $razvlech_turv, $apend){
  global $mysqli;
  connctDB();
  $success = $mysqli->query("INSERT INTO `putevki` (`name`, `text_t`, `dataviezda`, `coldney`, `price`, `datapriezd`, `otel`, `country`, `city`, `road`, `vidputev`, `pitanie`, `viezd_citi`, `raspologenie`, `razvlech_uslug`, `img`) VALUES ('$name_tur_v', '$opis_tur_v', '$data_tur_v', '$col_d_turv', '$price_tur_v', '$data_priezd_turv', '$hotel_tur_v', '$countr_tur_v', '$citi_tur_v', '$road_tur_v', '$vid_tur_v', '$pitanie_tur_v', '$viezd_citi_turv', '$raspolog_tur_v', '$razvlech_turv', '$apend')");
  closeDB();
  return $success;
}
function redNews($id_r_n,$name_r_n,$foto_r_n,$opis_r_n,$text_r_n,$date_r_n){
  global $mysqli;
  connctDB();
  $success = $mysqli->query("UPDATE `news` SET `name_news`='$name_r_n', `img_news`='$foto_r_n', `text_news`='$opis_r_n', `v_text_news`='$text_r_n', `data_news`='$date_r_n' WHERE `id_news`='$id_r_n'");
  closeDB();
  return $success;
 }
 function redTurr($id_tr_n,$name_tur_v,$opis_tur_v,$img_tur_v,$data_tur_v,$col_d_turv,$price_tur_v,$data_priezd_turv,$hotel_tur_v,$countr_tur_v,$citi_tur_v,$road_tur_v,$vid_tur_v,$pitanie_tur_v,$viezd_citi_turv,$raspolog_tur_v,$razvlech_turv){
  global $mysqli;
  connctDB();
  $success = $mysqli->query("UPDATE `putevki` SET `name`='$name_tur_v', `text_t`='$opis_tur_v', `img`='$img_tur_v', `dataviezda`='$data_tur_v', `coldney`='$col_d_turv', `price`='$price_tur_v', `datapriezd`='$data_priezd_turv', `otel`='$hotel_tur_v', `country`='$countr_tur_v', `city`='$citi_tur_v', `road`='$road_tur_v', `vidputev`='$vid_tur_v', `pitanie`='$pitanie_tur_v', `viezd_citi`='$viezd_citi_turv', `raspologenie`='$raspolog_tur_v', `razvlech_uslug`='$razvlech_turv' WHERE `id_putevk`='$id_tr_n'");
  closeDB();
  return $success;
 }
 function redUslug($id_u_n,$name_us_n,$foto_us_n,$opis_us_n){
  global $mysqli;
  connctDB();
  $success = $mysqli->query("UPDATE `uslugi` SET `name_uslug`='$name_us_n', `img_uslug`='$foto_us_n', `text_uslug`='$opis_us_n'  WHERE `id_uslug`='$id_u_n'");
  closeDB();
  return $success;
 }
  function redVidput($id_v_r,$name_v_r,$img_v_r){
  global $mysqli;
  connctDB();
  $success = $mysqli->query("UPDATE `vidputevk` SET `name_vidput`='$name_v_r', `img_vidput`='$img_v_r' WHERE `id_vidput`='$id_v_r'");
  closeDB();
  return $success;
 }
	?>