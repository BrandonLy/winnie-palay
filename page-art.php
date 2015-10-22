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
			<h2 class="section-title">sketches.</h2>
			<div class="work-section">
				<?php $loop = new WP_Query( array( 'post_type' => 'sketches' ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $sketch = get_field('lightbox_image'); ?>
					<div class="work sketch">
						<a href="<?php echo $sketch['url']; ?>">
							<div class="hover"><p class="work-title"><?php echo the_title(); ?></p></div>
							<img src="<?php echo $sketch['url']; ?>" alt="<?php echo $sketch['caption'] ?>" title="<?php echo $sketch['alt']; ?>" class="work-image" />
						</a>
					</div>
				<?php endwhile; wp_reset_query(); ?>
			</div>

			<h2 class="section-title">paintings.</h2>
			<div class="work-section">
				<?php $loop = new WP_Query( array( 'post_type' => 'paintings' ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $painting = get_field('lightbox_image'); ?>
					<div class="work sketch">
						<a href="<?php echo $painting['url']; ?>">
							<div class="hover"><p class="work-title"><?php echo the_title(); ?></p></div>
							<img src="<?php echo $painting['url']; ?>" alt="<?php echo $painting['caption'] ?>" title="<?php echo $painting['alt']; ?>"class="work-image" />
						</a>
					</div>
				<?php endwhile; wp_reset_query(); ?>
			</div>

			<h2 class="section-title">digital art.</h2>	
			<div class="work-section">	
				<?php $loop = new WP_Query( array( 'post_type' => 'digital-art' ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $digital = get_field('lightbox_image'); ?>
					<div class="work sketch">
						<a href="<?php echo $digital['url']; ?>">
							<div class="hover"><p class="work-title"><?php echo the_title(); ?></p></div>
							<img src="<?php echo $digital['url']; ?>" alt="<?php echo $digital['caption'] ?>" title="<?php echo $digital['alt']; ?>" class="work-image" />
						</a>
					</div>
				<?php endwhile; wp_reset_query(); ?>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
