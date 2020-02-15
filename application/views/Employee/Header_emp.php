<head>

    <title>G Dragon Autotech CO.,LTD</title>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>./pic/logo.jpg">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Data Table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Material Kit CSS -->
    <link href="<?php echo base_url(); ?>assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />

    <style>
        .navbar-expand {
            -sm|-md|-lg|-xl
        }
    </style>

    <nav class="navbar navbar-color-on-scroll fixed-top navbar-expand-lg bg-danger" color-on-scroll="100">
        <div class="container">
            <div class="navbar-translate active">
                <a class="navbar-brand active" href="<?php echo site_url(); ?>Emp_car/refresh_car">G Dragon Autotech</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="font-size: 16px">
                            จัดการข้อมูลบุลคล
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo site_url(); ?>emp/emp_edit">แก้ไขข้อมูลส่วนตัว</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="font-size: 16px">
                            จัดการข้อมูลเกี่ยวกับรถยนต์
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item"
                                href="<?php echo site_url(); ?>Emp_car">จัดการข้อมูลการรับรถยนต์</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"
                                href="<?php echo site_url(); ?>Emp_car/index_2">ตรวจสอบข้อมูลการรับรถยนต์</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"
                                href="<?php echo site_url(); ?>Emp_rental">จัดการข้อมูลการโอนเงินเช่ารถยนต์</a>
                            <a class="dropdown-item"
                                href="<?php echo site_url('Emp_rental/index_2');?>">จัดการข้อมูลการรับรถยนต์เช่า</a>
                            <a class="dropdown-item"
                                href="<?php echo site_url('Emp_rental/index_3');?>">จัดการข้อมูลการคืนรถยนต์เช่า</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"
                                href="<?php echo site_url('Emp_rental/index_4');?>">ตรวจสอบข้อมูลการเช่าทั้งหมด</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="font-size: 16px">
                            จัดการข้อมูลปัญหา
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">จัดการข้อมูลซ่อมรถยนต์</a>
                            <a class="dropdown-item" href="#">จัดการข้อมูลประกันรถยนต์ </a>
                        </div>
                    </li>
                </ul>
                <!-- <ul class="navbar-nav">
                    <li class="nav-item active">
                        <button class="btn btn-warning btn-sm ml-2">refresh website<i class="material-icons">cached</i></button>
                    </li>
                </ul> -->
            </div>


            <a href="<?php echo base_url("Homeowner");?>" class="btn btn-default btn-sm" style="font-size: 16px">ออกจากระบบ</a>
        </div>
        </div>
    </nav>

</head>

<body style="font-family: 'Quark', 'Quark', sans-serif;" class="index-page sidebar-collapse">