<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
	<div class="container w-75 m-auto">
		<a class="navbar-brand" href="#">
			<!-- <img src="../public/logo.png" alt=""> -->
		</a>
		<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
            </button> -->

			
			<div class="collapse navbar-collapse m-auto" id="navbarSupportedContent">
				<ul class="navbar-nav m-auto">
					<?php foreach ($pages as $url => $page) { ?>
						<?php if (!isset($_SESSION['login']) && $page['menun'][0] || isset($_SESSION['login']) && $page['menun'][1]) { ?>
							<!-- <li<?= (($page == $currentPage) ? ' class="active"' : '') ?>> -->
							<li class="<?$page == $currentPage ? 'active nav-item mx-3 active' : 'nav-item mx-3 active' ?>">
								<a href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
									<?= $page['text'] ?></a>
								</li>
						<?php } ?>
					<?php } ?>
				<li class="nav-item mx-3 active">
					<a class="nav-link" href="#">Rólunk <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item mx-3">
					<a class="nav-link" href="#">Hogyan segíthetsz</a>
				</li>
				<li class="nav-item mx-3">
					<a class="nav-link" href="gallery.php">Galéria</a>
				</li>
				<li class="nav-item mx-3">
					<a class="nav-link" href="#">Események</a>
				</li>
				<li class="nav-item mx-3">
					<a class="nav-link" href="#">Projektek</a>
				</li>
				<li class="nav-item mx-3">
					<a class="nav-link" href="#">Partnerek</a>
				</li>
				<li class="nav-item mx-3">
					<a class="nav-link" href="contact.php">Kapcsolat</a>
				</li>
				<li class="nav-item mx-3">
					<a class="nav-link" href="contact_all.php">Összes üzenet</a>
				</li>
			</ul>
		</div>
	</div>
</nav>