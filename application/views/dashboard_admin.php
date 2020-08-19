<!doctype html>
<html class="no-js" lang="en">

<!--
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SimAset Sidoarjo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
-->
<?php $this->load->view('_partials/head.php') ?>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="indexadmin.php"><img src="<?php echo base_url() ?>assets/images/icon/dispendik.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Aset</span></a>
                            </li>
                            <li>
                                <a href="pengajuanadmin.php" aria-expanded="true"><i class="ti-clipboard"></i><span>Pengajuan</span></a>
                            </li>
                            <li>
                                <a href="lembaga.php" aria-expanded="true"><i class="ti-home"></i><span>Lembaga</span></a>
                            </li>
                            <li>
                                <a href="adminkec.php" aria-expanded="true"><i class="ti-id-badge"></i><span>Admin Kecamatan</span></a>
                            </li>
                            <li>
                                <a href="profiladmin.php" aria-expanded="true"><i class="ti-user"></i><span>Profile</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-10 col-sm-6 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">Notifikasi <a href="#">tampilkan semua</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>masih kosong</p>
                                                <span>Barusan</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>masih belum ada apa apa</p>
                                                <span>kemarin</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>tetap saja kosong bro....</p>
                                                <span>tadi</span>
                                            </div>
                                        </a>
                                        
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">SimAset Sidoarjo</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="indexadmin.php">Halaman Utama</a></li>
                                <li><span>Lihat Aset</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">UPTD Sidoarjo <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="profiladmin.php">Profile</a>
                                <a class="dropdown-item" href="login.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- overview area end -->
                <!-- market value area start -->
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Aset</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <td scope="col">Aksi</td>
                                                    <th class="col">No</th>
                                                    <th scope="col">Jenis Barang/ Nama Barang</th>
                                                    <th scope="col">Merk / Tipe</th>
                                                    <th scope="col">Ukuran / CC</th>
                                                    <th scope="col">Bahan</th>
                                                    <th scope="col">Banyak Barang</th>
                                                    <th scope="col">Harga Satuan</th>
                                                    <th scope="col">Terima Barang Tanggal</th>
                                                    <th scope="col">Dari CV / Toko Penyedia</th>
                                                    <th scope="col">TB/ CAWU</th>
                                                    <th scope="col">Sumber Dana Belanja</th>
                                                    <th scope="col">Jumlah Harga Keseluruhan</th>
                                                    <th scope="col">Ruang</th>
                                                    <th scope="col">Kondisi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th> 
                                                        <div class="icon-container">
                                                            <span class="ti-more"></span><span class="icon-name"></span>
                                                            <ul class="collapse">
                                                                <li><a href="#">Rubah</a></li>
                                                                <li><a href="#">hapus</a></li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </th>
                                                    <td>1</td>
                                                    <td>AC</td>
                                                    <td>LG</td>
                                                    <td>2pk</td>
                                                    <td>Plastik</td>
                                                    <td>1</td>
                                                    <td>Rp. 5.000.000,00</td>
                                                    <td>01-01-2020</td>
                                                    <td>Hartono</td>
                                                    <td>1</td>
                                                    <td>Hibah</td>
                                                    <td>Rp. 5.000.000,00</td>
                                                    <td>Kantor</td>
                                                    <td>Baik</td>                                                
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  

                
                
               
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer><?php $this->load->view('_partials/footer.php') ?></footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    
    <!-- jquery latest version -->
    <script src="<?php echo base_url() ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="<?php echo base_url() ?>https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="<?php echo base_url() ?>https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="<?php echo base_url() ?>https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "<?php echo base_url() ?>https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="<?php echo base_url() ?>assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="<?php echo base_url() ?>assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
</body>

</html>
