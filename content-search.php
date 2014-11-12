<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Estelle
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <?php the_title( sprintf( '<h1><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        <p class="date"><?php the_date(); ?></p>
    </header>
    <?php the_excerpt(); ?>
</article>