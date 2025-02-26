<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="description" content="Zono admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Zono admin template, dashboard template, flat admin template, responsive admin template, web app"> -->
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?=base_url()?>assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png" type="image/x-icon">
    <title><?=$title?></title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/owlcarousel.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?=base_url()?>assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/responsive.css">
  </head>
  <!-- Test -->
  <body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start   -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="<?= site_url('Dashboard')?>"> <img class="img-fluid for-light" src="<?=base_url()?>assets/images/logo/logo-icon.png" alt=""><img class="img-fluid for-dark" src="<?=base_url()?>assets/images/logo/logo-icon.png" alt=""></a></div>
            <div class="toggle-sidebar">
              <svg class="sidebar-toggle"> 
                <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-animation"></use>
              </svg>
            </div>
          </div>
          <form class="col-sm-4 form-inline search-full d-none d-xl-block" action="#" method="get">
            <div class="form-group">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Type to Search .." name="q" title="" autofocus>
                  <svg class="search-bg svg-color">
                    <use href="<?=base_url()?>assets/svg/icon-sprite.svg#search"></use>
                  </svg>
                </div>
              </div>
            </div>
          </form>
          <div class="nav-right col-xl-8 col-lg-12 col-auto pull-right right-header p-0">
            <ul class="nav-menus">
              <li class="serchinput">
                <div class="serchbox">
                  <svg>
                    <use href="<?=base_url()?>assets/svg/icon-sprite.svg#search"></use>
                  </svg>
                </div>
                <div class="form-group search-form">
                  <input type="text" placeholder="Search here...">
                </div>
              </li>
              <li class="onhover-dropdown"> 
                <div class="notification-box">
                  <svg> 
                    <use href="<?=base_url()?>assets/svg/icon-sprite.svg#Bell"></use>
                  </svg>
                </div>
                <div class="onhover-show-div notification-dropdown"> 
                  <h6 class="f-18 mb-0 dropdown-title">Notifications</h6>
                  <div class="notification-card">
                    <ul>
                      <li>
                        <div class="user-notification">
                          <div><img src="<?=base_url()?>assets/images/avtar/2.jpg" alt="avatar"></div>
                          <div class="user-description"><a href="letter-box.html">
                              <h4>You have new finical page design.</h4></a><span>Today 11:45pm</span></div>
                        </div>
                        <div class="notification-btn">
                          <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                          <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                        </div>
                        <div class="show-btn"><a href="index.html"> <span>Show</span></a></div>
                      </li>
                      <li>
                        <div class="user-notification">
                          <div><img src="<?=base_url()?>assets/images/avtar/17.jpg" alt="avatar"></div>
                          <div class="user-description"><a href="letter-box.html">
                              <h4>Congrats! you all task for today.</h4></a><span>Today 01:05pm</span></div>
                        </div>
                        <div class="notification-btn">
                          <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                          <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                        </div>
                        <div class="show-btn"><a href="index.html"> <span>Show</span></a></div>
                      </li>
                      <li> 
                        <div class="user-notification">
                          <div> <img src="<?=base_url()?>assets/images/avtar/18.jpg" alt="avatar"></div>
                          <div class="user-description"><a href="letter-box.html">
                              <h4>You have new in landing page design.</h4></a><span>Today 06:55pm</span></div>
                        </div>
                        <div class="notification-btn">
                          <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                          <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                        </div>
                        <div class="show-btn"><a href="index.html"> <span>Show</span></a></div>
                      </li>
                      <li>
                        <div class="user-notification">
                          <div><img src="<?=base_url()?>assets/images/avtar/19.jpg" alt="avatar"></div>
                          <div class="user-description"><a href="letter-box.html">
                              <h4>Congrats! you all task for today.</h4></a><span>Today 06:55pm</span></div>
                        </div>
                        <div class="notification-btn">
                          <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                          <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                        </div>
                        <div class="show-btn"> <a href="index.html"> <span>Show</span></a></div>
                      </li>
                      <li> <a class="f-w-700" href="letter-box.html">Check all </a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <div class="mode">
                  <svg class="for-dark">
                    <use href="<?=base_url()?>assets/svg/icon-sprite.svg#moon"></use>
                  </svg>
                  <svg class="for-light">
                    <use href="<?=base_url()?>assets/svg/icon-sprite.svg#Sun"></use>
                  </svg>
                </div>
              </li>
              <li class="profile-nav onhover-dropdown pe-0 py-0">
                <div class="d-flex align-items-center profile-media"><img class="b-r-25" src="<?=base_url()?>assets/images/dashboard/bias.png" alt="">
                  <div class="flex-grow-1 user"><span>Login Portal</span>
                    <p class="mb-0 font-nunito">Pilih 
                      <svg>
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#header-arrow-down"></use>
                      </svg>
                    </p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="javascript:void(0)"><i data-feather="settings"></i><span>Version</span></a></li>
                  <li><a href="javascript:void(0)"><i data-feather="user"></i><span>Developers </span></a></li>
                  <li><a href="<?= site_url('Auth')?>"> <i data-feather="log-in"></i><span>Log In</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">              
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page body Start -->
      <div class="page-body-wrapper"> 
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-layout="stroke-svg">
          <div>
            <div class="logo-wrapper"><a href="<?=site_url('Dashboard')?>"> <img class="img-fluid for-light" src="<?=base_url()?>assets/images/logo/logo-Coral.png" alt=""><img class="img-fluid for-dark" src="<?=base_url()?>assets/images/logo/logo-Coral-Dark.png" alt=""></a>
              <div class="toggle-sidebar">
                <svg class="sidebar-toggle"> 
                  <use href="<?=base_url()?>assets/svg/icon-sprite.svg#toggle-icon"></use>
                </svg>
              </div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="<?=base_url()?>assets/images/logo/logo-icon.png" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="index.html"><img class="img-fluid" src="<?=base_url()?>assets/images/logo/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="pin-title sidebar-main-title">
                    <div> 
                      <h6>Pinned</h6>
                    </div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-1">General</h6>
                    </div>
                  </li>
                  <!-- <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="file-manager.html">
                      <svg class="stroke-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-file"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#fill-file"></use>
                      </svg><span>File manager</span></a>
                  </li> -->
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"  href="<?= site_url('Dashboard')?>">
                      <svg class="stroke-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-home"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#fill-home"></use>
                      </svg><span>Dashboard</span></a>
                    
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"  href="<?= site_url('Berita')?>">
                      <svg class="stroke-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-blog"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-blog"></use>
                      </svg><span>Berita</span></a>
                    
                  </li>
                  <!-- <li class="sidebar-list"> <i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-layout"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#fill-layout"></use>
                      </svg><span>Peraturan</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="<?= site_url('Peraturan/pemerintah')?>">Pemerintah</a></li>
                      <li><a href="<?= site_url('Peraturan/perusahaan')?>">Perusahaan</a></li>
                    </ul>
                  </li> -->
                  <!-- <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"  href="<?= site_url('Struktur')?>">
                      <svg class="stroke-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-blog"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-blog"></use>
                      </svg><span>Struktur Perusahaan</span></a>
                    
                  </li> -->
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"  href="<?= site_url('Kontak')?>">
                      <svg class="stroke-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-blog"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-blog"></use>
                      </svg><span>Kontak</span></a>
                    
                  </li>                  
                  <li class="sidebar-main-title">
                    <div>
                      <h6>Coorporate</h6>
                    </div>
                  </li>
                  <!-- Direktorat Chairman -->
                  <li class="mega-menu sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-others"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#fill-others"></use>
                      </svg><span>Dir. Chairman</span></a>
                    <div class="mega-menu-container menu-content">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>ICT</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="<?=site_url('Chairman/unit_ict')?>">General</a></li>
                                <li><a href="<?=site_url('Chairman/jobdesc_ict')?>">Job Desc</a></li>
                                <li><a href="<?=site_url('Chairman/asset_ict')?>">Aset ICT</a></li>
                                <li><a href="<?=site_url('Chairman/helpdesc_ict')?>">ICT Helpdesk</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5> Corp. Legal</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="<?=site_url('Chairman/unit_legal')?>">General</a></li>
                                <li><a href="<?=site_url('Chairman/jobdesc_legal')?>">Job Desc</a></li>
                                <li><a href="<?=site_url('Chairman/perjanjian_legal')?>">Daftar Perijinan</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>QHSE</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="<?=site_url('Chairman/unit_qhse')?>">General</a></li>
                                <li><a href="<?=site_url('Chairman/jobdesc_qhse')?>">Job Desc</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Corp. Secretary</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="<?=site_url('Chairman/unit_secretary')?>">General</a></li>
                                <li><a href="<?=site_url('Chairman/jobdesc_secretary')?>">Job Desc</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- .end Direktorat Chairman -->
                  <!-- Direktorat Admin & Keuangan -->
                  <li class="mega-menu sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-others"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#fill-others"></use>
                      </svg><span>Dir. Adm & Keu</span></a>
                    <div class="mega-menu-container menu-content">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Keuangan</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="<?=site_url('Adm_Fin/keuangan_general')?>">General</a></li>
                                <li><a href="<?=site_url('Adm_Fin/keuangan_jobdesc')?>">Job Desc</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>Akuntansi</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="<?=site_url('Adm_Fin/akuntansi_general')?>">General</a></li>
                                <li><a href="<?=site_url('Adm_Fin/akuntansi_jobdesc')?>">Job Desc</a></li>
                                <li><a href="<?=site_url('Adm_Fin/akuntansi_laporan')?>">Lap. Keuangan</a></li>
                                <li><a href="<?=site_url('Adm_Fin/akuntansi_laporan_labarugi')?>">Lap. Laba Rugi</a></li>
                                <li><a href="<?=site_url('Adm_Fin/akuntansi_laporan_neraca')?>">Lap. Neraca</a></li>
                                <li><a href="<?=site_url('Adm_Fin/akuntansi_laporan_spt_bulanan')?>">Lap. SPT Bulanan</a></li>
                                <li><a href="<?=site_url('Adm_Fin/akuntansi_laporan_audit_tahunan')?>">Lap. Audit Tahunan</a></li>
                                <li><a href="<?=site_url('Adm_Fin/akuntansi_laporan_analisa_rasio')?>">Lap. Analisa Rasio</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5> General Affr.</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                              <li><a href="<?=site_url('Adm_Fin/unit_ga')?>">General</a></li>
                                <li><a href="<?=site_url('Adm_Fin/jobdesc_ga')?>">Job Desc</a></li>
                                <li><a href="<?=site_url('Adm_Fin/asset_furniture_ga')?>">Asset Furniture</a></li>
                                <li><a href="<?=site_url('Adm_Fin/asset_atk_ga')?>">Asset ATK</a></li>
                                <li><a href="<?=site_url('Adm_Fin/aset_kendaraan_ga')?>">Asset Kendaraan</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5> Purchasing</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="<?=site_url('Adm_Fin/unit_purchasing')?>">General</a></li>
                                <li><a href="<?=site_url('Adm_Fin/jobdesc_purchasing')?>">Job Desc</a></li>
                                <li><a href="<?=site_url('Adm_Fin/vendor_purchasing')?>">Vendor</a></li>
                                <li><a href="<?=site_url('Adm_Fin/purchasing_laporan_pembelian')?>">Laporan Pembelian</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col mega-box">
                            <div class="link-section">
                              <div class="submenu-title">
                                <h5>HRD</h5>
                              </div>
                              <ul class="submenu-content opensubmegamenu">
                                <li><a href="<?=site_url('Adm_Fin/unit_hrd')?>">General</a></li>
                                <li><a href="<?=site_url('Adm_Fin/jobdesc_hrd')?>">Job Desc</a></li>
                                <li><a href="<?=site_url('Adm_Fin/perautan_perusahaan_hrd')?>" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Peraturan Perusahaan">Peraturan Perusahaan</a></li>
                                <li><a href="<?=site_url('Adm_Fin/sk_perusahaan_hrd')?>">SK Perusahaan</a></li>
                                <li><a href="<?=site_url('Adm_Fin/data_karyawan_hrd')?>">Data Karyawan</a></li>
                                <li><a href="<?=site_url('Adm_Fin/jabatan_fungsional_hrd')?>">Jabatan Fungsional</a></li>
                                <li><a href="<?=site_url('Adm_Fin/bpjs_karyawan_hrd')?>">BPJS Karyawan</a></li>
                                <li><a href="<?=site_url('Adm_Fin/data_pelamar_hrd')?>">Data Pelamar</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- .end Direktorat Admin & Keuangan -->

                   <!-- Direktorat BDP -->
                   <li class="mega-menu sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-others"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#fill-others"></use>
                      </svg><span>Dir. BDP</span></a>
                  </li>
                  <!-- .end Direktorat BDP -->

                   <!-- Direktorat BSG -->
                   <li class="mega-menu sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title" href="#">
                      <svg class="stroke-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-others"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#fill-others"></use>
                      </svg><span>Dir. BS Group</span></a>
                  </li>
                  <!-- .end Direktorat BSG -->
                  
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-8">Applications</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="file-manager.html">
                      <svg class="stroke-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-icons"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#fill-icons"></use>
                      </svg><span>Versi App.</span></a>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack">        </i><a class="sidebar-link sidebar-title link-nav" href="kanban.html">
                    <svg class="stroke-icon">
                      <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-user"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="<?=base_url()?>assets/svg/icon-sprite.svg#fill-user"></use>
                    </svg><span>Tim Pengembang</span></a>
                  </li>                  
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <?= $contents ?>
          
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 p-0 footer-copyright">
                <p class="mb-0">Copyright 2025 © Bias | ICT Tim.</p>
              </div>
              <div class="col-md-6 p-0">
                <p class="heart mb-0">Didesain &amp; dikembangkan dengan
                  <svg class="footer-icon">
                    <use href="<?=base_url()?>assets/svg/icon-sprite.svg#heart"></use>
                  </svg>
                </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="<?=base_url()?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="<?=base_url()?>assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?=base_url()?>assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="<?=base_url()?>assets/js/scrollbar/simplebar.js"></script>
    <script src="<?=base_url()?>assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?=base_url()?>assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="<?=base_url()?>assets/js/sidebar-menu.js"></script>
    <script src="<?=base_url()?>assets/js/sidebar-pin.js"></script>
    <script src="<?=base_url()?>assets/js/slick/slick.min.js"></script>
    <script src="<?=base_url()?>assets/js/slick/slick.js"></script>
    <script src="<?=base_url()?>assets/js/header-slick.js"></script>
    <script src="<?=base_url()?>assets/js/chart/morris-chart/raphael.js"></script>
    <script src="<?=base_url()?>assets/js/chart/morris-chart/morris.js"> </script>
    <script src="<?=base_url()?>assets/js/chart/morris-chart/prettify.min.js"></script>
    <script src="<?=base_url()?>assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="<?=base_url()?>assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="<?=base_url()?>assets/js/chart/apex-chart/moment.min.js"></script>
    <script src="<?=base_url()?>assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="<?=base_url()?>assets/js/dashboard/default.js"></script>
    <script src="<?=base_url()?>assets/js/notify/index.js"></script>
    <script src="<?=base_url()?>assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="<?=base_url()?>assets/js/datatable/datatables/datatable.custom1.js"></script>
    <script src="<?=base_url()?>assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="<?=base_url()?>assets/js/owlcarousel/owl-custom.js"></script>
    <!-- <script src="<?=base_url()?>assets/js/typeahead/handlebars.js"></script>
    <script src="<?=base_url()?>assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="<?=base_url()?>assets/js/typeahead/typeahead.custom.js"></script>
    <script src="<?=base_url()?>assets/js/typeahead-search/handlebars.js"></script>
    <script src="<?=base_url()?>assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="<?=base_url()?>assets/js/owlcarousel/owl.carousel.js"></script> -->
    <script src="<?=base_url()?>assets/js/owlcarousel/owl-custom.js"></script>
    <script src="<?=base_url()?>assets/js/height-equal.js"></script>
    <script src="<?= base_url()?>assets/js/bookmark/jquery.validate.min.js"></script>
    <script src="<?= base_url()?>assets/js/bookmark/custom.js"></script>
    <script src="<?= base_url()?>assets/js/contacts/custom.js"></script>
    <script src="<?= base_url()?>assets/js/tooltip-init.js"></script>
    <script src="<?= base_url()?>assets/js/modalpage/validation-modal.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?=base_url()?>assets/js/script.js"></script>
    <!-- <script src="<?=base_url()?>assets/js/general-widget.js"></script> -->
    <!-- <script src="<?=base_url()?>assets/js/theme-customizer/customizer.js"></script> -->
    <!-- Plugin used-->
     <script>
      $(function(){
        var url = window.location;
        // console.log(url);
        $('ul.sidebar-links a').filter(function(){
          return this.href == url;
        }).addClass('active');

        $('ul.sidebar-submenu a').filter(function(){
          return this.href == url;
        }).parentsUntil(".sidebar-links > .sidebar-submenu")
        .css({'display':'block'}).prev('a').addClass('active');

        $('div.submenu-title').filter(function(){
          return this.href == url;
        }).addClass('active');
        
        $('ul.submenu-content a').filter(function(){
          return this.href == url;
        }).parentsUntil(".sidebar-links > .submenu-content")
        .css({'display':'block'}).prev('a').addClass('active');

      });
      // console.log(window.location);

      // Cetak IP
      $.getJSON("https://api.ipify.org/?format=json", function(e) {
          console.log(e.ip);
          // console.log(e.country);
      });
     </script>
  </body>
</html>