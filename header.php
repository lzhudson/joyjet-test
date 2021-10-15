<?php
  include 'inc/variables.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Joy Jet Test</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="header__container">
      <div class="header__logo-container">
        <img src="<?php echo $pathToImages . 'logo-joyjet.svg';?>" alt="JoyJet" class="header__logo">
      </div>
      <button class="header__button">
        <span class="header__button-line"></span>
      </button>
      <nav class="header__nav">
        <ul class="header__menu">
          <li class="header__menu-item">
            <a href="" class="header__menu-link">Home</a>
          </li>
          <li class="header__menu-item">
            <a href="" class="header__menu-link">Popular</a>
          </li>
          <li class="header__menu-item">
            <a href="" class="header__menu-link">Archive</a>
          </li>
          <li class="header__menu-item">
            <a href="" class="header__menu-link">About</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
