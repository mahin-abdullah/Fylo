<?php get_header(); ?>

<!-- Hero Section -->
<div class="hero">
      <div class="container row-lg">
        <div class="hero__img col">
          <img src="<?php echo get_theme_file_uri('images/illustration-1.svg'); ?>" alt="Hero Image" />
        </div>
        <div class="hero__main col">
          <h1 class="hero__title">
            All your files in one secure location, accessible anywhere.
          </h1>
          <p class="hero__content">
            Fylo stores your most important files in one secure location. Access
            them wherever you need, share and collaborate with friends, family,
            and co-workers.
          </p>
          <div class="cta">
            <input
              class="cta--email"
              type="email"
              placeholder="Enter your email..."
            />
            <input class="cta--btn" type="button" value="Get Started" />
          </div>
        </div>
      </div>
    </div>

    <!-- Main Section -->
    <img class="curve--img" src="<?php echo get_theme_file_uri('images/bg-curve-mobile.svg'); ?>" alt="curve" />
    <main>
      <div class="container row-lg">
        <div class="main__img col">
          <img
            src="<?php echo get_theme_file_uri('images/illustration-2.svg'); ?>"
            alt="Image of Main Section"
          />
        </div>
        <div class="main__content col">
          <h6>Stay productive, wherever you are</h6>
          <p>
            Never let location be an issue when accessing your files. Fylo has
            you covered for all of your file storage needs
          </p>
          <p>
            Securely share files and folders with friends, family and colleagues
            for live collaboration. No email attachments required!
          </p>
          <div class="main__content--cta">
            <a class="main--cta" href="#"
              >See how Fylo works <i class="fas fa-arrow-right"></i
            ></a>
          </div>
          <div class="secondary__content">
            <div class="card">
              <div class="card__content">
                <p>
                  <img
                    class="quote"
                    src="dist/images/icon-quotes.svg"
                    alt="Quote of Card Section"
                  /><br />
                  Fylo has improved our team productivity by an order of
                  magnitude. Since making the switch our team has become a
                  well-oiled collaboration machine.
                </p>
              </div>
              <div class="card__avatar">
                <img
                  src="<?php echo get_theme_file_uri('images/avatar-testimonial.jpg'); ?>"
                  alt="Avatar"
                />
                <p class="avatar__title">
                  <span>Kyle Burton</span><br />
                  Founder & CEO, Huddle
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Form Section-->
    <div class="form__section">
      <div class="container row-lg">
        <div class="form__content col">
          <h6>Get early access today</h6>
          <p>
            It only takes a minute to sign up and our free starter tier is
            extremely generous. If you have any questions, our support team
            would be happy to help you.
          </p>
        </div>

        <div class="cta--form col">
          <input
            class="form--email"
            type="email"
            placeholder="email@example.com"
          />
          <input class="form--btn" type="button" value="Get Started For Free" />
        </div>
      </div>
    </div>  
  
  
<?php get_footer(); ?>