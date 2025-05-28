<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-xl-4 col-sm-7 box-col-3">
        <h3>Laporan Kapal Layup</h3>
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
          <li class="breadcrumb-item">BDP</li>
          <li class="breadcrumb-item">Layup</li>
          <li class="breadcrumb-item active"><a href="<?=site_url('Chairman/helpdesc_ict')?>">Kapal Layup</a></li>
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
          <div class="header-top">
            <h4>Daftar Kapal Layup</h4>
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
          <div class="row"> 
            <?php
            foreach ($agent as $dtagent) {
              $this->db->where('agent_name',$dtagent['agent_name']); 
              $hitung =  $this->db->count_all_results('tb_vessel_layup');
              // echo "<h4>".$dtagent['agent_name']."</h4>";
              echo "
              <div class='col-xl-3 col-sm-6 box-col-6'>
                <div class='card ecommerce-widget'>
                  <div class='card-body support-ticket-font border-l-primary'>
                    <div class='row'>
                      <div class='col-12'><span>".$dtagent['agent_name']."</span>
                        <h3 class='total-num counter'>".$hitung."</h3>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>";
            } 
            ?>
            <!-- <div class="col-xl-4 col-sm-6 box-col-6">
              <div class="card ecommerce-widget">
                <div class="card-body support-ticket-font">
                  <div class="row">
                    <div class="col-5"><span>Order</span>
                      <h3 class="total-num counter">2563</h3>
                    </div>
                    <div class="col-7">
                      <div class="text-end">
                        <ul>
                          <li>Profit<span class="product-stts txt-success ms-2">8989<i class="icon-angle-up f-12 ms-1"></i></span></li>
                          <li>Loss<span class="product-stts txt-danger ms-2">2560<i class="icon-angle-down f-12 ms-1"></i></span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="progress-showcase mt-4">
                    <div class="progress sm-progress-bar">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 box-col-6">
              <div class="card ecommerce-widget">
                <div class="card-body support-ticket-font">
                  <div class="row">
                    <div class="col-5"><span>Pending</span>
                      <h3 class="total-num counter">8943</h3>
                    </div>
                    <div class="col-7">
                      <div class="text-end">
                        <ul>
                          <li>Profit<span class="product-stts txt-success ms-2">8989<i class="icon-angle-up f-12 ms-1"></i></span></li>
                          <li>Loss<span class="product-stts txt-danger ms-2">2560<i class="icon-angle-down f-12 ms-1"></i></span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="progress-showcase mt-4">
                    <div class="progress sm-progress-bar">
                      <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 box-col-6">
              <div class="card ecommerce-widget">
                <div class="card-body support-ticket-font">
                  <div class="row">
                    <div class="col-5"><span>Running</span>
                      <h3 class="total-num counter">2500</h3>
                    </div>
                    <div class="col-7">
                      <div class="text-end">
                        <ul>
                          <li>Profit<span class="product-stts txt-success ms-2">8989<i class="icon-angle-up f-12 ms-1"></i></span></li>
                          <li>Loss<span class="product-stts txt-danger ms-2">2560<i class="icon-angle-down f-12 ms-1"></i></span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="progress-showcase mt-4">
                    <div class="progress sm-progress-bar">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 box-col-6">
              <div class="card ecommerce-widget">
                <div class="card-body support-ticket-font">
                  <div class="row">
                    <div class="col-5"><span>Smooth</span>
                      <h3 class="total-num counter">2060</h3>
                    </div>
                    <div class="col-7">
                      <div class="text-end">
                        <ul>
                          <li>Profit<span class="product-stts txt-success ms-2">8989<i class="icon-angle-up f-12 ms-1"></i></span></li>
                          <li>Loss<span class="product-stts txt-danger ms-2">2560<i class="icon-angle-down f-12 ms-1"></i></span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="progress-showcase mt-4">
                    <div class="progress sm-progress-bar">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 box-col-6">
              <div class="card ecommerce-widget">
                <div class="card-body support-ticket-font">
                  <div class="row">
                    <div class="col-5"><span>Done</span>
                      <h3 class="total-num counter">5600</h3>
                    </div>
                    <div class="col-7">
                      <div class="text-end">
                        <ul>
                          <li>Profit<span class="product-stts txt-success ms-2">8989<i class="icon-angle-up f-12 ms-1"></i></span></li>
                          <li>Loss<span class="product-stts txt-danger ms-2">2560<i class="icon-angle-down f-12 ms-1"></i></span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="progress-showcase mt-4">
                    <div class="progress sm-progress-bar">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 box-col-6">
              <div class="card ecommerce-widget">
                <div class="card-body support-ticket-font">
                  <div class="row">
                    <div class="col-5"><span>Cancel</span>
                      <h3 class="total-num counter">2560</h3>
                    </div>
                    <div class="col-7">
                      <div class="text-end">
                        <ul>
                          <li>Profit<span class="product-stts txt-success ms-2">8989<i class="icon-angle-up f-12 ms-1"></i></span></li>
                          <li>Loss<span class="product-stts txt-danger ms-2">2560<i class="icon-angle-down f-12 ms-1"></i></span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="progress-showcase mt-4">
                    <div class="progress sm-progress-bar">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <div class="table-responsive custom-scrollbar">
            <table class="display" id="basic-6">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kapal</th>
                  <th>Agent</th>
                  <th>Masuk</th>
                  <th>Keluar</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($row as $data) {
                  if($data['act_status'] == "IN"){
                    $status = "<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-alert-circle bg-light-primary font-primary'><circle cx='12' cy='12' r='10'></circle><line x1='12' y1='8' x2='12' y2='12'></line><line x1='12' y1='16' x2='12' y2='16'></line></svg><span class='font-primary ms-2'> Layup</span>";
                  }else $status = "<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-alert-circle bg-light-primary font-danger'><circle cx='12' cy='12' r='10'></circle><line x1='12' y1='8' x2='12' y2='12'></line><line x1='12' y1='16' x2='12' y2='16'></line></svg><span class='font-danger ms-2'> Out</span>";
                  echo "<tr>
                    <td>".$no++."</td>
                    <td>".$data['vessel_name']."</td>
                    <td>".$data['agent_name']."</td>
                    <td>".$data['act_in']."</td>
                    <td>".$data['act_out']."</td>
                    <td class='d-flex align-items-center'>".$status."</td>
                  </tr>";
                } 
                ?>
              </tbody>
              <tfoot>
                <tr>
                <th>No</th>
                  <th>Nama Kapal</th>
                  <th>Agent</th>
                  <th>Masuk</th>
                  <th>Keluar</th>
                  <th>Status</th>
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