<?php get_header(); ?>

      <div class="row">

        <div class="col-sm-8 blog-main">
        
        <div class="row">
          
        <?php if(have_posts()) :  ?>
        <?php while (have_posts()): the_post();?>
          <?php get_template_part('content', get_post_format()); ?>
        <?php endwhile; ?>
        <?php else: ?>
          
          <p><?php echo 'No Posts'; ?></p>

        <?php endif; ?>
        </div>

        </div><!-- /.blog-main -->

    <?php get_footer(); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  </body>
</html>
