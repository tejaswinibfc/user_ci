<!doctype html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark">


<!-- Mirrored from laravelui.spruko.com/vexel/login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 11:24:14 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

  <!-- META DATA -->
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="vexel – Laravel Bootstrap 5  Admin & Dashboard Template">
  <meta name="author" content="Spruko Technologies Private Limited">
  <meta name="keywords" content="admin panel template, admin dashboard template, admin panel, bootstrap admin template, dashboard, laravel, bootstrap dashboard, admin dashboard, admin panel laravel template, laravel framework, admin laravel, laravel admin panel.">

  <!-- TITLE -->
  <title>Admin </title>

  <!-- Authentication JS -->
  <link rel="modulepreload" href="build/assets/authentication-main-d17b6bac.js" />
  <script type="module" src="build/assets/authentication-main-d17b6bac.js"></script>
  <!-- Favicon -->
  <link rel="icon" href="build/assets/images/brand/favicon.ico" type="image/x-icon">

  <!-- ICONS CSS -->
  <link href="build/assets/iconfonts/icons.css" rel="stylesheet">

  <!-- BOOTSTRAP CSS -->
  <link id="style" href="build/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- APP CSS & APP SCSS -->
  <link rel="preload" as="style" href="build/assets/app-e29e56ca.css" />
  <link rel="modulepreload" href="build/assets/app-4ed993c7.js" />
  <link rel="stylesheet" href="build/assets/app-e29e56ca.css" />
  <script type="module" src="build/assets/app-4ed993c7.js"></script>




</head>

<body class="app sidebar-mini ltr login-img">

  <!-- START SWITCHER -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom">
      <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <nav class="border-bottom border-block-end-dashed">
        <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
          <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
          <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile" type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab" tabindex="0">
          <div class="">
            <p class="switcher-style-head">Theme Color Mode:</p>
            <div class="row switcher-style gx-0">
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-light-theme">
                    Light
                  </label>
                  <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme" checked>
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-dark-theme">
                    Dark
                  </label>
                  <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <p class="switcher-style-head">Directions:</p>
            <div class="row switcher-style gx-0">
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-ltr">
                    LTR
                  </label>
                  <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-rtl">
                    RTL
                  </label>
                  <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <p class="switcher-style-head">Navigation Styles:</p>
            <div class="row switcher-style gx-0">
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-vertical">
                    Vertical
                  </label>
                  <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical" checked>
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-horizontal">
                    Horizontal
                  </label>
                  <input class="form-check-input" type="radio" name="navigation-style" id="switcher-horizontal">
                </div>
              </div>
            </div>
          </div>
          <div class="navigation-menu-styles">
            <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
            <div class="row switcher-style gx-0 pb-2 gy-2">
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-menu-click">
                    Menu Click
                  </label>
                  <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-menu-click">
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-menu-hover">
                    Menu Hover
                  </label>
                  <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-menu-hover">
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-icon-click">
                    Icon Click
                  </label>
                  <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-icon-click">
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-icon-hover">
                    Icon Hover
                  </label>
                  <input class="form-check-input" type="radio" name="navigation-menu-styles" id="switcher-icon-hover">
                </div>
              </div>
            </div>
          </div>
          <div class="sidemenu-layout-styles">
            <p class="switcher-style-head">Sidemenu Layout Styles:</p>
            <div class="row switcher-style gx-0 pb-2 gy-2">
              <div class="col-sm-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-default-menu">
                    Default Menu
                  </label>
                  <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-default-menu" checked>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-closed-menu">
                    Closed Menu
                  </label>
                  <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-closed-menu">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-icontext-menu">
                    Icon Text
                  </label>
                  <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-icontext-menu">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-icon-overlay">
                    Icon Overlay
                  </label>
                  <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-icon-overlay">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-detached">
                    Detached
                  </label>
                  <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-detached">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-double-menu">
                    Double Menu
                  </label>
                  <input class="form-check-input" type="radio" name="sidemenu-layout-styles" id="switcher-double-menu">
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <p class="switcher-style-head">Page Styles:</p>
            <div class="row switcher-style gx-0">
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-regular">
                    Regular
                  </label>
                  <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular" checked>
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-classic">
                    Classic
                  </label>
                  <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-modern">
                    Modern
                  </label>
                  <input class="form-check-input" type="radio" name="page-styles" id="switcher-modern">
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <p class="switcher-style-head">Layout Width Styles:</p>
            <div class="row switcher-style gx-0">
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-full-width">
                    Full Width
                  </label>
                  <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width" checked>
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-boxed">
                    Boxed
                  </label>
                  <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <p class="switcher-style-head">Menu Positions:</p>
            <div class="row switcher-style gx-0">
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-menu-fixed">
                    Fixed
                  </label>
                  <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed" checked>
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-menu-scroll">
                    Scrollable
                  </label>
                  <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <p class="switcher-style-head">Header Positions:</p>
            <div class="row switcher-style gx-0">
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-header-fixed">
                    Fixed
                  </label>
                  <input class="form-check-input" type="radio" name="header-positions" id="switcher-header-fixed" checked>
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-header-scroll">
                    Scrollable
                  </label>
                  <input class="form-check-input" type="radio" name="header-positions" id="switcher-header-scroll">
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <p class="switcher-style-head">Loader:</p>
            <div class="row switcher-style gx-0">
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-loader-enable">
                    Enable
                  </label>
                  <input class="form-check-input" type="radio" name="page-loader" id="switcher-loader-enable" checked>
                </div>
              </div>
              <div class="col-4">
                <div class="form-check switch-select">
                  <label class="form-check-label" for="switcher-loader-disable">
                    Disable
                  </label>
                  <input class="form-check-input" type="radio" name="page-loader" id="switcher-loader-disable" checked>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
          <div>
            <div class="theme-colors">
              <p class="switcher-style-head">Menu Colors:</p>
              <div class="d-flex switcher-style pb-2">
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors" id="switcher-menu-light">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors" id="switcher-menu-dark" checked>
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors" id="switcher-menu-primary">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors" id="switcher-menu-gradient">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu" type="radio" name="menu-colors" id="switcher-menu-transparent">
                </div>
              </div>
              <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
            </div>
            <div class="theme-colors">
              <p class="switcher-style-head">Header Colors:</p>
              <div class="d-flex switcher-style pb-2">
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Light Header" type="radio" name="header-colors" id="switcher-header-light" checked>
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark Header" type="radio" name="header-colors" id="switcher-header-dark">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Color Header" type="radio" name="header-colors" id="switcher-header-primary">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors" id="switcher-header-gradient">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors" id="switcher-header-transparent">
                </div>
              </div>
              <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
            </div>
            <div class="theme-colors">
              <p class="switcher-style-head">Theme Primary:</p>
              <div class="d-flex flex-wrap align-items-center switcher-style">
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-primary-1" type="radio" name="theme-primary" id="switcher-primary">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-primary-2" type="radio" name="theme-primary" id="switcher-primary1">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary" id="switcher-primary2">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary" id="switcher-primary3">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary" id="switcher-primary4">
                </div>
                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                  <div class="theme-container-primary"></div>
                  <div class="pickr-container-primary"></div>
                </div>
              </div>
            </div>
            <div class="theme-colors">
              <p class="switcher-style-head">Theme Background:</p>
              <div class="d-flex flex-wrap align-items-center switcher-style">
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-bg-1" type="radio" name="theme-background" id="switcher-background">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-bg-2" type="radio" name="theme-background" id="switcher-background1">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background" id="switcher-background2">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-bg-4" type="radio" name="theme-background" id="switcher-background3">
                </div>
                <div class="form-check switch-select me-3">
                  <input class="form-check-input color-input color-bg-5" type="radio" name="theme-background" id="switcher-background4">
                </div>
                <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                  <div class="theme-container-background"></div>
                  <div class="pickr-container-background"></div>
                </div>
              </div>
            </div>
            <div class="menu-image mb-3">
              <p class="switcher-style-head">Menu With Background Image:</p>
              <div class="d-flex flex-wrap align-items-center switcher-style">
                <div class="form-check switch-select m-2">
                  <input class="form-check-input bgimage-input bg-img1" type="radio" name="theme-background" id="switcher-bg-img">
                </div>
                <div class="form-check switch-select m-2">
                  <input class="form-check-input bgimage-input bg-img2" type="radio" name="theme-background" id="switcher-bg-img1">
                </div>
                <div class="form-check switch-select m-2">
                  <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background" id="switcher-bg-img2">
                </div>
                <div class="form-check switch-select m-2">
                  <input class="form-check-input bgimage-input bg-img4" type="radio" name="theme-background" id="switcher-bg-img3">
                </div>
                <div class="form-check switch-select m-2">
                  <input class="form-check-input bgimage-input bg-img5" type="radio" name="theme-background" id="switcher-bg-img4">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-between canvas-footer flex-wrap">
          <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1 w-100">Reset</a>
        </div>
      </div>
    </div>
  </div> <!-- END SWITCHER -->

  <!-- BACKGROUND-IMAGE -->
  <div class="">

    <!-- PAGE -->
    <div class="page">


      <!-- CONTAINER OPEN -->
      <div class="">
        <div class="text-center">
          <a href="index.html"><img src="build/assets/images/brand/desktop-dark.png" class="header-brand-img" alt=""></a>
        </div>
      </div>
      <div class="container-lg">
        <div class="row justify-content-center mt-4 mx-0">
          <div class="col-xl-4 col-lg-6">
            <div class="card shadow-none">
              <div class="card-body p-sm-6">
                <div class="text-center mb-4">
                  <h4 class="mb-1">Sign In</h4>
                  <p>Sign in to your account to continue.</p>
                </div>

                <form action="<?php echo base_url(); ?>Login/user_login" method="post" id="form1" enctype="multipart/form-data">

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="mb-3">
                        <label class="mb-2 fw-500">Email<span class="text-danger ms-1">*</span></label>
                        <input class="form-control ms-0" type="email" name="email" placeholder="Enter your Email">
                        <span style="color:red;"><?php echo form_error('email'); ?></span>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="mb-3">
                        <label class="mb-2 fw-500">Password<span class="text-danger ms-1">*</span></label>
                        <div>
                          <input type="password" class="form-control" id="input-password" name="password" placeholder="Password">
                          <span style="color:red;"><?php echo form_error('password'); ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-12">
                      <!-- <div class="d-flex mb-3">
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label tx-15" for="flexCheckDefault">
                            Remember me
                          </label>
                        </div>
                        <div class="ms-auto">
                          <a href="forgot-password.html" class="tx-primary ms-1 tx-13">Forgot Password?</a>
                        </div>
                      </div> -->
                      <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary"> Login</button>
                      </div>

                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- CONTAINER CLOSED -->


    </div>
    <!-- End PAGE -->
  </div>

  <!-- Bootstrap JS -->
  <script src="build/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>




  <!-- Custom-Switcher JS -->
  <link rel="modulepreload" href="build/assets/custom-switcher-aff38aa1.js" />
  <link rel="modulepreload" href="build/assets/defaultmenu-7feba3a7.js" />
  <script type="module" src="build/assets/custom-switcher-aff38aa1.js"></script>
</body>


<!-- Mirrored from laravelui.spruko.com/vexel/login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2024 11:24:15 GMT -->

</html>
<style>
  .error {
    color: red;
  }
</style>
<script>
  $(document).ready(function($) {
    $("#form1").validate({
      rules: {
        email: "required",
        password: "required",
      },
      messages: {
        email: "Please enter email",
        password: "Please enter password",
      },
      errorPlacement: function(error, element) {
        if (element.is(":radio")) {
          error.appendTo(element.parents('.form-group'));
        } else { // This is the default behavior 
          error.insertAfter(element);
        }
      },
      submitHandler: function(form) {
        form.submit();
      }

    });
  });

  $('input').keypress(function(e) {
    if (this.value.length === 0 && e.which === 32) e.preventDefault();
  });
</script>