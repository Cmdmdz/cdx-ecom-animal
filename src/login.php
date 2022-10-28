<?php
session_start();

if (isset($_SESSION['token'])) {
    header("location: main.php");

} else {

    include('includes/header.php');
    include('includes/sidebar.php');
    include('includes/topbar.php');
    include_once('config/function.php');

//session_start();

    $data = new DB_con();

    if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = $data->login($email, $password);
        $num = mysqli_fetch_array($result);


        if ($num > 0) {
            $_SESSION['token'] = $num['token'];
            $_SESSION['id_rank'] = $num['id_rank'];
            echo "<script>alert('Login Successfully !')</script>";
            echo "<script>window.location.href='main.php'</script>";
        } else {
            echo "<script>alert('Something went wrong Please try again!')</script>";
        }
    }
    ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">เข้าสู่ระบบ</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">แจ้งรายการซ่อมโทรศัพท์</a></li>
                            <li class="breadcrumb-item active">เข้าสู่ระบบ</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <dev class="d-flex justify-content-center">
            <div class="login-box">

                <!-- /.login-logo -->
                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">กรุณาเข้าสู่ระบบ</p>

                        <form method="post">

                            <div class="input-group mb-3">
                                <input type="email" name="email" id="validationServer01" class="form-control" required
                                       placeholder="อีเมล">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" required name="password"
                                       placeholder="รหัสผ่าน">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">
                                            จดจำรหัสผ่าน
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" name="login" class="btn btn-primary btn-block">ยืนยัน</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>

                        <p class="mb-1">
                            <a href="forgot-password.html">ลืมหรัสผ่าน</a>
                        </p>
                        <p class="mb-0">
                            <a href="register.php" class="text-center">ลงทะเบียนเข้าสู่ระบบ</a>
                        </p>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
        </dev>


    </div>

    <?php
}
?>

<?php
include('includes/footer.php');
?>