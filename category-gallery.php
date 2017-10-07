<?php get_header(); ?>
    
    <section class="title-section">
      <p class="welcome-text"><?php echo __('Welcome To', 'fc'); ?></p>
      <h1><?php echo __('Blog', 'fc'); ?></h1>
      <p class="subtext"><?php echo __('Welcome to our blog page', 'fc'); ?></p>
    </section>

    <div class="row">
      <section class="gallery">
      <?php 
        $gallery_query = new WP_Query([
          'category_name' => 'gallery'
        ]);
      ?>
        <?php if($gallery_query->have_posts()): ?>
          <?php while($gallery_query->have_posts()): $gallery_query->the_post() ?>
            <div class="large-4 small-12">
              <a href="<?php the_permalink() ?>">
                <div class="post-thumbnail">
                  <?php the_post_thumbnail('full', ['class' => 'hvr-grow']); ?>
                </div>
              </a>
            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <h3><?php echo __('Threr are no posts', 'fc'); ?></h3>
        <?php endif; ?>
      </section>
    </div>

    <div class="clearfix"></div>

<?php get_footer(); ?>