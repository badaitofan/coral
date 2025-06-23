

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-xl-4 col-sm-7 box-col-3">
        <h3>Berita <?= $random_id = random_string('alnum', 10); ?></h3>
      </div>
      <div class="col-5 d-none d-xl-block">
      </div>
      <div class="col-xl-3 col-sm-5 box-col-4">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">
              <svg class="stroke-icon">
                <use href="<?= base_url()?>assets/svg/icon-sprite.svg#stroke-home"></use>
              </svg></a></li>
          <li class="breadcrumb-item">Berita</li>
          <li class="breadcrumb-item active">Daftar Berita</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row learning-block">
    <div class="col-xxl-9 col-xl-8 box-col-8">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="blog-box blog-list row">
              <div class="col-sm-5"><a href="javascript:;"><img class="img-fluid sm-100-w" src="<?= base_url()?>assets/images/slider/mariana-golder.png" alt=""></a></div>
              <div class="col-sm-7">
                <div class="blog-details">
                  <div class="blog-date"><span>05</span> January 2024</div>
                  <a href="javascript:;"><h3>Sample News </h3></a>
                  <div class="blog-bottom-content">
                    <ul class="blog-social">
                      <li>oleh: Paige Turner</li>
                      <li><a href="javascript:;" class="btn btn-outline-primary btn-sm btn-like" >15 Suka <i class="fa fa-thumbs-o-up"></i></a></li>
                    </ul>
                    <hr>
                    <p class="mt-0">Java is an object-oriented programming language. Sun Microsystems first released Java in the year 1995. It is popularly used for developing Java applications in data centers, laptops, cell phones, game consoles, and scientific supercomputers. There are multiple websites and applications which will not work if Java is not installed.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="card">
            <div class="blog-box blog-list row">
              <div class="col-sm-5"><a href="javascript:;"><img class="img-fluid sm-100-w" src="<?= base_url()?>assets/images/slider/mariana-golder.png" alt=""></a></div>
              <div class="col-sm-7">
                <div class="blog-details">
                  <div class="blog-date"><span>10</span> March 2024</div>
                  <a href="javascript:;"><h3>Sample News </h3></a>
                  <div class="blog-bottom-content">
                    <ul class="blog-social">
                      <li>oleh: Petey Cruiser</li>
                      <li><a href="javascript:;" class="btn btn-outline-primary btn-sm btn-like" >34 Suka <i class="fa fa-thumbs-o-up"></i></a> </li>
                    </ul>
                    <hr>
                    <p class="mt-0">Web development is the work involved in developing a website for the Internet or an intranet (a private network).Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network services, and many more such applications and websites are being created every day.</p>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Filter Widget -->
    <div class="col-xxl-3 col-xl-4 box-col-4e">
      <div class="md-sidebar"><a class="btn btn-primary email-aside-toggle md-sidebar-toggle">Learning filter</a>
        <div class="md-sidebar-aside job-sidebar">
          <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc">
            <div class="row">
              <div class="col-xl-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseicon" aria-expanded="true" aria-controls="collapseicon">Cari Berita</button>
                    </h5>
                  </div>
                  <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon" data-bs-parent="#accordion">
                    <div class="card-body filter-cards-view animate-chk">
                      <div class="job-filter">
                        <div class="faq-form">
                          <input class="form-control" type="text" placeholder="Search.." disabled><i class="search-icon" data-feather="search"></i>
                        </div>
                      </div>
                      <!-- <div class="checkbox-animated">
                        <div class="learning-header"><span class="f-w-600">Categories</span></div>
                        <label class="d-block" for="chk-ani">
                          <input class="checkbox_animated" id="chk-ani" type="checkbox">                      Accounting
                        </label>
                        <label class="d-block" for="chk-ani0">
                          <input class="checkbox_animated" id="chk-ani0" type="checkbox">                            Design
                        </label>
                        <label class="d-block" for="chk-ani1">
                          <input class="checkbox_animated" id="chk-ani1" type="checkbox">                            Development
                        </label>
                        <label class="d-block" for="chk-ani2">
                          <input class="checkbox_animated" id="chk-ani2" type="checkbox">                            Management
                        </label>
                      </div> -->
                      <button class="btn btn-primary text-center" type="button">Filter</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="col-xl-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseicon1" aria-expanded="true" aria-controls="collapseicon1">Categories</button>
                    </h5>
                  </div>
                  <div class="collapse card-body px-0 show" id="collapseicon1" aria-labelledby="collapseicon1" data-bs-parent="#accordion">
                    <div class="categories">
                      <div class="learning-header"><span class="f-w-600">Design</span></div>
                      <ul>
                        <li><a href="#">UI Design </a><span class="badge badge-primary pull-right">28</span></li>
                        <li><a href="#">UX Design </a><span class="badge badge-primary pull-right">35</span></li>
                        <li><a href="#">Interface Design </a><span class="badge badge-primary pull-right">17</span></li>
                        <li><a href="#">User Experience </a><span class="badge badge-primary pull-right">26</span></li>
                      </ul>
                    </div>
                    <div class="categories pt-0">
                      <div class="learning-header"><span class="f-w-600">Development</span></div>
                      <ul>
                        <li><a href="#">Frontend Development</a><span class="badge badge-primary pull-right">48</span></li>
                        <li><a href="#">Backend Development</a><span class="badge badge-primary pull-right">19</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- .Filter Widget Ends -->
  </div>
</div>
<!-- Container-fluid Ends-->

<script src="<?=base_url()?>assets/js/jquery-3.5.1.min.js"></script>
<script>
  $(document).on("click",".btn-like",function(){
    var sesi = $("#sesi").val();

    console.log(sesi);
  })
</script>