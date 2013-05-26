<?php get_header(); ?>
<!-- /header.php -->
<!-- content -->
  <section class="row">

    <section class="span9 main">
      <article class="slider">
          <?php get_carousel() ?>
      </article>
      <section class="row">
        
          <?php if (function_exists('dynamic_sidebar')){ ?>
                  <article class="span6 box">
                      <?php dynamic_sidebar('Bottom left'); ?>
                  </article>
          <?php } ?>

          <?php if (function_exists('dynamic_sidebar')){ ?>
                  <article class="span3 box">
                      <?php dynamic_sidebar('Bottom right'); ?>
                  </article>
          <?php } ?>
      </section>
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