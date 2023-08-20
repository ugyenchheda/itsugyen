<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package itsUgyen
 */

get_header();
?>
    <div id="ajax-page" class="ajax-page-content">
          <!-- Ajax-page-nav Start -->
		  <?php
$prev_post = get_previous_post();
$next_post = get_next_post();

if ($prev_post) {
    $prev_post_link = get_permalink($prev_post);
    $prev_post_title = esc_html($prev_post->post_title);
} else {
    $prev_post_link = '';
    $prev_post_title = '';
}

if ($next_post) {
    $next_post_link = get_permalink($next_post);
    $next_post_title = esc_html($next_post->post_title);
} else {
    $next_post_link = '';
    $next_post_title = '';
}
?>

<div class="post-navigation">
<?php
$previous_post = get_previous_post();
$next_post = get_next_post();

if ($previous_post) {
    $previous_post_link = get_permalink($previous_post);
    $previous_post_title = esc_html($previous_post->post_title);
} else {
    $previous_post_link = '';
    $previous_post_title = '';
}

if ($next_post) {
    $next_post_link = get_permalink($next_post);
    $next_post_title = esc_html($next_post->post_title);
} else {
    $next_post_link = '';
    $next_post_title = '';
}
?>

<div class="ajax-page-nav">
    <div class="nav-item ajax-page-prev-next">
        <?php if ($previous_post_link) : ?>
            <a class="ajax-page-load" href="<?php echo $previous_post_link; ?>" title="Previous Post">
			<i class="bi bi-skip-backward"></i>
            </a>
        <?php endif; ?>
        
        <?php if ($next_post_link) : ?>
            <a class="ajax-page-load" href="<?php echo $next_post_link; ?>" title="Next Post">
			<i class="bi bi-skip-forward"></i>

            </a>
        <?php endif; ?>
    </div>
    <div class="nav-item ajax-page-close-button">
        <a class="ajax-page-close-button" href="<?php echo home_url(); ?>" title="Close">
		<i class="bi bi-house-door"></i>
        </a>
    </div>
</div>
          <!-- Ajax-page-nav End -->
      <div class="single-portfolio-wrapper">
        <div class="container">
          <!--  Single Portfolio Start  -->
          <div class="portfolio-page-title">
            <h1></h1>
          </div>
          <div class="row">
            <div class="col-lg-6 post-content">
              <div class="single-post">
                  <!-- Item 01 -->
                  <div class="entry-image">
                    <?php echo  get_the_post_thumbnail(get_the_ID()) ; ?>
                  </div>
              </div>
            </div>
            <aside class="col-lg-6 ms-auto sidebar mt-5 mt-lg-0">
              <div class="sidbar-wrap">
                <!-- Categories -->
                <div class="aside-box">
                  <div class="aside-title">
                    <h6><?php echo get_the_title(); ?></h6>
                  </div>
					<?php echo get_the_content(); ?>  
                </div>
              </div>
            </aside>
          </div>
          <!--  Single Portfolio End  -->
        </div>
      </div>
    </div>
    <!-- Mouase Magic Cursor Start -->
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
