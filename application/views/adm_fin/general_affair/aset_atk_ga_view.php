<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-xl-4 col-sm-7 box-col-3">
                <h3>General Affair - Aset ATK</h3>
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
                    <li class="breadcrumb-item active">GA</li>
                    <!-- <li class="breadcrumb-item ">General</li> -->
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
            <h4>Daftar ATK GA</h4>
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
                  <th>ID Barang</th>
                  <th>Nama Barang </th>
                  <th>Jenis Barang</th>
                  <th>Stok Saat Ini</th> 
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($row as $dataAsset) 
                  
                {?>
                  <tr> 
                    <td><?= $no++ ?></td>
                    <td> <?= $dataAsset['id_barang']; ?> </td>
                    <td> <?= $dataAsset['nama_barang']; ?> </td>
                    <td> <?= $dataAsset['nama_jenis']; ?> </td>
                    <td> <?= $dataAsset['stok']; ?> </td>           
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