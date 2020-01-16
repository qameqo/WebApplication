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

    <nav class="navbar  fixed-top navbar-expand-lg bg-danger">
        <div class="container">
            <div class="navbar-translate active">
                <a class="navbar-brand active" href="<?php echo site_url(); ?>Emp">G Dragon Autotech</a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="font-size: 16px">
                            จัดการข้อมูลบุลคล
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
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
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                            <a class="dropdown-item" href="<?php echo site_url(); ?>Emp_car">จัดการข้อมูลการรับรถยนต์</a>
                            <a class="dropdown-item" href="#">จัดการการเช่ารถยนต์</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" style="font-size: 16px">
                            จัดการข้อมูลปัญหา
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                            <a class="dropdown-item" href="#">จัดการข้อมูลซ่อมรถยนต์</a>
                            <a class="dropdown-item" href="#">จัดการข้อมูลประกันรถยนต์ </a>
                        </div>
                    </li>
                </ul>
            </div>
                <button type="button" class="btn btn-primary">
                    Notifications <span class="badge badge-default">4</span>
                </button>

                <a href="<?php echo base_url("Homeowner");?>" class="btn btn-default btn-sm">logout</a>
            </div>
        </div>
    </nav>

</head>

<body style="font-family: 'Quark', 'Quark', sans-serif;">