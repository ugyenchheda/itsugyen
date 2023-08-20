<?php
//** * Template Name: The Ugyen */

get_header();
$position_title = get_post_meta( get_the_ID(), 'position_title', true );
$intro_part = get_post_meta( get_the_ID(), 'intro_part', true );
$intro_main = get_post_meta( get_the_ID(), 'intro_main', true );
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
<?php 
$contact_whatsapp = get_post_meta( get_the_ID(), 'contact_whatsapp', true);
$contact_facebook = get_post_meta( get_the_ID(), 'contact_facebook', true);
$contact_instagram = get_post_meta( get_the_ID(), 'contact_instagram', true);
$contact_github = get_post_meta( get_the_ID(), 'contact_github', true);
$contact_website = get_post_meta( get_the_ID(), 'contact_website', true);

?>
<!--   Right Side Start  -->
<div class="right-side d-none d-lg-block">
  <div id="date"></div>
  <div class="social-box">
	<div class="follow-label">
	  <span>Follow Me</span>
	</div>
	<div class="social d-none d-lg-block">
	  <a href="<?php echo $contact_website; ?>" target="_blank">
		<i class="bi bi-laptop color-laptop"></i>
	  </a>
	  <a href="<?php echo $contact_github; ?>" target="_blank">
		<i class="bi bi-github color-dark"></i>
	  </a>
	  <a href="<?php echo $contact_facebook; ?>" target="_blank">
		<i class="bi bi bi-facebook color-blue"></i>
	  </a>
	  <a href="<?php echo $contact_instagram; ?>" target="_blank">
		<i class="bi bi-instagram color-purple"></i>
	  </a>
	  <a href="<?php echo $contact_whatsapp; ?>" target="_blank">
		<i class="bi bi-whatsapp color-green"></i>
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
	  <a class="download-cv primary-button mt-3 mb-4 d-lg-none" href="<?php echo $intro_cv;?>">Download CV</a>
	  <div class="social d-lg-none d-block">
	  <a href="<?php echo $contact_website; ?>" target="_blank" class="d-inline-block">
		<i class="bi bi-laptop"></i>
	  </a>
	  <a href="<?php echo $contact_github; ?>" target="_blank" class="d-inline-block mx-4">
		<i class="bi bi-github"></i>
	  </a>
	  <a href="<?php echo $contact_facebook; ?>" target="_blank" class="d-inline-block">
		<i class="bi bi bi-facebook "></i>
	  </a>
	  <a href="<?php echo $contact_instagram; ?>" target="_blank" class="d-inline-block mx-4">
		<i class="bi bi-instagram "></i>
	  </a>
	  <a href="<?php echo $contact_whatsapp; ?>" target="_blank" class="d-inline-block">
		<i class="bi bi-whatsapp"></i>
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
			  <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="/">
			</div>
			<div class="ugyen-content mt-4 mx-auto mx-lg-0 text-lg-left mt-lg-none">			  
				<div class="css-typing">
					<p class="base-color"><i class="bi bi-code-slash"></i> <?php echo $position_title;  ?></p>
			 
			  <h2><?php echo $intro_main; ?></h2>
					<p><i class="bi bi-caret-right"></i> Feel free to browse and know about my work...</p>
				</div>
			  <!-- <div class="typing-demo"><i class="bi bi-caret-right"></i> Feel free to browse and know about my work...</div> -->
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="ugyen-footer d-block d-lg-none">
	  <a class="download-cv primary-button mt-3 mb-4 d-lg-none" href="<?php echo $intro_cv;?>">Download CV</a>
	  <div class="social d-lg-none mb-4 d-block">
	  <a href="<?php echo $contact_website; ?>" target="_blank" class="d-inline-block">
		<i class="bi bi-laptop"></i>
	  </a>
	  <a href="<?php echo $contact_github; ?>" target="_blank" class="d-inline-block mx-4">
		<i class="bi bi-github"></i>
	  </a>
	  <a href="<?php echo $contact_facebook; ?>" target="_blank" class="d-inline-block">
		<i class="bi bi bi-facebook "></i>
	  </a>
	  <a href="<?php echo $contact_instagram; ?>" target="_blank" class="d-inline-block mx-4">
		<i class="bi bi-instagram "></i>
	  </a>
	  <a href="<?php echo $contact_whatsapp; ?>" target="_blank" class="d-inline-block">
		<i class="bi bi-whatsapp"></i>
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
				  <li>Email : <small><a href="mailto:<?php echo $about_email; ?>" class="__cf_email__"><?php echo $about_email; ?></a></small>
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
		<?php 
		$project_types = get_post_meta( get_the_ID(), 'project_type', true );
		foreach ( (array) $project_types as $key => $project_type ) {
			$project_type_name = $project_type_description = $project_type_image = $project_type_count = '';
			if ( isset( $project_type['project_type_name'] ) ) {
				$project_type_name = esc_html( $project_type['project_type_name'] );
			}
			if ( isset( $project_type['project_type_description'] ) ) {
				$project_type_description = wpautop( $project_type['project_type_description'] );
			}
			if ( isset( $project_type['project_type_image'] ) ) {
				$project_type_image = esc_html( $project_type['project_type_image']);
			}
			if ( isset( $project_type['project_type_count'] ) ) {
				$project_type_count = esc_html( $project_type['project_type_count'] );
			}
			
		
			echo '
			<div class="col-6 col-lg-3 my-4 count-item">
			  <div class="count-icon"><img src="'.$project_type_image.' " alt="'.$project_type_name.'"></div>
			  <span class="timer count-number" data-from="0" data-to="'.$project_type_count.'" data-speed="5000">0</span>
			  <p class="mb-0">'.$project_type_name.'</p>
			</div>';
		}
	  ?>
		</div>
	  </div>
	  <!--  Skills  -->
	  <div class="skills">
		<div class="row pt-5">
		  <div class="col-lg-7">
			<?php
				$skills_intro = get_post_meta( get_the_ID(), 'skills_intro', true );
				$skills_desc = get_post_meta( get_the_ID(), 'skills_desc', true );
			?>
			<div class="skill-description">
				<?php if($skills_intro) {
					echo '<h3 class="mb-3">'.$skills_intro.'</h3>';
				}
				if($skills_desc) {
				echo '<p class="mb-0">'.$skills_desc.'</p>';
				}
				?>
			  
			</div>
		  </div>
		  <div class="col-lg-5">
			<ul class="knowledge-item">
			<?php 
			$knowledges = get_post_meta( get_the_ID(), 'knowledge', true );
			foreach ( (array) $knowledges as $key => $knowledge ) {
				$knowledge_name ='';
				if ( isset( $knowledge['knowledge_name'] ) ) {
					$knowledge_name = esc_html( $knowledge['knowledge_name'] );
				}
				echo '
				<li>'.$knowledge_name.'</li>';
				}
				?>
			</ul>
		  </div>
		</div>
	  </div>
	  <!--  Skillbar  -->
	  <div class="row mt-5 skills">
		<div class="col-lg-6">
		  <h3 class="subtitle">Overall Skills</h3>
		  <div id="skills">
		  <?php 
			$skills_types = get_post_meta( get_the_ID(), 'skills', true );
			foreach ( (array) $skills_types as $key => $skill_type ) {
				$skills_name  = $skills_count = '';
				if ( isset( $skill_type['skills_name'] ) ) {
					$skills_name = esc_html( $skill_type['skills_name'] );
				}
				if ( isset( $skill_type['skills_count'] ) ) {
					$skills_count = esc_html( $skill_type['skills_count'] );
				}
				
			
				echo '<div class="col-lg-12 skill-box">
				<div class="skill-text">
				<div class="skillbar-title">'.$skills_name.'</div>
				<div class="skill-bar-percent"><span data-from="0" data-to="'.$skills_count.'" data-speed="4000">'.$skills_count.'</span>%</div>
				</div>
				<div class="skillbar clearfix" data-percent="'.$skills_count.'%">
				<div class="skillbar-bar"></div>
				</div>
			</div>';
			}
			?>
		  </div>
		</div>
		<div class="col-lg-5 ms-auto mt-5 mt-lg-0">
			<?php $testimonial_title = get_post_meta( get_the_ID(), 'testimonial_title', true ); ?>
			<h3 class="subtitle"><?php echo $testimonial_title; ?></h3>

			<div class="testimonial mt-5">
				<div class="owl-carousel">
					<?php 
						$testimonials_types = get_post_meta( get_the_ID(), 'testimonials', true );
						foreach ( (array) $testimonials_types as $key => $testimonials_type ) {
							$testimonials_name = $testimonials_description = $testimonials_image = $testimonials_company = $testimonials_rating = '';
							if ( isset( $testimonials_type['testimonials_name'] ) ) {
								$testimonials_name = esc_html( $testimonials_type['testimonials_name'] );
							}
							if ( isset( $testimonials_type['testimonials_description'] ) ) {
								$testimonials_description = esc_html( $testimonials_type['testimonials_description'] );
							}
							if ( isset( $testimonials_type['testimonials_company'] ) ) {
								$testimonials_company = esc_html( $testimonials_type['testimonials_company']);
							}
							if ( isset( $testimonials_type['testimonials_image'] ) ) {
								$testimonials_image = esc_html( $testimonials_type['testimonials_image']);
							}
							if ( isset( $testimonials_type['testimonials_rating'] ) ) {
								$testimonials_rating = esc_html( $testimonials_type['testimonials_rating']);
							}

							if ( 'one' === $testimonials_rating ) {
								$star_rating = '<span class="bi bi-star-fill checked"></span><span class="bi bi-star"></span><span class="bi bi-star"></span><span class="bi bi-star"></span><span class="bi bi-star"></span>';
							} else if ('two' === $testimonials_rating) {
								$star_rating = '<span class="bi bi-star-fill checked"></span><span class="bi bi-star-fill checked"></span><span class="bi bi-star"></span><span class="bi bi-star"></span><span class="bi bi-star"></span>';
							} else if ('three' === $testimonials_rating) {
								$star_rating = '<span class="bi bi-star-fill checked"></span>
							<span class="bi bi-star-fill checked"></span><span class="bi bi-star-fill checked"></span><span class="bi bi-star"></span><span class="bi bi-star"></span>';
							} else if ('four' === $testimonials_rating) {
								$star_rating = '<span class="bi bi-star-fill checked"></span><span class="bi bi-star-fill checked"></span><span class="bi bi-star-fill checked"></span><span class="bi bi-star-fill checked"></span><span class="bi bi-star"></span>';
							}else {
								$star_rating = '<span class="bi bi-star-fill checked"></span><span class="bi bi-star-fill checked"></span><span class="bi bi-star-fill checked"></span><span class="bi bi-star-fill checked"></span><span class="bi bi-star-fill checked"></span>';
							}
								
							echo '<div class="testimonial-box">
									<blockquote><p class="testimonial-comment">'.$testimonials_description.'</p></blockquote>

									<div class="testimonial-item">
										<div class="testimonial-image">
											<img src="'.$testimonials_image.'" alt="'.$testimonials_name.'">
										</div>
										<div class="testimonial-info">
											<p class="mb-0">'.$testimonials_name.'</p>
											<small class="testimonial-jub">'.$testimonials_company.'</small></br>
											<small class="testimonial-jub">'.$star_rating.'</small>
										</div>
									</div>
								</div>';
						}
					?>
				</div>
			</div>
		</div>
	  </div>
	  <!--  Client  -->
	</div>
  </section>
  <!--  About End  -->

  <!--  Resume Start  -->
  <section id="resume" class="section">
	<div class="container">
	  <!-- Servises -->
	  <div class="services  mb-6">
		<div class="boxes">
			<?php
			$service_title = get_post_meta( get_the_ID(), 'service_title', true );
			?>
		  <h3 class="subtitle"><?php echo $service_title;?></h3>
		  <div class="row vertical-line">
			<?php 
				$services_types = get_post_meta( get_the_ID(), 'services_type', true );
				foreach ( (array) $services_types as $key => $services_type ) {
					$services_type_name = $services_type_description = $services_type_image = '';
					if ( isset( $services_type['services_type_name'] ) ) {
						$services_type_name = esc_html( $services_type['services_type_name'] );
					}
					if ( isset( $services_type['services_type_description'] ) ) {
						$services_type_description = wpautop( $services_type['services_type_description'] );
					}
					if ( isset( $services_type['services_type_image'] ) ) {
						$services_type_image = esc_html( $services_type['services_type_image']);
					}
						echo '
						<div class="col-md-6">
							<div class="services-box">
								<img src="'.$services_type_image.'" alt="/">
								<div class="services-content">
									<h6 class="services-head">'.$services_type_name.'</h6>
									<p class="services-description mb-0">'.$services_type_description.'</p>
								</div>
							</div>
						</div>';
				}
			?>
		  </div>
		</div>
	  </div>
	  <!--  Resume  -->
	  <div class="resume">
		<!--  TimeLine Education  -->
		<div class="boxes my-6">
		<?php
			$education_title = get_post_meta( get_the_ID(), 'education_title', true );
			?>
		  <h3 class="subtitle"><?php echo $education_title;?></h3>
		  <div class="row vertical-line">
			<!--  Item 01  -->
		  	<?php 
				$education_types = get_post_meta( get_the_ID(), 'education_type', true );
				foreach ( (array) $education_types as $key => $education_type ) {
					$education_type_name = $education_institution = $education_type_description = $education_year = '';
					if ( isset( $education_type['education_type_name'] ) ) {
						$education_type_name = esc_html( $education_type['education_type_name'] );
					}
					if ( isset( $education_institution['education_institution'] ) ) {
						$education_institution = wpautop( $education_type['education_institution'] );
					}
					if ( isset( $education_type['education_year'] ) ) {
						$education_year = esc_html( $education_type['education_year']);
					}
					if ( isset( $education_type['education_type_description'] ) ) {
						$education_type_description = esc_html( $education_type['education_type_description']);
					}
					echo '
					<div class="col-md-6">
						<div class="timeline-box">
							<div class="time-line-header">
							<p class="timeline-year">'.$education_year.'</p>
							<h6 class="timeline-title">'.$education_type_name.'</h6>
							</div>
							<div class="timeline-content">
							<p>'.$education_type_description.'</p>
							</div>
						</div>
					</div>';
				}
			?>
		  </div>
		</div>
		<!--  TimeLine Experience  -->
		<div class="boxes mt-6 mb-3">
		<?php
			$experience_title = get_post_meta( get_the_ID(), 'experience_title', true );
			?>
		  <h3 class="subtitle"><?php echo $experience_title;?></h3>
		  <div class="row vertical-line">
		  	<?php 
				$experience_types = get_post_meta( get_the_ID(), 'experience_type', true );
				foreach ( (array) $experience_types as $key => $experience_type ) {
					$experience_position = $experience_institution = $experience_type_description = $education_year = $institution_website = '';
					if ( isset( $experience_type['experience_position'] ) ) {
						$experience_position = esc_html( $experience_type['experience_position'] );
					}
					if ( isset( $experience_type['experience_institution'] ) ) {
						$experience_institution = esc_html( $experience_type['experience_institution'] );
					}
					if ( isset( $experience_type['experience_year'] ) ) {
						$experience_year = esc_html( $experience_type['experience_year']);
					}
					if ( isset( $experience_type['experience_description'] ) ) {
						$experience_type_description = esc_html( $experience_type['experience_description']);
					}
					if ( isset( $experience_type['institution_website'] ) ) {
						$institution_website = esc_html( $experience_type['institution_website']);
					}
					echo '
					<div class="col-md-6">
						<div class="timeline-box">
							<div class="time-line-header">
								<p class="timeline-year">'.$experience_year.'</p>
								<h6 class="timeline-title">'.$experience_position.'</h6>
								<p class="timeline-title">Company: <a href="'.$institution_website.'" target="_blank">'.$experience_institution.'</a></p>
							</div>
							<div class="timeline-content">
								<p>'.$experience_type_description.'</p>
							</div>
						</div>
					</div>';
				}
			?>
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
		<h6 class="description">Check Out My Works</h6>
	  </div>
	  <div class="row">
		<!--   Portfolio Filters   -->
		<ul id="portfolio-filter" class="list-inline col-lg-12 portfolio-filter text-center">
		  <li class="list-inline-item">
			<a href="javascript:void(0)" data-filter="*" class="active">All</a>
		  </li>
		  	<?php
				$custom_post_type = 'portfolio';
				$terms = get_terms(array(
					'taxonomy' => 'category',
					'hide_empty' => true,
				));

				if (!empty($terms)) {
					foreach ($terms as $term) {
						// Exclude the "Uncategorized" category
						if ($term->slug !== 'uncategorized') {
							echo '<li class="list-inline-item"><a href="javascript:void(0)" data-filter=".' . $term->slug . '">' . $term->name . '</a></li>';
						}
					}
				} else {
					echo 'No terms found for this custom post type and taxonomy.';
				}
			?>
		</ul>
	  </div>
	  <div class="portfolio-items border-line-v row">
	  <?php 
		$args = array(
			'post_type' => 'portfolio', 
		);
		$query = new WP_Query($args);

		if ($query->have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
				
				$portfolio_link = get_post_meta(get_the_ID(), 'portfolio_link', true );

				// Get the terms associated with the current post, excluding the "Uncategorized" category
				$terms = get_the_terms(get_the_ID(), 'category');

				if (!empty($terms)) {
					// Filter out the "Uncategorized" term
					$filtered_terms = array_filter($terms, function ($term) {
						return $term->slug !== 'uncategorized';
					});

					foreach ($filtered_terms as $term) {
						echo '<div class="col-md-6 col-lg-4 portfolio-item ' . $term->slug . '">
									<div class="portfolio-box">
										<div class="portfolio-image">' . get_the_post_thumbnail(get_the_ID(), 'post_image_xl', array('class' => 'alignleft')) . '
											<div class="portfolio-icon">
												<a href="' . $portfolio_link . '" class="mfp-iframe" target="_blank">
													<i class="bi bi-link"></i>
												</a>
											</div>
										</div>
										<div class="portfolio-content">
											<h6 class="blog-header"><a href="' . $portfolio_link . '" class="mfp-iframe" target="_blank">' . get_the_title() . '</a></h6>
										</div>
									</div>
								</div>';
					}
				}
			}
		}
		?>
	</div>
  </section>
  <!--  Portfolio End  -->

  <!--  Blog Start  -->
  <section id="blog" class="section blog">
	<div class="container">
	  <h3 class="subtitle">Latest News</h3>
	  <div class="boxes">
		<div class="row vertical-line" id="append-here">
			<?php 
				$args = array(
						'post_type' => 'post', 
						'posts_per_page' => '2',
					);
				$query = new WP_Query($args);
				if ($query->have_posts()) {
					while ($query->have_posts()) {
						$query->the_post();
						echo '<div class="col-md-6">
							<a href="' . get_the_permalink() . '" class="blog-box">
							<div class="blog-image">
							' . get_the_post_thumbnail(get_the_ID(), 'post_image_xl', array('class' => 'alignleft')) . '
								<div class="blog-icon">
								<i class="bi bi-journal-text"></i>
								</div>
							</div>
							<div class="blog-post-content">
								<h6 class="blog-header">' . get_the_title() . '</h6>
								<div class="blog-dates">
								<span>' . get_the_date() . '</span>
								</div>
								<p class="mb-0">' . get_the_excerpt() . '</p>
							</div>
							</a>
						</div>';
					}
				}
				wp_reset_postdata(); // Restore original post data
			?>
		</div>
	  </div>
		<div class="load-more-containerv text-center">
			<button id="load-more-news" class="primary-button">View More Posts</button>
			<p id="fully-loaded">That's all for now &#128522.</p>
		</div>
	</div>
  </section>
  <!--  Blog End  -->

  <!-- Contact Start -->

  <?php
  $contact_title = get_post_meta( get_the_ID(), 'contact_title', true );
  $contact_description = get_post_meta( get_the_ID(), 'contact_description', true );
  $contact_email = get_post_meta( get_the_ID(), 'contact_email', true );
  $contact_phone = get_post_meta( get_the_ID(), 'contact_phone', true );
  $contact_address = get_post_meta( get_the_ID(), 'contact_address', true );
  $contact_address = get_post_meta( get_the_ID(), 'contact_address', true );
  ?>
  <section id="contact" class="section contact w-100">
	<div class="container">
	  <h3 class="subtitle"><?php echo $contact_title;?></h3>
	  <div class="row mt-4">
		<!-- Address Info -->
		<div class="col-12 col-xl-5">
	  		<p id="fully-loaded" style="text-align: justify;"><?php echo $contact_description;?></p>
		  <div class="row">
			<!--  Item 01 -->
			<div class="col-lg-12">
			  <div class="info-box">
				<div class="item-icon">
				  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/colorfull/message.svg" alt="/">
				</div>
				<div class="info-text">
				  <h5>Mail Me</h5>
				  <small><a href="mailto:<?php echo $contact_email;?>" class="__cf_email__"><?php echo $contact_email;?></a></small>
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
				  <h5>Call Me On</h5>
				  <small><a href="tel:<?php echo $contact_email;?>" class="__cf_email__"><?php echo $contact_phone;?></a></small>
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
				  <h5>Visit Me</h5>
				  <small><?php echo $contact_address;?></small>
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
				  <h5>Contact Form</h5>
					<?php echo apply_shortcodes( '[contact-form-7 id="a59f345" title="Contact form 1"]' ); ?>
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
  <div class="pallet-button hide">
	  <a><i class="bi bi-moon-stars"></i><i class="bi bi-sun d-none"></i></a>
  </div>
</div>

<!-- Mouase Magic Cursor Start -->
<div class="m-magic-cursor ucl-outer"></div>
  <div class="m-magic-cursor ucl-inner"></div>
<!-- Mouase Magic Cursor End -->


<?php
get_footer();
