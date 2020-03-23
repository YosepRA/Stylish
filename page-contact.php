<?php get_header(); ?>

<body class="contact-page">

  <?php include 'navbar.php'; ?>

  <main class="main-container contact">
    <div class="container">
      <div class="row justify-content-center">
        <section class="contact__info col-md-4 col-xl-3">
          <header class="contact__header">
            <h1>Contact</h1>
          </header>

          <section class="contact__body">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
              hic quibusdam cumque, ipsum quae eos quas possimus nostrum eaque
              illum?
            </p>
          </section>

          <section class="contact__social-media">
            <div class="email">
              <i class="fas fa-envelope"></i>
              your_name@mail.com
            </div>
            <div class="facebook">
              <i class="fab fa-facebook"></i>
              facebook.com/yourname
            </div>
            <div class="twitter">
              <i class="fab fa-twitter"></i>
              @your_name
            </div>
            <div class="instagram">
              <i class="fab fa-instagram"></i>
              @your_name
            </div>
          </section>
        </section>
        <section class="contact__form col-md-8 col-xl-7">
          <?php echo do_shortcode('[contact-form-7 id="44" title="Main contact form"]') ?>
        </section>
      </div>
    </div>

    <?php include 'snap-widget.php'; ?>
    <!-- To push the main container for sticky footer's space -->
    <div class="push"></div>
  </main>

  <?php get_footer(); ?>