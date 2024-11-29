
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    
    <!-- SEO meta tags -->
    <title>Around | Insurance Company</title>
    <meta name="description" content="Around - Multipurpose Bootstrap HTML Template">
    <meta name="keywords" content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, light and dark mode, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">

    <!-- Webmanifest + Favicon / App icons -->
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" type="image/png" href="assets/app-icons/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/app-icons/icon-180x180.png">
        
    <!-- Theme switcher (color modes) -->
    <script src="assets/js/theme-switcher.js"></script>

    <!-- Import Google font (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" id="google-font">

    <!-- Vendor styles -->
    <link rel="stylesheet" media="screen" href="assets/vendor/simplebar/dist/simplebar.min.css">
    <link rel="stylesheet" media="screen" href="assets/vendor/aos/dist/aos.css">

    <!-- Font icons -->
    <link rel="stylesheet" href="assets/icons/around-icons.min.css">

    <!-- Theme styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="assets/css/theme.min.css">

    <!-- Customizer generated styles -->
    <style id="customizer-styles"></style>

    <!-- Page loading styles -->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      [data-bs-theme="dark"] .page-loading {
        background-color: #121519;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-family: "Inter", sans-serif;
        font-size: 1rem;
        font-weight: normal;
        color: #6f788b;
      }
      [data-bs-theme="dark"] .page-loading-inner > span {
        color: #fff;
        opacity: .6;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        background-color: #d7dde2; 
        border-radius: 50%;
        opacity: 0;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      [data-bs-theme="dark"] .page-spinner {
        background-color: rgba(255,255,255,.25);
      }
      @-webkit-keyframes spinner {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        50% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
      @keyframes spinner {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        }
        50% {
          opacity: 1;
          -webkit-transform: none;
          transform: none;
        }
      }
    </style>

    <!-- Page loading scripts -->
    <script>
      (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading')
          preloader.classList.remove('active')
          setTimeout(function () {
            preloader.remove()
          }, 1500)
        }
      })()
    </script>

    <!-- Google Tag Manager -->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>


  <!-- Body -->
  <body>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;" title="Google Tag Manager"></iframe>
    </noscript>


    <!-- Page loading spinner -->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div>
        <span>Loading...</span>
      </div>
    </div>


    <!-- Customizer modal -->
    <div class="modal fade" id="customizer-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Your custom styles</h4>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body py-4">
            <p class="mb-3">Grab the generated styles below. Wrap them inside <code>&lt;style&gt;</code> tag and put in the <code>&lt;head&gt;</code> section of your HTML document.</p>
            <p class="mb-4"><span class="fw-medium">IMPORTANT:</span> In order for these styles to take effect you have to placed them below:<br><code>&lt;link rel=&quot;stylesheet&quot; media=&quot;screen&quot; href=&quot;assets/css/theme.min.css&quot;&gt;</code></p>
            <div class="bg-secondary overflow-hidden rounded-4">
              <pre class="text-wrap bg-transparent border-0 text-dark p-4" id="custom-generated-styles"></pre>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary w-100 w-sm-auto mb-3 mb-sm-0" type="button" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary w-100 w-sm-auto ms-sm-3" type="button" id="copy-styles-btn">
              <i class="ai-copy me-2 ms-n1"></i>
              Copy styles
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Customizer toggler -->
    <a class="position-fixed top-50 bg-light text-dark fw-medium border rounded-pill shadow text-decoration-none" href="#customizer" data-bs-toggle="offcanvas" style="right: -1.75rem; margin-top: -1rem; padding: .25rem .75rem; transform: rotate(-90deg); font-size: calc(var(--ar-body-font-size) * .8125); letter-spacing: .075rem; z-index: 1030;">
      <i class="ai-settings text-primary fs-base me-1 ms-n1"></i>
      Customize
    </a>

    <!-- Customizer offcanvas -->
    <div class="offcanvas offcanvas-end" id="customizer" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1">
      <div class="offcanvas-header border-bottom">
        <h4 class="offcanvas-title">Customize theme</h4>
        <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="d-flex align-items-center mb-3">
          <i class="ai-paint-roll text-body-secondary fs-4 me-2"></i>
          <h5 class="mb-0">Colors</h5>
        </div>
        <div class="row row-cols-3 g-3 mb-5" id="theme-colors">
          <div class="col">
            <div class="text-dark fs-sm fw-medium mb-2">Primary</div>
            <div class="color-swatch" id="theme-primary" data-color-labels="[&quot;theme-primary&quot;, &quot;primary&quot;, &quot;primary-rgb&quot;]">
              <label class="ratio ratio-4x3 border rounded-1 cursor-pointer mb-1" for="primary" style="background-color: #448c74;" role="button"></label>
              <input class="form-control form-control-sm" type="text" value="#448c74">
              <input class="visually-hidden" type="color" id="primary" value="#448c74">
            </div>
          </div>
          <div class="col">
            <div class="text-dark fs-sm fw-medium mb-2">Warning</div>
            <div class="color-swatch" id="theme-warning" data-color-labels="[&quot;theme-warning&quot;, &quot;warning&quot;, &quot;warning-rgb&quot;]">
              <label class="ratio ratio-4x3 border rounded-1 cursor-pointer mb-1" for="warning" style="background-color: #edcb50;" role="button"></label>
              <input class="form-control form-control-sm" type="text" value="#edcb50">
              <input class="visually-hidden" type="color" id="warning" value="#edcb50">
            </div>
          </div>
          <div class="col">
            <div class="text-dark fs-sm fw-medium mb-2">Info</div>
            <div class="color-swatch" id="theme-info" data-color-labels="[&quot;theme-info&quot;, &quot;info&quot;, &quot;info-rgb&quot;]">
              <label class="ratio ratio-4x3 border rounded-1 cursor-pointer mb-1" for="info" style="background-color: #3f7fca;" role="button"></label>
              <input class="form-control form-control-sm" type="text" value="#3f7fca">
              <input class="visually-hidden" type="color" id="info" value="#3f7fca">
            </div>
          </div>
          <div class="col">
            <div class="text-dark fs-sm fw-medium pt-1 mb-2">Success</div>
            <div class="color-swatch" id="theme-success" data-color-labels="[&quot;theme-success&quot;, &quot;success&quot;, &quot;success-rgb&quot;]">
              <label class="ratio ratio-4x3 border rounded-1 cursor-pointer mb-1" for="success" style="background-color: #3fca90;" role="button"></label>
              <input class="form-control form-control-sm" type="text" value="#3fca90">
              <input class="visually-hidden" type="color" id="success" value="#3fca90">
            </div>
          </div>
          <div class="col">
            <div class="text-dark fs-sm fw-medium pt-1 mb-2">Danger</div>
            <div class="color-swatch" id="theme-danger" data-color-labels="[&quot;theme-danger&quot;, &quot;danger&quot;, &quot;danger-rgb&quot;]">
              <label class="ratio ratio-4x3 border rounded-1 cursor-pointer mb-1" for="danger" style="background-color: #ed5050;" role="button"></label>
              <input class="form-control form-control-sm" type="text" value="#ed5050">
              <input class="visually-hidden" type="color" id="danger" value="#ed5050">
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center mb-3"><i class="ai-align-left text-body-secondary fs-4 me-2"></i>
          <h5 class="mb-0">Typography <span class="text-body-secondary fs-sm fw-normal">(1rem = 16px)</span></h5>
        </div>
        <div class="mb-5">
          <div class="mb-3">
            <label class="text-dark fs-sm fw-medium pt-1 mb-2" for="font-url">Google font URL</label>
            <input class="form-control" type="url" value="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" id="font-url">
          </div>
          <div class="mb-3">
            <label class="text-dark fs-sm fw-medium pt-1 mb-2" for="body-font-family">Font family</label>
            <input class="form-control" type="text" value="'Inter', sans-serif" id="body-font-family">
          </div>
          <div class="row row-cols-2">
            <div class="col mb-3">
              <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="root-font-size">Root font size, rem</label>
              <select class="form-select" id="root-font-size">
                <option value=".75rem">.75</option>
                <option value=".875rem">.875</option>
                <option value="1rem" selected>1</option>
                <option value="1.05rem">1.05</option>
                <option value="1.1rem">1.1</option>
                <option value="1.15rem">1.15</option>
                <option value="1.25rem">1.25</option>
                <option value="1.375rem">1.375</option>
              </select>
            </div>
            <div class="col mb-3">
              <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="body-font-size">Body font size, rem</label>
              <select class="form-select" id="body-font-size">
                <option value=".75rem">.75</option>
                <option value=".875rem">.875</option>
                <option value="1rem" selected>1</option>
                <option value="1.15rem">1.15</option>
                <option value="1.25rem">1.25</option>
                <option value="1.375rem">1.375</option>
              </select>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center mt-n2 mb-3"><i class="ai-maximize text-body-secondary fs-5 me-2"></i>
          <h5 class="mb-0">Borders / Rounding</h5>
        </div>
        <div class="mb-3">
          <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-width">Border width, px</label>
          <input class="form-control" type="number" min="0" step="1" value="1" id="border-width">
        </div>
        <div class="mb-3">
          <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-radius">Rounded base, rem</label>
          <input class="form-control" type="number" min="0" step=".05" value="1" id="border-radius">
        </div>
        <div id="theme-border-radiuses">
          <div class="mb-3">
            <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-radius-sm">
              Rounded SM<span class="text-body-secondary fw-normal ms-1"> = Rounded base multiplied by</span></label>
            <input class="form-control" type="number" min="0" step=".05" value=".75" id="border-radius-sm">
          </div>
          <div class="mb-3">
            <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-radius-lg">
              Rounded LG<span class="text-body-secondary fw-normal ms-1"> = Rounded base multiplied by</span></label>
            <input class="form-control" type="number" min="0" step=".05" value="1.125" id="border-radius-lg">
          </div>
          <div class="mb-3">
            <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-radius-xl">
              Rounded XL<span class="text-body-secondary fw-normal ms-1"> = Rounded base multiplied by</span></label>
            <input class="form-control" type="number" min="0" step=".05" value="1.5" id="border-radius-xl">
          </div>
          <div class="mb-3">
            <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-radius-xxl">
              Rounded 2XL<span class="text-body-secondary fw-normal ms-1"> = Rounded base multiplied by</span></label>
            <input class="form-control" type="number" min="0" step=".05" value="2.25" id="border-radius-xxl">
          </div>
        </div>
      </div>
      <div class="offcanvas-header border-top d-none" id="customizer-btns">
        <button class="btn btn-secondary w-100 me-3" type="button" id="customizer-reset-btn">
          <i class="ai-undo fs-lg me-2 ms-n1"></i>
          Reset
        </button>
        <button class="btn btn-primary w-100" type="button" data-bs-toggle="modal" data-bs-target="#customizer-modal">
          <i class="ai-code-curly fs-lg me-2 ms-n1"></i>
          Show styles
        </button>
      </div>
    </div>


    <!-- Page wrapper -->
    <main class="page-wrapper">

      <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page -->
      <header class="navbar navbar-expand-lg fixed-top">
        <div class="container">

          <!-- Navbar brand (Logo) -->
          <a class="navbar-brand pe-sm-3" href="index.html">
            <span class="text-primary flex-shrink-0 me-2">
              <svg width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
              </svg>
            </span>
            Around
          </a>

          <!-- Theme switcher -->
          <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
            <input class="form-check-input" type="checkbox" id="theme-mode">
            <label class="form-check-label" for="theme-mode">
              <i class="ai-sun fs-lg"></i>
            </label>
            <label class="form-check-label" for="theme-mode">
              <i class="ai-moon fs-lg"></i>
            </label>
          </div>

          <a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex" href="https://themes.getbootstrap.com/product/around-multipurpose-template-ui-kit/" target="_blank" rel="noopener">
            <i class="ai-cart fs-xl me-2 ms-n1"></i>
            Buy now
          </a>

          <!-- Mobile menu toggler (Hamburger) -->
          <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Navbar collapse (Main navigation) -->
          <nav class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown" aria-expanded="false">Landings</a>
                <div class="dropdown-menu overflow-hidden p-0">
                  <div class="d-lg-flex">
                    <div class="mega-dropdown-column pt-1 pt-lg-3 pb-lg-4">
                      <ul class="list-unstyled mb-0">
                        <li>
                          <a class="dropdown-item" href="index.html">Template Intro Page</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 rounded-3 rounded-start-0" style="background-image: url(assets/img/megamenu/landings.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-mobile-app-showcase.html">Mobile App Showcase</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/mobile-app.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-product.html">Product Landing</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/product-landing.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-saas-v1.html">SaaS v.1</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/saas-1.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-saas-v2.html">SaaS v.2</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/saas-2.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-saas-v3.html">SaaS v.3</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/saas-3.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-saas-v4.html">
                            SaaS v.4
                            <span class="text-danger fs-xs ms-2">New</span>
                          </a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/saas-4.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-shop-v1.html">Shop Homepage v.1</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/shop-homepage-1.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-shop-v2.html">
                            Shop Homepage v.2
                            <span class="text-danger fs-xs ms-2">New</span>
                          </a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/shop-homepage-2.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-marketing-agency.html">Marketing Agency</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/marketing-agency.jpg);"></span>
                        </li>
                      </ul>
                    </div>
                    <div class="mega-dropdown-column pb-2 pt-lg-3 pb-lg-4">
                      <ul class="list-unstyled mb-0">
                        <li>
                          <a class="dropdown-item" href="landing-creative-agency.html">Creative Agency</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/creative-agency.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-conference.html">Conference (Event)</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/conference.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-web-studio.html">Web Studio</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/web-studio.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-corporate.html">Corporate</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/corporate.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-insurance.html">
                            Insurance Company
                            <span class="text-danger fs-xs ms-2">New</span>
                          </a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/insurance.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-business-consulting.html">Business Consulting</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/business-consulting.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-coworking-space.html">Coworking Space</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/coworking.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-yoga-studio.html">Yoga Studio</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/yoga-studio.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-influencer.html">Influencer</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/influencer.jpg);"></span>
                        </li>
                        <li>
                          <a class="dropdown-item" href="landing-blog.html">Blog Homepage</a>
                          <span class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 z-2 opacity-0" style="background-image: url(assets/img/megamenu/blog-homepage.jpg);"></span>
                        </li>
                      </ul>
                    </div>
                    <div class="mega-dropdown-column position-relative border-start z-3"></div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Portfolio</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="portfolio-list-v1.html">List View v.1</a></li>
                      <li><a class="dropdown-item" href="portfolio-list-v2.html">List View v.2</a></li>
                      <li><a class="dropdown-item" href="portfolio-grid-v1.html">Grid View v.1</a></li>
                      <li><a class="dropdown-item" href="portfolio-grid-v2.html">Grid View v.2</a></li>
                      <li><a class="dropdown-item" href="portfolio-slider.html">Slider View</a></li>
                      <li><a class="dropdown-item" href="portfolio-single-v1.html">Single Project v.1</a></li>
                      <li><a class="dropdown-item" href="portfolio-single-v2.html">Single Project v.2</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="shop-catalog.html">Catalog (Listing)</a></li>
                      <li><a class="dropdown-item" href="shop-single.html">Product Page</a></li>
                      <li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="blog-grid-sidebar.html">Grid View with Sidebar</a></li>
                      <li><a class="dropdown-item" href="blog-grid.html">Grid View no Sidebar</a></li>
                      <li><a class="dropdown-item" href="blog-list-sidebar.html">List View with Sidebar</a></li>
                      <li><a class="dropdown-item" href="blog-list.html">List View no Sidebar</a></li>
                      <li><a class="dropdown-item" href="blog-single-v1.html">Single post v.1</a></li>
                      <li><a class="dropdown-item" href="blog-single-v2.html">Single post v.2</a></li>
                      <li><a class="dropdown-item" href="blog-single-v3.html">Single post v.3</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="about-agency.html">About - Agency</a></li>
                      <li><a class="dropdown-item" href="about-product.html">About - Product</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="services-v1.html">Services v.1</a></li>
                      <li><a class="dropdown-item" href="services-v2.html">Services v.2</a></li>
                      <li><a class="dropdown-item" href="services-v3.html">Services v.3</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                  <li class="dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Contacts</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="contacts-v1.html">Contacts v.1</a></li>
                      <li><a class="dropdown-item" href="contacts-v2.html">Contacts v.2</a></li>
                      <li><a class="dropdown-item" href="contacts-v3.html">Contacts v.3</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Specialty Pages</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="coming-soon-v1.html">Coming Soon v.1</a></li>
                      <li><a class="dropdown-item" href="coming-soon-v2.html">Coming Soon v.2</a></li>
                      <li><a class="dropdown-item" href="404-v1.html">404 Error v.1</a></li>
                      <li><a class="dropdown-item" href="404-v2.html">404 Error v.2</a></li>
                      <li><a class="dropdown-item" href="404-v3.html">404 Error v.3</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Account</a>
                <ul class="dropdown-menu">
                  <li class="dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Auth pages</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="account-signin.html">Sign In</a></li>
                      <li><a class="dropdown-item" href="account-signup.html">Sign Up</a></li>
                      <li><a class="dropdown-item" href="account-signinup.html">Sign In / Up</a></li>
                      <li><a class="dropdown-item" href="account-password-recovery.html">Password Recovery</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="account-overview.html">Overview</a></li>
                  <li><a class="dropdown-item" href="account-settings.html">Settings</a></li>
                  <li><a class="dropdown-item" href="account-billing.html">Billing</a></li>
                  <li><a class="dropdown-item" href="account-orders.html">Orders</a></li>
                  <li><a class="dropdown-item" href="account-earnings.html">Earnings</a></li>
                  <li><a class="dropdown-item" href="account-chat.html">Chat (Messages)</a></li>
                  <li><a class="dropdown-item" href="account-favorites.html">Favorites (Wishlist)</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="components/typography.html">UI Kit</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="docs/getting-started.html">Docs</a>
              </li>
            </ul>
            <div class="d-sm-none p-3 mt-n3">
              <a class="btn btn-primary w-100 mb-1" href="https://themes.getbootstrap.com/product/around-multipurpose-template-ui-kit/" target="_blank" rel="noopener">
                <i class="ai-cart fs-xl me-2 ms-n1"></i>
                Buy now
              </a>
            </div>
          </nav>
        </div>
      </header>


      <!-- Hero -->
      <section class="position-relative pt-md-2 pt-lg-4 pt-xl-5 pb-5 pb-lg-0">
        <div class="position-absolute top-0 start-0 w-100 bg-secondary d-none d-lg-block" style="height: 792px; margin: -1px 0 0 -1px; background-size: 75px 75px; background-image: linear-gradient(to right, var(--ar-gray-200) 1px, transparent 1px), linear-gradient(to bottom, var(--ar-gray-200) 1px, transparent 1px);"></div>
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-secondary d-lg-none" style="margin: -1px 0 0 -1px; background-size: 75px 75px; background-image: linear-gradient(to right, var(--ar-gray-200) 1px, transparent 1px), linear-gradient(to bottom, var(--ar-gray-200) 1px, transparent 1px);"></div>
        <div class="container position-relative z-2 pt-5 pb-2 pb-sm-3 pb-lg-0">
          <div class="text-center py-5 mt-3 mt-sm-4 mb-md-3 mb-lg-4 mb-xl-5 mx-auto" style="max-width: 760px;">
            <h1 class="display-3 pb-1 pb-sm-2 pb-md-3">Start Preparing Today for a Serene Tomorrow</h1>
            <p class="fs-lg mb-0">Easily secure affordable coverage for your family's future.</p>
          </div>

          <!-- Google reviews (visible on screens > 768px) -->
          <div class="position-relative d-none d-md-block">
            <div class="position-absolute" style="right: 78.24%;">
              <img class="position-relative z-2" src="assets/img/landing/insurance/hero/google-reviews.png" width="282" alt="Google reviews">
              <div class="position-absolute top-0 start-0 w-100 h-100 bg-light rounded-3 shadow-sm d-dark-mode-none"></div>
              <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3 d-none d-dark-mode-block" style="background-color: #202327;"></div>
            </div>
          </div>
          
          <!-- Parallax image -->
          <div class="jarallax rounded overflow-hidden z-2" data-jarallax data-speed="0.65" style="-webkit-clip-path: url(#shape); clip-path: url(#shape);">
            <div class="d-none d-md-block ratio ratio-21x9"></div>
            <div class="d-md-none ratio ratio-16x9"></div>
            <svg class="d-none d-md-block" width="0" height="0" viewBox="0 0 1296 506">
              <defs>
                <clipPath id="shape" clipPathUnits="objectBoundingBox" transform="scale(0.0007716049383, 0.001976284585)">
                  <path d="M18 110H288C297.941 110 306 101.941 306 92V18C306 8.05887 314.059 0 324 0H1278C1287.94 0 1296 8.05888 1296 18V378C1296 387.941 1287.94 396 1278 396H1008C998.059 396 990 404.059 990 414V488C990 497.941 981.941 506 972 506H18C8.05887 506 0 497.941 0 488V128C0 118.059 8.05887 110 18 110Z"/>
                </clipPath>
              </defs>
            </svg>
            <img class="position-absolute top-0 end-0 z-2 mt-4 me-4" src="assets/img/landing/insurance/hero/award.png" width="132" alt="Award">
            <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></span>
            <div class="jarallax-img" style="background-image: url(assets/img/landing/insurance/hero/bg-image.jpg);"></div>
          </div>

          <!-- Clients (visible on screens > 768px) -->
          <div class="position-absolute bottom-0 d-none d-md-block" style="left: 77.5%;">
            <img class="position-relative z-2 d-dark-mode-none" src="assets/img/landing/insurance/hero/clients-light.png" width="282" alt="Google reviews">
            <img class="position-relative z-2 d-none d-dark-mode-block" src="assets/img/landing/insurance/hero/clients-dark.png" width="282" alt="Google reviews">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-light rounded-3 shadow-sm d-dark-mode-none"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3 d-none d-dark-mode-block" style="background-color: #202327;"></div>
          </div>

          <!-- Google reviews + Clients (visible on screens < 768px) -->
          <div class="d-flex flex-column flex-sm-row gap-3 pt-3 d-md-none">
            <div class="position-relative d-flex justify-content-center w-100">
              <img class="position-relative z-2" src="assets/img/landing/insurance/hero/google-reviews.png" width="282" alt="Google reviews">
              <div class="position-absolute top-0 start-0 w-100 h-100 bg-light rounded-3 shadow-sm d-dark-mode-none"></div>
              <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3 d-none d-dark-mode-block" style="background-color: #202327;"></div>
            </div>
            <div class="position-relative d-flex justify-content-center w-100">
              <img class="position-relative z-2 d-dark-mode-none" src="assets/img/landing/insurance/hero/clients-light.png" width="282" alt="Google reviews">
              <img class="position-relative z-2 d-none d-dark-mode-block" src="assets/img/landing/insurance/hero/clients-dark.png" width="282" alt="Google reviews">
              <div class="position-absolute top-0 start-0 w-100 h-100 bg-light rounded-3 shadow-sm d-dark-mode-none"></div>
              <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3 d-none d-dark-mode-block" style="background-color: #202327;"></div>
            </div>
          </div>
        </div>
      </section>

      
      <!-- Partners -->
      <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
        <div class="overflow-auto pb-sm-4 pb-md-5 pt-sm-2 pt-md-3 mt-n2 mt-sm-0 mt-md-1 mt-lg-3 mb-lg-2" data-simplebar>
          <div class="row row-cols-5 g-0 pb-2" style="min-width: 768px;">
            <div class="col d-flex justify-content-center">
              <img class="d-dark-mode-none" src="assets/img/landing/insurance/partners/deloitte-light.svg" width="196" alt="Deloitte">
              <img class="d-none d-dark-mode-block" src="assets/img/landing/insurance/partners/deloitte-dark.svg" width="196" alt="Deloitte">
            </div>
            <div class="col d-flex justify-content-center">
              <img src="assets/img/landing/insurance/partners/airbnb.svg" width="196" alt="Airbnb">
            </div>
            <div class="col d-flex justify-content-center">
              <img class="d-dark-mode-none" src="assets/img/landing/insurance/partners/champion-light.svg" width="196" alt="Champion">
              <img class="d-none d-dark-mode-block" src="assets/img/landing/insurance/partners/champion-dark.svg" width="196" alt="Champion">
            </div>
            <div class="col d-flex justify-content-center">
              <img class="d-dark-mode-none" src="assets/img/landing/insurance/partners/times-light.svg" width="196" alt="Financial Times">
              <img class="d-none d-dark-mode-block" src="assets/img/landing/insurance/partners/times-dark.svg" width="196" alt="Financial Times">
            </div>
            <div class="col d-flex justify-content-center">
              <img class="d-dark-mode-none" src="assets/img/landing/insurance/partners/clutch-light.svg" width="196" alt="Clutch">
              <img class="d-none d-dark-mode-block" src="assets/img/landing/insurance/partners/clutch-dark.svg" width="196" alt="Clutch">
            </div>
          </div>
        </div>
      </section>


      <!-- Benefits -->
      <section class="container pb-5 mb-lg-3 mb-xl-4 mb-xxl-5">
        <div class="row gy-3 pb-sm-3 pb-md-4 pb-lg-5">
          <div class="col-sm-6 col-lg-4">
            <div class="d-flex align-items-center mb-3">
              <div class="flex-shrink-0 bg-primary rounded-1 p-2">
                <svg class="text-white" width="28" height="28" viewBox="0 0 28 28" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M26.251 13.8502C26.0512 11.5597 25.2134 9.37118 23.8326 7.53287C22.4518 5.69455 20.5834 4.2801 18.4394 3.45005C16.2953 2.61999 13.9615 2.40757 11.7029 2.83689C9.44419 3.26622 7.35109 4.32009 5.66111 5.87891C3.40499 7.95157 2.01112 10.7971 1.75643 13.8502C1.73566 14.0918 1.76535 14.3351 1.8436 14.5647C1.92185 14.7942 2.04696 15.005 2.211 15.1836C2.37503 15.3623 2.5744 15.5049 2.79647 15.6024C3.01853 15.6999 3.25843 15.7501 3.50096 15.75H13.126V21.875C13.126 22.8033 13.4947 23.6935 14.1511 24.3499C14.8075 25.0063 15.6977 25.375 16.626 25.375C17.5542 25.375 18.4445 25.0063 19.1008 24.3499C19.7572 23.6935 20.126 22.8033 20.126 21.875C20.126 21.6429 20.0338 21.4204 19.8697 21.2563C19.7056 21.0922 19.483 21 19.251 21C19.0189 21 18.7963 21.0922 18.6322 21.2563C18.4681 21.4204 18.376 21.6429 18.376 21.875C18.376 22.3391 18.1916 22.7843 17.8634 23.1124C17.5352 23.4406 17.0901 23.625 16.626 23.625C16.1618 23.625 15.7167 23.4406 15.3885 23.1124C15.0603 22.7843 14.876 22.3391 14.876 21.875V15.75H24.501C24.7439 15.7509 24.9844 15.7012 25.2072 15.604C25.4299 15.5068 25.6299 15.3644 25.7945 15.1856C25.9592 15.0069 26.0848 14.7959 26.1633 14.566C26.2419 14.336 26.2718 14.0923 26.251 13.8502ZM3.50096 14C3.69489 11.746 4.61052 9.61458 6.11193 7.92225C7.61334 6.22991 9.62047 5.06687 11.8353 4.60578C10.5535 6.34375 8.9533 9.41828 8.76955 14H3.50096ZM10.5174 14C10.6694 10.6345 11.6691 8.22391 12.5189 6.755C12.938 6.02531 13.4349 5.3432 14.001 4.72063C14.566 5.34329 15.0618 6.02541 15.4797 6.755C16.9322 9.26406 17.3916 11.9525 17.4813 14H10.5174ZM19.2291 14C19.0453 9.41828 17.4452 6.34375 16.1666 4.60031C18.3829 5.06038 20.3914 6.22384 21.8931 7.91752C23.3949 9.6112 24.3095 11.7445 24.501 14H19.2291Z"/>
                </svg>
              </div>
              <h3 class="h5 ms-3 mb-0">One-stop insurance solution</h3>
            </div>
            <p class="fs-sm">Gaining access to a comprehensive suite of insurance products, it saves you time and effort by managing all your insurance needs under one roof.</p>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="d-flex align-items-center mb-3">
              <div class="flex-shrink-0 bg-primary rounded-1 p-2">
                <svg class="text-white" width="28" height="28" viewBox="0 0 28 28" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21 12.6875C21 12.9471 20.923 13.2008 20.7788 13.4167C20.6346 13.6325 20.4296 13.8008 20.1898 13.9001C19.9499 13.9994 19.686 14.0254 19.4314 13.9748C19.1768 13.9241 18.943 13.7991 18.7594 13.6156C18.5759 13.432 18.4509 13.1982 18.4002 12.9436C18.3496 12.689 18.3756 12.4251 18.4749 12.1852C18.5742 11.9454 18.7425 11.7404 18.9583 11.5962C19.1742 11.452 19.4279 11.375 19.6875 11.375C20.0356 11.375 20.3694 11.5133 20.6156 11.7594C20.8617 12.0056 21 12.3394 21 12.6875ZM16.625 7H12.25C12.0179 7 11.7954 7.09219 11.6313 7.25628C11.4672 7.42038 11.375 7.64294 11.375 7.875C11.375 8.10706 11.4672 8.32962 11.6313 8.49372C11.7954 8.65781 12.0179 8.75 12.25 8.75H16.625C16.8571 8.75 17.0796 8.65781 17.2437 8.49372C17.4078 8.32962 17.5 8.10706 17.5 7.875C17.5 7.64294 17.4078 7.42038 17.2437 7.25628C17.0796 7.09219 16.8571 7 16.625 7ZM27.125 12.25V15.75C27.125 16.4462 26.8484 17.1139 26.3562 17.6062C25.8639 18.0984 25.1962 18.375 24.5 18.375H24.2419L22.4689 23.3384C22.3475 23.6784 22.124 23.9725 21.8289 24.1805C21.5338 24.3884 21.1816 24.5 20.8206 24.5H19.4294C19.0684 24.5 18.7162 24.3884 18.4211 24.1805C18.126 23.9725 17.9025 23.6784 17.7811 23.3384L17.5711 22.75H11.3039L11.0939 23.3384C10.9725 23.6784 10.749 23.9725 10.4539 24.1805C10.1588 24.3884 9.80662 24.5 9.44563 24.5H8.05437C7.69338 24.5 7.3412 24.3884 7.04612 24.1805C6.75103 23.9725 6.52748 23.6784 6.40609 23.3384L5.03125 19.4928C3.72332 18.0125 2.90436 16.1645 2.68625 14.2012C2.40387 14.3496 2.16739 14.5722 2.00238 14.8452C1.83737 15.1182 1.7501 15.431 1.75 15.75C1.75 15.9821 1.65781 16.2046 1.49372 16.3687C1.32962 16.5328 1.10706 16.625 0.875 16.625C0.642936 16.625 0.420376 16.5328 0.256282 16.3687C0.0921873 16.2046 0 15.9821 0 15.75C0.00133698 14.9697 0.2634 14.2122 0.744553 13.5979C1.22571 12.9835 1.89835 12.5476 2.65563 12.3594C2.8511 9.94801 3.94627 7.69835 5.72368 6.0571C7.50109 4.41586 9.83073 3.50307 12.25 3.5H23.625C23.8571 3.5 24.0796 3.59219 24.2437 3.75628C24.4078 3.92038 24.5 4.14294 24.5 4.375C24.5 4.60706 24.4078 4.82962 24.2437 4.99372C24.0796 5.15781 23.8571 5.25 23.625 5.25H21.2855C22.7376 6.26882 23.8796 7.66941 24.5853 9.29688C24.6323 9.40625 24.6783 9.51562 24.722 9.625C25.3791 9.68077 25.991 9.98176 26.4363 10.4681C26.8815 10.9545 27.1274 11.5906 27.125 12.25ZM25.375 12.25C25.375 12.0179 25.2828 11.7954 25.1187 11.6313C24.9546 11.4672 24.7321 11.375 24.5 11.375H24.0997C23.9133 11.3752 23.7318 11.3159 23.5815 11.2057C23.4312 11.0956 23.32 10.9403 23.2641 10.7625C22.7627 9.16271 21.7633 7.76499 20.4115 6.77332C19.0598 5.78164 17.4265 5.24791 15.75 5.25H12.25C10.7217 5.24992 9.22644 5.69453 7.94649 6.52962C6.66655 7.36471 5.65725 8.55419 5.04167 9.95301C4.42609 11.3518 4.23084 12.8995 4.47971 14.4074C4.72859 15.9153 5.41084 17.3182 6.44328 18.445C6.52223 18.5309 6.58322 18.6316 6.62266 18.7414L8.05437 22.75H9.44563L9.86344 21.5808C9.9241 21.4109 10.0358 21.2639 10.1832 21.1599C10.3307 21.0559 10.5066 21.0001 10.687 21H18.188C18.3684 21.0001 18.5443 21.0559 18.6918 21.1599C18.8392 21.2639 18.9509 21.4109 19.0116 21.5808L19.4294 22.75H20.8206L22.8014 17.2058C22.8621 17.0359 22.9738 16.8889 23.1212 16.7849C23.2686 16.6809 23.4446 16.6251 23.625 16.625H24.5C24.7321 16.625 24.9546 16.5328 25.1187 16.3687C25.2828 16.2046 25.375 15.9821 25.375 15.75V12.25Z"/>
                </svg>
              </div>
              <h3 class="h5 ms-3 mb-0">Bundle and Save</h3>
            </div>
            <p class="fs-sm">We offer attractive discounts and benefits when you bundle multiple insurance lines with us. Enjoy cost savings while ensuring comprehensive coverage for your well-being, your vehicle, and your adventures.</p>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="d-flex align-items-center mb-3">
              <div class="flex-shrink-0 bg-primary rounded-1 p-2">
                <svg class="text-white" width="28" height="28" viewBox="0 0 28 28" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22.75 4.375H5.25C4.78587 4.375 4.34075 4.55937 4.01256 4.88756C3.68437 5.21575 3.5 5.66087 3.5 6.125V12.5541C3.5 22.3552 11.7928 25.6069 13.4531 26.1592C13.8077 26.2798 14.1923 26.2798 14.5469 26.1592C16.2094 25.6069 24.5 22.3552 24.5 12.5541V6.125C24.5 5.66087 24.3156 5.21575 23.9874 4.88756C23.6592 4.55937 23.2141 4.375 22.75 4.375ZM22.75 12.5552C22.75 21.1323 15.493 23.998 14 24.4967C12.5202 24.0034 5.25 21.14 5.25 12.5552V6.125H22.75V12.5552ZM9.00594 15.4941C8.84175 15.3299 8.74951 15.1072 8.74951 14.875C8.74951 14.6428 8.84175 14.4201 9.00594 14.2559C9.17012 14.0918 9.39281 13.9995 9.625 13.9995C9.85719 13.9995 10.0799 14.0918 10.2441 14.2559L12.25 16.2619L17.7559 10.7559C17.8372 10.6746 17.9337 10.6102 18.04 10.5662C18.1462 10.5222 18.26 10.4995 18.375 10.4995C18.49 10.4995 18.6038 10.5222 18.71 10.5662C18.8163 10.6102 18.9128 10.6746 18.9941 10.7559C19.0754 10.8372 19.1398 10.9337 19.1838 11.04C19.2278 11.1462 19.2505 11.26 19.2505 11.375C19.2505 11.49 19.2278 11.6038 19.1838 11.71C19.1398 11.8163 19.0754 11.9128 18.9941 11.9941L12.8691 18.1191C12.7878 18.2004 12.6913 18.265 12.5851 18.309C12.4788 18.353 12.365 18.3757 12.25 18.3757C12.135 18.3757 12.0212 18.353 11.9149 18.309C11.8087 18.265 11.7122 18.2004 11.6309 18.1191L9.00594 15.4941Z"/>
                </svg>
              </div>
              <h3 class="h5 ms-3 mb-0">Consistency and Trust</h3>
            </div>
            <p class="fs-sm">We have a proven track record of financial stability and commitment to customer satisfaction. Our experience and expertise ensure that you receive reliable coverage and support.</p>
          </div>
        </div>
      </section>


      <!-- Services: Car insurance -->
      <section class="overflow-hidden pb-5">
        <div class="container pb-sm-3 mb-md-2 mb-lg-3">
          <div class="row g-4">
            <div class="col-md-7" data-aos="fade-right" data-aos-duration="600" data-aos-offset="280" data-disable-parallax-down="md">
              <img class="object-fit-cover w-100 h-100 rounded-3" src="assets/img/landing/insurance/services/01.jpg" alt="Image">
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-duration="600" data-aos-offset="280" data-disable-parallax-down="md">
              <div class="d-flex flex-column h-100 bg-secondary rounded-3 py-5 px-4 px-lg-5">
                <h2 class="mb-xl-4">Car insurance</h2>
                <p class="mb-4 mb-xl-5">Explore our car insurance plans designed to give you peace of mind on the road. Whether you're a daily commuter, a weekend adventurer, or a family driver, we've got you covered. With competitive rates, customizable coverage options, and a commitment to your safety, our car insurance is your trusted driving companion. Get a quote today and experience the ease of driving with confidence.</p>
                <ul class="list-unstyled mb-4 mb-xl-5">
                  <li class="d-flex pb-2 mb-1">
                    <span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                    Comprehensive coverage
                  </li>
                  <li class="d-flex pb-2 mb-1">
                    <span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                    Customizable plans
                  </li>
                  <li class="d-flex pb-2 mb-1">
                    <span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                    Financial security
                  </li>
                  <li class="d-flex pb-2 mb-1">
                    <span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                    Car insurance discounts
                  </li>
                </ul>
                <div class="mt-auto">
                  <a class="btn btn-outline-primary" href="#">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Services: Travel insurance -->
      <section class="overflow-hidden pb-5">
        <div class="container pb-sm-3 mb-md-2 mb-lg-3">
          <div class="row g-4">
            <div class="col-md-7 order-md-2" data-aos="fade-left" data-aos-duration="600" data-aos-offset="280" data-disable-parallax-down="md">
              <img class="object-fit-cover w-100 h-100 rounded-3" src="assets/img/landing/insurance/services/02.jpg" alt="Image">
            </div>
            <div class="col-md-5 order-md-1" data-aos="fade-right" data-aos-duration="600" data-aos-offset="280" data-disable-parallax-down="md">
              <div class="d-flex flex-column h-100 bg-secondary rounded-3 py-5 px-4 px-lg-5">
                <h2 class="mb-xl-4">Travel insurance</h2>
                <p class="mb-4 mb-xl-5">Explore the world with confidence, knowing you're protected wherever you go. Discover our travel insurance plans designed to keep you safe on your journeys. From solo escapades to family getaways, we offer a range of travel insurance options to match your travel style and needs.</p>
                <ul class="list-unstyled mb-4 mb-xl-5">
                  <li class="d-flex pb-2 mb-1">
                    <span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                    Comprehensive protection
                  </li>
                  <li class="d-flex pb-2 mb-1">
                    <span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                    Tailored plans
                  </li>
                  <li class="d-flex pb-2 mb-1">
                    <span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                    Emergency medical assistance
                  </li>
                </ul>
                <div class="mt-auto">
                  <a class="btn btn-outline-primary" href="#">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Services: Health insurance -->
      <section class="overflow-hidden pb-5">
        <div class="container pb-sm-3 mb-md-2 mb-lg-3">
          <div class="row g-4">
            <div class="col-md-7" data-aos="fade-right" data-aos-duration="600" data-aos-offset="280" data-disable-parallax-down="md">
              <img class="object-fit-cover w-100 h-100 rounded-3" src="assets/img/landing/insurance/services/03.jpg" alt="Image">
            </div>
            <div class="col-md-5" data-aos="fade-left" data-aos-duration="600" data-aos-offset="280" data-disable-parallax-down="md">
              <div class="d-flex flex-column h-100 bg-secondary rounded-3 py-5 px-4 px-lg-5">
                <h2 class="mb-xl-4">Health insurance</h2>
                <p class="mb-4 mb-xl-5">Your health and well-being are our top priorities. We're more than just insurance; we're your partner in good health. We offer a range of health insurance options to suit your unique healthcare needs.</p>
                <ul class="list-unstyled mb-4 mb-xl-5">
                  <li class="d-flex pb-2 mb-1">
                    <span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                    Manage your policy online - anywhere, anytime
                  </li>
                  <li class="d-flex pb-2 mb-1">
                    <span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                    International coverage
                  </li>
                  <li class="d-flex pb-2 mb-1">
                    <span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                    Fast access to treatment
                  </li>
                  <li class="d-flex pb-2 mb-1">
                    <span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                    Fast, simple claiming
                  </li>
                </ul>
                <div class="mt-auto">
                  <a class="btn btn-outline-primary" href="#">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Get a quote CTA -->
      <section class="container pt-lg-4 pt-xl-5 mt-lg-2 mt-xxl-4">
        <div class="position-relative bg-size-cover bg-position-center rounded-3 py-5" style="background-image: url(assets/img/landing/insurance/cta-bg.jpg);">
          <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
          <div class="row position-relative z-2 py-md-4 py-lg-5 my-2">
            <div class="col-8 col-sm-6 col-md-5 col-lg-4 col-xxl-3 offset-1">
              <h2 class="h1 text-white pb-2 pb-sm-3">See how much you can save</h2>
              <a class="btn btn-primary" href="#">Get a quote now</a>
            </div>
          </div>
        </div>
      </section>


      <!-- FAQ -->
      <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
        <div class="row py-2 py-sm-4 py-md-5 mt-lg-2">
          <div class="col-sm-9 col-md-4 col-lg-5 mb-5 mb-md-0">
            <div class="position-relative mb-sm-2">
              <div class="position-absolute top-0" style="right: 37.26%;">
                <img class="position-relative z-2 d-dark-mode-none" src="assets/img/landing/insurance/faq/staff-light.png" width="330" alt="Support staff">
                <img class="position-relative z-2 d-none d-dark-mode-block" src="assets/img/landing/insurance/faq/staff-dark.png" width="330" alt="Support staff">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-light rounded-3 shadow-sm d-dark-mode-none"></div>
                <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3 d-none d-dark-mode-block" style="background-color: #202327;"></div>
              </div>
              <img src="assets/img/landing/insurance/faq/preview.jpg" style="-webkit-clip-path: url(#mask); clip-path: url(#mask);" alt="Image">
              <svg width="0" height="0" viewBox="0 0 526 410" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <clipPath id="mask" clipPathUnits="objectBoundingBox" transform="scale(0.001901140684, 0.00243902439)">
                    <path d="M0 392V119.598C0 109.648 8.0717 101.586 18.021 101.598L331.979 101.964C341.928 101.976 350 93.9133 350 83.964V18.3667C350 8.44183 358.033 0.389727 367.958 0.366699L507.958 0.0418617C517.916 0.0187578 526 8.08438 526 18.0418V392C526 401.941 517.941 410 508 410H18C8.05887 410 0 401.941 0 392Z"/>
                  </clipPath>
                </defs>
              </svg>
            </div>
            <h3 class="h5">Don't see the answer you need?</h3>
            <p class="mb-sm-4">That's ok. Just drop a message and we will get back to you ASAP.</p>
            <a class="btn btn-primary" href="#">Contact us</a>
          </div>
          <div class="col-md-8 col-lg-7">
            <div class="ps-md-3 ps-lg-4 ps-xl-5">
              <h2 class="h1 pb-sm-1 pb-md-3">Common Questions &amp; Answers</h2>

              <!-- Accordion -->
              <div class="accordion" id="faq">
                <div class="accordion-item bg-transparent mb-n1 mb-xl-1">
                  <h3 class="accordion-header">
                    <button class="accordion-button fs-6 py-3 px-0" type="button" data-bs-toggle="collapse" data-bs-target="#real-estate" aria-expanded="true" aria-controls="real-estate">How often should I review and update my insurance coverage?</button>
                  </h3>
                  <div class="accordion-collapse collapse show" id="real-estate" data-bs-parent="#faq">
                    <div class="accordion-body fs-sm">
                      <p>It's essential to periodically review and update your insurance coverage to ensure it meets your current needs. Here are some guidelines for different types of insurance:</p>
                      <ul class="mb-0">
                        <li><strong>Car tnsurance:</strong> Review your policy annually or when you experience significant life changes, such as buying a new vehicle, moving to a new location, or a change in your driving habits.</li>
                        <li><strong>Health insurance:</strong> Review your health insurance coverage during your open enrollment period or after major life events like marriage, having a child, or experiencing a change in income.Health Insurance: Review your health insurance coverage during your open enrollment period or after major life events like marriage, having a child, or experiencing a change in income.</li>
                        <li><strong>Life Insurance:</strong> Review your life insurance coverage whenever you have a significant life change, such as marriage, the birth of a child, or when you have new financial responsibilities.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item bg-transparent mb-n1 mb-xl-1">
                  <h3 class="accordion-header">
                    <button class="accordion-button fs-6 py-3 px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech" aria-expanded="false" aria-controls="tech">How can I request a quote for insurance coverage?</button>
                  </h3>
                  <div class="accordion-collapse collapse" id="tech" data-bs-parent="#faq">
                    <div class="accordion-body fs-sm">
                      <p>To request a quote for insurance coverage, you have a few options:</p>
                      <ul class="mb-0">
                        <li>You can contact our customer service team by phone, and they will guide you through the process and provide a personalized quote.</li>
                        <li>You can visit our website and use our online quote request form. Simply provide the required information, and you'll receive a quote shortly.</li>
                        <li>Visit one of our local branches and speak with an agent who can assist you in person.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item bg-transparent mb-n1 mb-xl-1">
                  <h3 class="accordion-header">
                    <button class="accordion-button fs-6 py-3 px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#finance" aria-expanded="false" aria-controls="finance">What should I do in case of medical emergency?</button>
                  </h3>
                  <div class="accordion-collapse collapse" id="finance" data-bs-parent="#faq">
                    <div class="accordion-body fs-sm">
                      <p>In the event of a medical emergency during your stay, you must contact emergency assistance listed on your health insurance card before seeking care. In the event that you cannot contact emergency assistance prior to receiving treatments, you can ask someone to call for you, or call as soon as it is possible.</p>
                      <p class="mb-0">Go to the nearest medical facility or hospital as soon as possible if it's safe to do so. Ensure you receive the necessary medical care without delay. After ensuring your safety and receiving initial medical care, please contact our 24/7 emergency hotline at + 1 526 220 0444. Our dedicated team is here to assist you during your medical emergency.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item bg-transparent mb-n1 mb-xl-1">
                  <h3 class="accordion-header">
                    <button class="accordion-button fs-6 py-3 px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#medicine" aria-expanded="false" aria-controls="medicine">What factors influence the cost of my insurance premium?</button>
                  </h3>
                  <div class="accordion-collapse collapse" id="medicine" data-bs-parent="#faq">
                    <div class="accordion-body fs-sm">
                      <p>The cost of your insurance premium can be influenced by several factors, including but not limited to:</p>
                      <ul>
                        <li>The type of insurance coverage you need.</li>
                        <li>Your driving history (for auto insurance).</li>
                        <li>Your health status (for health insurance).</li>
                        <li>The coverage limits and deductibles you choose.</li>
                        <li>Any additional coverage or endorsements you add to your policy.</li>
                        <li>Your credit score (in some cases).</li>
                      </ul>
                      <p class="mb-0">Keep in mind that the specific factors that affect your premium may vary depending on the type of insurance you're looking to purchase.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>


    <!-- Footer -->
    <footer class="footer">
      <div class="bg-primary py-4" data-bs-theme="dark">
        <div class="container fs-lg text-body text-center">Our dedicated team of nearly 2,300 staff members is prepared to assist you. <a class="text-white" href="#">Talk to our finance agent</a></div>
      </div>
      <div class="bg-secondary py-5">
        <div class="container pt-sm-2 pt-md-3 pt-lg-4">
          <div class="row gy-md-5 gy-4 mb-md-5 mb-4 pb-lg-2">
            <div class="col-lg-3">
              <a class="navbar-brand d-inline-flex align-items-center mt-0 mb-lg-4 mb-3" href="index.html">
                <span class="text-primary flex-shrink-0 me-2">
                  <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
                  </svg>
                </span>
                <span class="text-nav">Around</span>
              </a>
              <p class="mb-4 pb-lg-3 fs-xs text-body-secondary" style="max-width: 306px;">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque proin lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem enim aenean phasellus in hendrerit</p>
              <div class="mt-n3 ms-n3">
                <a class="btn btn-secondary btn-icon btn-sm btn-facebook rounded-circle mt-3 ms-3" href="#" aria-label="Facebook">
                  <i class="ai-facebook"></i>
                </a>
                <a class="btn btn-secondary btn-icon btn-sm btn-linkedin rounded-circle mt-3 ms-3" href="#" aria-label="LinkedIn">
                  <i class="ai-linkedin"></i>
                </a>
                <a class="btn btn-secondary btn-icon btn-sm btn-x rounded-circle mt-3 ms-3" href="#" aria-label="X">
                  <i class="ai-x"></i>
                </a>
              </div>
            </div>
            <div class="col-xl-8 offset-xl-1 col-lg-9">
              <div class="row row-cols-sm-4 row-cols-1">
                <div class="col">
                  <ul class="nav flex-column mb-0">
                    <li class="nav-item mb-2">
                      <a class="nav-link p-0" href="#">About us</a>
                    </li>
                    <li class="nav-item mb-2">
                      <a class="nav-link p-0" href="#">Our team</a>
                    </li>
                    <li class="nav-item mb-2">
                      <a class="nav-link p-0" href="#">Customer reviews</a>
                    </li>
                    <li class="nav-item mb-2">
                      <a class="nav-link p-0" href="#">Latest news</a>
                    </li>
                  </ul>
                </div>
                <div class="col">
                  <ul class="nav flex-column mb-0">
                    <li class="nav-item mb-2">
                      <a class="nav-link p-0" href="#">Health insurance</a>
                    </li>
                    <li class="nav-item mb-2">
                      <a class="nav-link p-0" href="#">Car insurance</a>
                    </li>
                    <li class="nav-item mb-2">
                      <a class="nav-link p-0" href="#">Travel insurance</a>
                    </li>
                  </ul>
                </div>
                <div class="col">
                  <ul class="nav flex-column mb-0">
                    <li class="nav-item mb-2">
                      <a class="nav-link p-0" href="#">Licensing</a>
                    </li>
                    <li class="nav-item mb-2">
                      <a class="nav-link p-0" href="#">Privacy policy</a>
                    </li>
                    <li class="nav-item mb-2">
                      <a class="nav-link p-0" href="#">Terms of use</a>
                    </li>
                  </ul>
                </div>
                <div class="col">
                  <ul class="nav flex-column mb-0">
                    <li class="nav-item mb-2">
                      <a class="nav-link p-0" href="tel:+15262200444">+&nbsp;1&nbsp;526&nbsp;220&nbsp;0444</a>
                    </li>
                    <li class="nav-item mb-2">
                      <a class="nav-link p-0" href="tel:+15262200444">+&nbsp;1&nbsp;526&nbsp;220&nbsp;0000</a>
                    </li>
                    <li class="nav-item mb-2">
                      <a class="nav-link p-0" href="mailto:email@example.com">email@example.com</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="fs-sm text-body-secondary">&copy; All rights reserved. Made by <a href="https://createx.studio/" target="_blank" rel="noopener" class="text-dark text-decoration-none opacity-90">Createx Studio</a></div>
        </div>
      </div>
    </footer>


    <!-- Back to top button -->
    <a class="btn-scroll-top" href="#top" data-scroll aria-label="Scroll back to top">
      <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
      </svg>
      <i class="ai-arrow-up"></i>
    </a>


    <!-- Vendor scripts: JS libraries and plugins -->
    <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>

    <!-- Customizer -->
    <script src="assets/js/customizer.min.js"></script>
  </body>
</html>
