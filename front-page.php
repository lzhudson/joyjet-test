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
          <?php wp_reset_postdata();?>
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
  <?php
    $imageAbout = get_field('image');
    $imageAboutUrl = $imageAbout['url'];
    $imaegAboutAlt = $imageAbout['alt'];
    $titleSectionAbout = get_field('title');
    $contentSectionAbout = get_field('content');
  ?>
  <section id="about" class="about-us">
    <div class="about-us__container">
      <img src="<?php echo $imageAboutUrl; ?>" alt="<?php echo $imaegAboutAlt;?>">
      <div class="about-us__content">
        <h2 class="about-us__title"><?php echo $titleSectionAbout;?></h2>
        <p class="about-us__text">
          <?php echo $contentSectionAbout; ?>
        </p>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
