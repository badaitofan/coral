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
      <div class="col-xl-4 col-sm-7 box-col-3">
        <h3>Secretaris - Dokumen Perijinan</h3>
      </div>
      <div class="col-5 d-none d-xl-block">
      </div>
      <div class="col-xl-3 col-sm-5 box-col-4">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">
              <svg class="stroke-icon">
                <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-home"></use>
              </svg></a></li>
          <li class="breadcrumb-item">Secretary</li>
          <li class="breadcrumb-item active">Perijinan</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid default-dashboard2">
  <div class="row">              
    <!-- Complex headers (rowspan and colspan) Starts-->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header pb-0 card-no-border">
          <div class="header-top">
            <h4>Daftar Dokumen Perijinan Perusahaan</h4>
            <div class="dropdown icon-dropdown setting-menu">
              <button class="btn dropdown-toggle" id="userdropdown60" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg>
                  <use href="../assets/svg/icon-sprite.svg#setting"> </use>
                </svg>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown60"><a class="dropdown-item" href="#">Weekly </a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive"> 
            <table class="last-orders-table table" id="last-orders">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tipe Dokumen Perijinan</th>
                  <th>Catatan</th>
                  <th>Tgl. Masa Berlaku</th>
                  <th>Test</th> <!-- Kolom yg Hilang -->
                  <th>Masa Berlaku </th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($row as $dataPermit) 
                  
                {?>
                  <tr> 
                    <td><?= $no++ ?></td>
                    <td>
                      <div class="user-data">
                        
                        <div> <a href="javascript:void(0)"> 
                            <h4><?= $dataPermit['permit_type']?></h4></a><span><?= $dataPermit['company_name'] ?></span>
                        </div>
                      </div>
                    </td>
                    <td><?= $dataPermit['permit_note']?></td>
                    <td><?= $dataPermit['permit_exp']?></td>
                    <td></td>
                    <td>
                      <?php 
                        $exp= date_create($dataPermit['permit_exp']);
                        $today = date_create();
                        if($today >= $exp){
                          echo "<span class='badge rounded-pill badge-danger text-white'>Expired</span>";
                        }else{
                          $diff = date_diff($exp,$today);
                          echo $diff->y . ' Tahun, '.$diff->m . ' Bulan ';

                        }
                      ?>
                    </td>
                    
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Complex headers (rowspan and colspan) Ends-->
  </div>
</div>
<!-- Container-fluid Ends-->