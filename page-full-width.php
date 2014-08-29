<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>
			
			<div id="main" class="clearfix" role="main">
			
				<div class="container">

					<div class="col-sm-12">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							
							<header>
								
								<h1><?php the_title(); ?></h1>
							
							</header> <!-- end article header -->
						
							<section class="post_content clearfix">

								<?php the_content(); ?>
								
							</section> <!-- end article section -->							
						
						</article> <!-- end article -->
					
						<?php //comments_template(); ?>
					
					<?php endwhile; ?>	

					<?php else : ?>
					
						<article id="post-not-found">
							
						    <header>

						    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>

						    </header>

						    <section class="post_content">

						    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>

						    </section>

						</article>
					
					<?php endif; ?>

					</div>
			
				</div><!-- end .container -->

			</div><!-- end #main -->
			
<?php get_footer(); ?>