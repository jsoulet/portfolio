<?php get_header(); ?>
<!-- /header.php -->
<!-- content -->
<section class="row">

  <section class="span9 list-container">
    
      <?php if(have_posts()) : ?>
        <?php 
        $index=0;
        while(have_posts()) : the_post();
          if($index%3==0)
            echo '<div class="row">';
        ?>

          <article class="span3 list_item">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">  
              <?php the_post_thumbnail('square')/*'large',array('class' => 'img-polaroid'))*/; ?>
              <h2 class="list_title"><?php the_title(); ?></h2>
            </a>

          </article>

          <?php if($index%3==2)
                  echo '</div>';
                $index++; ?>
        <?php endwhile; ?>
        <?php if($index%3!=0)
                  echo '</div>'; ?>
      <?php endif; ?>
    </div>
  </section>
  <!-- /content -->
  <?php get_sidebar(); ?>

</section>
<!-- footer -->
<?php get_footer(); ?>
<!-- /footer -->
</body>
</html>