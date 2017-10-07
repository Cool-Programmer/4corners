<?php get_header(); ?>

    <div class="row">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
          <article class="post">
            <div class="post-desc <?php echo $post_class ?>">
              <span><?php the_time('F j, Y g:i'); ?></span>
              <h3><?php the_title(); ?></h3>
              <p><?php the_excerpt(); ?></p>
              <h3><a href="<?php the_permalink(); ?>" class="read-btn read-more-btn hvr-bounce-out"><?php echo __('Read More', 'fc'); ?></a></h3>
            </div>
            
            <?php if(has_post_thumbnail()): ?>
            <div class="post-img">
              <?php the_post_thumbnail(); ?>
            </div>
            <?php endif; ?>
          </article>

      <?php endwhile; ?>
      <?php else: ?>
        <h3><?php echo __('Threr are no posts', 'fc'); ?></h3>
      <?php endif; ?>
    </div>

    <div class="clearfix"></div>

<?php get_footer(); ?>