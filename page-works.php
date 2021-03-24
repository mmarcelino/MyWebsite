<?php

/*

  Template name: Trabalhos

*/

get_header(); ?>

<!-- --------------------------------------------------------
   Content
-------------------------------------------------------- -->

<div class="works-content">

  <p><span><?php the_field('work_header'); ?></span></p>

  <div class="works-grid">
    <?php
      if( have_rows('project') ):
        while( have_rows('project') ) : the_row(); ?>

  <!-- --------------------------------------------------------
   Project video
  -------------------------------------------------------- -->

            <div class="video-background">
              <a href="<?php the_sub_field('project_url'); ?>" target="_bank">
                <div class="video"><video loop="" muted="muted" poster="" playsinline="" style="border:<?php the_sub_field('class'); ?>"><source src="<?php the_sub_field('project_video'); ?>" type="video/mp4"></video></div>
              </a>

  <!-- --------------------------------------------------------
   Project title
  -------------------------------------------------------- -->
            <div class="project-content">
              <div class="project-title">
                <?php
                  $link = get_sub_field('project_title');
                if( $link ):
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
              </div>

  <!-- --------------------------------------------------------
   Project description with link
  -------------------------------------------------------- -->
              <div class="project-description">
              <?php
                $link = get_sub_field('project_description');
              if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
              <?php endif; ?>
              </div>
            </div>
          </div>

        <?php endwhile;
      endif;
    ?>
  </div>

</div>

<span class="topbutton"><i class="fas fa-arrow-up"></i></span>

<!-- <h1 style="text-align: center;">(WIP)</h1>

<?php get_footer(); ?>
