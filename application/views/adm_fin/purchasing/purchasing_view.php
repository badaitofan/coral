<div class="container-fluid">
    <div class="page-title">
        <div class="row">
        <div class="col-xl-4 col-sm-7 box-col-3">
            <h3>Purchasing - Info General</h3>
        </div>
        <div class="col-4 d-none d-xl-block">
            
        </div>
        <div class="col-xl-4 col-sm-5 box-col-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= site_url('Dashboard')?>">
                    <svg class="stroke-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-home"></use>
                    </svg></a></li>
                <li class="breadcrumb-item">Dir. Adm. & Keuangan</li>
                <li class="breadcrumb-item active">Purchasing</li>
                <!-- <li class="breadcrumb-item ">General</li> -->
            </ol>
        </div>
        </div>
    </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
    <div class="row">
        <div class="col-xl-8 box-col-7 proorder-md-1">
            <div class="card">
                <div class="card-header pb-0">
                <h4>Struktur Organisasi - Divisi Purchasing</h4><span>periode RKAP 2025</span>
                </div>
                <div class="card-body">
                    <div class="row">
                    <img class="img-thumbnail" src="<?= base_url()?>assets/images/struktur/direktorat-administrasi.png" itemprop="thumbnail" alt="Image description">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 proorder-md-8 box-col-6">
            <div class="card">
                <div class="card-header">
                    <div class="header-top">
                        <h4>Personil</h4>
                        
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="notification-card">
                        <ul>
                            <?php foreach ($row as $dataPersonil) {?>                            
                                <li> 
                                    <div class="user-notification">
                                        <div><img src="<?=base_url()?>assets/images/user/<?= $dataPersonil['personil_photo']?>" alt="avatar"></div>
                                        <div class="user-description"><a href="letter-box.html">
                                            <h4><?= $dataPersonil['personil_name']?></h4></a> <h4><?= $dataPersonil['personil_position']?></h4><span><?= $dataPersonil['personil_email']?></span>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                                <!-- <div class="user-notification">
                                    <div><img src="../assets/images/dashboard/avtar/2.jpg" alt="avatar"></div>
                                    <div class="user-description"><a href="letter-box.html">
                                        <h4>Tofan W. Bakti</h4></a> <h4>Manager</h4><span>tofan.bakti@biasmandirigroup.id</span>
                                    </div>
                                </div> -->
                                <!-- <div class="show-btn"><a href="index.html"> <span>Show</span></a></div> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Container-fluid Ends-->