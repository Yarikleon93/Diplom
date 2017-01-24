<? session_start();
include 'Function.php';
	if (!(checkUser($_SESSION["login_v"], $_SESSION["password_v"]) && (isAdmin($_SESSION["login_v"]))))
	{
		header("location: ../Admin/auth.php");
		exit;
	}
?>