<?php

include "includes/header.php";
include "includes/navbar.php";

?>

<!-- inner banner -->
<div class="inner_banner layer" id="home">
	<div class="container">
		<div class="agileinfo-inner">
			<h2 class="text-center text-white">
				<?= ucfirst($page) ?> Page
			</h2>
		</div>
	</div>
</div>
<!-- //inner banner -->
<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.html">Home</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page"><?= ucfirst($page) ?></li>
	</ol>
</nav>
<!-- //breadcrumbs -->


<!-- services -->
<section class="services py-5">
	<div class="container py-sm-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Services - <span>What We Offer</span> </h3>
		<div class="row service-grids">
			<div class="col-lg-4 col-md-6">
				<div class="service-grid1">
					<i class="fas fa-globe"></i>
					<h5>1</h5>
					<h4 class="mb-3">Free Online Courses</h4>
					<p>
						Edu-Champs offer limited free courses time to time for students with excellent peformance in the
						cohort.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
				<div class="service-grid1">
					<i class="fas fa-book"></i>
					<h5>2</h5>
					<h4 class="mb-3">Digital Library</h4>
					<p> We possess a virtual digital library where our students are always updated about the latest
						technology trends and events. The library also contains several e-books which will guide you
						alongside with your course</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
				<div class="service-grid1">
					<i class="fab fa-digital-ocean"></i>
					<h5>3</h5>
					<h4 class="mb-3">Unlimited Courses</h4>
					<p>
						At Edu-Champs, we offer a variety of courses aimed at leading students and interns to unlocking
						their full potential.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5">
				<div class="service-grid1">
					<i class="fab fa-skyatlas"></i>
					<h5>4</h5>
					<h4 class="mb-3">Best Industry Leaders</h4>
					<p>
						With experienced professionals and leaders, Edu-Champs have been moving and evolving in a fast
						pace making it the ideal academy for anyone looking forward to starting a tech career.
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5">
				<div class="service-grid1">
					<i class="fas fa-tasks"></i>
					<h5>5</h5>
					<h4 class="mb-3">Graduate Courses</h4>
					<p>
						We offer courses which equip you with in-demand skills by large tech companies making you
						job-ready upon graduation
					</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5">
				<div class="service-grid1">
					<i class="fab fa-deskpro"></i>
					<h5>6</h5>
					<h4 class="mb-3">Certificate Courses</h4>
					<p>
						We also offer professional and international certificates for each and every course completed with Edu-Champs.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //services -->


<!-- Clients -->
<section class="clients-main">
	<div class="wthree-different-dot1 py-5">
		<div class="container py-sm-3">
			<!-- Owl-Carousel -->
			<h3 class="heading text-capitalize mb-sm-5 mb-4">Testimonials - <span>What People Say </span> </h3>
			<div class="cli-ent">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="item g1">
									<div class="row agile-dish-caption">
										<div class="col-lg-3 col-md-4">
											<img class="lazyOwl" src="images/test1.jpg" alt="" />
										</div>
										<div class="col-lg-9 col-md-8">
											<h5>Michael Johnson</h5>
											<h4>Best Educational Institute</h4>
											<p class="para-w3-agile"> Phasellus iaculis sapien in tellus gravida, a
												placerat lacus elementum. Nulla vitae lacus nec elit mollis pretium. Sed
												sed nunc lectus. Integer vehicula elit eget dignissim congue. Aliquam
												sed ultricies tortor. Curabitur ut odio vestibulum consectetur.</p>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="item g1">
									<div class="row agile-dish-caption">
										<div class="col-lg-3 col-md-4">
											<img class="lazyOwl" src="images/test2.jpg" alt="" />
										</div>
										<div class="col-lg-9 col-md-8">
											<h5>Mary elizabeth</h5>
											<h4>Great Place For Education</h4>
											<p class="para-w3-agile"> Phasellus iaculis sapien in tellus gravida, a
												placerat lacus elementum. Nulla vitae lacus nec elit mollis pretium. Sed
												sed nunc lectus. Integer vehicula elit eget dignissim congue. Aliquam
												sed ultricies tortor. Curabitur ut odio vestibulum consectetur.</p>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="item g1">
									<div class="row agile-dish-caption">
										<div class="col-lg-3 col-md-4">
											<img class="lazyOwl" src="images/test3.jpg" alt="" />
										</div>
										<div class="col-lg-9 col-md-8">
											<h5>Elisa kour</h5>
											<h4>Experienced Staff for better future</h4>
											<p class="para-w3-agile"> Phasellus iaculis sapien in tellus gravida, a
												placerat lacus elementum. Nulla vitae lacus nec elit mollis pretium. Sed
												sed nunc lectus. Integer vehicula elit eget dignissim congue. Aliquam
												sed ultricies tortor. Curabitur ut odio vestibulum consectetur.</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
			<!--// Owl-Carousel -->
		</div>
	</div>
</section>
<!--// Clients -->

<?php

include "includes/footer.php";
include "includes/scripts.php";

?>