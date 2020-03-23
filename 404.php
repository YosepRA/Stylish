<?php get_header(); ?>

<body class="not-found">

  <?php include 'navbar.php'; ?>

  <main class="main-container">
    <div class="container">
      <h2>Oh dear...</h2>
      <h1>The <span class="four">404</span> is here</h1>
      <img src="https://source.unsplash.com/480x360/?cat" alt="Random image">
      <p>That means you are lost</p>
      <p>Let me guide you back to these pages</p>
      <ul>
        <li>
          <a href="<?php echo site_url(); ?>">Home</a>
        </li>
        <li>
          <a href="<?php echo site_url('/blog'); ?>">Blog</a>
        </li>
      </ul>
    </div>

    <?php include 'snap-widget.php'; ?>

    <div class="push"></div>
  </main>

  <?php get_footer(); ?>