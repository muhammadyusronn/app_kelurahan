<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(<?= base_url() ?>assets/frontend/images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Pengajar</h1>
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
				<?php foreach($pengajar as $i): ?>
				<div class="col-md-3 text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(<?= base_url() ?>uploads/foto-pengajar/<?=  $i->foto;?>);">
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
						<span><?= $i->mata_pelajaran ?></span>
						<h3><a href="#"><?= $i->nama ?></a></h3>
						<p><?= $i->motto ?></p>
					</div>
				</div>
				<?php endforeach ?>
				<!-- <div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(<?= base_url() ?>assets/frontend/images/staff-2.jpg);">
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
						<span>Health Teacher</span>
						<h3><a href="#">Mike Smith</a></h3>
						<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(<?= base_url() ?>assets/frontend/images/staff-3.jpg);">
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
						<span>Health Teacher</span>
						<h3><a href="#">Mike Smith</a></h3>
						<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(<?= base_url() ?>assets/frontend/images/staff-1.jpg);">
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
						<span>Health Teacher</span>
						<h3><a href="#">Mike Smith</a></h3>
						<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(<?= base_url() ?>assets/frontend/images/staff-1.jpg);">
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
						<span>Health Teacher</span>
						<h3><a href="#">Mike Smith</a></h3>
						<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(<?= base_url() ?>assets/frontend/images/staff-3.jpg);">
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
						<span>Health Teacher</span>
						<h3><a href="#">Mike Smith</a></h3>
						<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(<?= base_url() ?>assets/frontend/images/staff-2.jpg);">
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
						<span>Health Teacher</span>
						<h3><a href="#">Mike Smith</a></h3>
						<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="staff">
						<div class="staff-img" style="background-image: url(<?= base_url() ?>assets/frontend/images/staff-3.jpg);">
							<ul class="fh5co-social">
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								<li><a href="#"><i class="icon-github"></i></a></li>
							</ul>
						</div>
						<span>Health Teacher</span>
						<h3><a href="#">Mike Smith</a></h3>
						<p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p>
					</div>
				</div> -->
			</div>
		</div>
	</div>