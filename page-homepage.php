<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
			<div id="main" class="row" role="main">

				<div class="container">

					<div class="col-sm-8">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							
								<section class="post_content clearfix">
									<?php the_content(); ?>
									
								</section>
						
						</article> <!-- end article -->
						
						<?php 
							// No comments on homepage
							//comments_template();
						?>
						
						<?php endwhile; ?>	

					</div>

					<?php get_sidebar('sidebar2'); // sidebar 2 ?>

					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end .container -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #main -->

<?php get_footer(); ?>