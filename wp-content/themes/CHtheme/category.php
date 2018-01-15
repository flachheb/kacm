<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 *
 */

get_header(); ?>


	<div id="primary">
		<main id="main" class="site-main" role="main">

			<div class="row container">
				<?php get_template_part( 'template-parts/menu', 'sub' ); ?>



					<div class="col l8 m7 s12 right">
						<div class="row">

							<?php if ( have_posts() ) {
								while ( have_posts() ) {
									the_post();
									?>
				        <div class="card">
				          <div class="card-image">
				            <?php the_post_thumbnail('large'); ?>
				            <span class="card-title"><?php the_title(); ?></span>
				          </div>
				          <div class="card-content">
				            <?php the_content();  ?>
				          </div>
				        </div>
								<?php
							} // end while
						} // end if
						?>
						
							</div>
						</div>

			<div class="col l4 m5 s12 left">
					<?php get_template_part( 'template-parts/sidebar', 'home' ); ?>
			</div>

    </div>

















		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;

		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
