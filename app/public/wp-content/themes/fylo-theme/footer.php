<footer>
      <div class="container row-lg">
        <div class="footer__contact col">
          <a href="#">
            <img
              class="footer__logo"
              src="<?php echo get_theme_file_uri('images/logofooter.svg'); ?>"
              alt="Logo of Fylo"
            />
          </a>
          <p>
            <img src="<?php echo get_theme_file_uri('/images/icon-phone.svg'); ?>" alt="phone icon" />Phone:
            +1-543-123-4567
          </p>
          <p>
            <img
              src="<?php echo get_theme_file_uri('/images/icon-email.svg'); ?>"
              alt="email icon"
            />example@fylo.com
          </p>
        </div>

        <div class="footer__list col">
          <li class="footer__item">
            <a class="footer__link" href="#">About Us</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="#">Jobs</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="#">Press</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="#">Blog</a>
          </li>
        </div>

        <div class="footer__list col">
          <li class="footer__item">
            <a class="footer__link" href="#">Contact Us</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="#">Terms</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="#">Privacy</a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="#">Testimonials</a>
          </li>
        </div>

        <div class="social__icons col">
          <i class="fab fa-facebook-f fa-lg"><a href="#"></a></i>
          <i class="fab fa-twitter fa-lg"><a href="#"></a></i>
          <i class="fab fa-instagram fa-lg"><a href="#"></a></i>
        </div>
      </div>

      <div class="dev">
        <p class="dev-title">
          Made with love by
          <a class="dev--info" href="https://github.com/mahin-abdullah"
            >mahin</a
          >
        </p>
      </div>
    </footer>
    <!-- Script Source Files -->
    <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
    <!-- End of Script Source Files -->

    <?php wp_footer(); ?>
  </body>
</html>