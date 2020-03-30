<header class="page-header">
  <div class="navbar-info">
    <div class="container d-flex justify-content-end align-items-center">
      <i class="far fa-envelope"></i>
      <span class="contact-me">Contact me: </span>
      your_name@mail.com
    </div>
  </div>
  <nav class="navbar fixed-top navbar-expand-md">
    <div class="container justify-content-between">
      <a class="navbar-brand" href="<?php echo site_url(); ?>">STYLISH</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
        <div class="navbar-toggler-bar"></div>
        <div class="navbar-toggler-bar"></div>
        <div class="navbar-toggler-bar"></div>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="main-navigation">
        <ul class="navbar-nav">
          <li class="nav-item <?php if (is_front_page()) echo 'active'; ?>">
            <a class="nav-link" href="<?php echo site_url(); ?>">Home <?php if (is_front_page()) echo "<span class=\"sr-only\">(current)</span>"; ?></a>
          </li>
          <li class="nav-item <?php if (get_post_type() == 'post') echo 'active'; ?>">
            <a class="nav-link" href="<?php echo site_url('/blog'); ?>">Blog <?php if (get_post_type() == 'post') echo "<span class=\"sr-only\">(current)</span>"; ?></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              $categories = get_categories(array(
                'orderby' => 'name'
              ));

              foreach ($categories as $category) {
                $category_link = sprintf(
                  '<a href="%1$s" class="dropdown-item">%2$s</a>',
                  esc_url(get_category_link($category->term_id)),
                  esc_html($category->name)
                );

                echo $category_link;
              }
              ?>
            </div>
          </li>
          <li class="nav-item <?php if (is_page('contact')) echo 'active'; ?>">
            <a class="nav-link" href="<?php echo site_url('/contact'); ?>">Contact <?php if (is_page('contact')) echo "<span class=\"sr-only\">(current)</span>"; ?></a>
          </li>
          <li class="nav-item social-media d-flex justify-content-center">
            <a href="#" class="nav-link">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="nav-link">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="nav-link">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>