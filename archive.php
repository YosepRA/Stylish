<?php get_header(); ?>

<body class="bloglist">

  <?php include 'navbar.php'; ?>

  <main class="main-container">
    <header class="page-title">
      <h1><?php the_archive_title(); ?></h1>
    </header>

    <section class="page-content container">
      <section class="feed">
        <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
        ?>

            <div class="card blogpost">
              <div class="row no-gutters justify-content-center">
                <div class="col-md-6 col-lg-5 blogpost__image" style="background: url('<?php if (has_post_thumbnail()) the_post_thumbnail_url(); ?>') no-repeat center top/cover;"></div>
                <div class="col-md-6 col-lg-5 blogpost__body">
                  <div class="card-body">
                    <header class="blogpost__title">
                      <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                      </a>
                    </header>

                    <section class="blogpost__meta-data">
                      <div class="date">
                        <i class="fas fa-calendar-alt"></i>
                        <?php the_time('m/d/Y') ?>
                      </div>
                      <div class="tags">
                        <i class="fas fa-tag"></i>
                        <?php the_category(', '); ?>
                      </div>
                    </section>

                    <section class="blogpost__summary">
                      <?php echo wp_trim_words(get_the_excerpt(), 70); ?>
                    </section>

                    <footer class="blogpost__read-more">
                      <a href="<?php the_permalink(); ?>" class="btn btn-outline-dark">
                        Read more
                      </a>
                    </footer>
                  </div>
                </div>
              </div>
            </div>

        <?php
          endwhile;
        endif;
        ?>
      </section>

      <section class="pagination">
        <?php echo paginate_links(
          array(
            'prev_text' => 'Prev',
            'next_text' => 'Next'

          )
        ); ?>
      </section>
    </section>

    <section class="instagram-rollfeed overflow-hidden">
      <iframe src="https://snapwidget.com/embed/802968" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:1680px; height:240px;"></iframe>
    </section>

    <!-- To push the main container for sticky footer's space -->
    <div class="push"></div>
  </main>

  <?php get_footer(); ?>