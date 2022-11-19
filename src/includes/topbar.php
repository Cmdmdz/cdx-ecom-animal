<!-- Navbar -->

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <?
        if (!isset($_SESSION['token'])) {
        } else {
            ?>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" onblur="noti()" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge" id="countNoti"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header"></span>
                    <div class="dropdown-divider"></div>
                    <?
                    include_once('config/function.php');
                    $data = new DB_con();
                    $post = $data->countNoti();
                    foreach ($post as $result) {
                        $id = $result['case_id'];
                    ?>
                    <a onclick="showModalDetailCase(<?php echo $id ?>)" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> <? echo $result['contact_id']?>
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                        <?
                    }
                    ?>
                </div>


            </li>
            <?
        }
        ?>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
