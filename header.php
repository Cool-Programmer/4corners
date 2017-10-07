<!doctype html>
<html class="no-js" <?php language_attributes(); ?> dir="ltr">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      <?php bloginfo('name'); ?> |
      <?php if(is_front_page()): ?>
        <?php bloginfo('description'); ?>
      <?php else: ?>
        <?php wp_title(); ?>
      <?php endif; ?>
    </title>
    <?php wp_head(); ?>
  </head>
  <body>
    
    <div class="top-bar">
      <div class="row">
        <div class="large-3 columns social">
          <a href="//<?php echo get_theme_mod('first_button_url'); ?>"><i class="<?php echo get_theme_mod('first_button_icon'); ?>" target="_blank"></i></a>
          <a href="//<?php echo get_theme_mod('second_button_url'); ?>"><i class="<?php echo get_theme_mod('second_button_icon'); ?>" target="_blank"></i></a>
          <a href="//<?php echo get_theme_mod('third_button_url'); ?>"><i class="<?php echo get_theme_mod('third_button_icon'); ?>" target="_blank"></i></a>
          <a href="//<?php echo get_theme_mod('fourth_button_url'); ?>"><i class="<?php echo get_theme_mod('fourth_button_icon'); ?>" target="_blank"></i></a>
        </div>
        <div class="large-3 columns">
          <span class="<?php echo get_theme_mod('phone_icon') ?>"> <?php echo get_theme_mod('phone'); ?></span>
        </div>
        <div class="large-3 columns">
          <span class="<?php echo get_theme_mod('email_icon'); ?>"> <?php echo get_theme_mod('email'); ?></span>
        </div>
        <div class="large-3 columns">
          <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="text" name="s" placeholder="Search"><button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
    </div>
    
    <header>
      <div class="row">
        <div class="large-4 columns">
          <a href="<?php home_url('/'); ?>"><h3><?php bloginfo('name'); ?></h3></a>
        </div>
        <div class="large-8 columns">
          <nav class="" data-topbar role="navigation">
            <?php 
              wp_nav_menu([
                'primary' => 'Primary Navigation',
                'menu_class' => 'menu',
                'container' => false
              ]);
            ?>
          </nav>
        </div>
      </div>
    </header>