<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Laman Dapodik Kemendikbud RI</title>
    <link rel="shortcut icon" href="<?=base_url().'assets/img/logo-dikdasmen.png'?>" type="image/x-icon">

    <!-- CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url().'assets/css/style.css'?>">
    <link rel="stylesheet" href="<?=base_url().'assets/css/icons/fontawesome/style.min.css'?>">
    <link rel="stylesheet" href="<?=base_url().'assets/css/icons/icomoon/style.css'?>">
    <link rel="stylesheet" href="<?=base_url().'assets/plugins/sweetalert/sweetalert2.css'?>">

    <!-- JS  -->
    <script src="<?=base_url().'assets/plugins/sweetalert/sweetalert2.js'?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="">
</head>
<body>
    <!-- HEADER -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-logo" style="margin-top: 0!important;">
                        <a href="/"><img src="<?=base_url().'assets/img/logo-dikdasmen.png'?>" alt="" class="img-responsive"></a>
                    </div>
                    <div class="header-text">
                        <h1 style="font-size: 30px;margin-top: 5px!important;">Data Pokok Pendidikan Dasar dan Menengah</h1>
                        <p class="lead"><strong>Direktorat Jenderal Pendidikan Anak Usia Dini, Pendidikan Dasar dan Pendidikan Menengah</strong></p>
                        <p class="lead"> Kementerian Pendidikan dan Kebudayaan Republik Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER -->
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #16a085; border-top: 1px solid rgba(0,0,0,0.15);">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container">
                <ul class="navbar-nav mr-auto" >
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #FFFFFF;">BERANDA </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #FFFFFF;">BERITA </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #FFFFFF;">UNDUHAN </a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF;">
                            DATA POKOK
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Data Sekolah</a>
                            <a class="dropdown-item" href="#">Data Peserta Didik</a>
                            <a class="dropdown-item" href="#">Data Rombongan Belajar</a>
                            <a class="dropdown-item" href="#">Data Tenaga Pendidik</a>
                            <a class="dropdown-item" href="#">Data Pegawai</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF;">
                            PROGRES DATA
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Progres Semua Jenjang</a>
                            <a class="dropdown-item" href="#">Progres Data SD</a>
                            <a class="dropdown-item" href="#">Progres Data SMP</a>
                            <a class="dropdown-item" href="#">Progres Data SMA</a>
                            <a class="dropdown-item" href="#">Progres Data SMK</a>
                            <a class="dropdown-item" href="#">Progres Data SLB</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF;">
                            BANTUAN
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Troubleshoot</a>
                            <a class="dropdown-item" href="#">Helpdesk</a>
                            <a class="dropdown-item" href="#">Tentang</a>
                            <a class="dropdown-item" href="#">FAQ</a>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF;">
                            LOGIN
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Manajemen Dinas</a>
                            <a class="dropdown-item" href="#">Manajemen Sekolah</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- CONTENTS -->
    <div class="container">
        <div class="pt-2 pb-2 row">
            <?php $this->view('messages'); ?>	
            <?=@$contents?>
        </div>
    </div>
    <!-- END CONTENTS -->

    <div class="col-lg-12 pt-2 pb-2 text-center text-white" style="background-color:black; position: absolute;">
        Hak Cipta © Kementerian Pendidikan dan Kebudayaan <?=date('Y')?> (100)
    </div>
</body>
</html>