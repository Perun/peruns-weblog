<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<h3><?php _e('Feeds'); ?></h3>
<ul class="buttons">
    <li><a href="<?php bloginfo('rss2_url'); ?>" rel="alternate" type="application/rss+xml" title="<?php _e('Feed: '); ?><?php _e('Posts'); ?>"><img src="<?php bloginfo('template_directory'); ?>/grafik/feed-icon-12x12.png" alt="Newsfeed" /> <?php _e('Posts'); ?></a></li>
    <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('Feed: '); ?><?php _e('Comments'); ?>"><img src="<?php bloginfo('template_directory'); ?>/grafik/feed-icon-12x12.png" alt="Newsfeed" /> <?php _e('Comments'); ?></a></li>
 </ul>

<h3><label for="s"><?php _e('Search'); ?></label></h3>
<form id="searchform" method="get" action="<?php bloginfo('url'); ?>/">
    <div>
        <input type="text" name="s" id="s" size="17" /><br />
        <input type="submit" name="submit" value="<?php _e('Search'); ?>" />
    </div>
</form>

<h3><?php _e('Pages'); ?></h3>
<ul>
    <li><a href="<?php echo get_settings('siteurl'); ?>/"><?php _e('Home'); ?></a></li>
    <?php wp_list_pages('sort_column=menu_order&title_li='); ?>
</ul>

<h3><?php _e('Categories'); ?></h3>
<ul>
    <?php if (function_exists('wp_list_categories')) { wp_list_categories('orderby=name&show_count=1&title_li='); } else {wp_list_cats('hide_empty=0&sort_column=name&optioncount=1'); } ?>
</ul>

<h3><?php _e('Archives'); ?></h3>
<ul>
    <?php wp_get_archives('type=monthly&limit=6'); ?>
</ul>

<h3>Blogroll</h3>
<ul>
    <?php wp_list_bookmarks('categorize=0&title_li=0'); ?>
</ul>

<h3><?php _e('Meta'); ?></h3>
<ul>
    <?php wp_register(); ?>
    <li><?php wp_loginout(); ?></li>
    <?php wp_meta(); ?> 
</ul>

<?php if (function_exists('wp_theme_switcher')) { ?>
            <h3>Styleswitcher</h3>
            <?php wp_theme_switcher(); ?>
            <?php } ?>
<?php endif; ?>