<? session_start();
	unset ($_SESSION["login_v"]);
	unset ($_SESSION["password_v"]);
	header("Location: ".$_SERVER['HTTP_REFERER']);
	exit;
	?>