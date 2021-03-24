<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/assets/images/logo.ico">
    <meta name="google-site-verification" content="p1K4DXPbMyHrwj3Pe4wTLY5A7RJzoisvKiKAOiNJzAw" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <?php wp_head(); ?> <!-- indicates to the wp hooks and actions created on functions.js that they should be loaded here -->
  </head>

  <body <?php body_class(); ?>>

    <?php get_template_part('template-parts/navbar'); ?>
