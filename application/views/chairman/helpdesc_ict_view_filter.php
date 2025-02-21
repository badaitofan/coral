<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-xl-4 col-sm-7 box-col-3">
        <h3>Helpdesk ICT</h3>
      </div>
      <div class="col-5 d-none d-xl-block">
        <!-- Page Sub Header Start-->
        
        <!-- Page Sub Header end
        -->
      </div>
      <div class="col-xl-3 col-sm-5 box-col-4">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=site_url('Dashboard')?>">
              <svg class="stroke-icon">
                <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
              </svg></a></li>
          <li class="breadcrumb-item">ICT</li>
          <li class="breadcrumb-item active"><a href="<?=site_url('Chairman/helpdesc_ict')?>">Helpdesk</a></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid basic_table">
  <div class="row">
    <!-- Complex headers (rowspan and colspan) Starts-->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header pb-0 card-no-border">
          <h4>Daftar Helpdesk Support</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive custom-scrollbar">
            <table class="display" id="basic-6">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama User</th>
                  <th>Informasi</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                  <th>Opt</th>
                </tr>
              </thead>
              <tbody>
                <!-- <?php $no=1;
                foreach ($row as $data) {
                ?>
                <tr>
                  <td><?= $no++;?></td>
                  <td><?= $data['nama']?></td>
                  <td><?= $data['informasi']?></td>
                  <td><?= $data['status']?></td>
                  <td><?= $data['input_tgl']?></td>
                  <td class="action"> <a class="pdf" href="sample.pdf" target="_blank"><i class="icofont icofont-file-pdf"></i></a></td>
                </tr>
                <?php } ?> -->
              </tbody>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama User</th>
                  <th>Informasi</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                  <th>Opt</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Complex headers (rowspan and colspan) Ends-->
  </div>
</div>
          <!-- Container-fluid Ends-->