<?php

/**
 * Template for displaying the header
 *
 * @package eedu
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="top-bar">
        <div class="content-container top-bar-content">
            <div class="logo-container">
                <img src="<?php echo get_template_directory_uri() . '/assets/pinska_logo.svg'; ?>" alt="">
            </div>
            <nav class="menu-items">
                <a href="">Majutus</a>
                <a href="">Elamused</a>
                <a href="">Peoruumid</a>
                <a href="">Toitlustus</a>
                <a href="">Kontaktid</a>
                <div class="language-selector">
                    <a href="">EESTI</a>
                    |
                    <a href="">ENGLISH</a>
                </div>
            </nav>
        </div>
    </div>
</header>