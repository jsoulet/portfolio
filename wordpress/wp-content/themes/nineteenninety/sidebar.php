<section class="grid_4 omega sub">
    <?php if(is_home()){ ?>
      <?php dynamic_sidebar('Over slider controls'); ?>
      <div class="clear"> </div>
      <div class="alpha omega grid_3">
        <?php get_carousel_controls() ?>
      </div>
    <?php } ?>
    <div class="clear"> </div>
    <?php if (function_exists('dynamic_sidebar')){ ?>
      <?php dynamic_sidebar('Sidebar'); ?>
    <?php } ?>
  </section>