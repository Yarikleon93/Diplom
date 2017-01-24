<?php

 $mysqli = false;                //Создаем глобальную переменную

  //функция подключения к базе данных
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
 
 function getTravels($typetur)
 {
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `putevki` WHERE `vidputev`='$typetur'");
  	 closeDB();
  	 return resultSetToArray($result_set);
}
 
 function resultSetToArray($result_set)
 {
  $array = array();
  while (($row = $result_set->fetch_assoc()) != false)
  $array[]=$row;
  return $array;
 }
 
 function getTravel($id){
  global $mysqli;
  connctDB();
  $result_set = $mysqli->query("SELECT * FROM `putevki` WHERE `id_putevk`='$id'");//Делаем запрос на получение записей из таблицы articles где в поле id будет найдена переменная id
  closeDB();
  return $result_set->fetch_assoc();          //возвращаем данные вв ассоциативном массиве
 }
 
 function getUslugi($id_u){
  global $mysqli;
  connctDB();
  $result_set = $mysqli->query("SELECT * FROM `uslugi` WHERE `id_uslug`='$id_u'");//Делаем запрос на получение записей из таблицы articles где в поле id будет найдена переменная id
  closeDB();
  return $result_set->fetch_assoc();          //возвращаем данные вв ассоциативном массиве
 }
  
 function getallTravels()
 {
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `vidputevk`");
  	 closeDB();
  	 return resultSetToArray($result_set);
}

 function getuslugiTravels()
 {
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `uslugi`");
  	 closeDB();
  	 return resultSetToArray($result_set);
}
 function getallNews()
 {
	 global $mysqli;
 	 connctDB();
  	 $result_set = $mysqli->query("SELECT * FROM `news`");
  	 closeDB();
  	 return resultSetToArray($result_set);
}
 function getNew($id_i){
  global $mysqli;
  connctDB();
  $result_set = $mysqli->query("SELECT * FROM `news` WHERE `id_news`='$id_i'");//Делаем запрос на получение записей из таблицы articles где в поле id будет найдена переменная id
  closeDB();
  return $result_set->fetch_assoc();          //возвращаем данные вв ассоциативном массиве
}
 function addUser($name_r, $login_r, $fname_r, $mail_r, $password_r, $telef_r, $count_r){
  global $mysqli;
  connctDB();
  $success = $mysqli->query("INSERT INTO `klient` (`name`, `login`, `fname`, `email`, `pasword`, `phone`, `strana_progiv`) VALUES ('$name_r', '$login_r', '$fname_r', '$mail_r', '$password_r', '$telef_r', '$count_r')");
  closeDB();
  return $success;
}
 function addZakaz($name_z, $email_z, $numbt_z, $pogelan){
  global $mysqli;
  connctDB();
  $success = $mysqli->query("INSERT INTO `fastzakaz` (`name_zakazch`, `email_zakazch`, `numb_t_zakaz`, `zakaz_zakazch`) VALUES ('$name_z', '$email_z', '$numbt_z', '$pogelan')");
  closeDB();
  return $success;
}
 function addZakazKlient($id_put, $name_za, $fname_za, $email_za, $telef_za, $countr_za, $citi_za, $vid_put_za, $col_pipl_za, $col_dn_za, $data_otpr_za){
  global $mysqli;
  connctDB();
  $success = $mysqli->query("INSERT INTO `zakaz` (`id_putevk`, `name_kl_z`, `fname_kl_z`, `email_k_z`, `phone_k_z`, `countr_z`, `citi_z`, `vid_put_z`, `coll_chel_z`, `coll_day_z`, `data_otpr_z`) VALUES ('$id_put', '$name_za', '$fname_za', '$email_za', '$telef_za', '$countr_za', '$citi_za', '$vid_put_za', '$col_pipl_za', '$col_dn_za', '$data_otpr_za')");
  closeDB();
  return $success;
}
 function checkUser($login, $password) {
	 global $mysqli;
	 connctDB();
	 $result_set = $mysqli->query("SELECT * FROM `klient` WHERE `login`='$login' AND `pasword`='$password'");
	 closeDB();
	 if ($result_set->fetch_assoc()) return true;
	 else return false;
 }
 function searchPoisk($poisk) {
	 $query_search = "";
     $arraypoisk = explode(" ", $poisk);
	 foreach ($arraypoisk as $key => $value) {
		 if (isset($arraypoisk[$key - 1])) $query_search .= " OR ";
		 $query_search .= "(`country` LIKE '%$value%' OR `city` LIKE '%$value%' OR `text_t` LIKE '%$value%' OR `vidputev` LIKE '%$value%')";
		 }
	 global $mysqli;
	 connctDB();
	 $result_set = $mysqli->query("SELECT * FROM `putevki` WHERE $query_search");
	 closeDB();
  	 return resultSetToArray($result_set);
 }
  function profKlient($logo){
  global $mysqli;
  connctDB();
  $result_set = $mysqli->query("SELECT * FROM `klient` WHERE `login`='$logo'");//Делаем запрос на получение записей из таблицы articles где в поле id будет найдена переменная id
  closeDB();
  return $result_set->fetch_assoc();          //возвращаем данные вв ассоциативном массиве
}
function edituslViews($id_v_usl){
  global $mysqli;
  connctDB();
  $success = $mysqli->query("UPDATE `uslugi` SET `views_u`=`views_u`+1 WHERE `id_uslug`='$id_v_usl'");
  closeDB();
  return $success;
}
function editnewViews($id_v_ne){
  global $mysqli;
  connctDB();
  $success = $mysqli->query("UPDATE `news` SET `views_new`=`views_new`+1 WHERE `id_news`='$id_v_ne'");
  closeDB();
  return $success;
}
function editturViews($id_v_t){
  global $mysqli;
  connctDB();
  $success = $mysqli->query("UPDATE `putevki` SET `views_tur`=`views_tur`+1 WHERE `id_putevk`='$id_v_t'");
  closeDB();
  return $success;
}
?>