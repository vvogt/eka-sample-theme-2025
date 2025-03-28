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
            <a href="#scroll-target">
                Scrolliv nupp
            </a>
            <?php
                wp_nav_menu('main-nav');
            ?>
            <button class="mobile-menu-toggle">
                <span class="open">
                    MUNA
                </span>
                <span class="close">
                    X
                </span>
            </button>
        </div>
    </div>

    <dialog class="mobile-menu-container">
        <button class="close-mobile-menu">X</button>
        <?php
            wp_nav_menu('main-nav');
        ?>
    </dialog>
</header>