<?php
include_once('../../config/function.php');

$findCaseByRepairmanId = new DB_con();

$repairmanId = $_POST['repairman_id'];

$sql = $findCaseByRepairmanId->findRepairmanById($repairmanId);

$result = "";
$result .= "<dev class='table table-responsive'>
<table class='table table-bordered'>";

$result .= '<tr>
                <td>รหัสพนักงาน</td>
                <td><input type="text" value=' . $repairmanId . ' placeholder=' . $repairmanId . ' disabled name="repairmanId" id="repairmanId" class="form-control" ></td>
                </tr>';

foreach ($sql as $row) {
    $result .= '<tr>';
    $result .= '<td> 
                            <div class="input-group mb-0">
                                <input type="text" class="form-control" value="'.$row['name'].'"  required id="nameRepairman" name="name"
                                       placeholder="ชื่อ - นามสกุล">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                </td>';
    $result .= '<td>
                    <div class="input-group mb-0">
                    <input type="email" name="email" value="'.$row['email'].'" id="emailRepairman" class="form-control" required placeholder="อีเมล">
                    <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                    </div>
                    </div>
                 </td>';

    $result .= '</tr>';
}


echo $result;

?>
