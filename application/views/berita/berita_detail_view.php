<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
<style>

.slick-slide {
      margin: 0 10px;
  }

section 
{
padding:0 100px;
}

.slick-prev:before, .slick-next:before
{
  color:#000;
}

.multiple-items .col-md-6{
width:100%;
height:400px;
object-fit:cover;

}
  
  </style>
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
                            <h1 class='mb-3 f-28'>
                                    ".$result->news_title."
                                    </h1>
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


<section>
    <div class="multiple-items">
        <?php foreach ($row_news as $value) {
            echo "<div class='col-md-6 col-xxl-3 box-col-6'>
            <div class='card'>
                <div class='blog-box blog-grid text-center'><a href='".site_url('Berita/berita_/').$value['news_id']."'><img class='img-fluid top-radius-blog' src='".base_url ()."assets/images/blog/".$value['news_picture']."' alt=''></a>
                    <div class='blog-details-main'>
                        <ul class='blog-social'>
                            <li>".date("d",strtotime($value['news_date']))."</li>
                            <li>by: ".$value['news_author']."</li>
                            <li>".$value['news_like']." Suka</li>
                        </ul>
                        <hr>
                        <h4 class='blog-bottom-details'>".mb_strimwidth($value['news_content'],0,100," ... ")."</h4>
                    </div>
                </div>
            </div>
        </div>";
        }?>
        <!-- <div class="col-md-6 col-xxl-3 box-col-6">
            <div class="card">
                <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog" src="<?= base_url ()?>assets/images/blog/blog-5.jpg" alt="">
                    <div class="blog-details-main">
                        <ul class="blog-social">
                            <li>20 April 2024</li>
                            <li>by: Admin</li>
                            <li>0 Hits</li>
                        </ul>
                        <hr>
                        <h4 class="blog-bottom-details">A huge part of it is the incomparable beauty you can encounter every day.People just anymore profound.</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-3 box-col-6">
            <div class="card">
                <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog" src="<?= base_url ()?>assets/images/blog/blog-6.jpg" alt="">
                    <div class="blog-details-main">
                        <ul class="blog-social">
                        <li>9 April 2024</li>
                        <li>by: Admin</li>
                        <li>0 Hits</li>
                        </ul>
                        <hr>
                        <h4 class="blog-bottom-details">People just don't do it anymore. We have to change that. Sometimes the simplest things are the most profound.</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-3 box-col-6">
            <div class="card">
                <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog" src="<?= base_url ()?>assets/images/blog/blog-5.jpg" alt="">
                    <div class="blog-details-main">
                        <ul class="blog-social">
                        <li>15 April 2024</li>
                        <li>by: Admin</li>
                        <li>0 Hits</li>
                        </ul>
                        <hr>
                        <h4 class="blog-bottom-details">A huge part of it is the incomparable beauty you can encounter every day.People just anymore profound.</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-3 box-col-6">
            <div class="card">
                <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog" src="<?= base_url ()?>assets/images/blog/blog-6.jpg" alt="">
                    <div class="blog-details-main">
                        <ul class="blog-social">
                        <li>11 April 2024</li>
                        <li>by: Admin</li>
                        <li>0 Hits</li>
                        </ul>
                        <hr>
                        <h4 class="blog-bottom-details">People just don't do it anymore. We have to change that. Sometimes the simplest things are the most profound.</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-3 box-col-6">
            <div class="card">
                <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog" src="<?= base_url ()?>assets/images/blog/blog-6.jpg" alt="">
                    <div class="blog-details-main">
                        <ul class="blog-social">
                        <li>11 April 2024</li>
                        <li>by: Admin</li>
                        <li>0 Hits</li>
                        </ul>
                        <hr>
                        <h4 class="blog-bottom-details">People just don't do it anymore. We have to change that. Sometimes the simplest things are the most profound.</h4>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 


<script>
$('.multiple-items').slick({
  infinite: true,
  dots:true,
  slidesToShow: 3,
  slidesToScroll: 3
});
</script>

<!-- JavaScript dependencies -->
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> -->
    