<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="blog-post container">
		<div class="row">
			<?php get_sidebar(); ?>
			<article <?php post_class('col-sm-9 col-sm-pull-3') ?> id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>

				<div class="row">
					<div class="meta-data col-sm-2">

						<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

					</div>

					<div class="content col-sm-10">

						<?php the_content(); ?>

						<div class="post-categories">
							Posted in :
							<?php
							$categories = get_the_category();
							$separator = ', ';
							$output = '';
							if($categories){
								foreach($categories as $category) {
									$output .= '<a class="colored-link" href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
								}
								echo trim($output, $separator);
							}
							?>
						</div>

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

				<? //php comments_template(); ?>

				<?php edit_post_link('Edit this entry','','.'); ?>

			</article>
		</div>
	</div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>