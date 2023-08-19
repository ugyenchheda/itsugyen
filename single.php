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
      <div class="single-portfolio-wrapper">
        <div class="container">
          <!--  Single Portfolio Start  -->
          <div class="portfolio-page-title">
            <h1>Portfolio Project 1</h1>
          </div>
          <div class="row">
            <div class="col-lg-7 post-content">
              <div class="single-post">
                <div class="owl-carousel portfolio-page-carousel">
                  <!-- Item 01 -->
                  <div class="entry-image">
                    <img src="assets/img/blog-img-05.jpg" alt="/">
                  </div>
                  <!-- Item 02 -->
                  <div class="entry-image">
                    <img src="assets/img/blog-img-04.jpg" alt="/">
                  </div>
                  <!-- Item 03 -->
                  <div class="entry-image">
                    <img src="assets/img/blog-img-03.jpg" alt="/">
                  </div>
                </div>
                <div class="entry-content">
                  <h2>Project Overview</h2>
                  <p class="mb-0">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show. </p>
                </div>
              </div>
            </div>
            <aside class="col-lg-4 ms-auto sidebar mt-5 mt-lg-0">
              <div class="sidbar-wrap">
                <!-- Categories -->
                <div class="aside-box">
                  <div class="aside-title">
                    <h6>Project Details</h6>
                  </div>
                  <p>These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                  <div class="aside-item-portfolio">
                    <ul class="list-unstyled">
                      <li>
                        <a href="#">Category: </a>
                        <span> Photography</span>
                      </li>
                      <li>
                        <a href="#">Client:</a>
                        <span>LiLI Martin</span>
                      </li>
                      <li>
                        <a href="#">Date:</a>
                        <span> 22/04/2021</span>
                      </li>
                      <li>
                        <a href="#">Project Value:</a>
                        <span>87K</span>
                      </li>
                      <li>
                        <a href="#">Location: </a>
                        <span>Usa</span>
                      </li>
                      <li>
                        <a href="#">Designer: </a>
                        <span>John</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </aside>
          </div>
          <!--  Single Portfolio End  -->
        </div>
      </div>
    </div>
    <!-- Mouase Magic Cursor Start -->
    <div class="m-magic-cursor mmc-outer"></div>
	  <div class="m-magic-cursor mmc-inner"></div>
<?php
get_footer();
