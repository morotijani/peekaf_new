<?php

require_once ('db_connection/conn.php');
$title = 'Products';
$nb = '';
include ("includes/header.php");
include ("includes/nav.php");

?>

    <!-- Product gallery + Details + Options -->
    <section class="container mb-sm-2 mb-lg-3 mb-xl-4 mb-xxl-5">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-2 pb-md-4 breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?= PROOT; ?>">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>

    </section>

    <section class="container pb-5 mb-sm-2 mb-lg-3 mb-xl-4 mb-xxl-5">
        <div class="row align-items-center pb-md-3">
            <div class="col-md-6 col-lg-5 offset-lg-1">
                <div class="ps-md-4 ps-lg-0">
                    <h2 class="h3 mb-sm-4">Time Daso Basmati Rice</h2>
                    <p class="mb-4 mb-lg-5">The perfect choice for flavorful, aromatic, and fluffy meals! 🌾</p>
                    <caption>🍚 Key Features:</caption><br><br>
                    <ul class=" mb-0">
                        <li class="mb-3">Long, slender, and perfectly aged grains</li>
                        <li class="mb-3">Naturally aromatic for an enhanced dining experience</li>
                        <li class="mb-3">Ideal for dishes like biryanis, pilafs, and fried rice</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 mb-4 mb-md-0">
                <img class="rounded-1" src="<?= PROOT; ?>assets/media/products/product-1.jpeg" alt="Image">
            </div>
        </div>
    </section>
    
    <section class="container pb-5 mb-sm-2 mb-lg-3 mb-xl-4 mb-xxl-5">
        <div class="row align-items-center pb-md-3">
            <div class="col-md-6 col-lg-5 mb-4 mb-md-0">
                <img class="rounded-1" src="<?= PROOT; ?>assets/media/products/product-2.jpeg" alt="Image">
            </div>
            <div class="col-md-6 col-lg-5 offset-lg-1">
                <div class="ps-md-4 ps-lg-0">
                    <h2 class="h3 mb-sm-4">Peekaf Vegetable Oil</h2>
                    <p class="mb-4 mb-lg-5">Pure, healthy, and perfect for every kitchen! 🛢️</p>
                    <caption>✨ Key Features:</caption><br><br>
                    <ul class=" mb-0">
                        <li class="mb-3">100% natural and refined for superior quality</li>
                        <li class="mb-3">Rich in essential nutrients for a healthier lifestyle</li>
                        <li>Ideal for cooking, frying, baking, and more</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="container pb-5 mb-sm-2 mb-lg-3 mb-xl-4 mb-xxl-5">
        <div class="row align-items-center pb-md-3">
            <div class="col-md-6 col-lg-5 offset-lg-1">
                <div class="ps-md-4 ps-lg-0">
                    <h2 class="h3 mb-sm-4">Peekaf Jasmine Rice</h2>
                    <p class="mb-4 mb-lg-5">Aromatic perfection for every meal! 🌾</p>
                    <caption>🍚 Key Features:</caption><br><br>
                    <ul class="mb-0">
                        <li class="mb-3">Soft, fragrant, and naturally sweet grains</li>
                        <li class="mb-3">Fluffy texture that pairs perfectly with any dish</li>
                        <li class="mb-3">Ideal for stir-fries, curries, and everyday meals</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 mb-4 mb-md-0">
                <img class="rounded-1" src="<?= PROOT; ?>assets/media/products/product-3.jpeg" alt="Image">
            </div>
        </div>
    </section>

    <section class="container pb-5 mb-sm-2 mb-lg-3 mb-xl-4 mb-xxl-5">
        <div class="row align-items-center pb-md-3">
            <div class="col-md-6 col-lg-5 mb-4 mb-md-0">
                <img class="rounded-1" src="<?= PROOT; ?>assets/media/products/product-4.jpeg" alt="Image">
            </div>
            <div class="col-md-6 col-lg-5 offset-lg-1">
                <div class="ps-md-4 ps-lg-0">
                    <h2 class="h3 mb-sm-4">Heena Basmati Rice</h2>
                    <p class="mb-4 mb-lg-5">The ultimate choice for premium meals! 🌾</p>
                    <caption>🍚 Key Features:</caption><br><br>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3">Long, aromatic grains with a naturally rich flavor</li>
                        <li class="mb-3">Perfectly aged for fluffiness and superior taste</li>
                        <li class="mb-3">Ideal for biryanis, pilafs, and other gourmet dishes</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


<?php
    $f = "";
    include ("includes/footer.php");

?>
