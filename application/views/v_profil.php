<!doctype html>
<html class="no-js" lang="en">

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
                    <a href="<?php echo base_url('index.php/dashboard');?>"><img src="<?php echo base_url() ?>assets/images/icon/dispendik.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <?php if($this->session->userdata('level')==='1'):?>
                            <li>
                                <a href="<?php echo base_url('index.php/dashboard');?>" aria-expanded="true"><i class="ti-dashboard"></i><span>Aset</span></a>
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
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i><span>Profile</span></a>
                            </li>
                            <!--ACCESS MENUS FOR STAFF-->
                            <?php elseif($this->session->userdata('level')==='2'):?>
                                <li>
                                <a href="<?php echo base_url('index.php/dashboard');?>" aria-expanded="true"><i class="ti-dashboard"></i><span>Aset</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/pengajuan');?>" aria-expanded="true"><i class="ti-clipboard"></i><span>Pengajuan</span></a>
                            </li>
                            <li>
                                <a href="adminkec.php" aria-expanded="true"><i class="ti-id-badge"></i><span>Admin Kecamatan</span></a>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i><span>Profile</span></a>
                            </li>
                            <?php else :?>
                                <li>
                                <a href="<?php echo base_url('index.php/dashboard');?>" aria-expanded="true"><i class="ti-dashboard"></i><span>Aset</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/pengajuan');?>" aria-expanded="true"><i class="ti-clipboard"></i><span>Pengajuan</span></a>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i><span>Profile</span></a>
                            </li>
                            <?php endif;?>
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
                                <li><a href="<?php echo base_url('index.php/dashboard')?>">Halaman Utama</a></li>
                                <li><span>Profile</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('nama');?><i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('index.php/profil');?>">Profile</a>
                                <a class="dropdown-item" href="<?php echo site_url('login/logout');?>">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="header-title">Profil</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <?php if($this->session->userdata('level')==='1'):?>
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                <th scope="col">No.</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">NIP</th>
                                                    <th scope="col">NO. Hp</th>
                                                    <th scope="col">Alamat</th>
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
                                                <td class="text-center"><?php echo $list->nama_admin;?></td>
                                                <td class="text-center"><?php echo $list->nip;?></td>
                                                <td class="text-center"><?php echo $list->no_hp;?></td>
                                                <td class="text-center"><?php echo $list->alamat;?></td>
                                                <td class="text-center">
                                                    <a class="btn btn-primary btn-xs" href="<?php echo site_url('dashboard/edit/'.$list->nip)?>" title="Edit">
                                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-danger btn-xs" href="<?php echo site_url('dashboard/hapus_data/'.$list->nip)?>" title="Edit">
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
                                        <?php elseif($this->session->userdata('level')==='2'):?>
                                            <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                <th scope="col">No.</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">NIP</th>
                                                    <th scope="col">NO. Hp</th>
                                                    <th scope="col">Alamat</th>
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
                                                <td class="text-center"><?php echo $list->nama_admin;?></td>
                                                <td class="text-center"><?php echo $list->nip;?></td>
                                                <td class="text-center"><?php echo $list->no_hp;?></td>
                                                <td class="text-center"><?php echo $list->alamat;?></td>
                                                <td class="text-center">
                                                    <a class="btn btn-primary btn-xs" href="<?php echo site_url('dashboard/edit/'.$list->nip)?>" title="Edit">
                                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-danger btn-xs" href="<?php echo site_url('dashboard/hapus_data/'.$list->nip)?>" title="Edit">
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
                                        <?php else :?>
                                            <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                <th scope="col">No.</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">NIP</th>
                                                    <th scope="col">Jabatan</th>
                                                    <th scope="col">Jenis Kelamin</th>
                                                    <th scope="col">NO. Hp</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">Tahun Menjabat</th>
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
                                                <td class="text-center"><?php echo $list->nama_lengkap;?></td>
                                                <td class="text-center"><?php echo $list->nip;?></td>
                                                <td class="text-center"><?php echo $list->jabatan;?></td>
                                                <td class="text-center"><?php echo $list->jk;?></td>
                                                <td class="text-center"><?php echo $list->no_hp;?></td>
                                                <td class="text-center"><?php echo $list->alamat;?></td>
                                                <td class="text-center"><?php echo $list->tahun_menjabat;?></td>
                                                <td class="text-center">
                                                    <a class="btn btn-primary btn-xs" href="<?php echo site_url('profil/edit/'.$list->nip)?>" title="Edit">
                                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a class="btn btn-danger btn-xs" href="<?php echo site_url('profil/hapus_data/'.$list->nip)?>" title="Edit">
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
                                        <?php endif;?>
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
        <footer><?php $this->load->view("footer.php"); ?></footer>
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
