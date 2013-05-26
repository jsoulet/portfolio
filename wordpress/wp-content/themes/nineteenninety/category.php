<?php get_header(); ?>
<!-- /header.php -->
<!-- content -->
<section class="row">

  <section class="span9 list-container">
    
      <?php if(have_posts()) : ?>
        <?php 
        $index=0;
        while(have_posts()) : the_post();
          if($index%6==0)
            echo '<div class="row-fluid">';
        ?>

          <article class="span2 list_item">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">  
                <?php the_post_thumbnail('square')/*'large',array('class' => 'img-polaroid'))*/; ?>
                <div class="list_title">
                  <h2><?php the_title(); ?></h2>
                </div>
            </a>

          </article>

          <?php if($index%6==5)
                  echo '</div>';
                $index++; ?>
        <?php endwhile; ?>
        <?php if($index%6!=0)
                  echo '</div>'; ?>
      <?php endif; ?>
    </div>
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