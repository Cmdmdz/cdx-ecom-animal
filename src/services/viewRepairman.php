<?php
include_once('../config/function.php');

$findCaseByRepairmanId = new DB_con();

$repairmanId = $_GET['repairman_id'];

$sql = $findCaseByRepairmanId->findCaseByRepairmanId($repairmanId);

$result = "";
$result .= "<dev class='table table-responsive'>
<table class='table table-bordered'>";

while ($row = mysqli_fetch_array($sql)) {


    $result .= '<tr>
                <td>ชื่อ</td>
                <td>'.$row['firstName'].'</td>
                </tr>';
    $result .= '<tr>
                <td>นามสกุล</td>
                <td>'.$row['lastName'].'</td>
                </tr>';
    $result .= '<tr>
                <td>รายละเอียด</td>
                <td>'.$row['detail_case'].'</td>
                </tr>';
    $result .= '<tr>
                <td>หมายเลจติดต่อ</td>
                <td>'.$row['contact_id'].'</td>
                </tr>';
}

echo $result;

?>
