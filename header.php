<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head profile="http://gmpg.org/xfn/11">
<?php if (is_home()) { ?>
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
<?php } else { ?>
    <title><?php wp_title('&raquo;', true, 'right'); bloginfo('name'); ?></title>
<?php } ?>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

    <link rel="stylesheet" type="text/css" media="print" href="<?php echo bloginfo('template_directory'); ?>/print.css" />
    <link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo('stylesheet_url'); ?>" />

    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>

    <link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/grafik/favicon.ico" />

    <?php wp_head(); ?>
</head>
<body>

    <div class="unsichtbar"><p>Zum <a href="#text-inhalt">Inhalt</a> springen</p></div>

    <!--WordPress-Theme by:<a href="http://www.vlad-design.de">Vladimir Simovic</a> aka <a href="http://www.perun.net">Perun</a>-->

<hr />

    <div id="rand">

        <h1><a href="<?php echo get_settings('siteurl'); ?>/" title="Home/Startseite"><?php bloginfo('name'); ?><br /><small><?php bloginfo('description'); ?></small></a></h1>

        <div id="inhalt">

            <div id="navi">

                <?php get_sidebar(); ?>

            </div>
<hr />
