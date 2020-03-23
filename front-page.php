<?php get_header(); ?>

<body class="home">

  <?php include 'navbar.php' ?>

  <main class="main-container">
    <section class="jumbotron banner mb-5">
      <h1 class="banner__title">Signature</h1>
      <p class="banner__text">
        Enjoy your life more
      </p>
      <a class="btn btn-outline-light banner__action" href="<?php echo site_url('/blog') ?>" role="button">
        Read my stories
      </a>
    </section>

    <section class="about container">
      <div class="row about--part1 justify-content-center align-items-center">
        <div class="col-12 col-md-6 col-lg-5 about__image p-0">
          <img src="<?php echo get_template_directory_uri() . '/img/woman-standing-near-building.jpg' ?>" alt="Woman standing near building" class="img-fluid" />
        </div>
        <div class="col-12 col-md-6 col-lg-5 about__content p-md-4 p-xl-5">
          <header class="about__header mb-3">
            <h2>Define your style</h2>
          </header>

          <section class="about__description">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
              unde quo voluptate eveniet numquam voluptatum veritatis quod
              suscipit veniam? Optio necessitatibus excepturi commodi nemo
              minus laboriosam corporis aut eos totam.
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
              unde quo voluptate eveniet numquam voluptatum veritatis quod
              suscipit veniam? Optio necessitatibus excepturi commodi nemo
              minus laboriosam corporis aut eos totam.
            </p>
          </section>
        </div>
      </div>

      <div class="row about--part2 justify-content-center align-items-center">
        <div class="col-12 col-md-6 col-lg-5 order-md-2 about__image p-0">
          <img src="<?php echo get_template_directory_uri() . '/img/woman-sitting.jpg' ?>" alt="Woman standing near building" class="img-fluid" />
        </div>
        <div class="col-12 col-md-6 col-lg-5 order-md-1 about__content p-md-4 p-xl-5">
          <header class="about__header mb-3">
            <h2>Just relax</h2>
          </header>

          <section class="about__description">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
              unde quo voluptate eveniet numquam voluptatum veritatis quod
              suscipit veniam? Optio necessitatibus excepturi commodi nemo
              minus laboriosam corporis aut eos totam.
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil,
              unde quo voluptate eveniet numquam voluptatum veritatis quod
              suscipit veniam? Optio necessitatibus excepturi commodi nemo
              minus laboriosam corporis aut eos totam.
            </p>
          </section>
        </div>
      </div>
    </section>

    <section class="action-call">
      <p class="mb-2">Want to know more about me?</p>
      <a href="<?php echo site_url('/blog') ?>" class="btn btn-outline-light">Read my stories</a>
    </section>

    <?php include 'snap-widget.php'; ?>

    <!-- To push the main container for sticky footer's space -->
    <div class="push"></div>
  </main>

  <?php get_footer(); ?>