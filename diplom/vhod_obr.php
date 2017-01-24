<?
session_start();
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
$login = htmlspecialchars($_POST["login_v"]);
$password = htmlspecialchars($_POST["password_v"]);
$password = md5($password);
if (checkUser($login, $password)){
	$_SESSION["login_v"] = $login;	
	$_SESSION["password_v"] = $password;
}
else $_SESSION["error_v"] = 1;
header("Location: ".$_SERVER["HTTP_REFERER"]);
exit;
?>