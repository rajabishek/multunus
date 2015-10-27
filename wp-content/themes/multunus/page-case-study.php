<?php
  /*
   Template Name: Case Study
   */
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="blog-post container">
		<div class="row">

			<article <?php post_class('col-sm-9') ?> id="post-<?php the_ID(); ?>">

				<h1 class="post-title"><?php the_title(); ?></h1>
				<div class="post-image">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				</div>
				<div class="row">
					<div class="meta-data col-sm-2">
            <ul>
              <?php get_template_part('/shared_partials/social-links'); ?>
            </ul>

					</div>

					<div class="content col-sm-10">
						<?php the_content(); ?>

						<ul class="social-share visible-xs">
							<?php get_template_part('/shared_partials/social-links'); ?>
						</ul>
            
					</div>
				</div>

				<?php edit_post_link('Edit this entry','','.'); ?>

			</article>
		</div>
	</div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
