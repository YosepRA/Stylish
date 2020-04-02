<?php get_header(); ?>

<body <?php body_class('blogpost'); ?>>

  <?php include 'navbar.php'; ?>

  <main class="main-container">
    <?php
    if (have_posts()) :
      the_post();
    ?>
      <section class="post">
        <header class="post__header">
          <div class="post__tags">
            <?php the_category(', '); ?>
          </div>
          <div class="post__title">
            <h1>
              <?php the_title(); ?>
            </h1>
          </div>
          <div class="post__date">
            <?php the_time('l, F jS Y') ?>
          </div>
        </header>

        <?php if (has_post_thumbnail()) : ?>
          <section class="post__featured-image container">
            <img src="<?php echo the_post_thumbnail_url('post-image'); ?>" alt="Post thumbnail" />
          </section>
        <?php endif; ?>

        <section class="post__body container">
          <?php the_content(); ?>
        </section>
      </section>

    <?php endif; ?>

    <section class="more-articles">
      <?php
      $args = array('posts_per_page' => 5);
      $cards = new WP_Query($args);

      if ($cards->have_posts()) :
        while ($cards->have_posts()) :
          $cards->the_post();
      ?>
          <div class="card" style="background: url('<?php if (has_post_thumbnail()) the_post_thumbnail_url('medium'); ?>') no-repeat center top/cover;">
            <div class="card-body">
              <a href="<?php the_permalink(); ?>">
                <h5 class="card-title"><?php the_title(); ?></h5>
              </a>
              <p class="card-text">
                <?php echo wp_trim_words(get_the_excerpt(), 16); ?>
                <a href="<?php the_permalink(); ?>" class="card-read-more">Read more.</a>
              </p>
            </div>
          </div>
      <?php
        endwhile;
      endif;

      wp_reset_query();
      ?>
    </section>

    <section class="comment-section container">
      <?php
      $comments_number = get_comments_number();
      if ($comments_number != 0) :
      ?>
        <div class="comments">
          <h3>Comments</h3>

          <ol class="all-comments">
            <?php
            $comments = get_comments(array(
              'post_id' => $post->ID,
              'status' => 'approve'
            ));
            wp_list_comments(array(
              'avatar_size' => 48
            ), $comments);
            ?>
          </ol>
        </div>

      <?php
      endif;

      $fields   =  array(
        'author' => '<p class="comment-form-author">' . '<label for="author">' . __('Name') . ($req ? ' <span class="required">*</span>' : '') . '</label> ' .
          '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' placeholder="John Doe" /></p>',
        'email'  => '<p class="comment-form-email"><label for="email">' . __('Email') . ($req ? ' <span class="required">*</span>' : '') . '</label> ' .
          '<input id="email" name="email" ' . ($html5 ? 'type="email"' : 'type="text"') . ' value="' . esc_attr($commenter['comment_author_email']) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' placeholder="your_name@mail.com" /></p>'
      );
      $comment_field = '<p class="comment-form-comment">
      <label for="comment">Comment</label>
      <textarea name="comment" id="comment" cols="30" rows="8" placeholder="Tell me what you think" required></textarea>
      </p>';

      comment_form(array(
        'fields' => $fields,
        'comment_field' => $comment_field,
        'title_reply' => __('Leave a comment', 'text_domain'),
        'label_submit' => __('Add comment', 'text_domain'),
        'class_submit' => 'submit btn btn-outline-dark'
      ));
      ?>
    </section>

    <!-- To push the main container for sticky footer's space -->
    <div class="push"></div>
  </main>

  <?php get_footer(); ?>