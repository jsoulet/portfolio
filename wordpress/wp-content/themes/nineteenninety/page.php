<?php get_header(); ?>
<!-- /header.php -->
<!-- content -->
<section class="container_12 content">

  <section class="grid_8 alpha omega main">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <article>
          <header>
            <h2 id="single_title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
          </header>
            <?php if(has_excerpt()){ ?>
              <div id="single_excerpt"><?php the_excerpt() ?></div>
          <?php } ?>
          <div id="single_content"><?php the_content(); ?></div>

        <article>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <!-- /content -->
  <?php get_sidebar(); ?>

</section>
<!-- footer -->
<?php get_footer(); ?>
<!-- /footer -->
</body>
</html>