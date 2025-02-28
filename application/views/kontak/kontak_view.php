<link rel="stylesheet" href="<?=base_url()?>assets/css/style-custom-table.css">
<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-xl-4 col-sm-7 box-col-3">
        <h3>Informasi Kontak Karyawan</h3>
      </div>
      <div class="col-5 d-none d-xl-block">
        <!-- Page Sub Header Start-->
        
        <!-- Page Sub Header end
        -->
      </div>
      <div class="col-xl-3 col-sm-5 box-col-4">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">
              <svg class="stroke-icon">
                <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-home"></use>
              </svg></a></li>
          <li class="breadcrumb-item">General</li>
          <li class="breadcrumb-item active">Kontak</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid default-dashboard">
  <div class="row">
    <div class="col-xl-6 col-sm-12 proorder-md-9 box-col-6">
      <div class="card">
        <div class="card-header"> 
          <h4>Daftar Kontak </h4>
          <span><?php
            // $this->db->from();
            echo $this->db->count_all_results('tb_contact_personil')." Anggota";
          ?></span>
          <div class="header-top"> 
            <!-- <div class="dropdown icon-dropdown setting-menu">
              <button class="btn dropdown-toggle" id="userdropdown22" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg>
                  <use href="<?=base_url()?>assets/svg/icon-sprite.svg#setting"> </use>
                </svg>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown22"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly </a></div>
            </div> -->
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive custom-scrollbar"> 
            <div id="project-summary_wrapper" class="dataTables_wrapper no-footer">
              <!-- <div id="project-summary_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="" aria-controls="project-summary"></label>
              </div> -->
              <table class="project-summary table dataTable no-footer" id="project-summary" role="grid" style="width: 511px;">
                <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="project-summary" rowspan="1" colspan="1" style="width: 45px;" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>
                    <th class="sorting" tabindex="0" aria-controls="project-summary" rowspan="1" colspan="1" style="width: 197px;" aria-label="Project Name: activate to sort column ascending">Nama</th>
                    <th class="sorting" tabindex="0" aria-controls="project-summary" rowspan="1" colspan="1" style="width: 94px;" aria-label="Payment: activate to sort column ascending">Option</th>
                  </tr>
                </thead>
                <tbody>    
                  <?php 
                    $no = 0;
                    foreach ($row as $dataKontak) {?>
                  <tr role="row" class="odd">
                    <td class="f-w-600 sorting_1">
                      <img class="img-50 img-fluid m-r-20 rounded-circle update_img_0" src="<?=base_url('assets/images/user/').$dataKontak['cp_photo']?>" alt="">
                    </td>
                    <td> 
                        <h4 class="f-w-600"><span class="first_name_0 f-w-600"><?= $dataKontak['cp_name'] ?></span></h4>
                      <p class="email_add_0 text-muted"><?= $dataKontak['cp_email'] ?></p>
                    </td>
                    
                    <td class="txt-success"><a href="javascript:;" class="seqid" data-seqid="<?= $dataKontak['cp_seq']?> "><i data-feather="arrow-right-circle" class="mt-n1"></i></a> </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-sm-12 proorder-md-9 box-col-6 fade hide" id="tabDetailKontak">
      <div class="card mb-3 sticky-top">
        <div class="card-header">
          <h4>Detail Kontak</h4>
          <!-- <span class="f-14 pull-right mt-0">5 Contacts</span> -->
        </div>
        <div class="card-body list-persons">
          <div class="tab-pane contact-tab-0 tab-content-child" role="tabpanel" aria-labelledby="v-pills-user-tab">
            <div class="profile-mail">
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>


</div>
<!-- Container-fluid Ends-->
<script src="<?=base_url()?>assets/js/jquery-3.6.0.min.js"></script>
<script>

  $(document).on("click",".seqid",function(){
    $("#tabDetailKontak").removeClass('hide');
    $("#tabDetailKontak").addClass('show');
    var seq = $(this).data('seqid');
    // console.log (seq);

    jQuery.ajax({
      url: "<?=base_url();?>Kontak/getDetailKontak",
      data: 'seqid='+seq,
      type: "POST",
      success:function(data){
        $(".profile-mail").html(data);
      }
    })

  })

</script>