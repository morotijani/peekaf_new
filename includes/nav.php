
    <!-- Page wrapper -->
    <main class="page-wrapper">

		<!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page -->
		<header class="navbar navbar-expand-lg <?= $nb; ?>" data-bs-theme="light">
			<div class="container">

				<!-- Navbar brand (Logo) -->
				<a class="navbar-brand pe-sm-3" href="<?= PROOT; ?>">
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

				<a class="btn btn-danger btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex" href="<?= PROOT; ?>contact-us">
					Lets work together
				</a>

				<!-- Mobile menu toggler (Hamburger) -->
				<button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Navbar collapse (Main navigation) -->
				<nav class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
						<li class="nav-item">
							<a class="nav-link" href="<?= PROOT; ?>">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= PROOT; ?>services">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= PROOT; ?>products">Products</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= PROOT; ?>about-us">About us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= PROOT; ?>contact-us">Contact us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= PROOT; ?>faq">FAQ</a>
						</li>
					</ul>
					<div class="d-sm-none p-3 mt-n3">
						<a class="btn btn-danger w-100 mb-1" href="<?= PROOT; ?>contact-us">
							Lets work together
						</a>
					</div>
				</nav>
			</div>
		</header>