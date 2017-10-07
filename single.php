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

              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>        
            </article>
            <?php endwhile; ?>
            <?php else: ?>
              <h3><?php echo __('There are no posts', 'fc'); ?></h3>
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