<?php get_header();?>

<!-- --------------------------------------------------------
     Content
-------------------------------------------------------- -->

<div class="home-main-content">

  <div>
    <p><?php the_field('header'); ?></p>

    <?php the_field('home_copy_first_paragraph'); ?>

    <p><?php
      $link = get_field('home_copy_second_paragraph');
      if( $link ):
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
          <a class="home-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
      <?php endif; ?></p>
  </div>

</div>

<?php get_footer(); ?>
