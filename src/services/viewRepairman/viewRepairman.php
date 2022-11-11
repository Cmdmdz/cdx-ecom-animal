<?php
include_once('../../config/function.php');

$findCaseByRepairmanId = new DB_con();

$repairmanId = $_POST['repairman_id'];

$sql = $findCaseByRepairmanId->findCaseByRepairmanId($repairmanId);

$result = "";
$result .= "<dev class='table table-responsive'>
<table class='table table-bordered'>";
$result .= '<tr>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>รายละเอียด</th>
                <th>หมายเลขติดต่อ</th>
             </tr>';


foreach ($sql as $row) {
    $result .= '<tr>';
    $result .= '<td>' . $row['firstName'] . '</td>';
    $result .= '<td>' . $row['lastName'] . '</td>';
    $result .= '<td>' . $row['detail_case'] . '</td>';
    $result .= '<td>' . $row['contact_id'] . '</td>';
    $result .= '</tr>';
}


echo $result;

?>
