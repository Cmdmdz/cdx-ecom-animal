<?php

$repairmanId = $_POST['repairman_id'];
$result = "";
$result .= "<dev class='table table-responsive'>
<table class='table table-bordered'>";


$result .= '<tr>
                <td>เลขที่</td>
                <td><input type="text" value=' . $repairmanId . ' placeholder=' . $repairmanId . ' disabled name="repairman_id" id="repairman_id" class="form-control" ></td>
                </tr>';


echo $result;

