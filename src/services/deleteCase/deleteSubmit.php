<?php
include_once('../../config/function.php');

$update = new DB_con();

$caseId = $_POST["caseId"];

$sql = $update->deleteStatusCaseByCaseId($caseId);

?>