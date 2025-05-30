<?php

get_header(); ?>

<div class="wrap_s">
<!--pankuzu-->
    <?php get_template_part('include/breadcrumb'); ?>
</div>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
	
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
