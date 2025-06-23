<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-xl-4 col-sm-7 box-col-3">
        <h3>Berita Detail</h3>
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
          <li class="breadcrumb-item active">Detail</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid"> 
    <div class="row">
        <div class="col-sm-12">
            <div class="card"> 
                <div class="card-body">
                    <div class="blog-single">
                        <?php 
                            $this->db->select('*');
                            $this->db->from('tb_news');
                            $this->db->where('news_id',$news_id);
                            $data = $this->db->get()->result();

                            foreach ($data as $result) {
                                # code...                         
                            echo "
                            <h3 class='mb-3 f-w-600'>
                                    ".$result->news_title."
                                    </h3>
                            <div class='blog-box blog-details'><img class='img-fluid w-100' src='". base_url()."assets/images/blog/".$result->news_picture."' alt='blog-main'>
                                <div class='blog-details'>
                                    <ul class='blog-social'>
                                        <li>".date("d F Y",strtotime($result->news_date))."</li>
                                        <li><i class='icofont icofont-user'></i> ".$result->news_author."</li>
                                        <li><i class='icofont icofont-thumbs-up'></i> ".$result->news_like." <span> Like</span></li>
                                        
                                    </ul>
                                    
                                    <div class='single-blog-content-top'>
                                        <p>".$result->news_content."</p>
                                    </div>
                                </div>
                            </div>
                            ";
                            }
                        ?>
                        <!-- <div class="blog-box blog-details"><img class="img-fluid w-100" src="<?= base_url() ?>assets/images/blog/blog-single.jpg" alt="blog-main">
                                <div class="blog-details">
                                    <ul class="blog-social">
                                    <li>25 July 2024</li>
                                    <li><i class="icofont icofont-user"></i>Mark<span>Jecno</span></li>
                                    <li><i class="icofont icofont-thumbs-up"></i>02<span>Hits</span></li>
                                    <li><i class="icofont icofont-ui-chat"></i>598 Comments</li>
                                </ul>
                                <h4 class="mt-3 f-w-600">
                                The Harpeth rises in the westernmost part of Rutherford County, just to the east of the community of College Grove in eastern Williamson County.
                                Internet.
                                </h4>
                                <div class="single-blog-content-top">
                                    <p>From the east coast to the west, each river has its own beauty and character. Each river has its own story. Take a look at some America’s best rivers and some of the rivers we’re working to protect. And learn some facts about your favorite rivers. The Harpeth River and its tributaries are home to rich freshwater biodiversity, including more than 50 species of fish and 30 species of mussels</p>
                                    <p>The Harpeth River flows through the heart of downtown Franklin, the 14th fastest growing city in the United States, and traverses Williamson County, one of the fastest growing counties in Tennessee. This rapid development has already caused harm to the river from adding treated sewage, increasing stormwater runoff, and withdrawing water.The river’s impairment is caused by dangerously low levels of dissolved oxygen driven by high concentrations of nutrients – particularly phosphorus – that fuel oxygen-hungry algal blooms that can lead to toxic conditions.</p>
                                </div>
                            </div>
                        </div> -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h3 class="mb-3">Multi Item Carousel cards</h3>
            </div>
            <div class="col-2 text-right">
                <a class="btn btn-primary mb-3 mr-1" 
                    href="#carouselExampleIndicators2"
                    role="button"
                    data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3"
                    href="#carouselExampleIndicators2"
                    role="button"
                    data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                

                <div id="carouselExampleIndicators2" 
                        class="carousel slide"
                        data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" 
                                                alt="100%x280"
                                            src="https://media.geeksforgeeks.org/wp-content/uploads/20240122184958/images2.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                Special title treatment</h4>
                                            <p class="card-text">With supporting text
                                                                    below as a natural lead-in</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" 
                                                alt="100%x280"
                                            src="https://media.geeksforgeeks.org/wp-content/uploads/20240122184958/images2.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title
                                                                        treatment</h4>
                                            <p class="card-text">With supporting 
                                                                    text below as a natural
                                                                    lead-in to additional 
                                                                    content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" 
                                                alt="100%x280"
                                            src="https://media.geeksforgeeks.org/wp-content/uploads/20230407154213/gfg-bag.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below
                                                                    as a natural lead-in to
                                                                    additional content.</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" 
                                                alt="100%x280"
                                            src="https://media.geeksforgeeks.org/wp-content/uploads/20240110011854/reading-925589_640.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below 
                                                                    as a natural lead-in to
                                                                additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280"
                                            src="https://media.geeksforgeeks.org/wp-content/uploads/20240122182422/images1.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below 
                                                                    as a natural lead-in to
                                                                    additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280"
                                            src="https://media.geeksforgeeks.org/wp-content/uploads/20240110011854/reading-925589_640.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below 
                                                                    as a natural lead-in to
                                                                    additional content.</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" 
                                                alt="100%x280"
                                            src="https://media.geeksforgeeks.org/wp-content/uploads/20240110011815/sutterlin-1362879_640-(1).jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280"
                                            src="https://media.geeksforgeeks.org/wp-content/uploads/20240110011929/glasses-1052010_640.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text belowas a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" 
                                                alt="100%x280"
                                            src="https://media.geeksforgeeks.org/wp-content/uploads/20240110011929/glasses-1052010_640.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Container-fluid Ends-->

<!-- JavaScript dependencies -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    