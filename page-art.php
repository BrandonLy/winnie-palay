<?php
/**
* 
*	Template Name: Art Page
*
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="works-wrap">
			<div class="work-section">
				<h2 class="section-title">sketches.</h2>
				<?php $loop = new WP_Query( array( 'post_type' => 'sketches' ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
				<?php endwhile; wp_reset_query(); ?>
			</div>

			<div class="work-section">
				<h2 class="section-title">paintings.</h2>
				<?php $loop = new WP_Query( array( 'post_type' => 'paintings' ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
				<?php endwhile; wp_reset_query(); ?>
			</div>
				
			<div class="work-section">	
				<h2 class="section-title">digital art.</h2>
				<?php $loop = new WP_Query( array( 'post_type' => 'digital-art' ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
				<?php endwhile; wp_reset_query(); ?>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
