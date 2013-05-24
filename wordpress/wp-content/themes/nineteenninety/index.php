<?php get_header(); ?> <!-- /header.php -->
<!-- content -->

<section class="container_12 content">

  <section class="container_8 grid_8 alpha omega main">
    <article class="slider">
        <?php get_carousel() ?>
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
<?php get_footer(); ?>
</body>
</html>