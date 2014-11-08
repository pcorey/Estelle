<?php
/**
 * @package Estelle
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <?php the_title( sprintf( '<h1><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        <p class="date"><?php the_date(); ?></p>
    </header>

		<?php
			/* translators: %s: Name of current post */
			the_content();
		?>

		<!--<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'estelle' ),
				'after'  => '</div>',
			) );
		?>-->

	<!-- <footer class="entry-footer"> -->
		<!--<?php estelle_entry_footer(); ?>-->
	<!-- </footer> --><!-- .entry-footer -->
</article><!-- #post-## -->
