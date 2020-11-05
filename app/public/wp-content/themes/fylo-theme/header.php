<!DOCTYPE html>
<html lang="en">
<head>
  <?php wp_head(); ?>
</head>
<body>
<header>
  <div class="container row">
    <a class="logo" href="<?php echo site_url(); ?>">
      <img src="<?php echo get_theme_file_uri('images/logo.svg'); ?>" alt="Logo of Fylo" />
    </a>
    <nav class="nav">
      <ul class="nav__list">
        <li class="nav__item">
          <a class="nav__link" href="<?php echo site_url('/features'); ?>">Features</a>
        </li>
        <li class="nav__item"><a class="nav__link" href="<?php echo site_url('/team'); ?>">Team</a></li>
        <li class="nav__item">
          <a class="nav__link" href="#">Sign In</a>
        </li>
      </ul>
    </nav>
  </div>
</header>




