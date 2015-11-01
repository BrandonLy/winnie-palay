<?php
/**
* 
*	Template Name: Writing Page
*
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="works-wrap">
			<h2 class="section-title">writing.</h2>
			<div class="work-section writing-section">
				<?php $loop = new WP_Query( array( 'post_type' => 'writing' ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php $paper = get_field('written_piece'); ?>
					<div class="paper-wrap">
						<p class="paper-title"><?php echo the_title(); ?></p>
						<div class="work paper">
							<object data="<?php echo $paper; ?>" type="application/pdf">
								<p>Sorry the pdf you are trying to view is only available on desktop. Feel free to use the download link below.</p>
							</object>
						</div>
						<a href="<?php echo $paper; ?>">
							<p class="paper-button">Click here to view the PDF</p>
						</a>
					</div>
				<?php endwhile; wp_reset_query(); ?>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->