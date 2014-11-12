<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Estelle
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title">No results found for: <span class="searchquery"><?php the_search_query(); ?></span></h1>
	</header><!-- .page-header -->

	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
		<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'estelle' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
		<form id="searchform" action="/" method="get">
            <input id="searchbar" name="s" placeholder="Search...">
            <button type="submit">Search</button>
        </form>
	<?php else : ?>
        <form id="searchform" action="/" method="get">
            <input id="searchbar" name="s" placeholder="Search...">
            <button type="submit">Search</button>
        </form>
	<?php endif; ?>

</section><!-- .no-results -->
