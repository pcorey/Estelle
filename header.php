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
            <a href="https://www.facebook.com/msestellemarie">
                <svg class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 448 448">
                    <path d="M0 344v-240q0-29.75 21.125-50.875t50.875-21.125h240q29.75 0 50.875 21.125t21.125 50.875v240q0 29.75-21.125 50.875t-50.875 21.125h-48v-152h50.75l7.5-56h-58.25v-35.75q0-13.5 7-20.75t24-7.25l33-0.25v-51.75q-24-2.25-45-2.25-34 0-54.5 20.125t-20.5 56.375v41.5h-56v56h56v152h-136q-29.75 0-50.875-21.125t-21.125-50.875z"></path>
                </svg>
            </a>
            <a href="http://www.pinterest.com/msestellemarie/">
                <svg class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 448 448">
                    <path d="M0 344v-240q0-29.75 21.125-50.875t50.875-21.125h240q29.75 0 50.875 21.125t21.125 50.875v240q0 29.75-21.125 50.875t-50.875 21.125h-181.25q21.25-30.5 27-52.5 2.25-8.5 13.25-52.25 5.25 9.75 18.375 16.75t28.125 7q45.25 0 73.875-36.875t28.625-93.375q0-21-8.75-40.625t-24.125-34.75-38.125-24.25-49.25-9.125q-26 0-48.625 7.125t-38.25 19.125-26.875 27.375-16.625 32-5.375 33.125q0 25.5 9.875 45t29.125 27.5q3.25 1.25 5.875 0t3.625-4.75q2.5-11 3.75-15.25 1.5-5.75-2.75-10.5-12.5-15.5-12.5-37.5 0-37.5 25.875-64.125t67.625-26.625q37.25 0 58.125 20.25t20.875 52.5q0 42-16.875 71.5t-43.375 29.5q-15 0-24.25-10.875t-5.75-25.875q2-8.5 6.625-23.125t7.375-25.5 2.75-18.625q0-12.25-6.625-20.375t-18.875-8.125q-15.25 0-25.875 14.125t-10.625 34.875q0 18 6 30.25l-24.5 103.5q-6 25-1.75 63.5h-45.75q-29.75 0-50.875-21.125t-21.125-50.875z"></path>
                </svg>
            </a>
            <a href="https://twitter.com/msestellemarie">
                <svg class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 448 448">
                    <path d="M0 344v-240q0-29.75 21.125-50.875t50.875-21.125h240q29.75 0 50.875 21.125t21.125 50.875v240q0 29.75-21.125 50.875t-50.875 21.125h-240q-29.75 0-50.875-21.125t-21.125-50.875zM64 312.5q37 23.5 80.5 23.5 28 0 52.5-8.875t42-23.75 30.125-34.25 18.75-40.5 6.125-42.125q0-4.5-0.25-6.75 15.75-11.25 26.25-27.25-14 6.25-30.25 8.5 17-10 23.25-29.25-16.25 9.5-33.5 12.75-15.25-16.5-38.25-16.5-21.75 0-37.125 15.375t-15.375 37.125q0 7.25 1.25 12-32.25-1.75-60.5-16.25t-48-38.75q-7.25 12.5-7.25 26.5 0 28.5 22.75 43.75-11.75-0.25-25-6.5v0.5q0 18.75 12.5 33.375t30.75 18.125q-7.25 2-12.75 2-3.25 0-9.75-1 5.25 15.75 18.625 26t30.375 10.5q-29 22.5-65.25 22.5-6.5 0-12.5-0.75z"></path>
                </svg>

            </a>
        </section>
    </header>
