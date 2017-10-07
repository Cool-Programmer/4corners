<?php get_header(); ?>
    
    <section class="title-section">
      <p class="welcome-text"><?php echo __('Welcome To', 'fc'); ?></p>
      <h1><?php echo __('Blog', 'fc'); ?></h1>
      <p class="subtext"><?php echo __('Search results', 'fc'); ?></p>
    </section>

    <div class="row">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
          <article class="post">
            <div class="post-desc">
              <span><?php the_time('F j, Y g:i'); ?></span>
              <h3><?php the_title(); ?></h3>
              <p><?php the_excerpt(); ?></p>
              <h3><a href="<?php the_permalink(); ?>" class="read-btn read-more-btn hvr-bounce-out"><?php echo __('Read More', 'fc'); ?></a></h3>
            </div>
            
            
          </article>

          <article class="blog-post">
            <div class="row">
              <?php if(has_post_thumbnail()): ?>
                <div class="post-thumbnail">
                  <?php the_post_thumbnail(); ?>
                </div>
              <?php endif; ?>

              <div class="meta">
                <ul>
                  <li><i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author(); ?></a></li>
                  <li><i class="fa fa-calendar"></i> <?php the_time('F j, Y g:i'); ?></li>
                  <li><i class="fa fa-folder"></i> 
                    <?php 
                        $categories = get_the_category();
                        $separator = ", ";
                        $output = null;
                        if($categories){
                          foreach ($categories as $category) {
                            $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>' . $separator;
                          }
                        }
                      ?>
                      <?php echo trim($output, $separator); ?>
                  </li>
                </ul>
              </div>

              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class="excerpt"><?php the_excerpt() ?></div>
            </div>
          </article>

      <?php endwhile; ?>
      <?php else: ?>
        <h3><?php echo __('Threr are no posts', 'fc'); ?></h3>
      <?php endif; ?>
    </div>

    <div class="clearfix"></div>

<?php get_footer(); ?>