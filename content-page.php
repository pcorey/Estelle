<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Estelle
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <?php the_title( sprintf( '<h1><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
    </header>
    <?php the_content(); ?>
</article>