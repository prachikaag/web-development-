<?php
   $content = 'This is about us page content';
   include('./master.php');
 ?>
  <!-- includes navigation panel -->

<body>
<!-- gallery -->
<div class="gallery py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Gallery</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="mt-2">I grant you that labor, and vitality, and long-suffering, with some great eiusmod.</p>
			</div>
			<section>
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="assets/public/images/g1.jpg" rel="" class="b-link-stripe b-animate-go  thickbox" title="Medic">
							<img src="./schematics/hmi.jpg" alt="" class="img-fluid" />
							<div>
								<h5>Medicare Hospital</h5>
								<span>Gallery Photos</span>
							</div>
						</a>
					</li>
					<li>
						<a href="assets/public/images/g2.jpg" rel="" class="b-link-stripe b-animate-go  thickbox" title="Medic">
							<img src="./schematics/hmi.jpg" alt="" class="img-fluid" />
							<div>
								<h5>Medicare Hospital</h5>
								<span>Gallery Photos</span>
							</div>
						</a>
					</li>
					<li>
						<a href="assets/public/images/g3.jpg" rel="" class="b-link-stripe b-animate-go  thickbox" title="Medic">

							<img src="./schematics/hmi.jpg" alt="" class="img-fluid" />
							<div>
								<h5>Medicare Hospital</h5>
								<span>Gallery Photos</span>
							</div>
						</a>
					</li>
					<li>
						<a href="assets/public/images/g4.jpg" rel="" class="b-link-stripe b-animate-go  thickbox" title="Medic">

							<img src="./schematics/hmi.jpg" alt="" class="img-fluid" />
							<div>
								<h5>Medicare Hospital</h5>
								<span>Gallery Photos</span>
							</div>
						</a>
					</li>
					<li>
						<a href="assets/public/images/g6.jpg" rel="" class="b-link-stripe b-animate-go  thickbox" title="Medic">

							<img src="./schematics/hmi.jpg" alt="" class="img-fluid" />
							<div>
								<h5>Medicare Hospital</h5>
								<span>Gallery Photos</span>
							</div>
						</a>
					</li>
					<li>
						<a href="assets/public/images/g9.jpg" rel="" class="b-link-stripe b-animate-go  thickbox" title="Medic">

							<img src="./schematics/hmi.jpg" alt="" class="img-fluid" />
							<div>
								<h5>Medicare Hospital</h5>
								<span>Gallery Photos</span>
							</div>
						</a>
					</li>
					<li>
						<a href="assets/public/images/g8.jpg" rel="" class="b-link-stripe b-animate-go  thickbox" title="Medic">

							<img src="./schematics/hmi.jpg" alt="" class="img-fluid" />
							<div>
								<h5>Medicare Hospital</h5>
								<span>Gallery Photos</span>
							</div>
						</a>
					</li>
					<li>
						<a href="assets/public/images/g7.jpg" rel="" class="b-link-stripe b-animate-go  thickbox" title="Medic">

							<img src="./schematics/hmi.jpg" alt="" class="img-fluid" />
							<div>
								<h5>Medicare Hospital</h5>
								<span>Gallery Photos</span>
							</div>
						</a>
					</li>
					<li>
						<a href="./schematics/hmi.jpg" rel="" class="b-link-stripe b-animate-go  thickbox" title="Medic">

							<img src="./schematics/hmi.jpg" alt="" class="img-fluid" />
							<div>
								<h5>Medicare Hospital</h5>
								<span>Gallery Photos</span>
							</div>
						</a>
					</li>
				</ul>
			</section>
		</div>
	</div>
	<!-- //gallery -->



    <!-- gallery page js start here -->
        <!-- Gallery-js -->
	<script src="./bootstrap-4.3.1-dist/js/modernizr.custom.97074.js"></script>
	<script src="./bootstrap-4.3.1-dist/js/jquery.hoverdir.js"></script>
	<script>
		$(function () {

			$(' #da-thumbs > li ').each(function () {
				$(this).hoverdir();
			});

		});
	</script>

	<script src="./bootstrap-4.3.1-dist/js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/chocolat.css" type="text/css">
	<!--light-box-files -->
	<script>
		$(function () {
			$('.da-thumbs a').Chocolat();
		});
	</script>
	<!-- Gallery-js -->
	</body>
	</html>