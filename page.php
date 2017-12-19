<?php get_header(); ?>

            <div id="text-inhalt">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 

            <h2 class="statisch" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>

            <div class="unterseite">
                <?php the_content(__('(more...)')); ?>
                <?php edit_post_link(__("Edit"), '&nbsp;&nbsp;', '&nbsp;&nbsp;'); ?>
            </div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
