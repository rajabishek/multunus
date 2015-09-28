<?php
  /*
   Template Name: Making a Difference
   */
?>

<?php get_header(); ?>

<article>
  <div class="container">
    <?php get_header(); ?>

    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	<div class="blog-post container">
    		<div class="row">
    			<article <?php post_class('col-sm-9 post') ?> id="post-<?php the_ID(); ?>">

    				<h1 class="post-title"><?php the_title(); ?></h1>
    				<div class="post-image">
    					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
    				</div>
    				<div class="row">
    					<div class="meta-data col-sm-2">
                <ul class="social-share hidden-xs">
                  <?php get_template_part('/shared_partials/social-links'); ?>
                </ul>
    					</div>

    					<div class="content col-sm-10">
    						<?php the_content(); ?>

    						<ul class="social-share visible-xs">
    							<li><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a></li>
    							<li><a class="addthis_button_tweet"></a></li>
    							<li><a class="addthis_button_google_plusone" g:plusone:size="medium"></a></li>
    							<li><a class="addthis_button_linkedin_counter"></a></li>
    						</ul>

    						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

    						<?php the_tags( 'Tags: ', ', ', ''); ?>

    					</div>
    				</div>

    				<?php edit_post_link('Edit this entry','','.'); ?>

    			</article>
    		</div>
    	</div>

    	<?php endwhile; endif; ?>

    <?php get_footer(); ?>
</div>
</article>
