<?php
Session_start();

include_once('../../config/function.php');

$findCaseByRepairmanId = new DB_con();

$rankId = $_SESSION['id_rank'];
$caseId = $_GET['case_id'];

$sql = $findCaseByRepairmanId->findAllRepairman($rankId);


$result = "";
$result .= "<dev class='table table-responsive'>
<table class='table table-bordered'>";


$result .= '<tr>
                <td>เลขที่</td>
                <td><input type="text" value=' . $caseId . ' placeholder=' . $caseId . ' disabled name="case_id" id="case_id" class="form-control" ></td>
                </tr>';

$result .= '<tr>
                <td>สถานะ</td>
                    <td>
                        <select class="form-control " id="status" ">
                                    <option  value="0">อยู่ระหว่างการซ่อมแซ่ม</option>
                                    <option value="1">สำเร็จ</option>
                        </select>
                    </td>
                </tr>';
$result .= '<tr>
                <td>หมอยหมายงาน</td>
                    <td>
                        <select class="form-control " id="repairmanId" >';

while ($row = mysqli_fetch_array($sql)) {

    $result .= '<option  value="'. $row['repairman_id'] .'" >'. $row['name'] .'</option>';

}

$result .= '    </select>
                    </td>
                </tr>';

echo $result;

?>
