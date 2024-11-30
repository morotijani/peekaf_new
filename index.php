<?php

  require_once ('db_connection/conn.php');

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    
    <!-- SEO meta tags -->
    <title>Peekaf Company Limited</title>
    <meta name="description" content="Peekaf - Export, Import, Manufacturing. Rice and Vegetable oil">
    <meta name="keywords" content="export, import, rice, cooking oil, oil, vegetable oil, peekaf, e-commerce, jasmine rice, basmati rice, time daso rice, vegetable, shop, importexport, buy, sell, ghana, westafrica, asia, vilaconic, exportimport, shipment, shipping, country, manufacturing">
    <meta name="author" content="Peekaf IT Department">

    <!-- Webmanifest + Favicon / App icons -->
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" type="image/png" href="<?= PROOT; ?>assets/media/logo/logo.png" sizes="32x32">
    <link rel="apple-touch-icon" href="<?= PROOT; ?>assets/media/logo/logo.png">
        
    <!-- Theme switcher (color modes) -->
    <script src="<?= PROOT; ?>assets/js/theme-switcher.js"></script>

    <!-- Import Google font (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" id="google-font">

    <!-- Vendor styles -->
    <!-- <link rel="stylesheet" media="screen" href="<?= PROOT; ?>assets/css/simplebar.min.css"> -->
    <link rel="stylesheet" media="screen" href="<?= PROOT; ?>assets/css/aos.css"> 

	<link rel="stylesheet" media="screen" href="<?= PROOT; ?>assets/css/swiper-bundle.min.css">
	<link rel="stylesheet" media="screen" href="<?= PROOT; ?>assets/css/lightgallery-bundle.min.css">

    <!-- Font icons -->
    <link rel="stylesheet" href="<?= PROOT; ?>assets/css/around-icons.min.css">

    <!-- Theme styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="<?= PROOT; ?>assets/css/theme.min.css">

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
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NGLSZJD5');</script>
	<!-- End Google Tag Manager -->
</head>

<!-- Body -->
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NGLSZJD5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <!-- Page loading spinner -->
    <div class="page-loading active">
    	<div class="page-loading-inner">
        	<div class="page-spinner"></div>
        	<span>Loading...</span>
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
					<img src="<?= PROOT; ?>assets/media/logo/logo.png" width="35" height="32" />
				</span>
				PEE KAF
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

			<a class="btn btn-danger btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex" href="" rel="noopener">
				<i class="ai-cart fs-xl me-2 ms-n1"></i>
				Store
			</a>

			<!-- Mobile menu toggler (Hamburger) -->
			<button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Navbar collapse (Main navigation) -->
			<nav class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
					<li class="nav-item">
						<a class="nav-link" href="components/typography.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="docs/getting-started.html">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="docs/getting-started.html">About us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="docs/getting-started.html">Contact us</a>
					</li>
				</ul>
				<div class="d-sm-none p-3 mt-n3">
					<a class="btn btn-danger w-100 mb-1" href="" target="_blank" rel="noopener">
						<i class="ai-cart fs-xl me-2 ms-n1"></i>
						Store
					</a>
				</div>
			</nav>
		</div>
	</header>

	<!-- Hero slider -->
	<section class="position-relative min-vh-100 py-5" data-bs-theme="light">

		<!-- Background image slider -->
		<div class="swiper swiper-scale-effect position-absolute top-0 start-0 w-100 h-100" data-swiper-options='{
			"effect": "fade",
			"speed": 800,
			"autoplay": {
				"delay": 7000,
				"disableOnInteraction": false
			},
			"pagination": {
				"el": ".swiper-pagination",
				"clickable": true
			}
			}'>
			<div class="swiper-wrapper">
				<div class="swiper-slide">
				<div class="swiper-slide-cover bg-position-top-center" style="background-image: url(assets/media/bg-1.jpg);"></div>
				</div>
				<div class="swiper-slide">
				<div class="swiper-slide-cover bg-position-top-center" style="background-image: url(assets/media/bg-5.jpeg);"></div>
				</div>
				<div class="swiper-slide">
				<div class="swiper-slide-cover bg-position-top-center" style="background-image: url(assets/media/bg-2.jpg);"></div>
				</div>
			</div>
			<div class="swiper-pagination mb-4"></div>
		</div>

		<!-- Content -->
		<div class="container position-relative z-2 py-lg-3 py-xl-5 my-5">
			<div class="row pt-md-3 py-xxl-5 my-5">
				<div class="col py-5 mb-md-4 mb-lg-5">
					<h1 class="display-1 text-uppercase mb-4" style="width: fit-content; background-color: #6d181585; border-radius: 5px;">Pee Kaf</h1>
					<p class="d-block text-light fs-xl pb-2 mb-4 mb-md-5" style="max-width: 500px; border-radius: 5px; padding: 5px; background-color: #95a9bb8f;">Your trusted ally in seamless global trade and manufacturing. Focus locally, reach globally. </p>
					<div class="position-relative d-inline-flex align-items-center">
						<a class="btn btn-icon btn-lg btn-danger rounded-circle stretched-link" href="javascript:;">
							<i class="ai-phone"></i>
						</a>
						<span class="text-light fs-lg fw-semibold ms-3">Contacts us</span>
					</div>
				</div>
			</div>
		</div>
	</section>
      
    <!-- Partners -->
    <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
        <div class="overflow-auto pb-sm-4 pb-md-5 pt-sm-2 pt-md-3 mt-n2 mt-sm-0 mt-md-1 mt-lg-3 mb-lg-2" data-simplebar>
        	<div class="row row-cols-5 g-0 pb-2" style="min-width: 768px;">
            	<div class="col d-flex justify-content-center">
					<img class="d-dark-mode-none" src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="196" alt="Deloitte">
					<img class="d-none d-dark-mode-block" src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="196" alt="Deloitte">
				</div>
            	<div class="col d-flex justify-content-center">
					<img src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="196" alt="Airbnb">
				</div>
				<div class="col d-flex justify-content-center">
					<img class="d-dark-mode-none" src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="196" alt="Champion">
					<img class="d-none d-dark-mode-block" src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="196" alt="Champion">
				</div>
				<div class="col d-flex justify-content-center">
					<img class="d-dark-mode-none" src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="196" alt="Financial Times">
              		<img class="d-none d-dark-mode-block" src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="196" alt="Financial Times">
            	</div>
				<div class="col d-flex justify-content-center">
					<img class="d-dark-mode-none" src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="196" alt="Clutch">
					<img class="d-none d-dark-mode-block" src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="196" alt="Clutch">
				</div>
			</div>
		</div>
	</section>


    <!-- Benefits -->
    <section class="container pb-5 mb-lg-3 mb-xl-4 mb-xxl-5">
        <div class="row gy-3 pb-sm-3 pb-md-4 pb-lg-5">
        	<div class="col-sm-6 col-lg-4">
            	<div class="d-flex align-items-center mb-3">
              		<div class="flex-shrink-0 bg-danger rounded-1 p-2">
						<img src="<?= PROOT; ?>assets/media/factory.png" width="28" height="28">
					</div>
              		<h3 class="h5 ms-3 mb-0">Manufacturing</h3>
            	</div>
            	<p class="fs-sm">We produce premium-grade vegetable oil and rice, ensuring excellence from production to packaging.</p>
         	</div>
          	<div class="col-sm-6 col-lg-4">
            	<div class="d-flex align-items-center mb-3">
              		<div class="flex-shrink-0 bg-danger rounded-1 p-2">
						<img src="<?= PROOT; ?>assets/media/import.png" width="28" height="28">
					</div>
					<h3 class="h5 ms-3 mb-0">Import</h3>
				</div>
				<p class="fs-sm">Sourcing the finest varieties of rice and vegetable oil globally to meet the diverse needs of our customers.</p>
			</div>
			<div class="col-sm-6 col-lg-4">
				<div class="d-flex align-items-center mb-3">
              		<div class="flex-shrink-0 bg-danger rounded-1 p-2">
			  			<img src="<?= PROOT; ?>assets/media/export.png" width="28" height="28">
              		</div>
              		<h3 class="h5 ms-3 mb-0">Export</h3>
            	</div>
            	<p class="fs-sm">Sharing Ghana's quality products with the world by exporting our vegetable oil and rice to international markets.</p>
         	</div>
        </div>
    </section>


    <!-- Services: Car insurance -->
    <section class="overflow-hidden pb-5">
        <div class="container pb-sm-3 mb-md-2 mb-lg-3">
        	<div class="row g-4">
            	<div class="col-md-7" data-aos="fade-right" data-aos-duration="600" data-aos-offset="280" data-disable-parallax-down="md">
            		<img class="object-fit-cover w-100 h-100 rounded-3" src="<?= PROOT; ?>assets/media/bg-6.jpeg" alt="Image">
            	</div>
            	<div class="col-md-5" data-aos="fade-left" data-aos-duration="600" data-aos-offset="280" data-disable-parallax-down="md">
					<div class="d-flex flex-column h-100 bg-secondary rounded-3 py-5 px-4 px-lg-5">
						<h2 class="mb-xl-4">Manufacturing</h2>
						<p class="mb-4 mb-xl-5">
							At Peekaf, we pride ourselves on producing high-quality vegetable oil and rice that meet global standards.
						</p>
						<ul class="list-unstyled mb-4 mb-xl-5">
							<li class="d-flex pb-2 mb-1">
								<span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
								Vegetable Oil Production:
								<br>
								Our oils are carefully processed using advanced techniques to preserve nutrients and maintain purity. These oils are ideal for cooking, frying, and other culinary uses, ensuring both health and taste.
							</li>
							<li class="d-flex pb-2 mb-1">
								<span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
								Rice Processing:
								<br>
								Peekaf processes various rice varieties, including premium basmati and long-grain rice, ensuring consistency, aroma, and taste. We use cutting-edge machinery to clean, mill, and package rice, guaranteeing freshness and quality.
							</li>
							<li class="d-flex pb-2 mb-1">
								<span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
								Commitment to Quality:
								<br>
								Every product is thoroughly tested and packaged to meet both local and international food safety standards.
							</li>
						</ul>
						<div class="mt-auto">
							<a class="btn btn-outline-primary" href="<?= PROOT; ?>manufacturing">Learn more</a>
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
              		<img class="object-fit-cover w-100 h-100 rounded-3" src="<?= PROOT; ?>assets/media/bg-4.jpg" alt="Image">
				</div>
				<div class="col-md-5 order-md-1" data-aos="fade-right" data-aos-duration="600" data-aos-offset="280" data-disable-parallax-down="md">
					<div class="d-flex flex-column h-100 bg-secondary rounded-3 py-5 px-4 px-lg-5">
						<h2 class="mb-xl-4">Importation</h2>
                		<p class="mb-4 mb-xl-5">
							Peekaf connects Ghanaian markets with the best international suppliers.
							<br><br>
							<span class="fw-bold">Sourcing Global Excellence:</span>
							<br>We import premium rice varieties and vegetable oils from trusted international suppliers to offer a diverse range of options for our customers. This ensures affordability without compromising on quality.
							<br><br>
							<span class="fw-bold">SCustomized Solutions:</span>
							<br>Our import services cater to wholesalers, retailers, and institutions, meeting specific market demands.</p>
						</p>
						<h5>Why Import with Peekaf?</h5>
						<ul class="list-unstyled mb-4 mb-xl-5">
							<li class="d-flex pb-2 mb-1">
								<span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
								Strong global partnerships
							</li>
							<li class="d-flex pb-2 mb-1">
								<span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
								Consistent product availability
							</li>
							<li class="d-flex pb-2 mb-1">
								<span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
								Competitive pricing
							</li>
						</ul>
						<div class="mt-auto">
							<a class="btn btn-outline-primary" href="<?= PROOT; ?>importation">Learn more</a>
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
              		<img class="object-fit-cover w-100 h-100 rounded-3" src="<?= PROOT; ?>assets/media/bg-3.jpg" alt="Image">
            	</div>
            	<div class="col-md-5" data-aos="fade-left" data-aos-duration="600" data-aos-offset="280" data-disable-parallax-down="md">
              		<div class="d-flex flex-column h-100 bg-secondary rounded-3 py-5 px-4 px-lg-5">
						<h2 class="mb-xl-4">Exportation</h2>
						<p class="mb-4 mb-xl-5">
							Sharing our finest products with the world, Peekaf ensures seamless export services.
							<br><br>
							<span class="fw-bold">Premium Vegetable Oil:</span>
							<br>We export pure, high-grade vegetable oil to international markets, enhancing Ghana's reputation for quality.
							<br><br>
							<span class="fw-bold">High-Quality Rice:							:</span>
							<br>
							Peekaf rice varieties are highly sought after globally for their long grains, rich aroma, and exceptional taste.
						</p>
						<h5>Export Highlights:</h5>
						<ul class="list-unstyled mb-4 mb-xl-5">
							<li class="d-flex pb-2 mb-1">
								<span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
								Adherence to international trade and food safety standards
							</li>
							<li class="d-flex pb-2 mb-1">
								<span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
								Efficient logistics for timely delivery
							</li>
							<li class="d-flex pb-2 mb-1">
								<span class="bg-primary mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
								Strengthening global partnerships with reliable supply chains
							</li>
						</ul>
						<div class="mt-auto">
							<a class="btn btn-outline-primary" href="<?= PROOT; ?>exportation">Learn more</a>
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

	<script src="<?= PROOT; ?>assets/js/swiper-bundle.min.js"></script>
	<script src="<?= PROOT; ?>assets/js/lightgallery.min.js"></script>
	<script src="<?= PROOT; ?>assets/js/lg-video.min.js"></script>
	<script src="<?= PROOT; ?>assets/js/aos.js"></script>
	

    <!-- Bootstrap + Theme scripts -->
    <script src="<?= PROOT; ?>assets/js/theme.min.js"></script>

    <!-- Customizer -->
	<script src="<?= PROOT; ?>assets/js/customizer.min.js"></script>
  </body>
</html>
