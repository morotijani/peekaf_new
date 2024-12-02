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
            <div class="jarallax-img" style="background-image: url(assets/img/services/v3/hero-bg.jpg);"></div>
            <div class="container position-relative z-2 pt-5 pb-md-2 pb-lg-3 pb-xl-4 pb-xxl-5">

                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="pt-lg-3 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                <div class="d-none d-xxl-block" style="height: 220px;"></div>
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
            </div>
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
                    <p class="pb-2 pb-lg-0 mb-4 mb-lg-5">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean auctor cursus tortor non fermentum. Fusce ornare pulvinar nibh, sed facilisis eros congue pretium. Suspendisse et fermentum massa.</p>
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="d-table bg-secondary rounded-1 p-2 mb-3">
                                <img class="d-block d-dark-mode-none m-1" src="assets/img/services/v3/icons/monitor-dark.svg" width="28" alt="Icon">
                                <img class="d-none d-dark-mode-block m-1" src="assets/img/services/v3/icons/monitor-light.svg" width="28" alt="Icon">
                            </div>
                            <h3 class="h5 mb-2">Custom websites</h3>
                            <p class="fs-sm mb-0">Eu dignissim arcu, iaculis orci hendrerit commodo leo eget</p>
                        </div>
                        <div class="col">
                            <div class="d-table bg-secondary rounded-1 p-2 mb-3">
                                <img class="d-block d-dark-mode-none m-1" src="assets/img/services/v3/icons/cloud-dark.svg" width="28" alt="Icon">
                                <img class="d-none d-dark-mode-block m-1" src="assets/img/services/v3/icons/cloud-light.svg" width="28" alt="Icon">
                            </div>
                            <h3 class="h5 mb-2">Cloud computing</h3>
                            <p class="fs-sm mb-0">Adipiscing in aliquam iaculis  pellentesque facilisi commo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="row align-items-center py-4 py-xl-5 my-2">
            <div class="col-md-6 pb-2 mb-4 mb-md-0"><img class="rounded-5" src="<?= PROOT; ?>assets/media/bg-4.jpg" alt="Image"></div>
            <div class="col-md-6 col-xl-5 offset-xl-1">
                <div class="ps-md-4 pe-xl-0">
                    <h2 class="h1 pb-2 pb-lg-3">Importation</h2>
                    <p class="pb-2 pb-lg-0 mb-4 mb-lg-5">More erat leo proin odio est sed sit felis facilisi integer sed congue neque turpis dictumst sit sed volutpat aliquet tortor. Adipiscing posuere dui, amet, augue nisl dictum justo, enim sed neque congue non quam ultrices interdum vitae.</p>
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="d-table bg-secondary rounded-1 p-2 mb-3"><img class="d-block d-dark-mode-none m-1" src="assets/img/services/v3/icons/cog-dark.svg" width="28" alt="Icon"><img class="d-none d-dark-mode-block m-1" src="assets/img/services/v3/icons/cog-light.svg" width="28" alt="Icon"></div>
                            <h3 class="h5 mb-2">For iOS &amp; Android</h3>
                            <p class="fs-sm mb-0">Eu dignissim arcu, iaculis orci hendrerit commodo leo eget</p>
                        </div>
                        <div class="col">
                            <div class="d-table bg-secondary rounded-1 p-2 mb-3"><img class="d-block d-dark-mode-none m-1" src="assets/img/services/v3/icons/time-dark.svg" width="28" alt="Icon"><img class="d-none d-dark-mode-block m-1" src="assets/img/services/v3/icons/time-light.svg" width="28" alt="Icon"></div>
                            <h3 class="h5 mb-2">Speed optimization</h3>
                            <p class="fs-sm mb-0">Adipiscing in aliquam iaculis  pellentesque facilisi commo</p>
                        </div>
                    </div>
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
                    <p class="pb-2 pb-lg-0 mb-4 mb-lg-5">Find aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur neque congue aliqua dolor do amet sint velit officia amet minim mollit non deserunt ullamco est sit aliqua dolor malesuada fames ac ante ipsum.</p>
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="d-table bg-secondary rounded-1 p-2 mb-3">
                                <img class="d-block d-dark-mode-none m-1" src="assets/img/services/v3/icons/monitor-dark.svg" width="28" alt="Icon">
                                <img class="d-none d-dark-mode-block m-1" src="assets/img/services/v3/icons/monitor-light.svg" width="28" alt="Icon">
                            </div>
                            <h3 class="h5 mb-2">All business niches </h3>
                            <p class="fs-sm mb-0">Eu dignissim arcu, iaculis orci hendrerit commodo leo eget</p>
                        </div>
                        <div class="col">
                            <div class="d-table bg-secondary rounded-1 p-2 mb-3">
                                <img class="d-block d-dark-mode-none m-1" src="assets/img/services/v3/icons/size-dark.svg" width="28" alt="Icon">
                                <img class="d-none d-dark-mode-block m-1" src="assets/img/services/v3/icons/size-light.svg" width="28" alt="Icon">
                            </div>
                            <h3 class="h5 mb-2">Customer focus</h3>
                            <p class="fs-sm mb-0">Adipiscing in aliquam iaculis  pellentesque facilisi commo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Partners -->
    <section class="container pt-2 pt-sm-0 pb-xl-5">
        <h2 class="h1 text-center">We partner with more than 60 brands</h2>
        <p class="text-center pb-2 pb-sm-3">Clients who have become our friends for many years</p>
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
