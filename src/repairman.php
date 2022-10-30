<?php
Session_start();
if (!isset($_SESSION['token']) && $_SESSION['id_rank'] == 1) {
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
                            <li class="breadcrumb-item active">รายชื่อพนักงาน</li>
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
                                <h3 class="card-title">รายชื่อพนักงาน</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>ชื่อ - นามสกุล</th>
                                        <th>อีเมล</th>
                                        <th>งาน</th>
                                        <th>ตำแหน่ง</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $rankId = $_SESSION['id_rank'];
                                    $post = $data->findAllRepairman($rankId);
                                    foreach ($post as $result) {
                                        ?>
                                        <tr>
                                            <td><?php echo $result['name'] ?></td>
                                            <td><?php echo $result['email'] ?></td>
                                            <td><?php echo $result['contact_id'] ?></td>
                                            <td><?php echo $result['rank'] ?></td>
                                            <td>

                                                <button type="button" class="btn btn-primary"><i
                                                            class="far fa-eye view_data"></i>
                                                </button>
                                                <button type="button" class="btn btn-success"><i
                                                            class="fas fa-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger"><i
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
    </div>
    <?php
}
?>


<?php
include('includes/footer.php');
?>