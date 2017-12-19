<?php get_header(); ?>

<div id="text-inhalt">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

            <div class="storycontent">
            <?php the_content(__('(more...)')); ?>
            <?php wp_link_pages(); ?>
            </div>

            <p class="center"><?php previous_post('&laquo; %', '', 'yes'); ?>&nbsp;&ndash;&nbsp;<?php next_post('% &raquo;', '', 'yes'); ?></p>

            <div class="feedback2">
            <dl>
                <dt><?php _e('Author'); ?>: </dt>
                <dd><?php the_author(); ?></dd>
                <dt><?php _e('Date'); ?>:</dt>
                <dd><?php the_date(); ?> um <?php the_time(); ?></dd>
                <dt><?php _e('Category:'); ?> </dt>
                <dd><?php the_category(','); ?></dd>
                <dt>Tags: </dt>
                <dd><?php if (function_exists('the_tags')) { the_tags('');} ?> &nbsp;</dd>
                <dt>Trackback: </dt>
                <dd><a href="<?php trackback_url() ?>">Trackback URI</a></dd>
            </dl>
            </div>

	<!--
	<?php trackback_rdf(); ?>
	-->
	
<?php comments_template(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
