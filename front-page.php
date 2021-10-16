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
  <section id="blog" class="blog">
    <div class="blog__container">
      <div class="blog__slider-container">
        <?php
          $posts = get_posts(array(
            'numberposts'      => -1,
            'orderby'          => 'date',
            'order'            => 'DESC',
            'post_type'        => 'post',
          ));
        ?>
        <div class="blog__slider">
          <?php
            foreach($posts as $post) :
              $postTitle = $post->post_title;
              $postContent = $post->post_content;
              $postThumbnail = get_the_post_thumbnail_url($post->ID);
          ?>
          <div class="blog__slider-item">
            <img src="<?php echo $postThumbnail;?>" alt="<?php echo $postTitle;?>" class="blog__slider-image">
            <div class="blog__slider-content">
              <h2 class="blog__slider-title"><?php echo $postTitle;?></h2>
              <p class="blog__slider-resume">
                <?php echo mb_strimwidth($postContent, 0, 88, '...');?>
              </p>
            </div>
          </div>
          <?php endforeach;?>
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
  <section id="about" class="about-us">
    <div class="about-us__container">
      <img src="<?php echo $pathToImages . 'image-about-us.jpg'; ?>" alt="About JoyJet">
      <div class="about-us__content">
        <h2 class="about-us__title">About US</h2>
        <p class="about-us__text">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
          Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
          mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
          quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
          <br><br>
          In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede
          mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean
          vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac,
          enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
          Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.
        </p>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
