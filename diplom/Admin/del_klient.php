<?
include 'Function.php';
$success = delClient($_GET["id"]);
header("Location: All_klient.php");
?>