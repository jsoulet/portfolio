<?php get_header(); ?>
<!-- /header.php -->
<!-- content -->
<section class="container_12 content">

  <section class="grid_12 alpha omega list_main">
    <?php if(have_posts()) : ?>
    <?php $i=0 ?>
      <?php while(have_posts()) : the_post(); ?>
        <article class="grid_3 list_item
                  <?php if($i%4==0)
                          echo 'alpha';
                       if($i%4==3)
                          echo 'omega';
                  ?> ">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">  
            <?php the_post_thumbnail(array(235,235)) ?>
            <h2 class="list_title"><?php the_title(); ?></h2>
          </a>

        </article>
        <?php $i++; ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
  <!-- /content -->

</section>
<!-- footer -->
<?php get_footer(); ?>
<!-- /footer -->
</body>
</html>