<div class="sticky-top">
	<div <?= ((isset($_SESSION['login'])) ? 'class="navbar__toolbar text-right text-white bg-purple p-1 w-100"' : ' class="d-none" ') ?>>
		<div class="container">
			<div class="navbar__toolbar_wrapper text-right mx-3">
				<?php
				if (isset($_SESSION['login'])) {
					echo "Bejelentkezve: ";
					echo $_SESSION['csn'];
					echo " ";
					echo $_SESSION['un'];
					echo " (";
					echo $_SESSION['login'];
					echo ")";
				}
				?>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-light bg-white text-blue d-flex flex-column">
		<div class="container m-auto">
			<a class="navbar-brand" href="https://www.allatmentok.hu/" target="_blank">
				<img src="assets/images/logo.png" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>



			<div class="collapse navbar-collapse m-auto" id="navbarSupportedContent">
				<ul class="navbar-nav m-auto">
					<?php foreach ($pages as $url => $page) { ?>
						<?php if (!isset($_SESSION['login']) && $page['menun'][0] || isset($_SESSION['login']) && $page['menun'][1]) { ?>

							<li <?= (($page == $currentPage) ? 'class="active nav-item mx-3 text-center"' : ' class="nav-item text-center mx-3" ') ?>>
								<a href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>" class="text-blue">
									<?= $page['text'] ?></a>
							</li>
						<?php } ?>
					<?php } ?>
					<!-- <li class="nav-item mx-3"><a href="https://www.allatmentok.hu/" class="nav-item text-blue">www.allatmentok.hu</a></li> -->
				</ul>
			</div>
		</div>
	</nav>
</div>