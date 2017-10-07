    <footer class="main-footer">
      <div class="row">
        
        <?php if(is_active_sidebar('footer-widget-1')): ?>
          <?php dynamic_sidebar('footer-widget-1'); ?>
        <?php endif; ?>

        <?php if(is_active_sidebar('footer-widget-2')): ?>
          <?php dynamic_sidebar('footer-widget-2'); ?>
        <?php endif; ?>

        <?php if(is_active_sidebar('footer-widget-3')): ?>
          <?php dynamic_sidebar('footer-widget-3'); ?>
        <?php endif; ?>

        <?php if(is_active_sidebar('footer-widget-4')): ?>
          <?php dynamic_sidebar('footer-widget-4'); ?>
        <?php endif; ?>

      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>