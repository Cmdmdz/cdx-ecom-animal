<?php
include_once('../../config/function.php');

$update = new DB_con();

$caseId = $_POST["caseId"];
$status = $_POST["status"];
$repairmanId = $_POST['repairmanId'];
$sql = $update->updateStatusCase($caseId, $status,$repairmanId);

?>