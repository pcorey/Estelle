<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Estelle
 */
?>

        <footer>
            <?php
            foreach (get_pages() as $page) {
                echo '<a href="'.get_page_link($page->ID).'">'.$page->post_title.'</a>';
            }
            ?>
          </footer>
	</div><!-- #content -->

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

</body>
</html>
