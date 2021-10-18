<?php
include 'inc/variables.php';
?>
<?php get_header(); ?>
<?php
  $groupSectionHero = get_field('section_group');
  $imageHeroDesktop = $groupSectionHero['image_desktop'];
  $imageHeroDesktopUrl = $imageHeroDesktop['url'];
  $imageHeroMobile = $groupSectionHero['image_mobile'];
  $imageHeroMobileUrl = $imageHeroMobile['url'];
  $titleHero = $groupSectionHero['title'];
  $titleHeroWithoutLastChar = substr($titleHero, 0, -1);
  $titleHeroLastChar = substr($titleHero, -1);
  $textHero = $groupSectionHero['text'];
  $buttonHero = $groupSectionHero['button'];
  $buttonHeroText = $buttonHero['text'];
  $buttonHeroLink = $buttonHero['link'];
  $trendingsToday = $groupSectionHero['trending_today'];
?>

<main>
  <style>
    .hero {
      background: url(<?php echo $imageHeroDesktopUrl;?>) no-repeat center/cover;
      height: 660px;
    }
    @media (max-width: 425px) {
    .hero {
      background: url(<?php echo $imageHeroMobileUrl;?>) no-repeat center/cover;
      height: 420px;
    }

  }
  </style>
  <section class="hero">
    <div class="hero__container">
      <div class="hero__content">
        <h1 class="hero__title">
          <?php echo $titleHeroWithoutLastChar;?><span class="highlight"><?php echo $titleHeroLastChar;?></span>
        </h1>
        <p class="hero__text">
          <?php echo $textHero;?>
        </p>
        <a href="<?php echo $buttonHeroLink;?>" class="hero__btn btn btn--small btn--blue">
          <?php echo $buttonHeroText;?>
        </a>
      </div>
      <div class="hero__trending-today">
        <div class="hero__trending-today-column">
          <p class="hero__trending-today-text hero__trending-today-text--title">
            Trending
            <span class="highlight">Today</span>
          </p>
        </div>
        <?php foreach($trendingsToday as $trending) : ?>
        <?php
          $textTrending = $trending['texto'];
        ?>
        <div class="hero__trending-today-column">
          <p class="hero__trending-today-text">
            <?php echo $textTrending;?>
          </p>
        </div>
        <?php endforeach;?>
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
      <img class="about-us__image" src="<?php echo $imageAboutUrl; ?>" alt="<?php echo $imaegAboutAlt;?>">
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
