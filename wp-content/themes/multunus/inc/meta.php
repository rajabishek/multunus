<div class="authors">By <?php coauthors_posts_links(); ?> </div>
<ul class="meta">
    <li>
        <?php
        if(function_exists(estimated_reading_time)) {
            estimated_reading_time();
        }
        ?>
    </li>
    <li><?php the_time('M j, Y') ?></li>
    <?php //comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?>
</ul>
<ul class="social-share hidden-xs">
    <li><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a></li>
    <li><a class="addthis_button_tweet"></a></li>
    <li><a class="addthis_button_google_plusone" g:plusone:size="medium"></a></li>
    <li><a class="addthis_button_linkedin_counter"></a></li>
</ul>