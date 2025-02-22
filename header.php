<?php

/**
 * Template for displaying the header
 *
 * @package ekaexampletheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="top-bar">
        <div class="content-container top-bar-content">
            <div class="logo-container">
                <a href="<?php echo get_home_url(); ?>">
                    <?php echo get_inline_svg('pinska_logo'); ?>
                </a>
            </div>
            <nav class="menu-items">
                <a href="">Majutus</a>
                <a href="">Elamused</a>
                <a href="">
                    Peoruumid
                    <span class="chevron-down">
                        <?php echo get_inline_svg('chevron_down'); ?>
                    </span>
                </a>
                <a href="">Toitlustus</a>
                <a href="">Kontaktid</a>
                <div class="language-selector">
                    <a href="">EESTI</a>
                    <span>|</span>
                    <a href="">ENGLISH</a>
                </div>
            </nav>
        </div>
    </div>
</header>