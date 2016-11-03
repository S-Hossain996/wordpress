<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <h1><a href="<?php echo site_url(); ?>"><?php echo bloginfo('name'); ?></a></h1>
    </header>
 <?php wp_nav_menu(array(
 	'theme_location' => 'header_menu'
 )); ?>
