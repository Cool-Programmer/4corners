<?php get_header(); ?>
    <?php if(have_posts()): ?>
          <?php while(have_posts()): the_post() ?>
            <section class="title-section">
              <p class="welcome-text"><?php the_title(); ?></p>
              <h1><?php the_excerpt(); ?></h1>
            </section>

            <div class="row">
          <div class="large-8 columns">
            <article class="single-blog-post">
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>        
            </article>
            <?php endwhile; ?>
            <?php else: ?>
              <h3><?php echo __('Threr are no posts', 'fc'); ?></h3>
            <?php endif; ?>
          </div>
          
          <?php if(is_active_sidebar('sidebar')): ?>
          <div class="large-4 columns">
            <div class="well">
              <?php dynamic_sidebar('sidebar'); ?>
            </div>
          </div>
          <?php endif; ?>
        </div>       

<?php get_footer(); ?>