<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="<?=base_url()?>assets/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?=base_url()?>assets/jquery-3.4.0.min.js"></script>
    <script src="<?=base_url()?>assets/Chart.min.js"></script>
    <script src="<?=base_url()?>assets/highcharts.js"></script>
    <script src="<?=base_url()?>assets/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <style>

    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>index.php">หน้าแรก <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>index.php/employee/index">ข้อมูลพนักงาน <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>index.php/line_notify">แจ้งข้อมูลข่าวสารผ่าน Line Notify <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>index.php/email_notify">แจ้งข้อมูลข่าวสารผ่าน Email <span class="sr-only">(current)</span></a>
        </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </nav>
