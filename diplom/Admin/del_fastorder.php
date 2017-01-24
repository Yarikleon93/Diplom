<?
include 'Function.php';
$success = delFastz($_GET["id"]);
header("Location: Fast_order.php");
?>