<?php

include "includes/header.php";
include "includes/navbar.php";

?>

<!-- inner banner -->
<div class="inner_banner layer" id="about">
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
			<a href="home">Home</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page"><?= ucfirst($page) ?></li>
	</ol>
</nav>
<!-- //breadcrumbs -->

<!-- about -->
<section class="about py-5">
	<div class="container py-sm-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> History - <span> of EduChamps</span> </h3>
		<div class="row about-grids mb-5">
			<div class="col-lg-6">
				<h4>Pioneering Excellence In Web Development Education</h4>
				<p class="mb-3">
				<h1>Introduction</h1>
				<br>
				Welcome to EduChamps, where innovation meets education! Established in 2022, EduChamps has quickly
				risen to become a premier online tech academy, focusing on web development. We are dedicated to
				providing top-notch education, equipping our students with the skills they need to excel in the
				ever-evolving tech industry. Our approach combines practical, hands-on learning with expert
				guidance, ensuring our graduates are ready to tackle real-world challenges. As we prepare to launch
				EduChamps 3.0 by August, let's take a journey through our history, explore what makes us unique, and
				answer some of the major questions potential students may have. Join us, and become part of a
				community that is shaping the future of web development.
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5" data-aos="zoom-in" data-aos-duration="2000">
				<img src="<?= ROOT ?>/assets/images/about-welcome.jpg" alt="" class="img-fluid" />
			</div>
		</div>

		<div class="row about-grids mb-5">
			<div class="col-lg-6 mt-lg-0 mt-5" data-aos="zoom-in" data-aos-duration="2000">
				<img src="<?= ROOT ?>/assets/images/about-banner1.jpg" alt="" class="img-fluid" />
			</div>
			<div class="col-lg-6">
				<h4>The Genesis: EduChamps 1.0</h4>
				<p class="mb-3">
				<h1>Year of Inception: 2022</h1>
				<br>
				EduChamps was founded with a simple yet ambitious vision: to make high-quality web development
				education accessible to everyone, regardless of their geographical location or background. Our
				founders, seasoned professionals in the tech industry, recognized a growing demand for skilled web
				developers and the need for a platform that could bridge the gap between aspiring tech enthusiasts
				and the industry.

				EduChamps 1.0: Building Foundations

				The launch of EduChamps 1.0 marked our first step towards this vision. We started with a handful of
				comprehensive courses covering the fundamentals of web development, including HTML, CSS, JavaScript,
				and introductory frameworks. Our curriculum was designed to be interactive, engaging, and practical,
				ensuring that students not only learned the theory but also applied their knowledge through
				real-world projects.
			</div>
		</div>


		<div class="row about-grids mb-5">
			<div class="col-lg-12" data-aos="zoom-in" data-aos-duration="2000">
				<h4>The Future: EduChamps 3.0</h4>
				<p class="mb-3">
				<h1 class="mb-4">Anticipated Launch: August</h1>
				<p class="mb-4">
					As we approach the launch of EduChamps 3.0, we are excited to introduce new features and
					enhancements designed to elevate the learning experience even further. EduChamps 3.0 will bring a
					more personalized learning journey, leveraging AI and machine learning to tailor courses and
					resources to individual student needs.
				</p>

				<h3 class="mb-4">
					<b>What to expect in Edu-Champs 3.0:</b>
				</h3>

				<p>
					<i class="fas mr-2 fa-hand-point-right"></i>Personalized Learning Paths: Customized course
					recommendations based on student progress and
					career
					goals.
				</p>
				<p>
					<i class="fas mr-2 fa-hand-point-right"></i>Live Mentorship: Access to live sessions with
					industry experts for personalized guidance and
					feedback.
				</p>
				<p>
					<i class="fas mr-2 fa-hand-point-right"></i>Community Engagement: Enhanced community forums and
					collaboration tools to foster
					peer-to-peer learning.
				</p>
				<p>
					<i class="fas mr-2 fa-hand-point-right"></i>Cutting-Edge Content: New courses on emerging
					technologies like AI, blockchain, and
					cybersecurity.
				</p>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- /stats -->
<section class="stats_test">
	<div class="image-layer">
		<div class="container py-sm-5 py-3">
			<h3 class="heading text-capitalize mb-lg-5 mb-4"> Stats - <span>Our company stats</span> </h3>
			<div class="row">
				<div class="col-lg-8 col-12 inner_stat_wthree_agileits">
					<div class="row px-sm-0 px-3">
						<div class="col-sm-3 col-6 py-md-5 py-3 stats_left counter_grid">
							<i class="fas fa-graduation-cap"></i>
							<p class="counter">450</p>
							<h4>Graduates</h4>
						</div>
						<div class="col-sm-3 col-6 py-md-5 py-3 stats_left counter_grid1">
							<i class="fas fa-users"></i>
							<p class="counter">1000</p>
							<h4>Students</h4>
						</div>
						<div class="col-sm-3 col-6 py-md-5 py-3 stats_left counter_grid2">
							<i class="fas fa-user"></i>
							<p class="counter">145</p>
							<h4>Instructors</h4>
						</div>
						<div class="col-sm-3 col-6 py-md-5 py-3 stats_left counter_grid3">
							<i class="fas fa-book"></i>
							<p class="counter">268</p>
							<h4>Courses</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-12 mt-md-0 mt-4 stat_grid1">
					<h4>Facts About Our Academy</h4>
					<p class="second_para"> We are a leading and evolving tech company. </p>
					<p class="second_para">We have tutored and established several individuals in various fields of technology and having acquired the required skills, they have excelled excellently.</p>
				</div>
			</div>
		</div>
</section>
<!-- //stats -->

<section class="faq py-5">
	<div class="container faq__container py-sm-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Frequently Asked Questions</h3>
		<div class="faq__item">
			<div class="faq__question" onclick="toggleAnswer(this)">
				<h2>What makes EduChamps different from other online tech academies?</h2>
			</div>
			<div class="faq__answer">
				EduChamps stands out due to our comprehensive, hands-on curriculum, experienced instructors, and
				strong community support. We focus on practical skills that are directly applicable to the industry,
				ensuring our students are job-ready upon graduation.
			</div>
		</div>
		<div class="faq__item">
			<div class="faq__question" onclick="toggleAnswer(this)">
				<h2>Do I need any prior experience to join EduChamps?</h2>
			</div>
			<div class="faq__answer">
				No prior experience is necessary! Our courses cater to all skill levels, from beginners to advanced
				learners. Our personalized learning paths and supportive community help you progress at your own
				pace.
			</div>
		</div>
		<div class="faq__item">
			<div class="faq__question" onclick="toggleAnswer(this)">
				<h2>What kind of support can I expect as a student?</h2>
			</div>
			<div class="faq__answer">
				EduChamps offers extensive support, including live mentorship, interactive forums, peer
				collaboration, and career services such as resume building and interview preparation.
			</div>
		</div>
		<div class="faq__item">
			<div class="faq__question" onclick="toggleAnswer(this)">
				<h2>How does EduChamps help with job placement?</h2>
			</div>
			<div class="faq__answer">
				We have a dedicated career support team that provides personalized guidance, connects you with job
				opportunities, and prepares you for interviews. Many of our graduates have successfully transitioned
				into roles at leading tech companies.
			</div>
		</div>
		<div class="faq__item">
			<div class="faq__question" onclick="toggleAnswer(this)">
				<h2>Can I learn at my own pace?</h2>
			</div>
			<div class="faq__answer">
				Absolutely! EduChamps is designed to be flexible, allowing you to learn at your own pace and on your
				own schedule. Whether you're a full-time student or working professional, you can tailor your
				learning experience to fit your needs.
			</div>
		</div>
	</div>
</section>

<?php

include "includes/footer.php";
include "includes/scripts.php";

?>