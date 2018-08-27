<?php get_header(); ?>
<div class="row">
  <div class="col-sm-8 blog-main">
    
    <?php if(have_posts()) :  ?>
    <?php while (have_posts()): the_post();?>
    <div class="blog-post">
      <h2 class="blog-post-title"><?php the_title(); ?></h2>
      <p class="blog-post-meta"><?php the_date(); ?> by <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
      
      <?php if(has_post_thumbnail()) : ?>
      <div class="post-thumb">
        <?php the_post_thumbnail(); ?>
      </div>
      <?php endif; ?>
      <p><?php the_content(); ?></p>
      <hr>
      <?php comments_template(); ?>
      
      </div><!-- /.blog-post -->
      
      <?php endwhile; ?>
      <?php else: ?>
      
      <p><?php echo 'No Posts'; ?></p>
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