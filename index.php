<?php get_header(); ?>

<body class="bloglist">

  <?php include 'navbar.php'; ?>

  <main class="main-container">
    <header class="page-title">
      <h1>All Blogs</h1>
    </header>

    <section class="page-content container">
      <section class="feed">
        <?php
        if (have_posts()) :
          while (have_posts()) :
            the_post();
        ?>

            <?php if (get_query_var('paged') == 0 && $wp_query->current_post == 0) : ?>

              <article class="blogpost latest-article full-height-element">
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
              </article>

            <?php else : ?>

              <article class="blogpost">
                <div class="blogpost__image" style="background: black url('<?php if (has_post_thumbnail()) the_post_thumbnail_url(); ?>') no-repeat center top/cover"></div>

                <div class="blogpost__body">
                  <header class="blogpost__meta-data">
                    <div class="blogpost__tags">
                      <?php the_category(', '); ?>
                    </div>
                    <div class="blogpost__title">
                      <a href="<?php the_permalink(); ?>">
                        <h3><?php echo get_the_title(); ?></h3>
                      </a>
                    </div>
                    <div class="blogpost__time">
                      <?php the_time('l, F jS Y') ?>
                    </div>
                  </header>

                  <div class="blogpost__text">
                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                  </div>

                  <div class="blogpost__read-more">
                    <a href="<?php the_permalink(); ?>">Read more</a>
                  </div>
                </div>
              </article>

            <?php endif; ?>

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

    <?php // include 'snap-widget.php'; 
    ?>

    <!-- To push the main container for sticky footer's space -->
    <div class="push"></div>
  </main>

  <?php get_footer(); ?>