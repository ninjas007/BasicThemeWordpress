<?php get_header(); ?>

      <div class="row">

        <div class="col-sm-8 blog-main">
        
        <h2><?php the_title(); ?></h2>
        <?php if(have_posts()) :  ?>
        <?php while (have_posts()): the_post();?>

          <?php get_template_part('the_content', get_post_format()); ?>
        
        <?php endwhile; ?>
        <?php else: ?>
          
          <p><?php echo 'No Page Found'; ?></p>

        <?php endif; ?>

        </div><!-- /.blog-main -->

    <?php get_footer(); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  </body>
</html>
