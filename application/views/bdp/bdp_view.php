<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-xl-4 col-sm-7 box-col-3">
                <h3>BDP - Struktur & Karyawan</h3>
            </div>
            <div class="col-5 d-none d-xl-block">
                
            </div>
            <div class="col-xl-3 col-sm-5 box-col-4">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= site_url('Dashboard')?>">
                    <svg class="stroke-icon">
                        <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-home"></use>
                    </svg></a></li>
                <li class="breadcrumb-item">Dir. BDP Group</li>
                <li class="breadcrumb-item active">Struktur</li>
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
                <h4>Struktur Organisasi - Direktorat BDP Group</h4><span>periode RKAP 2025</span>
                </div>
                <div class="card-body">
                    <div class="row">
                    <img class="img-thumbnail" src="<?= base_url()?>assets/images/struktur/direktorat-bdp.png" itemprop="thumbnail" alt="Image description">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 proorder-md-8 box-col-6">
            <div class="card">
                <div class="card-header">
                    <div class="header-top">
                        <h4>Personil</h4>
                        <div class="d-flex align-items-center justify-content-center latest-sales-btn">
                            <button class="btn btn-square btn-outline-primary btn-sm btn-pilot" type="button" title="btn btn-square btn-outline-primary btn-sm">Pemanduan</button>
                            <button class="btn btn-square btn-outline-primary btn-sm btn-layup" type="button" title="btn btn-square btn-outline-primary btn-sm">Layup</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="vertical-scroll scroll-demo scroll-b-none">
                        <div class="list-group main-lists-content data-personil">
                            <!-- <a class="list-group-item list-group-item-action active list-hover-primary" href="#" aria-current="true">
                            </a> -->
                        </div>
                    </div>

                    <!-- <div class="notification-card">
                        <ul class="data-personil">
                            
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Container-fluid Ends-->

    <script src="<?=base_url()?>assets/js/jquery-3.6.0.min.js"></script>
    <script>
        $(document).on("click",".btn-pilot",function(){
            var group = "PEMANDUAN";
            jQuery.ajax({
                url: "<?=base_url();?>BDP_Group/getPersonil",
                data: 'group='+group,
                type: "POST",
                success:function(data){
                    $(".data-personil").html(data);
                }
            })
        })

        $(document).on("click",".btn-layup",function(){
            var group = "LAYUP";
            jQuery.ajax({
                url: "<?=base_url();?>BDP_Group/getPersonil",
                data: 'group='+group,
                type: "POST",
                success:function(data){
                    $(".data-personil").html(data);
                }
            })
        })
    </script>