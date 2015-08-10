<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Estelle
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script src="//ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
<script>
  WebFont.load({
    google: {
      families: ['Playfair Display:900', 'Playfair Display+SC:900', 'Raleway:600,400,300']
    }
  });
</script>

<?php wp_head(); ?>
</head>

<body>
    <header>
        <a class="svg-wrapper" href="/">
            <svg viewBox="0 0 93.8 13.3">
                <text x="0.5" y="3" class="tiny">Ms.</text>
                <text x="0" y="13">Estelle Marie</text>
            </svg>
        </a>
        <section class="social">
            <form id="searchform" action="/" method="get">
                <input id="searchbar" name="s" placeholder="Search...">
            </form>
            <a href="#">
                <svg id="search" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 416 448">
                    <path d="M0 208q0-35.75 13.875-68.375t37.5-56.25 56.25-37.5 68.375-13.875 68.375 13.875 56.25 37.5 37.5 56.25 13.875 68.375q0 55-31 99.75l85.75 85.75q9.25 9.25 9.25 22.5 0 13-9.5 22.5t-22.5 9.5q-13.5 0-22.5-9.5l-85.75-85.5q-44.75 31-99.75 31-35.75 0-68.375-13.875t-56.25-37.5-37.5-56.25-13.875-68.375zM64 208q0 46.25 32.875 79.125t79.125 32.875 79.125-32.875 32.875-79.125-32.875-79.125-79.125-32.875-79.125 32.875-32.875 79.125z"></path>
                </svg>
            </a>
            <a href="http://instagram.com/msestellemarie">
                <svg class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 448 448">
                    <path d="M0 366.75v-285.5q0-20.25 14.5-34.75t34.75-14.5h285.5q20.25 0 34.75 14.5t14.5 34.75v285.5q0 20.25-14.5 34.75t-34.75 14.5h-285.5q-20.25 0-34.75-14.5t-14.5-34.75zM42.75 356.5q0 6.5 4.375 10.875t10.875 4.375h267.25q6.25 0 10.75-4.375t4.5-10.875v-162h-33.75q5 15.75 5 32.75 0 31.5-16 58.125t-43.5 42.125-60 15.5q-49.25 0-84.25-33.875t-35-81.875q0-17 5-32.75h-35.25v162zM115.25 223.25q0 31 22.625 52.875t54.375 21.875q32 0 54.625-21.875t22.625-52.875-22.625-52.875-54.625-21.875q-31.75 0-54.375 21.875t-22.625 52.875zM262.5 133.25q0 7.25 5 12.25t12.25 5h43.5q7.25 0 12.25-5t5-12.25v-41.25q0-7-5-12.125t-12.25-5.125h-43.5q-7.25 0-12.25 5.125t-5 12.125v41.25z"></path>
                </svg>
            </a>
        </section>
    </header>
