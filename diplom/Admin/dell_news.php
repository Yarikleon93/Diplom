<?
include 'Function.php';
$success = dellNews($_GET["id"]);
header("Location: All_news.php");
?>