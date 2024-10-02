<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#1a365d" />
    <title>Poolex</title>
    <!-- Icon title -->
    <link rel="shortcut icon" type="image/x-icon" href="../../../public//images/logo/icon-logo.svg" />
    <!-- fontAwesome Css -->
    <!-- <link rel="stylesheet" href="./assets/css/Library/fontawesome.min.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- Swiper Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Bootstrap Css -->
    <link rel="stylesheet" type="text/css" href="../../public//css/Library/bootstrap.min.css" />

    <!-- Font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />

    <!-- Style Css -->
    <link rel="stylesheet" href="../../public/css/main-style.css" />
</head>
<?php
session_start();  
?>

<body>
    <!-- Begin Content -->
    <main class="home">
        <!-- Begin Login -->
        <section class="dashboard">
            <div class="dashboard-wrapper">
                <div class="row">
                    <div class="dashboard-sidebar collapse show" id="collapseExample">
                        <div class="sidebar-logo">
                            <img src="../../public/images/dashboard/sidebar-logo.png" alt="" style="width: 100%" />
                        </div>
                        <div class="sidebar-header">
                            <div class="sidebar-header__avatar">
                                <img src="../../public/images/dashboard/sidebar-avatar.png" alt=""
                                    style="width: 100%" />
                            </div>
                            <div class="sidebar-header__function">Quản trị viên</div>
                            <div class="sidebar-header__name text-secondary">Admin</div>
                        </div>
                        <div class="sidebar-desc">
                            <div class="sidebar-desc__main">Quản lý nhân sự</div>
                            <div class="sidebar-desc__sub text-secondary">Hỗ trợ quản lý nhân sự</div>
                        </div>
                        <div class="sidebar-menu">
                            <?php include $_SERVER['DOCUMENT_ROOT'].'/QLNS-php/src/views/modules/admin-sidebar.php'?>
                        </div>
                    </div>
                    <div class="dashboard-main flex-1">
                        <div class="dashboard-main-header">
                            <?php include $_SERVER['DOCUMENT_ROOT'].'/QLNS-php/src/views/modules/header.php'?>
                        </div>
                        <div class="dashboard-content">
                            <?php include $_SERVER['DOCUMENT_ROOT'].'/QLNS-php/src/views/modules/overview-admin.php'?>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <!-- Page Content -->
            </div>
        </section>
        <!-- End Login -->
    </main>
    <!-- End Content -->
    <!-- Jquery JS -->
    <script type="text/javascript" src="../../public/js/Library/jquery.min.js"></script>
    <!-- Script Bootstrap -->
    <script type="text/javascript" src="../../public/js/Library/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Select2 JS -->
    <script type="text/javascript" src="../../public/js/Library/select2.full.min.js"></script>

    <!-- Demo Swiper -->

    <!-- General Script -->
    <script type="text/javascript" src="../../public/js/general.js"></script>
    <script type="text/javascript" src="../../public/js/duy-header.js"></script>
</body>

</html>