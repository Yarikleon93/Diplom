<?
include 'Function.php';
$success = delOrdezak($_GET["id"]);
header("Location: Order_a.php");
?>