<?php get_header(); ?>

<body <?php body_class('home') ?>>

  <?php include 'navbar.php' ?>

  <main class="main-container">
    <section class="jumbotron jumbotron-fluid full-height-element">
      <div class="container">
        <div class="jumbotron__content jumbotron__image"></div>
        <div class="jumbotron__content jumbotron__body">
          <p class="jumbotron__quote">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <a href="#about" class="jumbotron__action-btn">Read more</a>
        </div>
      </div>
    </section>

    <section id="about" class="about container full-height-element">
      <header class="about__header">
        <h1 class="about__title">Signature</h1>
        <h2 class="about__subtitle">Designer &amp; Fashionista</h2>
      </header>

      <section class="about__body">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptate laudantium eos est ducimus dolores similique, officia maxime incidunt unde?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit libero minus aliquam neque esse quia.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla aperiam quia repellendus molestiae rerum voluptate, ex iste vero voluptatum temporibus.</p>
      </section>
    </section>

    <section class="intro container full-height-element">
      <div class="intro-left">
        <div class="intro-card">
          <div class="intro-card__image"></div>
          <div class="intro-card__body">
            <h2 class="intro-card__title">The Story</h2>
            <p class="intro-card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur libero voluptate sapiente possimus maiores.</p>
          </div>
        </div>
      </div>

      <div class="intro-right">
        <div class="intro-card intro-card--1">
          <div class="intro-card__image"></div>
          <div class="intro-card__body">
            <h2 class="intro-card__title">The Story</h2>
            <p class="intro-card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur libero voluptate sapiente possimus maiores.</p>
          </div>
        </div>

        <div class="intro-card intro-card--2">
          <div class="intro-card__image"></div>
          <div class="intro-card__body">
            <h2 class="intro-card__title">The Story</h2>
            <p class="intro-card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur libero voluptate sapiente possimus maiores.</p>
          </div>
        </div>
      </div>
    </section>

    <?php
    $latest = new WP_Query(array('posts_per_page' => 1));

    if ($latest->have_posts()) :
      while ($latest->have_posts()) :
        $latest->the_post();
    ?>

        <section class="latest-article container full-height-element">
          <header class="latest-article__title">
            <a href="<?php the_permalink(); ?>">
              <h2><?php the_title(); ?></h2>
            </a>
          </header>

          <section class="latest-article__content">
            <div class="latest-article__image" style="background: black url('<?php if (has_post_thumbnail()) the_post_thumbnail_url(); ?>') no-repeat center top/cover"></div>

            <div class="latest-article__body">
              <div class="latest-article__tags">
                <?php the_category(', '); ?>
              </div>

              <div class="latest-article__excerpt">
                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
              </div>

              <div class="latest-article__read-more">
                <a href="<?php the_permalink(); ?>">Read more</a>
              </div>
            </div>
          </section>
        </section>

    <?php
      endwhile;
    endif;

    wp_reset_query();
    ?>

    <section class="action-call">
      <p>Find out more about me</p>
      <a href="<?php echo site_url('/blog') ?>" class="btn btn-outline-light">My stories</a>
    </section>

    <?php // include 'snap-widget.php'; 
    ?>

    <!-- To push the main container for sticky footer's space -->
    <div class="push"></div>
  </main>

  <?php get_footer(); ?>