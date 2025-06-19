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
        <h3>Akuntansi - Laporan Audit Internal</h3>
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
          <li class="breadcrumb-item active">Lap. Audit Int.</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid default-dashboard2">
  <div class="row">
    <div class="col-xl-12 col-md-12 box-col-80">
      <div class="card ">
        <div class="card-header card-no-header">
          <div class="header-top">
            <h4 class="mb-0">Daftar Laporan Audit Internal</h4>
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
                  <th>Tahun</th>
                  <th>Test</th> <!-- Kolom yg Hilang -->
                  <th>Opt </th>
                </tr>
              </thead>
              <tbody  class="cardTableSOP">
                <?php
                  $no=1;
                  foreach ($row as $data) {
                    echo "<tr>
                    <td>".$no++."</td>
                    <td><div class='user-data'><div><a><h4>".$data['acc_rep_name']."</h4></a><span>".$data['acc_rep_company']." | Upload tgl. ". date("Y-m-d",strtotime($data['date_creation']))."</span></div></div></td>
                    <td>".$data['acc_rep_group']."</td>
                    <td>".$data['acc_rep_year']."</td>
                    <td></td>
                    <td><a href=".$data['acc_rep_link']." target='_blank'><i data-feather='download-cloud'></i></a></td>
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
