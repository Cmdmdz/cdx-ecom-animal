<?php
include_once('../../config/function.php');

$delete = new DB_con();

$repairman_id = $_POST["repairman_id"];

$sql = $delete->deleteRepairmanById($repairman_id);

?>