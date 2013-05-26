<section class="span3 omega sidebar">
    <?php if(is_home()){ ?>
      <article class="large">
        <?php dynamic_sidebar('Over slider controls'); ?>
        <div class="clearfix"></div>
        <div>
          <?php get_carousel_controls() ?>
        </div>
      <div>
    <?php } ?>
    <?php if (function_exists('dynamic_sidebar')){ ?>
      <?php dynamic_sidebar('Sidebar'); ?>
    <?php } ?>
  </section>