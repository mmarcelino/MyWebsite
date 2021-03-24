<?php

  get_header(); ?>

    <div class="error-banner">
      <div>
        <h1>Ooops...!  :(</h1>
        <p>We're really sorry, but it looks like nothing was found!</p>
        <p>You might wanto to <span><a href="#" class="link-error" onclick="goBack()">go back</a></span> or <span><a href="<?php echo esc_url(home_url('/meu_site/home')); ?>" class="link-error">go to the Home page</a></span>.</p>
      </div>
    </div>

  <?php get_footer(); ?>
