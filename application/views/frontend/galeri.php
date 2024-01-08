<aside id="fh5co-hero">
	<div class="flexslider">
		<ul class="slides">
			<li style="background-image: url(<?= base_url() ?>assets/frontend/images/img_bg_4.jpg);">
				<div class="overlay-gradient"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center slider-text">
							<div class="slider-text-inner">
								<h1 class="heading-section">Galeri</h1>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>

<div id="fh5co-staff">
	<div class="container">
		<div class="row">
			<?php foreach ($galeri as $i) : ?>
				<div class="col-md-6 col-padded">
				<a href="#" class="gallery" style="background-image: url(<?= base_url() ?>uploads/galeri/<?= $i->file ?>);"></a>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>