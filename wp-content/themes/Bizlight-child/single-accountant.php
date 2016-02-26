<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bizlight
 */

get_header(); ?>
<div class="wrapper page-inner-title">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
</div>
<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php 
		while ( have_posts() ) : the_post(); //start of loop ?>

			<?php get_template_part( 'template-parts/content', 'accountant' ); ?>

			<?php the_post_navigation(); ?>



			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				//Echo commands that make the custom fields show up
				echo types_render_field("email", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2")); 
				echo types_render_field("image", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));
				echo types_render_field("phone", array("argument1"=>"value1","argument2"=>"value2","argument2"=>"value2"));
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
</div><!-- #content -->
<?php get_footer(); ?>
