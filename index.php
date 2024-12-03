<?php

	require_once ('db_connection/conn.php');
	$title = 'Home';
	$nb = 'fixed-top';
	include ("includes/header.php");

?>

    <!-- Page loading spinner -->
    <div class="page-loading active">
    	<div class="page-loading-inner">
        	<div class="page-spinner"></div>
        	<span>Loading...</span>
      	</div>
    </div>

	<?php include ("includes/nav.php"); ?>

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
						<!-- <h1 class="display-1 text-uppercase mb-4" style="width: fit-content; background-color: #6d181585; border-radius: 5px;">Extend — your reach</h1> -->
						<h1 class="display-1 text-uppercase mb-4" style=" text-shadow: 4px 4px 4px tomato">Extend — your reach</h1>
						<!-- <p class="d-block text-light fs-xl pb-2 mb-4 mb-md-5" style="max-width: 500px; border-radius: 5px; padding: 5px; background-color: #95a9bb8f;">Your trusted ally in seamless global trade and manufacturing. Focus locally, reach globally. </p> -->
						<p class="d-block text-light fs-xl pb-2 mb-4 mb-md-5" style="max-width: 500px; text-shadow: 4px 4px 4px #000">Your trusted ally in seamless global trade and manufacturing. Focus locally, reach globally. </p>
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
							<div class="mt-auto">
								<a class="btn btn-outline-danger" href="<?= PROOT; ?>manufacturing">Learn more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

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
							<div class="mt-auto">
								<a class="btn btn-outline-danger" href="<?= PROOT; ?>importation">Learn more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

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
							<div class="mt-auto">
								<a class="btn btn-outline-danger" href="<?= PROOT; ?>exportation">Learn more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Get a quote CTA -->
		<section class="container pt-lg-4 pt-xl-5 mt-lg-2 mt-xxl-4">
			<div class="position-relative bg-size-cover bg-position-center rounded-3 py-5" style="background-image: url(<?= PROOT; ?>assets/media/bg-7.jpeg);">
			<span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
				<div class="row position-relative z-2 py-md-4 py-lg-5 my-2">
					<div class="col-8 col-sm-6 col-md-6 col-lg-5 col-xxl-4 offset-1">
						<h2 class="h1 text-white pb-2 pb-sm-3">Less overhead, more collaboration</h2>
						<a class="btn btn-danger" href="<?= PROOT; ?>get-a-quote">Get a quote now</a>
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
							<img class="position-relative z-2 d-dark-mode-none" src="<?= PROOT; ?>assets/media/staff-light.png" width="330" alt="Support staff">
							<img class="position-relative z-2 d-none d-dark-mode-block" src="<?= PROOT; ?>assets/media/staff-dark.png" width="330" alt="Support staff">
							<div class="position-absolute top-0 start-0 w-100 h-100 bg-light rounded-3 shadow-sm d-dark-mode-none"></div>
							<div class="position-absolute top-0 start-0 w-100 h-100 rounded-3 d-none d-dark-mode-block" style="background-color: #202327;"></div>
						</div>
						<img src="<?= PROOT; ?>assets/media/customer-care-1.jpg" style="-webkit-clip-path: url(#mask); clip-path: url(#mask);" alt="Image">
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
					<a class="btn btn-danger" href="<?= PROOT; ?>contact-us">Contact us</a>
				</div>
				<div class="col-md-8 col-lg-7">
					<div class="ps-md-3 ps-lg-4 ps-xl-5">
						<h2 class="h1 pb-sm-1 pb-md-3">Common Questions &amp; Answers</h2>

						<!-- Accordion -->
						<div class="accordion" id="faq">
							<div class="accordion-item bg-transparent mb-n1 mb-xl-1">
								<h3 class="accordion-header">
									<button class="accordion-button fs-6 py-3 px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#finance1" aria-expanded="false" aria-controls="finance1">What does Peekaf Company Limited specialize in?</button>
								</h3>
								<div class="accordion-collapse collapse" id="finance1" data-bs-parent="#faq">
									<div class="accordion-body fs-sm">
										<p>Peekaf specializes in the manufacturing, importation, and exportation of high-quality vegetable oil and a variety of rice, including premium basmati and long-grain rice.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item bg-transparent mb-n1 mb-xl-1">
								<h3 class="accordion-header">
									<button class="accordion-button fs-6 py-3 px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#finance2" aria-expanded="false" aria-controls="finance2">Where is Peekaf Company Limited located?</button>
								</h3>
								<div class="accordion-collapse collapse" id="finance2" data-bs-parent="#faq">
									<div class="accordion-body fs-sm">
										<p>We are based in Ghana, with a focus on both local and international markets. For specific address details, please navigate to our contact us page.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item bg-transparent mb-n1 mb-xl-1">
								<h3 class="accordion-header">
									<button class="accordion-button fs-6 py-3 px-0" type="button" data-bs-toggle="collapse" data-bs-target="#real-estate" aria-expanded="true" aria-controls="real-estate">What products does the company offer?</button>
								</h3>
								<div class="accordion-collapse collapse show" id="real-estate" data-bs-parent="#faq">
									<div class="accordion-body fs-sm">
										<p>Our main products include:</p>
										<ul class="mb-0">
											<li>Premium vegetable oil for cooking and frying</li>
											<li>Various rice varieties, such as basmati, long-grain, and other high-quality options.</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="accordion-item bg-transparent mb-n1 mb-xl-1">
								<h3 class="accordion-header">
									<button class="accordion-button fs-6 py-3 px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#finance3" aria-expanded="false" aria-controls="finance3">Do you supply products in bulk?</button>
								</h3>
								<div class="accordion-collapse collapse" id="finance3" data-bs-parent="#faq">
									<div class="accordion-body fs-sm">
										<p>Yes, but we do not cater to wholesalers, retailers. But countries and institutions, yes, offering bulk orders tailored to meet their specific needs.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item bg-transparent mb-n1 mb-xl-1">
								<h3 class="accordion-header">
									<button class="accordion-button fs-6 py-3 px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#finance4" aria-expanded="false" aria-controls="finance4">Do you export products internationally?</button>
								</h3>
								<div class="accordion-collapse collapse" id="finance4" data-bs-parent="#faq">
									<div class="accordion-body fs-sm">
										<p>Absolutely! We export our products globally, ensuring that the quality of our goods reaches international markets.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php
	$f = 'foot';
	include ("includes/footer.php");

?>
