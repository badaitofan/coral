
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zono admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Zono admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?=base_url()?>assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png" type="image/x-icon">
    <title>Coral - Halaman Login</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/animate.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?=base_url()?>assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/responsive.css">
    <style>
      .invalid {
        animation: shake 0.2s ease-in-out 0s 2;
        box-shadow: 0 0 4px #ff0000;
      }

      @keyframes shake {
        0% {
          margin-left: 0rem;
        }
        25% {
          margin-left: 0.5rem;
        }
        75% {
          margin-left: -0.5rem;
        }
        100% {
          margin-left: 0rem;
        }
      }
    </style>
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-5"><img class="bg-img-cover bg-center" src="<?=base_url()?>assets/images/login/login_pict.jpg" alt="looginpage"></div>
        <div class="col-xl-7 p-0">
          <div class="login-card login-dark login-bg">
            <div>
              <div> <a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="<?=base_url()?>assets/images/logo/logo-Coral.png" alt="looginpage"><img class="img-fluid for-dark" src="<?=base_url()?>assets/images/logo/logo-Coral-dark.png" alt="looginpage"></a></div>
              <div class="login-main">
                <!-- <form class="theme-form" id="#captcha-form"> -->
                  <?php $attr = array('class'=>'theme-form','id'=>'captcha-form'); echo form_open('Dashboard',$attr) ?>
                  <h4>Sign in to account</h4>
                  <p>Enter your email & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Username / Email Address</label>
                    <input class="form-control" type="text" id="name_email" name="name_email" required=""  placeholder="Username / Email" onblur="checkData()">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" id="password" name="password" required="" placeholder="*********">
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mt-3">
                      <canvas id="captcha" width="200" height="80"></canvas>
                      <button type="button" class="btn btn-secondary" id="refresh-captcha">
                        <i data-feather="refresh-cw"></i>
                      </button>
                  </div>
                  <div class="form-group">
                    <div class="form-input position-relative">
                      <input type="text" class="form-control form-control-user" id="captcha-input" placeholder="Enter Captcha" required>
                    </div>
                  </div>

                  <div class="form-group mb-0">
                    <!-- <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Remember password</label>
                    </div><a class="link" href="forget-password.html">Forgot password?</a> -->
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="submit" id="liveToastBtn">Sign in</button>
                    </div>
                  </div>
                  <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                  <div class="social mt-4">
                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                  </div>
                  <p class="mt-4 mb-0 text-center">Kembali ke halaman<a class="ms-2" href="<?=site_url('Dashboard')?>">Portal</a></p>
                  <script>
                    (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                    }, false);
                    });
                    }, false);
                    })();                   
                    
                  </script>
                  <?= form_close() ?>
                <!-- </form> -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="toast-container position-fixed top-0 end-0 p-3 toast-index toast-rtl">
        <div class="toast fade hide" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header toast-img"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell toast-icons toast-danger"><path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path></svg><strong class="me-auto">Corporate Portal</strong><small>Just now</small>
            <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body toast-dark">Username / Email tidak ditemukan.</div>
        </div>
      </div>

      <div class="toast-container position-fixed top-0 end-0 p-3 toast-index toast-rtl">
        <div class="toast fade hide" id="liveToast2" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header toast-img"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell toast-icons toast-danger"><path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path></svg><strong class="me-auto">Corporate Portal</strong><small>Just now</small>
            <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body toast-dark">Form login harus diisi</div>
        </div>
      </div>


      <!-- latest jquery-->
      <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
      <!-- Bootstrap js-->
      <script src="<?=base_url()?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="<?=base_url()?>assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="<?=base_url()?>assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="<?=base_url()?>assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <script src="<?= base_url() ?>assets/js/captcha.js"></script>
      <script src="<?= base_url() ?>assets/js/notify/custom-notify.js"></script>
      <script src="<?= base_url() ?>assets/js/form-validation-custom.js"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="<?=base_url()?>assets/js/script.js"></script>
      <!-- Plugin used-->

      <script>
        $(document).ready(function() {
            // Generate captcha on page load
            generateCaptcha();
            // Handle captcha refresh button click
            $("#refresh-captcha").click(function() {
                generateCaptcha();
                $("#captcha-input").val("");
            });
            // Handle form submit
            $("#captcha-form").submit(function(event) {
                event.preventDefault();
                // Validate captcha
                var captchaInput = $("#captcha-input").val();
                var captchaCode = sessionStorage.getItem("captchaCode");

                if (captchaInput != captchaCode) {
                    alert("Invalid captcha code. Please try again.");
                    generateCaptcha();
                    $("#captcha-input").val("");
                    return;
                }
                // Form validation successful, submit form
                // alert("Form submitted successfully.");
                var email = $("#name_email").val();
                var upass = $("#password").val();
                window.location.href = "<?= site_url('Auth/login/') ?>" + email + '/' + upass;
                e.currentTarget.submit();
                $("#captcha-form").trigger("reset");
                generateCaptcha();
            });

        });


        function checkData(){
           
          const name_email = $("#name_email").val();
          // const content = ;

          // console.log(name_email);

          jQuery.ajax({
            url : "<?=base_url();?>Auth/checking_user_login",
            data : {name_email: name_email},
            type : "POST",
            success:function(data){
              if(data == "0"){
                const toastLiveExample = document.getElementById('liveToast');
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                toastBootstrap.show();
                $("#name_email").focus().val('').addClass('is-invalid invalid');
                // console.log(data);
              }else{
                $("#name_email").removeClass('is-invalid invalid');
              }
            }
          })
        }
        
      </script>
    </div>
  </body>
</html>