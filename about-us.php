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

        <!-- Project overview -->
        <div class="border-bottom py-4 py-lg-5">
        <div class="row">
            <div class="col-lg-11 col-xl-10">
            <p class="text-dark lead mb-2 mb-lg-3-0 mb-xl-4 mb-xxl-3">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus quisque proin lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem enim aenean phasellus in hendrerit interdum lorem proin pretium dictum urna suspendisse quis risus et.</p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 g-sm-4 pt-4 pt-xxl-5 mb-2 mb-sm-3 pb-xxl-4">
                <div class="col">
                <h2 class="fs-base fw-normal text-body-secondary mb-2 mb-sm-3">Company</h2>
                <ul class="list-unstyled fs-lg fw-semibold text-dark mb-0">
                    <li class="d-block py-1">Vintage</li>
                    <li class="d-block py-1">12-18 employees</li>
                    <li class="d-block py-1">Dublin, Ireland</li>
                </ul>
                </div>
                <div class="col">
                <h2 class="fs-base fw-normal text-body-secondary mb-2 mb-sm-3">Indusrty</h2>
                <ul class="list-unstyled fs-lg fw-semibold text-dark mb-0">
                    <li class="d-block py-1">E-commerce</li>
                </ul>
                </div>
                <div class="col">
                <h2 class="fs-base fw-normal text-body-secondary mb-2 mb-sm-3">Services</h2>
                <ul class="list-unstyled fs-lg fw-semibold text-dark mb-0">
                    <li class="d-block py-1">Email marketing</li>
                    <li class="d-block py-1">Content marketing</li>
                    <li class="d-block py-1">Social networks</li>
                </ul>
                </div>
                <div class="col">
                <h2 class="fs-base fw-normal text-body-secondary mb-2 mb-sm-3">Time spent</h2>
                <ul class="list-unstyled fs-lg fw-semibold text-dark mb-0">
                    <li class="d-block py-1">2021, 3 months</li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

<?php
    $f = "";
    include ("includes/footer.php");

?>
