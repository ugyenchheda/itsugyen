<?php
//** * Template Name: The Ugyen */

get_header();
$position_title = get_post_meta( get_the_ID(), 'position_title', true );
$intro_part = get_post_meta( get_the_ID(), 'intro_part', true );
$intro_banner = get_post_meta( get_the_ID(), 'intro_banner', true);
$intro_cv = get_post_meta( get_the_ID(), 'intro_cv', true);
$about_title = get_post_meta( get_the_ID(), 'about_title', true);
$about_email = get_post_meta( get_the_ID(), 'about_email', true);
$about_number = get_post_meta( get_the_ID(), 'about_number', true);
$about_address = get_post_meta( get_the_ID(), 'about_address', true);
$about_age = get_post_meta( get_the_ID(), 'about_age', true);
$about_degree = get_post_meta( get_the_ID(), 'about_degree', true);
$about_freelancing = get_post_meta( get_the_ID(), 'about_freelancing', true);
?>



<!-- Preloader -->
<div id="line-loader">
  <div class="middle-line"></div>
</div>

<!--   Menu Overlay Mobile -->
<div class="menu-overlay d-none"></div>

<!--   Right Side Start  -->
<div class="right-side d-none d-lg-block">
  <div id="date"></div>
  <div class="social-box">
	<div class="follow-label">
	  <span>Follow Me</span>
	</div>
	<div class="social d-none d-lg-block">
	  <a href="javascript:void(0);">
		<i class="bi bi-whatsapp t-green"></i>
	  </a>
	  <a href="javascript:void(0);">
		<i class="bi bi-instagram t-purple"></i>
	  </a>
	  <a href="javascript:void(0);">
		<i class="bi bi-dribbble t-red"></i>
	  </a>
	</div>
  </div>
  <div class="next-prev-page">
	<button type="button" class="prev-page bg-base-color hstack">
	  <i class="bi bi-chevron-compact-up mx-auto"></i>
	</button>
	<button type="button" class="next-page bg-base-color mt-3 hstack">
	  <i class="bi bi-chevron-compact-down mx-auto"></i>
	</button>
  </div>
</div>
<!--  Right Side End  -->

<!--  Left Side Start  -->
<div class="left-side  nav-close">
  <div class="menu-content-align">
	<div class="left-side-image">
	  <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="/">
	</div>
	<h1 class="mt-1"><?php the_title(); ?></h1>
	<a class="download-cv primary-button d-none d-lg-inline-block" href="<?php echo $intro_cv;?>;" target="_blank">Download CV</a>
	<div class="container d-lg-none d-inline-block">
	  <div class="row">
		<div class="col-12 text-center">
		  <p class="text-muted mb-0"><?php echo $position_title;?></p>
		</div>
	  </div>
	</div>
  </div>
  <div class="menu-align">
	<ul class="list-group menu text-center " id="menu">
	  <li class="list-group-item">
		<a href="#ugyen">
		  <i class="bi bi-house"></i>
		  <span>home</span>
		</a>
	  </li>
	  <li class="list-group-item">
		<a href="#about" class="custom-btn">
		  <i class="bi bi-person"></i>
		  <span>about</span>
		</a>
	  </li>
	  <li class="list-group-item">
		<a href="#resume">
		  <i class="bi bi-clipboard-check"></i>
		  <span>resume</span>
		</a>
	  </li>
	  <li class="list-group-item">
		<a href="#portfolio">
		  <i class="bi bi-collection"></i>
		  <span>works</span>
		</a>
	  </li>
	  <li class="list-group-item">
		<a href="#blog">
		  <i class="bi bi-book"></i>
		  <span>blog</span>
		</a>
	  </li>
	  <li class="list-group-item">
		<a href="#contact">
		  <i class="bi bi-geo-alt"></i>
		  <span>contact</span>
		</a>
	  </li>
	</ul>
	<div class="menu-footer">
	  <a class="download-cv primary-button mt-3 mb-4 d-lg-none" href="javascript:void(0);">Download CV</a>
	  <div class="social d-lg-none d-block">
		<a href="javascript:void(0);" class="d-inline-block">
		  <i class="bi bi-whatsapp t-green"></i>
		</a>
		<a href="javascript:void(0);" class="d-inline-block mx-4">
		  <i class="bi bi-instagram t-purple"></i>
		</a>
		<a href="javascript:void(0);" class="d-inline-block">
		  <i class="bi bi-dribbble t-red"></i>
		</a>
	  </div>
	</div>
  </div>
</div>
<!--  Left Side End  -->

<!--  Main Start  -->
<main id="main" class="main-2">

  <!--  ugyen Start  -->
  <section id="ugyen" class="section ugyen w-100">
	<img class="extend-icon" src="<?php echo $intro_banner; ?>" alt="Ugyen Lama Banner Image">
	<div class="ugyen-center">
	  <div class="container">
		<div class="row">
		  <div class="col-lg-12 text-center text-lg-start">
			<div class="ugyen-image d-inline-block d-lg-none">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webdesigner/profile-img.jpg" alt="/">
			</div>
			<div class="ugyen-content mt-4 mx-auto mx-lg-0 text-lg-left mt-lg-none">
			  <p class="base-color"><i class="bi bi-code-slash"></i> <?php echo $position_title;  ?></p>
			  <h2><?php echo $intro_part; ?></h2>
			  <div class="typing-demo"><i class="bi bi-caret-right"></i> Feel free to browse and know about my work...</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="ugyen-footer d-block d-lg-none">
	  <a class="download-cv primary-button mt-3 mb-4 d-lg-none" href="javascript:void(0);">Download CV</a>
	  <div class="social d-lg-none mb-4 d-block">
		<a href="javascript:void(0);" class="d-inline-block">
		  <i class="bi bi-whatsapp t-green"></i>
		</a>
		<a href="javascript:void(0);" class="d-inline-block mx-4">
		  <i class="bi bi-instagram t-purple"></i>
		</a>
		<a href="javascript:void(0);" class="d-inline-block">
		  <i class="bi bi-dribbble t-red"></i>
		</a>
	  </div>
	</div>
  </section>
  <!--  ugyen End  -->

  <!--  About Start  -->
  <section id="about" class="section about">
	<div class="container">
	  <!-- Introducce Me -->
	  <div class="about-boxes">
		<div class="row">
		  <div class="col-lg-5">
			<div class="about-img">
			  <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'post_image_xl'); ?>" alt="/">
			  <div class="border-img"></div>
			</div>
		  </div>
		  <div class="col-lg-7">
			<div class="about-description">
			  <h3 class="mb-3"><?php echo $about_title; ?></h3>
			  <p class="about-text"><?php the_content(); ?></p>
			</div>
			<!-- Personal Info -->
			<div class="row">
			  <div class="col-lg-6">
				<ul class="list-unstyled personal-info">
				  <li>Website : <small><a href="mailto:<?php echo $about_email; ?>" class="__cf_email__"><?php echo $about_email; ?></a></small>
				  </li>
				  <li>Phone : <small><?php echo $about_number;?></small>
				  </li>
				  <li>City : <small> <?php echo $about_address;?></small>
				  </li>
				</ul>
			  </div>
			  <div class="col-lg-6">
				<ul class="list-unstyled personal-info">
				  <li>Age : <small><?php echo $about_age;?></small>
				  </li>
				  <li>Degree : <small><?php echo $about_degree;?></small>
				  </li>
				  <li>Freelance : <small><?php echo $about_freelancing;?></small>
				  </li>
				</ul>
			  </div>
			  <div class="col-12">
				<a href="#contact" class="to-contact primary-button mt-2">Hire me</a>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <!--  Count up  -->
	  <div id="count-up" class="count-up text-center box-border">
		<div class="row">
		  <!-- Item-01 -->
		  <div class="col-6 col-lg-3 my-4 count-item">
			<div class="count-icon">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/prototype.png" alt="/">
			</div>
			<span class="timer count-number" data-from="0" data-to="286" data-speed="5000">0</span>
			<p class="mb-0">Logo Design</p>
		  </div>
		  <!-- Item-02 -->
		  <div class="col-6 col-lg-3 my-4 count-item">
			<div class="count-icon">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/ui-design.png" alt="/">
			</div>
			<span class="timer count-number" data-from="0" data-to="6549" data-speed="5000">0</span>
			<p class="mb-0">Web Design</p>
		  </div>
		  <!-- Item-03 -->
		  <div class="col-6 col-lg-3 my-4 count-item">
			<div class="count-icon">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/layer.png" alt="/">
			</div>
			<span class="timer count-number" data-from="0" data-to="793" data-speed="5000">0</span>
			<p class="mb-0">Illustration</p>
		  </div>
		  <!-- Item-04 -->
		  <div class="col-6 col-lg-3 my-4 count-item">
			<div class="count-icon">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/checked.png" alt="/">
			</div>
			<span class="timer count-number" data-from="0" data-to="286" data-speed="5000">0</span>
			<p class="mb-0">Project Done</p>
		  </div>
		</div>
	  </div>
	  <!--  Skills  -->
	  <div class="skills">
		<div class="row pt-5">
		  <div class="col-lg-7">
			<div class="skill-description">
			  <h3 class="mb-3">I have been able to experience & developing this type of skill.</h3>
			  <p class="mb-0">I was doing everything in my power to provide me with all the experiences to provide cost-effective and high quality products to satisfy my customers all over the world</p>
			</div>
		  </div>
		  <div class="col-lg-5">
			<ul class="knowledge-item">
			  <li>Graphics and animations</li>
			  <li>Video Formality</li>
			  <li>Short Animationsg</li>
			  <li>Teaching Web Design</li>
			</ul>
		  </div>
		</div>
	  </div>
	  <!--  Skillbar  -->
	  <div class="row mt-5 skills">
		<div class="col-lg-6">
		  <h3 class="subtitle">Design Skills</h3>
		  <div id="skills">
			<!-- Item 01 -->
			<div class="col-lg-12 skill-box">
			  <div class="skill-text">
				<div class="skillbar-title">Logo Design</div>
				<div class="skill-bar-percent"><span data-from="0" data-to="100" data-speed="4000">100</span>%</div>
			  </div>
			  <div class="skillbar clearfix" data-percent="100%">
				<div class="skillbar-bar"></div>
			  </div>
			</div>
			<!-- Item 02 -->
			<div class="col-lg-12 skill-box">
			  <div class="skill-text">
				<div class="skillbar-title">Web Design</div>
				<div class="skill-bar-percent"><span data-from="0" data-to="95" data-speed="4000">95</span>%</div>
			  </div>
			  <div class="skillbar clearfix" data-percent="95%">
				<div class="skillbar-bar"></div>
			  </div>
			</div>
			<!-- Item 03 -->
			<div class="col-lg-12 skill-box">
			  <div class="skill-text">
				<div class="skillbar-title">Illustration</div>
				<div class="skill-bar-percent"><span data-from="0" data-to="85" data-speed="4000">85</span>%</div>
			  </div>
			  <div class="skillbar clearfix" data-percent="85%">
				<div class="skillbar-bar"></div>
			  </div>
			</div>
		  </div>
		</div>
		<div class="col-lg-5 ms-auto mt-5 mt-lg-0">
		  <h3 class="subtitle">Language</h3>
		  <div class="language-bar">
			<!-- Item 01 -->
			<div class="language-skill">
			  <h6 class="mb-0">English <span> Fluent</span>
			  </h6>
			  <ul class="list-inline text-right">
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-half"></i>
				</li>
			  </ul>
			</div>
			<!-- Item 02 -->
			<div class="language-skill">
			  <h6 class="mb-0">Germany <span>Basic</span>
			  </h6>
			  <ul class="list-inline text-right">
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle"></i>
				</li>
			  </ul>
			</div>
			<!-- Item 03 -->
			<div class="language-skill">
			  <h6 class="mb-0">Turkey <span>Basic</span>
			  </h6>
			  <ul class="list-inline text-right">
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle-fill"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle"></i>
				</li>
				<li class="list-inline-item">
				  <i class="bi bi-circle"></i>
				</li>
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
	  <!--  Client  -->
	  <div class="testimonial mt-5">
		<div class="owl-carousel">
		  <!-- Item 01 -->
		  <div class="testimonial-box">
			<p class="testimonial-comment">"My motivation is customer satisfaction. Trust me and trust your growth asset management to my expertise gained over the years. My goal is continuous achievement.!"</p>
			<div class="testimonial-item">
			  <div class="testimonial-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/man.png" alt="/">
			  </div>
			  <div class="testimonial-info">
				<p class="mb-0">Leo Anderson</p>
				<small class="testimonial-jub">Web Designer</small>
			  </div>
			</div>
		  </div>
		  <!-- Item 02 -->
		  <div class="testimonial-box">
			<p class="testimonial-comment">"My motivation is customer satisfaction. Trust me and trust your growth asset management to my expertise gained over the years. My goal is continuous achievement.!"</p>
			<div class="testimonial-item">
			  <div class="testimonial-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/woman.png" alt="/">
			  </div>
			  <div class="testimonial-info">
				<p class="mb-0">Hanah Smith</p>
				<small class="testimonial-jub">Web Developer</small>
			  </div>
			</div>
		  </div>
		  <!-- Item 03 -->
		  <div class="testimonial-box">
			<p class="testimonial-comment">"My motivation is customer satisfaction. Trust me and trust your growth asset management to my expertise gained over the years. My goal is continuous achievement.!"</p>
			<div class="testimonial-item">
			  <div class="testimonial-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/man1.png" alt="/">
			  </div>
			  <div class="testimonial-info">
				<p class="mb-0">Angela Anderson</p>
				<small class="testimonial-jub">Web Designer</small>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <!--  About End  -->

  <!--  Resume Start  -->
  <section id="resume" class="section">
	<div class="container">
	  <!-- Servises -->
	  <div class="services  mb-6">
		<div class="boxes">
		  <h3 class="subtitle">Services</h3>
		  <div class="row vertical-line">
			<!-- Item 01 -->
			<div class="col-md-6">
			  <div class="services-box">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/ui-design.png" alt="/">
				<div class="services-content">
				  <h6 class="services-head">Web Design</h6>
				  <p class="services-description mb-0">In a professional context it often happens that private or corporate clients corder a publication to be made.</p>
				</div>
			  </div>
			</div>
			<!-- Item 02 -->
			<div class="col-md-6">
			  <div class="services-box">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/prototype.png" alt="/">
				<div class="services-content">
				  <h6 class="services-head">Logo Design</h6>
				  <p class="services-description mb-0">In a professional context it often happens that private or corporate clients corder a publication to be made.</p>
				</div>
			  </div>
			</div>
			<!-- Item 03 -->
			<div class="col-md-6">
			  <div class="services-box">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/layer.png" alt="/">
				<div class="services-content">
				  <h6 class="services-head">Web Development</h6>
				  <p class="services-description mb-0">In a professional context it often happens that private or corporate clients corder a publication to be made.</p>
				</div>
			  </div>
			</div>
			<!-- Item 04 -->
			<div class="col-md-6">
			  <div class="services-box">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/movie-frame.png" alt="/">
				<div class="services-content">
				  <h6 class="services-head">Short Animations</h6>
				  <p class="services-description mb-0">In a professional context it often happens that private or corporate clients corder a publication to be made.</p>
				</div>
			  </div>
			</div>
			<!-- Item 05 -->
			<div class="col-md-6">
			  <div class="services-box">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/bar-graph.png" alt="/">
				<div class="services-content">
				  <h6 class="services-head">Advetising</h6>
				  <p class="services-description mb-0">In a professional context it often happens that private or corporate clients corder a publication to be made.</p>
				</div>
			  </div>
			</div>
			<!-- Item 06 -->
			<div class="col-md-6">
			  <div class="services-box">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/console.png" alt="/">
				<div class="services-content">
				  <h6 class="services-head">Game Development</h6>
				  <p class="services-description mb-0">In a professional context it often happens that private or corporate clients corder a publication to be made.</p>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <!--  Resume  -->
	  <div class="resume">
		<!--  TimeLine Education  -->
		<div class="boxes my-6">
		  <h3 class="subtitle">Education</h3>
		  <div class="row vertical-line">
			<!--  Item 01  -->
			<div class="col-md-6">
			  <div class="timeline-box">
				<div class="time-line-header">
				  <p class="timeline-year">2012 - 2015</p>
				  <h6 class="timeline-title">Art University - New York</h6>
				</div>
				<div class="timeline-content">
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.</p>
				</div>
			  </div>
			</div>
			<!--  Item 02  -->
			<div class="col-md-6">
			  <div class="timeline-box">
				<div class="time-line-header">
				  <p class="timeline-year">2015 - 2017</p>
				  <h6 class="timeline-title">Photographer Course - Canada</h6>
				</div>
				<div class="timeline-content">
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.</p>
				</div>
			  </div>
			</div>
			<!--  Item 03  -->
			<div class="col-md-6">
			  <div class="timeline-box">
				<div class="time-line-header">
				  <p class="timeline-year">2017 - 2019</p>
				  <h6 class="timeline-title">Writing Course - New York</h6>
				</div>
				<div class="timeline-content">
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.</p>
				</div>
			  </div>
			</div>
			<!--  Item 04  -->
			<div class="col-md-6">
			  <div class="timeline-box">
				<div class="time-line-header">
				  <p class="timeline-year">2019 - 2021</p>
				  <h6 class="timeline-title">Advetising Course - Canada</h6>
				</div>
				<div class="timeline-content">
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.</p>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		<!--  TimeLine Experience  -->
		<div class="boxes mt-6 mb-3">
		  <h3 class="subtitle">Experience</h3>
		  <div class="row vertical-line">
			<!--   Item 01   -->
			<div class="col-md-6">
			  <div class="timeline-box">
				<div class="time-line-header">
				  <p class="timeline-year">2017 - 2018</p>
				  <h6 class="timeline-title">Team Leader</h6>
				</div>
				<div class="timeline-content">
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.</p>
				</div>
			  </div>
			</div>
			<!--   Item 02   -->
			<div class="col-md-6">
			  <div class="timeline-box">
				<div class="time-line-header">
				  <p class="timeline-year">2019 - 2021</p>
				  <h6 class="timeline-title">Business Photographer</h6>
				</div>
				<div class="timeline-content">
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.</p>
				</div>
			  </div>
			</div>
			<!--   Item 03   -->
			<div class="col-md-6">
			  <div class="timeline-box">
				<div class="time-line-header">
				  <p class="timeline-year">2019 - 2021</p>
				  <h6 class="timeline-title">Marketing Managment</h6>
				</div>
				<div class="timeline-content">
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.</p>
				</div>
			  </div>
			</div>
			<!--   Item 04   -->
			<div class="col-md-6">
			  <div class="timeline-box">
				<div class="time-line-header">
				  <p class="timeline-year">2021 - 2021</p>
				  <h6 class="timeline-title">Advetising</h6>
				</div>
				<div class="timeline-content">
				  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.</p>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <!--  Resume End  -->

  <!--  Portfolio Start  -->
  <section id="portfolio" class="section portfolio">
	<div class="container">
	  <div class="heading-meta-container">
		<h2 class="heading-title">Portfolio</h2>
		<h6 class="description">See My Ausome Work</h6>
	  </div>
	  <div class="row">
		<!--   Portfolio Filters   -->
		<ul id="portfolio-filter" class="list-inline col-lg-12 portfolio-filter text-center">
		  <li class="list-inline-item">
			<a href="javascript:void(0)" data-filter="*" class="active">All</a>
		  </li>
		  <li class="list-inline-item">
			<a href="javascript:void(0)" data-filter=".webdesign">Web Design</a>
		  </li>
		  <li class="list-inline-item">
			<a href="javascript:void(0)" data-filter=".mobiledesign">Mobile Design</a>
		  </li>
		  <li class="list-inline-item">
			<a href="javascript:void(0)" data-filter=".sound">Sound</a>
		  </li>
		  <li class="list-inline-item">
			<a href="javascript:void(0)" data-filter=".graphic">Graphic</a>
		  </li>
		</ul>
	  </div>
	  <div class="portfolio-items border-line-v row">
		<!-- Item 01 -->
		<div class="col-md-6 col-lg-4 portfolio-item sound">
		  <div class="portfolio-box">
			<div class="portfolio-image">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webdesigner/portfolio-item1.jpg" alt="/">
			  <div class="portfolio-icon">
				<a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true" class="portfolio-magnific mfp-iframe">
				  <i class="bi bi-music-note-beamed"></i>
				</a>
			  </div>
			</div>
			<div class="portfolio-content">
			  <h6 class="blog-header">Tak photo on the waves</h6>
			  <p class="mb-0">image</p>
			</div>
		  </div>
		</div>
		<!-- Item 02 -->
		<div class="col-md-6 col-lg-4 portfolio-item sound">
		  <div class="portfolio-box">
			<div class="portfolio-image">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webdesigner/portfolio-item2.jpg" alt="/">
			  <div class="portfolio-icon">
				<a href="https://player.vimeo.com/video/158284739" class="portfolio-magnific mfp-iframe">
				  <i class="bi bi-camera-video"></i>
				</a>
			  </div>
			</div>
			<div class="portfolio-content">
			  <h6 class="blog-header">Tak photo on the waves</h6>
			  <p class="mb-0">image</p>
			</div>
		  </div>
		</div>
		<!-- Item 03 -->
		<div class="col-md-6 col-lg-4 portfolio-item sound">
		  <div class="portfolio-box">
			<div class="portfolio-image">
			  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webdesigner/portfolio-item3.jpg" alt="/">
			  <div class="portfolio-icon">
				<a href="portfolio-01-colorfull.html" class="ajax-page-load">
				  <i class="bi bi-file-earmark-text"></i>
				</a>
			  </div>
			</div>
			<div class="portfolio-content">
			  <h6 class="blog-header">Tak photo on the waves</h6>
			  <p class="mb-0">image</p>
			</div>
		  </div>
		</div>
		<!-- Item 04 -->
		<div class="col-md-6 col-lg-4 portfolio-item mobiledesign webdesign">
		  <div class="portfolio-image">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webdesigner/portfolio-item4.jpg" alt="/">
			<div class="portfolio-icon">
			  <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true" class="portfolio-magnific mfp-iframe">
				<i class="bi bi-music-note-beamed"></i>
			  </a>
			</div>
		  </div>
		  <div class="portfolio-content">
			<h6 class="blog-header">Detailed Project 2</h6>
			<p class="mb-0">image</p>
		  </div>
		</div>
		<!-- Item 05 -->
		<div class="col-md-6 col-lg-4 portfolio-item mobiledesign sound">
		  <div class="portfolio-image">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webdesigner/portfolio-item5.jpg" alt="/">
			<div class="portfolio-icon">
			  <a href="https://player.vimeo.com/video/158284739" class="portfolio-magnific mfp-iframe">
				<i class="bi bi-camera-video"></i>
			  </a>
			</div>
		  </div>
		  <div class="portfolio-content">
			<h6 class="blog-header">Detailed Project 2</h6>
			<p class="mb-0">image</p>
		  </div>
		</div>
		<!-- Item 06 -->
		<div class="col-md-6 col-lg-4 portfolio-item mobiledesign">
		  <div class="portfolio-image">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webdesigner/portfolio-item6.jpg" alt="/">
			<div class="portfolio-icon">
			  <a href="portfolio-01-colorfull.html" class="ajax-page-load">
				<i class="bi bi-file-earmark-text"></i>
			  </a>
			</div>
		  </div>
		  <div class="portfolio-content">
			<h6 class="blog-header">Detailed Project 2</h6>
			<p class="mb-0">image</p>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <!--  Portfolio End  -->

  <!--  Blog Start  -->
  <section id="blog" class="section blog">
	<div class="container">
	  <h3 class="subtitle">Latest News</h3>
	  <div class="boxes">
		<div class="row vertical-line">
		  <!-- Item 01 -->
		  <div class="col-md-6">
			<a href="webdesigner-blog-singel-colorfull.html" class="blog-box">
			  <div class="blog-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webdesigner/blog-item1.jpg" alt="/">
				<div class="blog-icon">
				  <i class="bi bi-journal-text"></i>
				</div>
			  </div>
			  <div class="blog-post-content">
				<div class="blog-dates">
				  <span>20 June 2021</span>
				</div>
				<h6 class="blog-header">Stay informed about the latest cameras and money of that</h6>
				<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
			  </div>
			</a>
		  </div>
		  <!-- Item 02 -->
		  <div class="col-md-6">
			<a href="webdesigner-blog-singel-colorfull.html" class="blog-box">
			  <div class="blog-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webdesigner/blog-item2.jpg" alt="/">
				<div class="blog-icon">
				  <i class="bi bi-journal-text"></i>
				</div>
			  </div>
			  <div class="blog-post-content">
				<div class="blog-dates">
				  <span>20 June 2021</span>
				</div>
				<h6 class="blog-header">What Resources help you with your photography</h6>
				<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
			  </div>
			</a>
		  </div>
		  <!-- Item 03 -->
		  <div class="col-md-6">
			<a href="webdesigner-blog-singel-colorfull.html" class="blog-box">
			  <div class="blog-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webdesigner/blog-item3.jpg" alt="/">
				<div class="blog-icon">
				  <i class="bi bi-journal-text"></i>
				</div>
			  </div>
			  <div class="blog-post-content">
				<div class="blog-dates">
				  <span>20 June 2021</span>
				</div>
				<h6 class="blog-header">Improve your Skills with blog posts on photography</h6>
				<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
			  </div>
			</a>
		  </div>
		  <!-- Item 04 -->
		  <div class="col-md-6">
			<a href="webdesigner-blog-singel-colorfull.html" class="blog-box">
			  <div class="blog-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/webdesigner/blog-item4.jpg" alt="/">
				<div class="blog-icon">
				  <i class="bi bi-journal-text"></i>
				</div>
			  </div>
			  <div class="blog-post-content">
				<div class="blog-dates">
				  <span>20 June 2021</span>
				</div>
				<h6 class="blog-header">Get Inspiration from photo stories, interviews, and resource</h6>
				<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
			  </div>
			</a>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <!--  Blog End  -->

  <!-- Contact Start -->
  <section id="contact" class="section contact w-100">
	<div class="container">
	  <h3 class="subtitle">Get in Touch</h3>
	  <!-- Map -->
	  <div class="row mt-5">
		<div class="col-lg-12"><div id="my-map" data-location-lat="43.053454" data-location-lng="-76.144508" data-location-icon="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/location-map.png"></div></div>
	  </div>
	  <div class="row mt-4">
		<!-- Address Info -->
		<div class="col-12 col-xl-5">
		  <div class="row">
			<!--  Item 01 -->
			<div class="col-lg-12">
			  <div class="info-box">
				<div class="item-icon">
				  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/message.svg" alt="/">
				</div>
				<div class="info-text">
				  <h5>Mail Me</h5>
				  <small><a href="https://retrina.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="94f1f9f5fdf8d4f1ecf5f9e4f8f1baf7fbf9">[email&#160;protected]</a></small>
				</div>
			  </div>
			</div>
			<!--  Item 02 -->
			<div class="col-lg-12">
			  <div class="info-box">
				<div class="item-icon">
				  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/phone-call.svg" alt="/">
				</div>
				<div class="info-text">
				  <h5>Call Us On</h5>
				  <small>+123 456 7890</small>
				</div>
			  </div>
			</div>
			<!--  Item 03 -->
			<div class="col-lg-12">
			  <div class="info-box">
				<div class="item-icon">
				  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/location.svg" alt="/">
				</div>
				<div class="info-text">
				  <h5>Visit office</h5>
				  <small>24 Street, New York, United State.</small>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		<!-- Contact Form -->
		<div class="col-12 col-xl-7">
		  <div class="contact-box">
			<div class="contact-form">
			  <form id="contactForm">
				<div class="row">
				  <div class="col-lg-12 form-item">
					<div class="form-group">
					  <input name="name" id="name" type="text" class="form-control" placeholder="Complate Name*" required>
					</div>
				  </div>
				  <div class="col-lg-12 form-item">
					<div class="form-group">
					  <input name="email" id="email" type="email" class="form-control" placeholder="Email Address*" required>
					</div>
				  </div>
				  <div class="col-lg-12 form-item">
					<div class="form-group">
					  <input name="subject" id="subject" type="tel" class="form-control" placeholder="Phone number*" required>
					</div>
				  </div>
				  <div class="col-12 form-item">
					<div class="form-group">
					  <textarea name="comments" id="comments" rows="3" class="form-control textarea" placeholder="Your message..."></textarea>
					</div>
				  </div>
				  <div class="col-sm-12 text-left">
					<div class="pill-btn mt-4 mb-3">
					  <button type="submit" class="secondary-button"> Send Message </button>
					</div>
					
				  </div>
				</div>
			  </form>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <!--  Contact End  -->

</main>
<!--  Main End  -->

<!--  Mobile Next and Prev Button Start -->
<div class="next-prev-page d-block d-lg-none">
  <button type="button" class="prev-page bg-base-color hstack">      
	<i class="bi bi-chevron-compact-left mx-auto"></i>
  </button>
  <button type="button" class="next-page bg-base-color mt-1 mt-lg-3 hstack">
	<i class="bi bi-chevron-compact-right mx-auto"></i>
  </button>
</div>
<!--  Mobile Next and Prev Button End -->

<!--  Navbar Button Mobile Start -->
<div class="menu-toggle">
  <span></span>
  <span></span>
  <span></span>
</div>
<!--  Navbar Button Mobile End -->

<!--  Background Shapes Start  -->
<div class="area">
  <ul class="circles">
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
  </ul>
</div>
<!--  Background Shapes End  -->
<!--  Color Pallet  -->
<div id="color-switcher" class="color-switcher">
  <div class="text-center color-pallet hide">
	<h6 class="theme-skin-title">Light &amp; Dark</h6>
	<ul class="color-scheme mb-0 list-inline">
		<li class="list-inline-item">
			<a href="javascript:void(0)" class="light-scheme"><i class="bi bi-brightness-high"></i> Light</a>
		</li>
		<li class="list-inline-item">
			<a href="javascript:void(0)" class="dark-scheme active"><i class="bi bi-moon"></i> Dark</a>
		</li>
	  </ul>
  </div>
  <div class="pallet-button hide">
	  <a href="javascript:void(0)" class="cp-toggle"><i class="bi bi-gear"></i></a>
  </div>
</div>

<!-- Mouase Magic Cursor Start -->
<div class="m-magic-cursor ucl-outer"></div>
  <div class="m-magic-cursor ucl-inner"></div>
<!-- Mouase Magic Cursor End -->


<?php
get_footer();
