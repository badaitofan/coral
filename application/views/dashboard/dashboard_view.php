<div class="container-fluid">
  <div class="page-title"> 
    <div class="row">
      <div class="col-xl-4 col-sm-7 box-col-3">
        <h3>Dashboard</h3>
      </div>
      <div class="col-5 d-none d-xl-block">
        
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
    <div class="col-xl-9 box-col-7 proorder-md-1"> 
      <div class="card">
        <div class="card-body premium-card">
          <div class="row premium-courses-card">
            <div class="col-md-7 premium-course">
              <h1 class="f-w-700 m-b-5">Corporate Portal</h1><p class="f-light f-w-400 f-14">Portal informasi dan pengetahuan untuk menciptakan kebersamaan yang kuat dalam lingkungan perusahaan dengan saling berkolaborasi. </p><a class="btn btn-square btn-primary f-w-700 m-t-5" href="#" disabled>Selamat Datang</a>
            </div>
            <div class="col-md-5 premium-course-img"> 
              <div class="premium-message"><img class="img-fluid" src="<?=base_url()?>assets/images/dashboard/massage.gif" alt="massage"></div>
              <div class="premium-books"><img class="img-fluid" src="<?=base_url()?>assets/images/dashboard/books.gif" alt="books"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- target Stats -->
    <div class="col-xl-3 col-md-6 proorder-md-3 box-col-6">
      <div class="card">
        <div class="card-header custom-border-bottom">
          <div class="header-top"> 
            <h4>Target Stats</h4>
            <!-- <div class="dropdown icon-dropdown setting-menu">
              <button class="btn dropdown-toggle" id="userdropdown2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg>
                  <use href="<?=base_url()?>assets/svg/icon-sprite.svg#setting"> </use>
                </svg>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown2"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly </a><a class="dropdown-item" href="#">Yearly </a></div>
            </div> -->
          </div>
        </div>
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
                  <th>Position</th>
                  <th>Office</th>
                  <th>Ext.</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> <img class="img-fluid table-avtar" src="<?=base_url()?>assets/images/user/1.jpg" alt="">Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                </tr>
                <tr>
                  <td> <img class="img-fluid table-avtar" src="<?=base_url()?>assets/images/user/2.png" alt="">Garrett Winters</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>63</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

     
    </div>
    <div class="col-xl-6 col-sm-12 proorder-md-9 box-col-6">
      <div class="card">
        <div class="card-header"> 
          <div class="header-top"> 
            <h4>Project Summary </h4>
            <div class="dropdown icon-dropdown setting-menu">
              <button class="btn dropdown-toggle" id="userdropdown22" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg>
                  <use href="<?=base_url()?>assets/svg/icon-sprite.svg#setting"> </use>
                </svg>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown22"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly </a></div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive custom-scrollbar"> 
            <table class="project-summary table" id="project-summary">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Project Name</th>
                  <th>Team</th>
                  <th>Project Cost</th>
                  <th>Project Status</th>
                  <th>Payment</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="f-w-600">A908</td>
                  <td> <a href="projects.html">Amazon Website</a></td>
                  <td class="team-avtar">
                    <div class="customers d-inline-block avatar-group">
                      <ul>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="<?=base_url()?>assets/images/dashboard/avtar/8.jpg" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="<?=base_url()?>assets/images/dashboard/avtar/10.jpg" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="<?=base_url()?>assets/images/dashboard/avtar/2.jpg" alt=""></li>
                        <li class="d-inline-block">
                          <p>26+</p>
                        </li>
                      </ul>
                    </div>
                  </td>
                  <td>$23,490</td>
                  <td>Completed</td>
                  <td class="txt-success">Done </td>
                </tr>
                <tr>
                  <td>R840</td>
                  <td> <a href="projects.html">Paytm bank app</a></td>
                  <td class="team-avtar">
                    <div class="customers d-inline-block avatar-group">
                      <ul>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="<?=base_url()?>assets/images/dashboard/avtar/2.jpg" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="<?=base_url()?>assets/images/dashboard/avtar/20.jpg" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="<?=base_url()?>assets/images/dashboard/avtar/12.jpg" alt=""></li>
                        <li class="d-inline-block">
                          <p>6+</p>
                        </li>
                      </ul>
                    </div>
                  </td>
                  <td>$45,459</td>
                  <td>In Progress</td>
                  <td class="txt-danger">Pending</td>
                </tr>
                <tr>
                  <td class="f-w-600">V908</td>
                  <td class="f-w-600"> <a href="projects.html">Cytrust Dashboard</a></td>
                  <td class="team-avtar"> 
                    <div class="customers d-inline-block avatar-group">
                      <ul>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="<?=base_url()?>assets/images/dashboard/avtar/14.jpg" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="<?=base_url()?>assets/images/dashboard/avtar/13.jpg" alt=""></li>
                      </ul>
                    </div>
                  </td>
                  <td class="f-w-600">$78,748 </td>
                  <td class="f-w-600">Completed</td>
                  <td class="txt-success f-w-600">Done</td>
                </tr>
                <tr>
                  <td class="f-w-600">K450</td>
                  <td> <a href="projects.html">Project Mecha</a></td>
                  <td class="team-avtar">
                    <div class="customers d-inline-block avatar-group">
                      <ul> 
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="<?=base_url()?>assets/images/dashboard/avtar/22.jpg" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="<?=base_url()?>assets/images/dashboard/avtar/15.jpg" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="<?=base_url()?>assets/images/dashboard/avtar/2.jpg" alt=""></li>
                      </ul>
                    </div>
                  </td>
                  <td class="f-w-600">	$98,878</td>
                  <td class="f-w-600">In Progress</td>
                  <td class="txt-danger f-w-600">Pending</td>
                </tr>
                <tr>
                  <td class="f-w-600">D480</td>
                  <td class="f-w-600"><a href="projects.html">Dynamic Program</a></td>
                  <td class="team-avtar">
                    <div class="customers d-inline-block avatar-group">
                      <ul>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="<?=base_url()?>assets/images/dashboard/avtar/21.jpg" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="<?=base_url()?>assets/images/dashboard/avtar/23.jpg" alt=""></li>
                        <li class="d-inline-block"><img class="img-40 rounded-circle" src="<?=base_url()?>assets/images/dashboard/avtar/24.jpg" alt=""></li>
                        <li class="d-inline-block"> 
                          <p>5+                           </p>
                        </li>
                      </ul>
                    </div>
                  </td>
                  <td class="f-w-600">$23,490</td>
                  <td class="f-w-600">In Progress</td>
                  <td class="txt-danger f-w-600">Pending</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 proorder-md-10 box-col-12">
      <div class="card">
        <div class="card-header custom-border-bottom">
          <div class="header-top">
            <h4>Sales Statistic</h4>
            <div class="dropdown icon-dropdown setting-menu">
              <button class="btn dropdown-toggle" id="userdropdown9" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg>
                  <use href="<?=base_url()?>assets/svg/icon-sprite.svg#setting"> </use>
                </svg>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown9"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly </a></div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div id="groupBarChart"></div>
          <div class="sales-data">
            <ul>
              <li> 
                <div class="total-sales">
                  <div>
                    <h5>$4,875 </h5><span>Total Sales </span>
                  </div>
                  <div class="total-reached"><span>1,00,00</span><span>85% goal reached</span></div>
                </div>
                <div class="progress-data">
                  <div class="progress sm-progress-bar progress-border-primary"> 
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"> </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="total-sales"> 
                  <div> 
                    <h5>$7,560</h5><span>Total Income</span>
                  </div>
                  <div class="total-reached"> <span>1,00,00</span><span>45% goal reached   </span></div>
                </div>
                <div class="progress-data">
                  <div class="progress sm-progress-bar progress-border-secondary">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->