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
                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/images/icon/dispendik.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <!--ACCESS MENU UNTUK SUPER ADMIN-->
                            <?php if($this->session->userdata('level')==='1'):?>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Aset</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/pengajuan');?>" aria-expanded="true"><i class="ti-clipboard"></i><span>Pengajuan</span></a>
                            </li>
                            <li>
                                <a href="lembaga.php" aria-expanded="true"><i class="ti-home"></i><span>Lembaga</span></a>
                            </li>
                            <li>
                                <a href="adminkec.php" aria-expanded="true"><i class="ti-id-badge"></i><span>Admin Kecamatan</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/profil');?>" aria-expanded="true"><i class="ti-user"></i><span>Profile</span></a>
                            </li>
                            <!--ACCESS MENU UNTUK ADMIN/KOORDINATOR KECAMATAN-->
                            <?php elseif($this->session->userdata('level')==='2'):?>
                                <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Aset</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/pengajuan');?>" aria-expanded="true"><i class="ti-clipboard"></i><span>Pengajuan</span></a>
                            </li>
                            <li>
                                <a href="adminkec.php" aria-expanded="true"><i class="ti-id-badge"></i><span>Admin Kecamatan</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/profil');?>" aria-expanded="true"><i class="ti-user"></i><span>Profile</span></a>
                            </li>
                            <!--ACCESS MENU UNTUK LEMBAGA-->
                            <?php else :?>
                                <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Aset</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/pengajuan');?>" aria-expanded="true"><i class="ti-clipboard"></i><span>Pengajuan</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/profil');?>" aria-expanded="true"><i class="ti-user"></i><span>Profile</span></a>
                            </li>
                            <?php endif;?>
                            <!--END ACCESS MENU-->
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
                                <li><a href="javascript:void(0)">Halaman Utama</a></li>
                                <li><span>Lihat Aset</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">  <?php echo $this->session->userdata('nama'); ?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu"> 
                                <a class="dropdown-item" href="<?php echo base_url('index.php/profil');?>">Profil</a>
                                <a class="dropdown-item" href="<?php echo site_url('login/logout');?>">Log Out</a>
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
                                <h4 class="header-title">Form Aset</h4>
                                <form>
                                    <div class="form-row align-items-center">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Nama Lembaga</label>
                                            <input type="text" class="form-control form-control-sm" id="example-text-input-sm" placeholder="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-form-label" >Kecamatan</label>
                                            <input type="text" class="form-control form-control-sm" id="example-text-input-sm" placeholder="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Sumber Dana</label>
                                            <select class="form-control form-control-sm">
                                                <option>BosDa</option>
                                                <option>BosReg</option>
                                                <option>Hibah</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row align-items-center">    
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Kategori</label>
                                            <select class="form-control form-control-sm">
                                                <option>TANAH</option>
                                                <option>PERALATAN DAN MESIN</option>
                                                <option>GEDUNG DAN BANGUNAN</option>
                                                <option>JALAN, JARINGAN DAN IRIGASI</option>
                                                <option>ASET TETAP LAINNYA</option>
                                                <option>KONSTRUKSI DALAM PENGERJAAN</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Jenis barang</label>
                                            <select class="form-control form-control-sm">
                                                <option>Tanah</option>
                                                <option>Alat Besar</option>
                                                <option>Alat Angkutan</option>
                                                <option>Alat Bengkel Dan Alat Ukur</option>
                                                <option>Alat Pertanian</option>
                                                <option>Alat Kantor Dan Rumah Tangga</option>
                                                <option>Alat Studio, Komunikasi Dan Pemancar</option>
                                                <option>Alat Kedokteran Dan Kesehatan</option>
                                                <option>Alat Laboratorium</option>
                                                <option>Alat Persenjataan</option>
                                                <option>Komputer</option>
                                                <option>Alat Eksplorasi</option>
                                                <option>Alat Pengeboran</option>
                                                <option>Alat Produksi, Pengolahan Dan Pemurnian</option>
                                                <option>Alat Bantu Eksplorasi</option>
                                                <option>Alat Keselamatan Kerja</option>
                                                <option>Alat Peraga</option>
                                                <option>Peralatan Proses/produksi</option>
                                                <option>Rambu - Rambu</option>
                                                <option>Peralatan Olah Raga</option>
                                                <option>Bangunan Gedung</option>
                                                <option>Monumen</option>
                                                <option>Bangunan Menara</option>
                                                <option>Tugu Titik Kontrol/pasti</option>
                                                <option>Jalan Dan Jembatan</option>
                                                <option>Bangunan Air</option>
                                                <option>Instalasi</option>
                                                <option>Jaringan</option>
                                                <option>Bahan Perpustakaan</option>
                                                <option>Barang Bercorak Kesenian/kebudayaan/olahraga</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-row align-items-center">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Nama Barang</label>
                                            <input type="text" class="form-control form-control-sm" id="example-text-input-sm" placeholder="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-form-label" >Merk Barang</label>
                                            <input type="text" class="form-control form-control-sm" id="example-text-input-sm" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row align-items-center">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">toko</label>
                                            <input type="text" class="form-control form-control-sm" id="example-text-input-sm" placeholder="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-form-label" >Tanggal Beli</label>
                                            <input type="date" class="form-control form-control-sm" id="example-text-input-sm" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row align-items-center">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Ukuran/CC</label>
                                            <input type="text" class="form-control form-control-sm" id="example-text-input-sm" placeholder="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-form-label" >Bahan</label>
                                            <input type="text" class="form-control form-control-sm" id="example-text-input-sm" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row align-items-center">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Harga Satuan</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend-sm">
                                                    <div class="input-group-text">Rp.</div>
                                                </div>
                                                <input type="text" class="form-control form-control-sm" id="example-text-input-sm" placeholder=""> 
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="col-form-label" >Banyak Barang</label>
                                            <input type="number" class="form-control form-control-sm" id="example-text-input-sm" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row align-items-center">
                                        <div class="col-sm-6">
                                            <label class="col-form-label" >Total </label>
                                            <input type="text" class="form-control form-control-sm" id="example-text-input-sm" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-row align-items-center">    
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Ruang</label>
                                            <select class="form-control form-control-sm">
                                                <option>RUANG KEPALA SEKOLAH</option>
                                                <option>RUANG GURU</option>
                                                <option>RUANG KELAS</option>
                                                <option>PERPUSTAKAAN</option>
                                                <option>UKS</option>
                                                <option>GUDANG</option>
                                                <option>MUSHOLLA</option>
                                                <option>LABORATURIUM KOMPUTER</option>
                                                <option>LABORATURIUM IPA</option>
                                                <option>RUANG MUSIK</option>
                                                <option>RUANG OLAH RAGA</option>
                                                <option>LAPANGAN</option>
                                                <option>TOILET</option>
                                                <option>RUANG PRAMUKA</option>
                                                <option>RUANG GUGUS</option>
                                                <option>RUANG KETERAMPILAN</option>
                                                <option>KOPERASI</option>
                                                <option>KANTIN</option>
                                                <option>RUANG TU</option>
                                                <option>LABORATURIUM BAHASA</option>
                                                <option>RUANG SERBA GUNA</option>
                                                <option>LAINNYA</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row align-items-center">
                                        <div class="input-group col-sm-6">
                                            <label class="input-group">Foto Kwitansi/Nota</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile02">
                                                <label class="custom-file-label" for="inputGroupFile02">Pilih file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row align-items-center">
                                        <div class="input-group col-sm-6">
                                            <label class="input-group">Foto Barang</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile02">
                                                <label class="custom-file-label" for="inputGroupFile02">Pilih file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row align-items-center">    
                                       <div class="col-auto my-1">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Aset</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white" value="<?php echo base_url('index.php/dashboard/crud') ?>">
                                                   <th class="col">No</th>
                                                    <th scope="col">Jenis Barang/ Nama Barang</th>
                                                    <th scope="col">Merk / Tipe</th>
                                                    <th scope="col">Ukuran / CC</th>
                                                    <th scope="col">Bahan</th>
                                                    <th scope="col">Banyak Barang</th>
                                                    <th scope="col">Harga Satuan</th>
                                                    <th scope="col">Terima Barang Tanggal</th>
                                                    <th scope="col">Dari CV / Toko Penyedia</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">TB/ CAWU</th>
                                                    <th scope="col">Sumber Dana Belanja</th>
                                                    <th scope="col">Jumlah Harga Keseluruhan</th>
                                                    <th scope="col">Ruang</th>
                                                    
                                                    
                                                    <th class="text-center" colspan="2">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    if($c_all>0){
                                                        $no = 0;
                                                        foreach($all as $list){
                                                ?>
                                                <tr>
                                                <td class="text-center"><?php echo ++$no;?></td>
                                                <!--<td class="text-center">
                                                    <img src="" style="width:50px; height:50px">
                                                </td>-->
                                                <!--<td class="text-center"><?php echo $list->plafon_ang;?></td>-->
                                                <td class="text-center"><?php echo $list->jenis_nama;?></td>
                                                <td class="text-center"><?php echo $list->merk;?></td>
                                                <td class="text-center"><?php echo $list->ukuran;?></td>
                                                <td class="text-center"><?php echo $list->bahan;?></td>
                                                <td class="text-center"><?php echo $list->jumlah;?></td>
                                                <td class="text-center"><?php echo $list->harga_satuan;?></td>
                                                <td class="text-center"><?php echo $list->tgl_terima;?></td>
                                                <td class="text-center"><?php echo $list->nama_toko;?></td>
                                                <td class="text-center"><?php echo $list->kategori;?></td>
                                                <td class="text-center"><?php echo $list->tb_cawl;?></td>
                                                <td class="text-center"><?php echo $list->sumber_dana;?></td>
                                                <td class="text-center"><?php echo $list->harga_total;?></td>
                                                <td class="text-center"><?php echo $list->ruang;?></td>
                                                <td class="text-center">
                                                    <a class="btn btn-primary btn-xs" href="<?php echo site_url('dashboard/edit/'.$list->no_kontrak)?>" title="Edit">
                                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-danger btn-xs" href="<?php echo site_url('dashboard/hapus_data/'.$list->no_kontrak)?>" title="Edit">
                                                        <span class="" aria-hidden="true"></span> Hapus
                                                    </a>
                                                    <?php 
                                                            }
                                                        }else{
                                                    ?><tr>
                                                    <td colspan="5"><center>Kosong</center></td>
                                                  </tr>
                                                  <?php 
                                                    }
                                                  ?>
                                                
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
