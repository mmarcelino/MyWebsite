<?php

/*

  Template name: Contactos

*/

get_header(); ?>

<!-- --------------------------------------------------------
   Content
-------------------------------------------------------- -->

<div class="contacts-content">

  <p class="contact-header"><span><?php the_field('contact_header'); ?></span></p>

  <p><?php the_field('contact_intro'); ?></p>

  <div class="email-phone">
    <p><span><a href="mailto:mail@marianamarcelino.com">mail@marianamarcelino.com</a></span></p>
  </div>

</div>

<span class="topbutton"><i class="fas fa-arrow-up"></i></span>

<?php get_footer(); ?>
