<?php
include_once('../../config/function.php');

$update = new DB_con();

$caseId = $_POST["caseId"];
$status = $_POST["status"];

$sql = $update->updateStatusCase($caseId, $status);

?>