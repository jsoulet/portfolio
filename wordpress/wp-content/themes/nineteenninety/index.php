<?php get_header(); ?>
<!-- /header.php -->
<!-- content -->
<section class="container_12 content">

  <section class="container_8 grid_8 alpha omega main">
    <article class="slider">
        <?php get_carousel() ?>
    </article>
    <section>
      
        <?php if (function_exists('dynamic_sidebar')){ ?>
                <article class="grid_5 alpha">
                    <?php dynamic_sidebar('Bottom left'); ?>
                </article>
        <?php } ?>

        <?php if (function_exists('dynamic_sidebar')){ ?>
                <article class="grid_3 omega">
                    <?php dynamic_sidebar('Bottom right'); ?>
                </article>
        <?php } ?>
    </section>
  </section>
  <!-- /content -->
  <?php get_sidebar(); ?>

</section>
<!-- footer -->
<?php get_footer(); ?>
<!-- /footer -->
</body>
</html>