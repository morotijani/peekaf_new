<?php

  require_once ('db_connection/conn.php');
  $title = 'Services';
  $nb = '';
  include ("includes/header.php");
  include ("includes/nav.php");

?>

	<!-- Hero -->
    <section class="jarallax bg-dark py-5" data-jarallax data-speed="0.6" data-bs-theme="dark">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-60"></div>
            <div class="jarallax-img" style="background-image: url(<?= PROOT; ?>assets/media/service-2.jpeg);"></div>
            <div class="container position-relative z-2 pt-5 pb-md-2 pb-lg-3 pb-xl-4 pb-xxl-5">

                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="pt-lg-3 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= PROOT; ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>

                <!-- Page title -->
                <div class="d-none d-xxl-block" style="height: 170px;"></div>
                <div class="d-none d-lg-block d-xxl-none" style="height: 120px;"></div>
                <div class="d-none d-md-block d-lg-none" style="height: 80px;"></div>
                <div class="d-md-none" style="height: 40px;"></div>
                <h1 class="display-2 mb-4">Our services</h1>
                <p class="text-body mb-0" style="max-width: 480px;">We are the leading provider of essential food products, offering top-notch services across manufacturing, importation, and exportation of vegetable oil and a wide variety of rice.</p>

                <!-- Features -->
                <!-- <div class="d-none d-xxl-block" style="height: 220px;"></div>
                <div class="d-none d-lg-block d-xxl-none" style="height: 160px;"></div>
                <div class="d-none d-md-block d-lg-none" style="height: 100px;"></div>
                <div class="d-md-none" style="height: 50px;"></div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 pb-1 pb-md-3">
                    <div class="col">
                        <div class="d-flex align-items-center">
                        <div class="position-rlative flex-shrink-0 rounded-1 overflow-hidden p-2">
                        <div class="bg-white opacity-40 position-absolute top-0 start-0 w-100 h-100"></div>
                        <img class="d-block m-1" src="assets/img/services/v3/icons/time-white.svg" width="32" alt="Icon">
                        </div>
                        <h3 class="h5 ps-3 mb-0">Individual approach</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center">
                        <div class="position-rlative flex-shrink-0 rounded-1 overflow-hidden p-2">
                            <div class="bg-white opacity-40 position-absolute top-0 start-0 w-100 h-100"></div>
                            <img class="d-block m-1" src="assets/img/services/v3/icons/cog-white.svg" width="32" alt="Icon">
                        </div>
                        <h3 class="h5 ps-3 mb-0">Integrated analytics</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center">
                        <div class="position-rlative flex-shrink-0 rounded-1 overflow-hidden p-2">
                            <div class="bg-white opacity-40 position-absolute top-0 start-0 w-100 h-100"></div>
                            <img class="d-block m-1" src="assets/img/services/v3/icons/monitor-white.svg" width="32" alt="Icon">
                        </div>
                        <h3 class="h5 ps-3 mb-0">Step by step work</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center">
                        <div class="position-rlative flex-shrink-0 rounded-1 overflow-hidden p-2">
                            <div class="bg-white opacity-40 position-absolute top-0 start-0 w-100 h-100"></div>
                            <img class="d-block m-1" src="assets/img/services/v3/icons/size-white.svg" width="32" alt="Icon">
                        </div>
                        <h3 class="h5 ps-3 mb-0">Full range of services</h3>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

		
	<!-- Services -->
    <section class="container py-4 py-sm-5 my-md-2 my-lg-3 my-xl-4 my-xxl-5">

        <!-- Item -->
        <div class="row align-items-center py-4 py-xl-5 my-2">
            <div class="col-md-6 offset-xl-1 order-md-2 pb-2 mb-4 mb-md-0">
                <img class="rounded-5" src="<?= PROOT; ?>assets/media/bg-6.jpeg" alt="Image">
            </div>
            <div class="col-md-6 col-xl-5 order-md-1">
                <div class="pe-md-4 pe-xl-0">
                    <h2 class="h1 pb-2 pb-lg-3">Manufacturing</h2>
                    <p class="pb-2 pb-lg-0 mb-4 mb-lg-5">At Peekaf, we pride ourselves on producing high-quality vegetable oil and rice that meet global standards.</p>
                    <ul class="list-unstyled mb-4 mb-xl-5">
                        <li class="d-flex pb-2 mb-1">
                            <span class="bg-danger mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                            Vegetable Oil Production:
                            <br>
                            Our oils are carefully processed using advanced techniques to preserve nutrients and maintain purity. These oils are ideal for cooking, frying, and other culinary uses, ensuring both health and taste.
                        </li>
                        <li class="d-flex pb-2 mb-1">
                            <span class="bg-danger mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                            Rice Processing:
                            <br>
                            Peekaf processes various rice varieties, including premium basmati and long-grain rice, ensuring consistency, aroma, and taste. We use cutting-edge machinery to clean, mill, and package rice, guaranteeing freshness and quality.
                        </li>
                        <li class="d-flex pb-2 mb-1">
                            <span class="bg-danger mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                            Commitment to Quality:
                            <br>
                            Every product is thoroughly tested and packaged to meet both local and international food safety standards.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="row align-items-center py-4 py-xl-5 my-2">
            <div class="col-md-6 pb-2 mb-4 mb-md-0"><img class="rounded-5" src="<?= PROOT; ?>assets/media/bg-4.jpg" alt="Image"></div>
            <div class="col-md-6 col-xl-5 offset-xl-1">
                <div class="ps-md-4 pe-xl-0">
                    <h2 class="h1 pb-2 pb-lg-3">Importation</h2>
                    <p class="pb-2 pb-lg-0 mb-4 mb-lg-5">
                        Peekaf connects Ghanaian markets with the best international suppliers.
                        <br><br>
                        <span class="fw-bold">Sourcing Global Excellence:</span>
                        <br>We import premium rice varieties and vegetable oils from trusted international suppliers to offer a diverse range of options for our customers. This ensures affordability without compromising on quality.
                        <br><br>
                        <span class="fw-bold">Customized Solutions:</span>
                        <br>Our import services cater to wholesalers, retailers, and institutions, meeting specific market demands.</p>
                    </p>
                    <h5>Why Import with Peekaf?</h5>
                    <ul class="list-unstyled mb-4 mb-xl-5">
                        <li class="d-flex pb-2 mb-1">
                            <span class="bg-danger mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                            Strong global partnerships
                        </li>
                        <li class="d-flex pb-2 mb-1">
                            <span class="bg-danger mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                            Consistent product availability
                        </li>
                        <li class="d-flex pb-2 mb-1">
                            <span class="bg-danger mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                            Competitive pricing
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="row align-items-center py-4 py-xl-5 my-2">
            <div class="col-md-6 offset-xl-1 order-md-2 pb-2 mb-4 mb-md-0">
                <img class="rounded-5" src="<?= PROOT; ?>assets/media/bg-3.jpg" alt="Image">
            </div>
            <div class="col-md-6 col-xl-5 order-md-1">
                <div class="pe-md-4 pe-xl-0">
                    <h2 class="h1 pb-2 pb-lg-3">Exportation</h2>
                    <p class="pb-2 pb-lg-0 mb-4 mb-lg-5">
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
                            <span class="bg-danger mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                            Adherence to international trade and food safety standards
                        </li>
                        <li class="d-flex pb-2 mb-1">
                            <span class="bg-danger mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                            Efficient logistics for timely delivery
                        </li>
                        <li class="d-flex pb-2 mb-1">
                            <span class="bg-danger mt-2 me-2" style="width: 10px; height: 10px; border-radius: 2px;"></span>
                            Strengthening global partnerships with reliable supply chains
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Partners -->
    <section class="container pt-2 pt-sm-0 pb-xl-5">
        <h2 class="h1 text-center">We partner with more than 10 Companies</h2>
        <p class="text-center pb-2 pb-sm-3">The business the world trust.</p>
        <div class="row row-cols-3 row-cols-md-4 g-2 g-md-4">
            <div class="col">
                <img class="d-block mx-auto" src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="220" alt="Auchan">
            </div>
            <div class="col">
                <img class="d-block mx-auto" src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="220" alt="Suzuki">
            </div>
            <div class="col">
                <img class="d-block mx-auto" src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="220" alt="Suzuki">
                <!-- <img class="d-block d-dark-mode-none mx-auto" src="assets/img/brands/champion-dark.svg" width="220" alt="Champion">
                <img class="d-none d-dark-mode-block mx-auto" src="assets/img/brands/champion-light.svg" width="220" alt="Champion"> -->
            </div>
            <div class="col">
                <img class="d-block mx-auto" src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="220" alt="Suzuki">
                <!-- <img class="d-block d-dark-mode-none mx-auto" src="assets/img/brands/starcraft-dark.svg" width="220" alt="Starcraft">
                <img class="d-none d-dark-mode-block mx-auto" src="assets/img/brands/starcraft-light.svg" width="220" alt="Starcraft"> -->
            </div>
            <div class="col">
                <img class="d-block mx-auto" src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="220" alt="Suzuki">
            </div>
            <div class="col">
                <img class="d-block mx-auto" src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="220" alt="Suzuki">
                <!-- <img class="d-block d-dark-mode-none mx-auto" src="assets/img/brands/puma-dark.svg" width="220" alt="Puma">
                <img class="d-none d-dark-mode-block mx-auto" src="assets/img/brands/puma-light.svg" width="220" alt="Puma"> -->
            </div>
            <div class="col">
                <img class="d-block mx-auto" src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="220" alt="Suzuki">
            </div>
            <div class="col">
                <img class="d-block mx-auto" src="<?= PROOT; ?>assets/media/partners/vilaconic.png" width="220" alt="Suzuki">
            </div>
        </div>
    </section>

	

<?php
    $f = "";
    include ("includes/footer.php");

?>
