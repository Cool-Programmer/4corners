<?php get_header(); ?>

    <div class="row">
      <?php $i = 0; ?>
        <?php if(have_posts()): ?>
        <?php 
          $featured_query = new WP_Query([
            'category_name' => 'dragons',
            'posts_per_page' => 8
          ]);
        ?>
        <?php while($featured_query->have_posts()): $featured_query->the_post() ?>
          <?php 
            $i++; 
            if ($i % 2 == 0) {
              $post_class = "float-right";
            }else{
              $post_class = "";
            }
          ?>
          <article class="post">
            <div class="post-desc <?php echo $post_class ?>">
              <span><?php the_time('F j, Y g:i'); ?></span>
              <h3><?php the_title(); ?></h3>
              <p><?php the_excerpt(); ?></p>
              <h3><a href="<?php the_permalink(); ?>" class="read-btn read-more-btn hvr-bounce-out"><?php echo __('Read More', 'fc'); ?></a></h3>
            </div>
            
            <?php if(has_post_thumbnail()): ?>
            <div class="post-img">
              <?php the_post_thumbnail('home-thumb'); ?>
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