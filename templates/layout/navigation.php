
<nav class="navbar navbar-expand-lg navbar-light bg-white text-blue sticky-top">
	<div class="container m-auto">
		<a class="navbar-brand" href="#">
			<img src="assets/images/logo.png" alt="">
		</a>
		<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
            </button> -->

			
		<div class="collapse navbar-collapse m-auto" id="navbarSupportedContent">
			<ul class="navbar-nav m-auto">
				<?php foreach ($pages as $url => $page) { ?>
					<?php if (!isset($_SESSION['login']) && $page['menun'][0] || isset($_SESSION['login']) && $page['menun'][1]) { ?>
					
						<li <?= (($page == $currentPage) ? 'class="active nav-item mx-3"' : ' class="nav-item mx-3" ') ?>>
							<a href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>" class="text-blue">
								<?= $page['text'] ?></a>
							</li>
					<?php } ?>
				<?php } ?>
				<li><a href="https://www.allatmentok.hu/" class="nav-item text-blue">www.allatmentok.hu</a></li>
			</ul>
		</div>
	</div>
</nav>