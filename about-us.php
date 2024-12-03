<?php

  require_once ('db_connection/conn.php');
  $title = 'About us';
  $nb = 'fixed-top';
  include ("includes/header.php");
  include ("includes/nav.php");

?>

	<!-- Page content -->
    <section class="container py-5 mt-5 mb-2 mb-sm-3 mb-lg-4 mb-xxl-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-2 pb-lg-3 pb-1 breadcrumb">
                <li class="breadcrumb-item"><a href="<?= PROOT; ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About us</li>
            </ol>
        </nav>

        <!-- Page title -->
        <div class="row">
            <div class="col-lg-11 col-xl-10">
                <!-- <img class="d-block d-dark-mode-none mb-2 mb-sm-3" src="assets/img/portfolio/brands/vintage-dark.svg" alt="Vintage">
                <img class="d-none d-dark-mode-block mb-2 mb-sm-3" src="assets/img/portfolio/brands/vintage-light.svg" alt="Vintage"> -->
                <h1 class="display-2 pb-3 pb-md-4 pb-lg-5">The trusted number one food source world wide.</h1>
            </div>
        </div>

        <!-- Main image -->
        <img class="d-block rounded-5 mb-3 mb-xl-4 mb-xxl-5" src="<?= PROOT; ?>assets/media/back-6.jpeg" alt="Image">

        <!-- About -->
        <section class="container position-relative z-3" style="margin-top: -135px;">
            <div class="rounded-5 overflow-hidden"> 
                <div class="jarallax ratio ratio-16x9" data-jarallax data-speed="0.6">
                    <div class="jarallax-img" style="background-image: url(assets/img/about/agency/parallax-image.jpg);"></div>
                </div>
            </div>
            <div class="row pt-5 mt-n2 mt-sm-0 mt-md-2 mt-lg-4 mt-xl-5">
                <div class="col-md-6 col-lg-5">
                    <div class="fs-sm text-uppercase mb-3">Who we are?</div>
                    <h2 class="display-6">Welcome to Peekaf Company Limited Ghana,</h2>
                </div>
                <div class="col-md-6 col-xl-5 offset-lg-1 offset-xl-2 pt-1 pt-sm-2 pt-md-5">
                    <p class="fs-xl"> your trusted partner in delivering premium-quality food products to homes and businesses locally and globally.</p>
                    <p class="fs-xl">Founded with a passion for excellence, Peekaf Company Limited specializes in the manufacturing, importation, and exportation of high-quality vegetable oil and a wide range of rice varieties. Our commitment to quality, innovation, and customer satisfaction has made us a leader in the food industry.</p>
                    <!-- <p class="fs-xl mb-0">Ac facilisis eros sem faucibus aliquet venenatis amet fermentum nisi. Mauris consectetur sem malesuada. viverra a non sapien odio id risus volutpat at.</p> -->
                </div>
            </div>
        </section>

        <!-- Approach -->
        <section class="pt-5 mt-md-2 mt-xl-4 mt-xxl-5">
            <div class="container pt-2 pt-sm-4 pt-lg-5 mt-xxl-2">
                <div class="fs-sm text-uppercase mb-3">Pee Kaf</div>
                    <h2 class="display-6 pb-3 mb-lg-4">Our Mission</h2>

                    <div class="card border-0 bg-secondary rounded-5 h-100">
                        <div class="card-body">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <g class="text-info">
                                    <path d="M20.0004 36.0226L10.982 21.3535C9.42594 23.3156 8.49609 25.7968 8.49609 28.4955C8.49609 34.8492 13.6467 39.9998 20.0004 39.9998C26.3541 39.9998 31.5047 34.8492 31.5047 28.4955C31.5047 25.7969 30.5749 23.3156 29.0188 21.3535L20.0004 36.0226Z" fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path d="M39.3962 0H0.605469L20.0009 31.5477L39.3962 0ZM25.7601 7.62359L20.0009 16.9914L14.2416 7.62359H25.7601Z" fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Individual approach</h3>
                            <p class="mb-0">To enhance lives by providing superior food products that are safe, nutritious, and affordable while maintaining sustainable practices and strengthening global trade partnerships.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Approach -->
        <section class="pt-5 mt-md-2 mt-xl-4 mt-xxl-5">
            <div class="container pt-2 pt-sm-4 pt-lg-5 mt-xxl-2">
                <div class="fs-sm text-uppercase mb-3">Pee Kaf</div>
                    <h2 class="display-6 pb-3 mb-lg-4">Our Vision</h2>

                    <div class="card border-0 bg-secondary rounded-5 h-100">
                        <div class="card-body">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <g class="text-info">
                                    <path d="M20.0004 36.0226L10.982 21.3535C9.42594 23.3156 8.49609 25.7968 8.49609 28.4955C8.49609 34.8492 13.6467 39.9998 20.0004 39.9998C26.3541 39.9998 31.5047 34.8492 31.5047 28.4955C31.5047 25.7969 30.5749 23.3156 29.0188 21.3535L20.0004 36.0226Z" fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path d="M39.3962 0H0.605469L20.0009 31.5477L39.3962 0ZM25.7601 7.62359L20.0009 16.9914L14.2416 7.62359H25.7601Z" fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Individual approach</h3>
                            <p class="mb-0">To be a globally recognized brand known for quality, reliability, and excellence in the food sector.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How we work (Steps) -->
        <section class="container pt-5 mt-1 mt-sm-2 mt-xl-4 mt-xxl-5">
            <div class="row align-items-center pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-xl-2 mt-xxl-3">
                <div class="col-md-6 col-xl-5 pb-3 pb-md-0 mb-4 mb-md-0">
                    <div class="ratio ratio-1x1 d-flex align-items-center position-relative rounded-circle overflow-hidden bg-size-cover mx-auto" style="max-width: 530px; background-image: url(<?= PROOT; ?>assets/media/bg-8.jpeg);">
                        <div class="bg-black position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                        <div class="position-relative z-2 p-4" data-bs-theme="dark">
                            <div class="text-center mx-auto" style="max-width: 275px;">
                                <span class="d-block text-body fs-sm text-uppercase mb-3">Pee Kaf</span>
                                <h2 class="display-6 mb-0">What we do</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-5 offset-xl-1">
                    <div class="ps-md-4 ps-xl-0">
                        <div class="steps steps-hoverable">
                            <div class="step py-3 py-xl-4">
                                <div class="step-number">
                                    <div class="step-number-inner">01</div>
                                </div>
                                <div class="step-body">
                                    <h3 class="h5 pb-1 mb-2">Manufacturing</h3>
                                    <p class="mb-0">We produce high-grade vegetable oil and rice using advanced technology to ensure the highest standards of quality, taste, and nutrition.</p>
                                </div>
                            </div>
                            <div class="step py-3 py-xl-4">
                                <div class="step-number">
                                <div class="step-number-inner">02</div>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 pb-1 mb-2">Importation</h3>
                                <p class="mb-0">We source the finest rice varieties and vegetable oils from trusted global suppliers, bringing diverse options to our local markets.</p>
                            </div>
                        </div>
                        <div class="step py-3 py-xl-4">
                            <div class="step-number">
                                <div class="step-number-inner">03</div>
                            </div>
                            <div class="step-body">
                                <h3 class="h5 pb-1 mb-2">Exportation</h3>
                                <p class="mb-0">We proudly export our premium products, showcasing the best of Ghana to international markets and creating strong trade connections worldwide.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>

<?php
    $f = "";
    include ("includes/footer.php");

?>
