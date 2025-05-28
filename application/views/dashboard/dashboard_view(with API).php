<style>
  @keyframes slides {
    from {
      transform: translateX(0);
    }
    to {
      transform: translateX(-100%);
    }
  }

  .logos {
    overflow: hidden;
    padding: 30px 0px;
    white-space: nowrap;
    position: relative;
    border-radius : 12px;
    margin-bottom : 25px;
    gap: 10px;
  }

  .logos:before, .logos:after {
    position: absolute;
    top: 0;
    content: '';
    width: 250px;
    height: 100%;
    z-index: 2;
  }

  .logos:before {
    left: 0;
    background: linear-gradient(to left, rgba(255,255,255,0), rgb(255, 255, 255));
  }

  .logos:after {
    right: 0;
    background: linear-gradient(to right, rgba(255,255,255,0), rgb(255, 255, 255));
  }

  .logo_items {
    display: inline-block;
    animation: 10s slides infinite linear;
  }

  .logos:hover .logo_items {
    animation-play-state: paused;
  }

  .logo_items img{
    height: 100px;
  }

  .img-wrap {
    background:linear-gradient(253deg,var(--theme-default) 11.51%,rgba(115,102,255,0) 82.07%);
    border-radius:100%;
    display:inline-block;
    padding:2px;
    position:relative;
    /* width: 30% */
  }
</style>
<div class="container-fluid">
  <div class="page-title"> 
    <div class="row">
      <div class="col-xl-3 col-sm-7 box-col-3">
        <h3>Dashboard</h3>
      </div>
      <div class="col-6 d-none d-xl-block">
        
      </div>
      <div class="col-xl-3 col-sm-5 box-col-4">
        <ol class="breadcrumb"> 
          <li class="breadcrumb-item"><a href="index.html">
              <svg class="stroke-icon">
                <use href="<?=base_url()?>assets/svg/icon-sprite.svg#stroke-home"></use>
              </svg></a></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item active">Default</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid default-dashboard"> 
  <div class="row">
    <div class="col-xl-12 proorders-xl-1">
      <div class="logos"  style="background-color:#48A6A7">
        <div class="logo_items">
          <img src="<?= base_url()?>assets/images/slider/group-logo/bmg.png">
          <img src="<?= base_url()?>assets/images/slider/group-logo/bdp.png">
          <img src="<?= base_url()?>assets/images/slider/group-logo/pbs.png">
          <img src="<?= base_url()?>assets/images/slider/group-logo/esa.png">
          <img src="<?= base_url()?>assets/images/slider/group-logo/bs.png">
          <img src="<?= base_url()?>assets/images/slider/group-logo/bsj.png">
          <img src="<?= base_url()?>assets/images/slider/group-logo/bsm.png">
          <img src="<?= base_url()?>assets/images/slider/group-logo/sema.png">
          <img src="<?= base_url()?>assets/images/slider/group-logo/dwm.png">          
        </div>

        <div class="logo_items">
          <img src="<?= base_url()?>assets/images/slider/group-logo/bmg.png">
          <img src="<?= base_url()?>assets/images/slider/group-logo/bdp.png">
          <img src="<?= base_url()?>assets/images/slider/group-logo/pbs.png">
          <img src="<?= base_url()?>assets/images/slider/group-logo/esa.png">
          <img src="<?= base_url()?>assets/images/slider/group-logo/bs.png">
          <img src="<?= base_url()?>assets/images/slider/group-logo/bsj.png">
          <img src="<?= base_url()?>assets/images/slider/group-logo/bsm.png">
          <img src="<?= base_url()?>assets/images/slider/group-logo/sema.png">
          <img src="<?= base_url()?>assets/images/slider/group-logo/dwm.png">
          
        </div>
      </div>
    </div>

    <!-- <div class="col-xl-4 col-sm-6 proorders-xl-2">
      <div class="card social-profile">
        <div class="card-body">
          <div class="social-img-wrap"> 
            <div class="social-img">
            <?php  foreach ($cuaca["current"]["weather_icons"] as $key => $value) {
                echo "<img src='".$value."' alt='icon-cuaca'></div>";
              }
              ?>  
            <div class="edit-icon">
            <?= "<h4>".$cuaca["current"]["temperature"]."°C </h4>"?>
            </div>
          </div>
          <div class="social-details">
            <h5 class="mb-1"><a href="social-app.html"><?= $cuaca["location"]["region"].", ".$cuaca["location"]["country"] ?></a></h5><span class="f-light"><?php  foreach ($cuaca["current"]["weather_descriptions"] as $key => $value2) {
                echo "$value2";
              }
              ?></span>
            <ul class="social-follow">
              <li>
                <h5 class="mb-0"><?=$cuaca["current"]["wind_speed"]." kmph"?></h5><span class="f-light">Wind Speed</span>
              </li>
              <li>
                <h5 class="mb-0"><?=date("H:i",strtotime($cuaca["location"]["localtime"]))?></h5><span class="f-light">Local Time</span>
              </li>
              <li>
                <h5 class="mb-0"><?= $cuaca["current"]["humidity"]?> %</h5><span class="f-light">Humidity</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div> -->
    <div class="col-xl-6 proorders-xl-2">
      <div class="card">
        <div class="card-body selling-card">
          <div class="row">
            <div class="col-sm-4">
              <div class="sale-card">
                <div class="sale-date">
                  <h4>Total Sale</h4><a href="order-history.html"></a>
                </div><span class="f-w-700 f-14 pb-4">Jan 1,2024 - Jun 30,2022</span>
                
              </div>
            </div>
            <div class="col-sm-8 sale-card d-flex">
              <div class="flex-grow-1 align-self-center ">
                <h4>$654.85K</h4>

              </div>
              <div  >
                <?php  foreach ($cuaca["current"]["weather_icons"] as $key => $value) {
                  echo "<img class='img-wrap' src='".isset($value)?$value:"N/A"."' alt='drawing-room'>";
                  // echo "<img src='".$value."' alt='icon-cuaca'></div>";
                }
                ?>
                <!-- <img class="img-wrap w-25" src="<?=base_url()?>assets/images/slider/pict-1.png" alt="drawing-room"> -->
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-6 proorders-xl-3">
      <div class="card"> 
        <div class="card-header pb-0"> 
          <div class="header-top"> 
            <h4>Currency USD $1</h4>
            
          </div>
        </div>
        <div class="card-body pt-0 summary-card"><span class="f-w-700 f-14"><?= date("d/m/Y H:i:s",$currency["timestamp"]) ?></span>
          <div class="summary-progressbar">
            <ul> 
              <li>
                <div>
                  <h4>Rp. <?= sprintf("%.2f",$currency["quotes"]["USDIDR"])?></h4><span>IDR</span>
                </div>
              </li>
              <li>
                <div>
                  <h4>€ <?= sprintf("%.2f",$currency["quotes"]["USDEUR"])?></h4><span>Euro </span>
                </div>
              </li>
              <li>
                <div>
                  <h4>$ <?= sprintf("%.2f",$currency["quotes"]["USDSGD"])?></h4><span>SGD</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php //echo $cuaca["location"]["region"];
    // echo "<img src='".$cuaca["current"]["weather_icons"]."'/>" ;
    // echo var_dump($currency); 
    // foreach ($cuaca["current"]["weather_icons"] as $key => $value) {
    //    echo "<img src='".$value."' height='100px'/>" ;
    // }
    ?>
  </div>
  
  <div class="row">

    

    <div class="col-xl-9 box-col-7 proorder-md-1 "> 
      <div class="card">
        <div class="card-body premium-card">
          <div class="row premium-courses-card">
            <div class="col-md-7 premium-course">
              <img class="img-fluid for-light" src="<?=base_url()?>/assets/images/coral.png" alt="" width="70%">
              <img class="img-fluid for-dark" src="<?=base_url()?>/assets/images/coral-white.png" alt="" width="70%">
              <!-- <h1>Corporate Portal</h1> -->
              <p class="f-light f-w-400 f-16 m-t-5">Hai! Selamat datang di Portal Intranet kita! Semoga Anda menemukan semua yang Anda butuhkan di sini. </p><p class="f-light f-w-400 f-16">Portal informasi dan pengetahuan untuk menciptakan kebersamaan yang kuat dalam lingkungan perusahaan dengan saling berkolaborasi. </p>
              <a  href="javascript:;" disabled>Bias Mandiri Group</a>
            </div>
            <div class="col-md-5"> 
              <!-- <div class="premium-message"><img class="img-fluid" src="<?=base_url()?>assets/images/dashboard/massage.gif" alt="massage"></div>
              <div class="premium-books"><img class="img-fluid" src="<?=base_url()?>assets/images/dashboard/books.gif" alt="books"></div> -->
              <div class="carousel slide" id="carouselExampleSlidesOnly" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active"><img class="d-block w-100" src="<?=base_url()?>assets/images/slider/pict-1.png" alt="drawing-room"></div>
                  <div class="carousel-item"><img class="d-block w-100" src="<?=base_url()?>assets/images/slider/pict-2.png" alt="drawing-room"></div>
                  <div class="carousel-item"><img class="d-block w-100" src="<?=base_url()?>assets/images/slider/pict-3.png" alt="drawing-room"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- target Stats -->
    <div class="col-xl-3 col-md-6 proorder-md-3 box-col-6">
      <div class="card">
        <div class="card-header pb-0">
          <h4>Target Pendapatan Usaha</h4>
          <p class="f-m-light mt-1">Data April 2025. </p>
        </div>
        <!--<div class="card-header custom-border-bottom">
          
          <div class="header-top"> 
            <h4>Target Pendapatan Usaha</h4>
            <p class="f-m-light mt-1">April 2025. </p>
             <div class="dropdown icon-dropdown setting-menu">
              <button class="btn dropdown-toggle" id="userdropdown2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg>
                  <use href="<?=base_url()?>assets/svg/icon-sprite.svg#setting"> </use>
                </svg>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown2"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly </a><a class="dropdown-item" href="#">Yearly </a></div>
            </div>
          </div> 
        </div>-->
        <div class="card-body pt-0"> 
          <div id="salesStatsRadialChart"> </div>
        </div>
      </div>
    </div>
    <!-- .end target Stats -->
    <!-- Informasi internal -->
    <div class="col-xl-6 col-12">
      <div class="card height-equal">
        <div class="card-header pb-0">
          <h4>Berita Internal</h4>
          <p class="f-m-light mt-1">Berita atau informasi internal terkait  perusahaan hingga kreatifitas karyawan. </p>
        </div>
        <div class="card-body">
          <div class="carousel carousel-dark slide" id="carouselExampleDark" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button class="active" type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000"><img class="d-block w-100" src="<?=base_url()?>assets/images/slider/mariana-golder.png" alt="drawing-room">
                <div class="carousel-caption d-none d-md-block carousel-opacity">
                  <h3>We decorate our homes </h3>
                  <p>If you have been dreaming about bringing your living room together, our designers are here to help. Come see what we can do for your space.</p>
                  <a class="btn btn-square btn-primary f-w-700 m-t-5" href="#" disabled>Baca..</a>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000"><img class="d-block w-100" src="<?=base_url()?>assets/images/slider/3.jpg" alt="drawing-room">
                <div class="carousel-caption d-none d-md-block carousel-opacity">
                  <h3>This couch is a great topic of conversation.</h3>
                  <p>A sofa is the ideal spot to enjoy a movie, nod off, and wake up.</p>
                </div>
              </div>
              <div class="carousel-item"><img class="d-block w-100" src="<?=base_url()?>assets/images/slider/mariana-golder.png" alt="drawing-room">
                <div class="carousel-caption d-none d-md-block carousel-opacity">
                  <h3>Sometimes all you really need to unwind is a comfortable couch.</h3>
                  <p>A house you can create with your friends is a great place. </p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
          </div>
        </div>
      </div>
    </div>
    <!-- .end Informasi internal -->
    <div class="col-xl-6 col-md-12 box-col-12 proorder-md-4">
      <div class="card">
        <div class="card-header pb-0 card-no-border">
          <h4>Daftar Telp. Ext.</h4>
        </div>
        <div class="card-body"> 
          <div class="table-responsive custom-scrollbar user-datatable theme-scrollbar">
            <table class="display custom-scrollbar" id="basic-12">
              <thead>
                <tr>
                  <th>Name </th>
                  <th>Group</th>
                  <th>Floor</th>
                  <th>Ext. No.</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($rowTelp as $dataTelp) { ?>
                  <tr <?= $dataTelp['telp_status'] == "Digital" ? "class='text-success'" : null ?>>
                    <td><img class="img-fluid table-avtar" src="<?=base_url()?>assets/images/user/1.jpg" alt=""><?= $dataTelp['telp_name'] ?></td>
                    <td><?= $dataTelp['telp_group'] ?></td>
                    <td><?= $dataTelp['telp_floor'] ?></td>
                    <td><?= $dataTelp['telp_number'] ?></td>
                  </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

     
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->