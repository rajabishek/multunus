<?php
/**
 * @package WordPress
 * @subpackage Theme_Compat
 * @deprecated 3.0
 *
 * This file is here for Backwards compatibility with old themes and will be removed in a future version
 *
 */
_deprecated_file( sprintf( __( 'Theme without %1$s' ), basename(__FILE__) ), '3.0', null, sprintf( __('Please include a %1$s template in your theme.'), basename(__FILE__) ) );
?>
<aside class="col-sm-3 col-sm-push-9 sidebar" id="sidebar" role="complementary">
	<ul role="navigation">
		<div class="hidden-xs">
			<?php wp_list_categories(array('title_li' => '<h4>' . __('Categories:') . '</h4>')); ?>
		</div>
	</ul>
	<div class="visible-xs dropdown-container categories-dropdown">
		<div class="dropdown-label">Categories: </div>
		<div class="btn-group dropdown">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				All
			</button>
			<ul class="dropdown-menu" role="menu">
				<?php $categories = get_categories();
				foreach ($categories as $category) {
					$category_id = get_cat_ID( $category->name );
					$category_link = get_category_link( $category_id );
					if ( strcmp(single_cat_title('', false), $category->name) ) {
						echo '<li><a href=' . $category_link . '>' . $category->name . '</a></li>';
					} else {
						echo '<li class="active"><a href=' . $category_link . '>' . $category->name . '</a></li>';
					}
				}
				?>
			</ul>
		</div>
	</div>
</aside>
