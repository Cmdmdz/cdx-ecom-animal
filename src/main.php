<?php
Session_start();
if (!isset($_SESSION['token'])) {
    header("location: login.php");
} else {
    include('includes/header.php');
    include('includes/sidebar.php');
    include('includes/topbar.php');
    include_once('config/function.php');

    $data = new DB_con();

    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">แจ้งรายการซ่อมโทรศัพท์</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">แจ้งรายการซ่อมโทรศัพท์</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">รายชื่อการแจ้งซ่อมโทรศัพท์</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>สถานะ</th>
                                        <th>หมายเลขติดต่อ</th>
                                        <th>ตำแหน่ง</th>
                                        <th>หมายเลขโทรศัพท์</th>
                                        <th>เลเวล</th>
                                        <th>วันที่</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $post = $data->findAllCase();
                                    foreach ($post as $result) {
                                        $id = $result['case_id'];
                                        $status = "";
                                        if ($result['status'] == 0){
                                            $status = "อยู่ระหว่างการซ่อม";
                                        }elseif ($result['status'] == 1){
                                            $status = "สำเร็จ";
                                        }
                                        ?>
                                        <tr>
                                            <td><?php echo $result['firstName'] ?></td>
                                            <td><?php echo $result['lastName'] ?></td>
                                            <td><?php echo $status ?></td>
                                            <td><?php echo $result['contact_id'] ?></td>
                                            <td><?php echo $result['rank_name'] ?></td>
                                            <td><?php echo $result['mobileNumber'] ?></td>
                                            <td><?php echo $result['lv'] ?></td>
                                            <td><?php echo $result['case_date'] ?></td>
                                            <td>

                                                <button type="button" class="btn btn-primary" onclick="showModalDetailCase(<?php echo $id ?>)" data-toggle="modal" ><i class="far fa-eye"></i>
                                                </button>

                                                    <button type="button" class="btn btn-success" onclick="updateStatusCase(<?php echo $id ?>)"><i
                                                                class="fas fa-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger" onclick="deleteCase(<?php echo $id ?>)"><i
                                                                class="far fa-trash-alt"></i></button>


                                            </td>
                                        </tr>
                                        <?
                                    }
                                    ?>

                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
        </section>
        <!-- /.content -->

<!--        event popup-->
        <!-- Modal -->
        <!-- Button trigger modal -->

        <!-- Modal -->
       <?
            include ('modal/case.view.php');
            include ('modal/case.update.php');
            include ('modal/case.delete.php');
       ?>


    </div>
    <?php

}
?>

<script>
    $(document).ready(function() {
        $('#view_data').submit(function (){
            $('#dataModel').modal('show')
        })
    });
</script>
<?php
include('includes/footer.php');
?>