<?php
include 'inc/variables.php';
?>
<?php get_header(); ?>

<main>
  <section class="hero">
    <div class="hero__container">
      <div class="hero__content">
        <h1 class="hero__title">
          SPACE<span class="highlight">.</span>
        </h1>
        <p class="hero__text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie elit at lacus…
        </p>
        <a href="" class="hero__btn btn btn--small btn--blue">
          click
        </a>
      </div>
      <div class="hero__trending-today">
        <div class="hero__trending-today-column">
          <p class="hero__trending-today-text hero__trending-today-text--title">
            Trending
            <span class="highlight">Today</span>
          </p>
        </div>
        <div class="hero__trending-today-column">
          <p class="hero__trending-today-text">
            Lorem ipsum dolor sit amet, consectetuer adipiscing ligula eget dolor.
          </p>
        </div>
        <div class="hero__trending-today-column">
          <p class="hero__trending-today-text">
            Lorem ipsum dolor sit amet, consectetuer adipiscing ligula eget dolor.
          </p>
        </div>
        <div class="hero__trending-today-column">
          <p class="hero__trending-today-text">
            Lorem ipsum dolor sit amet, consectetuer adipiscing ligula eget dolor.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="blog">
    <div class="blog__container">
      <div class="blog__slider-container">
        <div class="blog__slider">
          <div class="blog__slider-item">
            <img src="<?php echo $pathToImages . '43690.jpg'; ?>" alt="Blog Image" class="blog__slider-image">
            <div class="blog__slider-content">
              <h2 class="blog__slider-title">International Space Station</h2>
              <p class="blog__slider-resume">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus aliquet sapien….
              </p>
            </div>
          </div>
          <div class="blog__slider-item">
            <img src="<?php echo $pathToImages . '43690.jpg'; ?>" alt="Blog Image" class="blog__slider-image">
            <div class="blog__slider-content">
              <h2 class="blog__slider-title">International Space Station</h2>
              <p class="blog__slider-resume">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus aliquet sapien….
              </p>
            </div>
          </div>
          <div class="blog__slider-item">
            <img src="<?php echo $pathToImages . '43690.jpg'; ?>" alt="Blog Image" class="blog__slider-image">
            <div class="blog__slider-content">
              <h2 class="blog__slider-title">International Space Station</h2>
              <p class="blog__slider-resume">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus aliquet sapien….
              </p>
            </div>
          </div>
          <div class="blog__slider-item">
            <img src="<?php echo $pathToImages . '43690.jpg'; ?>" alt="Blog Image" class="blog__slider-image">
            <div class="blog__slider-content">
              <h2 class="blog__slider-title">International Space Station</h2>
              <p class="blog__slider-resume">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus aliquet sapien….
              </p>
            </div>
          </div>
          <div class="blog__slider-item">
            <img src="<?php echo $pathToImages . '43690.jpg'; ?>" alt="Blog Image" class="blog__slider-image">
            <div class="blog__slider-content">
              <h2 class="blog__slider-title">International Space Station</h2>
              <p class="blog__slider-resume">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus aliquet sapien….
              </p>
            </div>
          </div>
          <div class="blog__slider-item">
            <img src="<?php echo $pathToImages . '43690.jpg'; ?>" alt="Blog Image" class="blog__slider-image">
            <div class="blog__slider-content">
              <h2 class="blog__slider-title">International Space Station</h2>
              <p class="blog__slider-resume">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus aliquet sapien….
              </p>
            </div>
          </div>
          <div class="blog__slider-item">
            <img src="<?php echo $pathToImages . '43690.jpg'; ?>" alt="Blog Image" class="blog__slider-image">
            <div class="blog__slider-content">
              <h2 class="blog__slider-title">International Space Station</h2>
              <p class="blog__slider-resume">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus aliquet sapien….
              </p>
            </div>
          </div>
          <div class="blog__slider-item">
            <img src="<?php echo $pathToImages . '43690.jpg'; ?>" alt="Blog Image" class="blog__slider-image">
            <div class="blog__slider-content">
              <h2 class="blog__slider-title">International Space Station</h2>
              <p class="blog__slider-resume">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus aliquet sapien….
              </p>
            </div>
          </div>
          <div class="blog__slider-item">
            <img src="<?php echo $pathToImages . '43690.jpg'; ?>" alt="Blog Image" class="blog__slider-image">
            <div class="blog__slider-content">
              <h2 class="blog__slider-title">International Space Station</h2>
              <p class="blog__slider-resume">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus aliquet sapien….
              </p>
            </div>
          </div>
        </div>
        <button aria-label="Previous" class="glider-prev">
          <img src="<?php echo $pathToImages . 'arrow-left.svg'; ?>" alt="">
        </button>
        <button aria-label="Next" class="glider-next">
          <img src="<?php echo $pathToImages . 'arrow-right.svg'; ?>" alt="">
        </button>
        <div role="tablist" class="dots"></div>
      </div>

    </div>
  </section>
</main>

<?php get_footer(); ?>
