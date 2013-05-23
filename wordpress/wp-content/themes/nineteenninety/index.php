<?php get_header(); ?> <!-- /header.php -->
<!-- content -->

<section class="container_12 content">

  <section class="container_8 grid_8 alpha omega main">
    <article class="slider">
      <ul id="carousel" class="carousel">
        <li>
          <img src="images/intg.png" alt="Intelligambling"/>
          <div class="title">
            <h3>Intelligambling</h3>
            <p>Corporate web site for a sport beting consulting company</p>
          </div>
        </li>
        <li>
          <img src="images/alveolus.png" alt="Alveolus"/>
          <div class="title">
            <h3>Alveolus</h3>
            <p>Gather innovative ideas which encourage an alternative economy</p>
          </div>
        </li>
        <li>
          <img src="images/utc.png" alt="UTC"/>
          <div class="title">
            <h3>Template for UTC website</h3>
            <p>Academic project. Design and integration</p>
          </div>
        </li>
      </ul>
      <a id="carousel-prev" class="carousel-nav" href="#">&lt;</a>
      <a id="carousel-next" class="carousel-nav" href="#">&gt;</a>

    </article>
    <section class="bottom">
      <article class="grid_5 alpha left">
        <div>
          <h2>Adapt to every ideas</h2>
          <img src="images/responsive.svg" alt="Screens" id="screens" class="svg grid_1 alpha"/>
          <p>Thanks to my project oriented course and my love to self learning, I gained a strong background and experimented many trendy technologies: Django, Symfony2, AngularJS...</p>
          <a class="goto" href="#">My Resume</a>
        </div>
      </article>
      <article class="grid_3 omega right">
        <div>
          <h2>Contact</h2>
          <p>Are you interested by my profile ? Send me an e-mail and I will do my best to respond you in the next 24 hours.</p>
          <a class="goto" href="#">Contact</a>
        </div>
      </article>
    </section>
  </section>
  <?php get_sidebar(); ?>

</section>








<<!-- section class="container_12 content">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
            <article id="article-<?php the_ID(); ?>">
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_sidebar(); ?>
</section> -->
<?php get_footer(); ?>
</body>
</html>