<?php get_header(); ?>
<!-- /header.php -->
<!-- content -->
<section class="row">

  <section class="span9 single-container">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <article>
          <h2 class="single_title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
          <div class="single_content">
            <?php if(has_excerpt()){ ?>
              <div class="single_excerpt"><?php the_excerpt() ?></div>
            <?php } ?>
            <?php if( has_post_thumbnail()){?>
              <div class="single_thumbnail">
                <?php the_post_thumbnail('full'); ?>
              </div>
            <?php } ?>
            <?php the_content(); ?>
          </div>
          <?php the_tags('<p id="single_tags"><span class="symbol">J </span>',' • ','<br /></p>'); ?>
        <article>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <!-- /content -->
  <?php get_sidebar(); ?>
  </section>
</section>
<!-- footer -->
<?php get_footer(); ?>
<!-- /footer -->
</body>
</html>