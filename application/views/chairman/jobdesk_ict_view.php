<style>
  .default-dashboard2 .last-orders-table thead tr{border-bottom:1px solid #f5f5f5}.default-dashboard2 .last-orders-table thead tr:first-child th{padding-left:0!important}.default-dashboard2 .last-orders-table thead tr:last-child th{padding-right:0!important}.default-dashboard2 .last-orders-table thead tr th{color:#848789;padding:0 5px 11px}.default-dashboard2 .last-orders-table thead tr th:first-child{padding-left:0}.default-dashboard2 .last-orders-table thead tr th:first-child:after{display:none}.default-dashboard2 .last-orders-table tbody tr:last-child td{border-bottom:none!important;padding-right:0!important}.default-dashboard2 .last-orders-table tbody tr:hover td h4{color:var(--theme-default)}.default-dashboard2 .last-orders-table tbody tr:last-child{border-bottom:none}.default-dashboard2 .last-orders-table tbody tr:last-child td{padding-bottom:0}.default-dashboard2 .last-orders-table tbody tr td{padding:18px 5px}.default-dashboard2 .last-orders-table tbody tr td:first-child{padding-left:0!important}.default-dashboard2 .last-orders-table tbody tr td:last-child{padding-right:0!important}.default-dashboard2 .last-orders-table tbody tr td .user-data{align-items:center;display:flex;gap:9px}.default-dashboard2 .last-orders-table tbody tr td .user-data img{border-radius:100%;height:42px;width:42px}.default-dashboard2 .last-orders-table tbody tr td .user-data span{color:#848789}.default-dashboard2 .last-orders-table tbody tr td a h4{font-size:14px;font-weight:600}.default-dashboard2 .last-orders-table tbody tr td .drop-menu{background-color:#f5f5f5;border-radius:0;color:#1f2f3e;line-height:.7;padding:3px 5px}.default-dashboard2 .last-orders-table tbody tr td:nth-child(2){color:#848789}
</style>
<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-xl-4 col-sm-7 box-col-3">
        <h3>ICT - Job Desc</h3>
      </div>
      <div class="col-5 d-none d-xl-block">
        
      </div>
      <div class="col-xl-3 col-sm-5 box-col-4">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">
              <svg class="stroke-icon">
                <use href="<?= base_url()?>assets/svg/icon-sprite.svg#stroke-home"></use>
              </svg></a>
          </li>
          <li class="breadcrumb-item">Dir. Chairman</li>
          <li class="breadcrumb-item">ICT</li>
          <li class="breadcrumb-item active">Job Desk</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid default-dashboard2">
  <div class="row">
    <div class="col-xl-12 col-md-12 box-col-12">
      <div class="card">
        <div class="card-header card-no-border">
          <div class="header-top">
            <h4>Daftar File Job Description Personel ICT </h4>
            <div class="dropdown icon-dropdown setting-menu">
              <button class="btn dropdown-toggle" id="userdropdown3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg>
                  <use href="<?= base_url()?>assets/svg/icon-sprite.svg#setting"></use>
                </svg>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown3"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly </a><a class="dropdown-item" href="#">Yearly</a></div>
            </div>
          </div>
        </div>
        <div class="card-body pt-0">
          <div class="table-responsive"> 
            <table class="last-orders-table table" id="last-orders">
              <thead>
                <tr>
                  <th>Nama PIC</th>
                  <th>Nama Dokumen  </th>
                  <th>Download</th>
                  <th>Upload Tgl</th>
                  <th></th>
                  <th>Action </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($row_jd_ict as $dataJobdesc) {?>
                  <tr> 
                    <td>
                      <div class="user-data">
                        <div><img src="<?= base_url()?>assets/images/dashboard/avtar/2.jpg" alt="avatar"></div>
                        <div> <a href="javascript:void(0)"> 
                            <h4><?= $dataJobdesc['pic_name']?></h4></a><span><?= $dataJobdesc['pic_email']?></span></div>
                      </div>
                    </td>
                    <td><?= $dataJobdesc['jobdesc_name']?></td>
                    <td><?= $dataJobdesc['counter_download']?></td>
                    <td><?= date("Y-m-d",strtotime($dataJobdesc['date_creation'])) ?></td>
                    <td></td>
                    <td> 
                    <!-- <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModallogin" id="linkDwl" data-link="<?=$dataJobdesc['file_link']?>" ><i data-feather="download-cloud"></i></a> -->
                    <a href="<?= $dataJobdesc['file_link']?>" target="_blank"><i data-feather="download-cloud"></i></a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->

<div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModallogin" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content dark-sign-up">
      <div class="modal-body social-profile text-start">
        <div class="modal-toggle-wrapper">
          <h3 class="txt-dark">Informasi Pengguna</h3>
          <p class="txt-dark">
              Dibutuhkan informasi akses kedalam aplikasi.</p>
          <form class="row g-3" id="formAkses">
            <input class="form-control" id="linkAkses" type="text" >
            <div class="col-md-12">
              <label class="form-label txt-dark" for="inputEmailEnter">Email</label>
              <input class="form-control" id="inputEmailEnter" type="email" placeholder="Masukkan Email">
            </div>
            <div class="col-md-12">
              <label class="form-label txt-dark" for="inputPasswordEnter">Password</label>
              <input class="form-control" id="inputPasswordEnter" type="password" placeholder="*********">
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit" data-bs-dismiss="modal">Submit </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <script src="<?=base_url()?>assets/js/jquery-3.5.1.min.js"></script>

<script>
  $("#linkDwl").on("click",function(){
    var link = $(this).data('link');
    console.log(link);

    $("#formAkses #linkAkses").val(link);

  })
</script> -->

