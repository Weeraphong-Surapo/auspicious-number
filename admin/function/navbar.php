<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Backend</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');

        * {
            font-family: 'Prompt', sans-serif;
        }

        .menus {
            transition: .2s ease-in;
        }
        .menus span{
            font-weight: 400;
        }

        .menus:hover {
            background: #872BE4;
        }
    </style>

</head>

<body id="page-top">

</script>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary shadow-lg sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mb-3" href="dash.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ระบบเบอร์เทพ</div>
            </a>

            <!-- Heading -->
            <div class="sidebar-heading text-light" style="font-weight: 400; opacity: .7;">
                ข้อมูลพื้นฐาน
            </div>
            <!-- Divider -->

            <li class="nav-item active">
                <a class="menus year nav-link py-2 px-3 home" href="index.php">
                    <span class="d-flex align-items-center"><i class="material-icons fs-5 me-2">&#xe616;</i>หน้าหลัก</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="menus year nav-link py-2 px-3 insertPhone" href="insert_phone.php">
                    <span class="d-flex align-items-center"><i class="material-icons fs-5 me-2">&#xe616;</i>เพิ่มเบอร์มงคล</span>
                </a>
            </li>


            <li class="nav-item active">
                <a class="menus level-depart nav-link py-2 px-3 insert_category" href="insert_category.php">    
                    <span class="d-flex align-items-center"><i class="material-icons fs-5 me-2">&#xe53b;</i>เพิ่มประเภท</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="menus prefix nav-link py-2 px-3 category_price" href="category_price.php">
                    <span class="d-flex align-items-center"><i class="material-icons fs-5 me-2">&#xe06d;</i>ช่วงราคา</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="menus prefix nav-link py-2 px-3 news" href="news.php">
                    <span class="d-flex align-items-center"><i class="material-icons fs-5 me-2">&#xe06d;</i>บทความ</span>
                </a>
            </li>




        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <br>

                <div class="container-fluid">


                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-3 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <div>ระบบเบอร์เทพ</div>

                        <!-- Topbar Search -->
                        <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form> -->

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-center mr-2 d-none d-lg-inline text-gray-600 small">
                                        <span class="fs-5">แอดมิน</span> <br> <?php echo $_SESSION['email'];?>
                                    </span>
                                    <img class="img-profile rounded-circle" src="https://us.123rf.com/450wm/anatolir/anatolir2011/anatolir201105528/159470802-jurist-avatar-icon-flat-style.jpg?ver=6">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <!-- <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a> -->
                                    <!-- <div class="dropdown-divider"></div> -->
                                    <a class="dropdown-item" href="#" id="logout" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->


                