<div class="container">
<div class="blog-post">
  <h2 class="blog-post-title">
    <?php if (is_single()) : ?>
  <a href="<?php the_permalink(); ?> "><?php the_title(); ?></a>
  <?php else : ?>
  <a href="<?php the_permalink(); ?> "><?php the_title(); ?></a>
  <?php endif; ?>
  </h2>
  

  <p class="blog-post-meta"><?php the_date(); ?>
    by <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
  </p>
  
  <?php if(has_post_thumbnail()) : ?>
    
    <div class="post-thumb">  
      <?php the_post_thumbnail(); ?>

    </div>
  <?php endif; ?>


  <?php 

      if (is_single()) :  

          the_content();
      else:

          the_excerpt();?> <a href="<?php the_permalink(); ?>">View Details</a>
  <?php endif; 
  ?>

  <?php 
      if (is_single()) :
        
        comments_template();
      endif;

  ?>
  </div><!-- /.blog-post -->
  </div>