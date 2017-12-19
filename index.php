<?php get_header(); ?>

            <div id="text-inhalt">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_date('','<div class="datum">','</div>'); ?>

            <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

            <div class="storycontent">
            <?php the_content(__('(more...)')); ?>
            <?php wp_link_pages(); ?>
            <?php if (function_exists('the_tags')) { the_tags();} ?>
            <?php edit_post_link('Bearbeiten', '<span class="bearbeiten">&nbsp;', '&nbsp;</span>'); ?>
            </div>

            <div class="feedback">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/grafik/autor-icon.gif" alt="Autor: " width="14" height="13" /> <?php the_author() ?> &nbsp;&bull;&nbsp; <img src="<?php bloginfo('stylesheet_directory'); ?>/grafik/uhr-icon.gif" alt="Uhrzeit: " width="14" height="13" /> <?php the_time() ?> &nbsp;&bull;&nbsp; <img src="<?php bloginfo('stylesheet_directory'); ?>/grafik/puzzle-icon.gif" alt="Abgelegt unter: " width="14" height="13" /> <?php the_category(',') ?> &nbsp;&bull;&nbsp; <img src="<?php bloginfo('stylesheet_directory'); ?>/grafik/kommentar-icon.gif" alt="Anzahl Kommentare:" width="14" height="13" /> <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
            </div>
	
<?php comments_template(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php
if (function_exists('wp_pagebar')) {
wp_pagebar(array('before'=>'', 'tooltip_text'=>'Seite', 'next'=>'&raquo;', 'prev'=>'&laquo;')); }
else { ?>
<div class="weiter"><?php posts_nav_link('&nbsp;&ndash;&nbsp;', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?></div>
<?php } ?>

<?php get_footer(); ?>