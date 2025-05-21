<style>
  .default-dashboard2 .last-orders-table thead tr
    {
      border-bottom:1px solid #f5f5f5
    }
  .default-dashboard2 .last-orders-table thead tr:first-child th
    {
      padding-left:0!important
    }
  .default-dashboard2 .last-orders-table thead tr:last-child th
    {
    padding-right:0!important
    }
  .default-dashboard2 .last-orders-table thead tr th
    {color:#848789;padding:0 5px 11px}
    .default-dashboard2 .last-orders-table thead tr th:first-child{padding-left:0}
    .default-dashboard2 .last-orders-table thead tr th:first-child:after{display:none}
    .default-dashboard2 .last-orders-table tbody tr:last-child td{border-bottom:none!important;padding-right:0!important}
    .default-dashboard2 .last-orders-table tbody tr:hover td h4{color:var(--theme-default)}
    .default-dashboard2 .last-orders-table tbody tr:last-child{border-bottom:none}
    .default-dashboard2 .last-orders-table tbody tr:last-child td{padding-bottom:0}
    .default-dashboard2 .last-orders-table tbody tr td{padding:18px 5px}
    .default-dashboard2 .last-orders-table tbody tr td:first-child{padding-left:0!important}
    .default-dashboard2 .last-orders-table tbody tr td:last-child{padding-right:0!important}
    .default-dashboard2 .last-orders-table tbody tr td .user-data{align-items:center;display:flex;gap:9px}
    .default-dashboard2 .last-orders-table tbody tr td .user-data img{border-radius:100%;height:42px;width:42px}
    .default-dashboard2 .last-orders-table tbody tr td .user-data span{color:#848789}
    .default-dashboard2 .last-orders-table tbody tr td a h4{font-size:14px;font-weight:600}
    .default-dashboard2 .last-orders-table tbody tr td .drop-menu{background-color:#f5f5f5;border-radius:0;color:#1f2f3e;line-height:.7;padding:3px 5px}
    .default-dashboard2 .last-orders-table tbody tr td:nth-child(2){color:#848789}
</style>

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-xl-6 col-sm-7 box-col-3">
        <h3>Akuntansi - Laporan Laba Rugi</h3>
      </div>
      <div class="col-3 d-none d-xl-block">
      </div>
      <div class="col-xl-3 col-sm-5 box-col-4">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">
              <svg class="stroke-icon">
                <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-home"></use>
              </svg></a></li>
          <li class="breadcrumb-item">Acct</li>
          <li class="breadcrumb-item active">Lap. Laba Rugi</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid default-dashboard2">
  <div class="row">
    <div class="col-xl-3 box-col-3">
      <div class="email-wrap bookmark-wrap">
        <div class="md-sidebar"><a class="btn btn-primary md-sidebar-toggle" href="javascript:void(0)">bookmark filter</a>
          <div class="md-sidebar-aside job-left-aside custom-scrollbar">
            <div class="email-left-aside">
              <div class="card">
                <div class="card-body">
                  <div class="email-app-sidebar left-bookmark">
                    <div class="d-flex align-items-center">
                      <!-- <div class="media-size-email"><img class="me-3 rounded-circle" src="../assets/images/user/user.png" alt=""></div>
                      <div class="flex-grow-1">
                        <h4>Standart Operating Procedure</h4>
                        <p><hr></p>
                      </div> -->
                    </div>
                    <ul class="nav main-menu custom-scrollbar" role="tablist"> 
                      <li class="nav-item">
                        <a href="javascript:;" class="badge-light-primary btn-block btn-mail txt-primary w-100 catg" type="button" data-category="ALL"><i class="me-2" data-feather="filter"></i> </a>
                      </li>
                      <li class="nav-item"><span class="main-title"> Kategori</span></li>
                      <li>                  
                        <a href="<?= site_url('BS_Group/laporan_labarugi/PBS')?>" class="example-popover" data-category="K3L"><span class="title"> PBS</span></a>
                      </li>
                      <li><a href="<?= site_url('BS_Group/laporan_labarugi/BS')?>" class="catg" data-category="HRD"><span class="title"> BS</span></a></li>
                      <li><a href="<?= site_url('BS_Group/laporan_labarugi/ESA')?>" class="catg" data-category="Quality"><span class="title"> ESA</span></a></li>
                      <li><a href="<?= site_url('BS_Group/laporan_labarugi/BSJ')?>" class="catg" data-category="Quality"><span class="title"> BSJ</span></a></li>
                      <li><a href="<?= site_url('BS_Group/laporan_labarugi/BSM')?>" class="catg" data-category="Quality"><span class="title"> BSM</span></a></li>
                                                                                  
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-9 col-md-12 box-col-80">
      <div class="card ">
        <div class="card-header card-no-header">
          <div class="header-top">
            <h4 class="mb-0">Daftar Laporan Laba-Rugi <?=$comp?></h4>
            <!-- <div class="dropdown icon-dropdown setting-menu ms-2">
              <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
            </div> -->
          </div>
        </div>

        <div class="card-body">
          <div class="text-center">
            <div class="spinner-border d-none" role="status" style="width: 3rem; height: 3rem; color:2b5f60" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
          </div>
          <div class="table-responsive"> 
            <table class="last-orders-table" id="last-orders">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Dokumen</th>
                  <th style="width:10%">Kategori</th>
                  <th>Revisi</th>
                  <th>Test</th> <!-- Kolom yg Hilang -->
                  <th>Opt </th>
                </tr>
              </thead>
              <tbody  class="cardTableSOP">
                <?php
                  $no=1;
                  foreach ($row as $dataSOP) {
                    echo "<tr>
                    <td>".$no++."</td>
                    <td><div class='user-data'><div><a><h4>".$dataSOP['acc_rep_name']."</h4></a><span>".$dataSOP['acc_rep_company']." | Upload tgl. ". date("Y-m-d",strtotime($dataSOP['date_creation']))."</span></div></div></td>
                    <td>".$dataSOP['acc_rep_group']."</td>
                    <td>".$dataSOP['acc_rep_year']."</td>
                    <td></td>
                    <td><a href=".$dataSOP['acc_rep_link']." target='_blank'><i data-feather='download-cloud'></i></a></td>
                    </tr>";
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
<!-- Container-fluid Ends-->
 <script src="<?=base_url()?>assets/js/jquery-3.5.1.min.js"></script>
 <script>
  // $(document).on("click",".catg",function(){
  //   var ctg = $(this).data('category');
  //   $(".spinner-border").removeClass('d-none');

  //   console.log(ctg);
  //   jQuery.ajax({
  //     url: "<?=base_url()?>Chairman/get_filtered_SOP",
  //     data :'category='+ctg,
  //     type : "POST",
  //     success: function (data){
  //       // notify();
  //       $(".spinner-border").addClass('d-none');
  //       $(".cardTableSOP").html(data);
  //     }
  //   })
  // })

 </script>
