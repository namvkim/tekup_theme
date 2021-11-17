<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package theme-tekup
 */

get_header('secondary');
?>

	<main>

		<?php
		get_template_part( 'template-parts/detail_project/detail', 'page' );

		// while ( have_posts() ) :
		// 	the_post();

		// 	get_template_part( 'template-parts/content', get_post_type() );

		// 	the_post_navigation(
		// 		array(
		// 			'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'theme-tekup' ) . '</span> <span class="nav-title">%title</span>',
		// 			'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'theme-tekup' ) . '</span> <span class="nav-title">%title</span>',
		// 		)
		// 	);

			
		// 	if ( comments_open() || get_comments_number() ) :
		// 		comments_template();
		// 	endif;

		// endwhile; 
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
