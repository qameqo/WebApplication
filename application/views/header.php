<head>

    <title>G Dragon Autotech CO.,LTD</title>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>./pic/logo.jpg">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
  
   <!-- AJAX -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Icons -->
  <link href="<?php echo base_url(); ?>assets argon/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets argon/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  
  <!-- Argon CSS -->
  <link type="text/css" href="<?php echo base_url(); ?>/assets argon/css/argon.css?v=1.1.0" rel="stylesheet">

  <style>
  body,h1,h2,h3,h4,h5,.tooltip,h6,a,p,button,span,label,option{
          color: #333;
          font-family: 'Prompt', sans-serif;
  }
<?php $id = $this->session->userdata('ID');  
  ?>
  </style>
  
  <nav class="navbar navbar-expand-lg bg-danger shadow p-3 ">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url("Firstpage");?>" style="color: white" >G Dragon Autotech</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="index.html">
                            <img src="assets/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>

            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="#">
                        <span class="" style="color: white">สัญญาเช่า</span>
                        <!--  <?php echo $this->session->userdata('Email');
                        
                         ?> -->
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="" style="color: white">ลงทะเบียนรถยนต์</span></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                        <a class="dropdown-item" href="<?php echo base_url("ConCarregis");?>">ลงทะเบียนรถยนต์</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="<?php echo base_url('Dataregis');?>">ข้อมูลการลงทะเบียน</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ni ni-single-02" style="color: white;"></i>
                        <span class="nav-link-inner--text d-lg-none">Profile</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="<?php echo base_url("OwnerManage");?>">แก้ไขข้อมูลส่วนตัว</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="<?php echo base_url("Homeowner");?>">ออกจากระบบ</a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>
</head>

<body>