<aside class="grid_4 omega sidebar">
    <?php if(is_home()){ ?>
      <?php dynamic_sidebar('Over slider controls'); ?>
      <div class="clear"> </div>
        <?php get_carousel_controls() ?>
    <?php } ?>
    <div class="clear"> </div>
    <?php if (function_exists('dynamic_sidebar')){ ?>
      <?php dynamic_sidebar('Sidebar'); ?>
    <?php } ?>
</aside>