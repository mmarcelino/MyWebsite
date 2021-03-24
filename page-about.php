<?php

/*

  Template name: About

*/

get_header(); ?>

<!-- --------------------------------------------------------
   Content
-------------------------------------------------------- -->

<div class="about-content">

  <p><span><?php the_field('about_header'); ?></span></p>

  <p class="about-intro"><?php the_field('about_intro'); ?></p>

  <div class="top-section">

    <div data-aos="fade-up" data-aos-duration="2000">
      <p class="header"><?php
        if( have_rows('about_background') ):
          while( have_rows('about_background') ) : the_row(); ?>
            <?php the_sub_field('about_background_title'); ?>
          <?php endwhile;
        endif;
        ?></p>

      <div class="section-content"><?php
        if( have_rows('about_background') ):
          while( have_rows('about_background') ) : the_row(); ?>
            <?php the_sub_field('about_background_text'); ?>
          <?php endwhile;
        endif;
        ?></div>
    </div>

    <div data-aos="fade-up" data-aos-duration="2000">
      <p class="header"><?php the_field('about_languages_and_platforms'); ?>
      </p>

      <div class="languages-about">
        <div class="section-content">
          <p><strong>+</strong>PHP</p>
          <p><strong>+</strong>HTML</p>
          <p><strong>+</strong>CSS3</p>
          <p><strong>+</strong>SCSS</p>
        </div>
        <div class="section-content second-languages">
          <p><strong>+</strong>JavaScript</p>
          <p><strong>+</strong>Jquery</p>
          <p><strong>+</strong>Bootstrap</p>
          <p><strong>+</strong>Wordpress</p>
        </div>
      </div>
    </div>
  </div>

  <div class="bottom-section">

    <div data-aos="fade-up" data-aos-duration="2000">

      <p class="header"><?php
        if( have_rows('about_teaching') ):
          while( have_rows('about_teaching') ) : the_row(); ?>
            <?php the_sub_field('about_teaching_title'); ?>
          <?php endwhile;
        endif;
        ?></p>

      <div class="section-content"><?php
        if( have_rows('about_teaching') ):
          while( have_rows('about_teaching') ) : the_row(); ?>
            <?php the_sub_field('about_teaching_text'); ?>
          <?php endwhile;
        endif;
        ?></div>
    </div>

    <div data-aos="fade-up" data-aos-duration="2000">

      <p class="header"><?php
        if( have_rows('about_more') ):
          while( have_rows('about_more') ) : the_row(); ?>
            <?php the_sub_field('about_more_title'); ?>
          <?php endwhile;
        endif;
        ?></p>

      <div class="section-content"><?php
        if( have_rows('about_more') ):
          while( have_rows('about_more') ) : the_row(); ?>
            <?php the_sub_field('about_more_text'); ?>
          <?php endwhile;
        endif;
        ?></div>
    </div>

  </div>

</div>

<span class="topbutton"><i class="fas fa-arrow-up"></i></span>

<?php get_footer(); ?>
