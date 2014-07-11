<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <title><?php echo option('site_title'); echo isset($title) ? ' | ' . strip_formatting($title) : ''; ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_head',array('view'=>$this)); ?>
    <!-- Stylesheets -->
    <?php
    queue_css_file('style');
    queue_css_file('skeleton');

    echo head_css();
    ?>
    <!-- JavaScripts -->
    <?php queue_js_file('vendor/modernizr'); ?>
    <?php queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)')); ?>
    <?php queue_js_file('vendor/respond'); ?>
    <?php queue_js_file('globals'); ?>
    <?php echo head_js(); ?>
    <script type="text/javascript">
    window.onload=function(){document.getElementById('search-hasJS').style.display = 'block'; document.getElementById('search-noJS').style.display = 'none';}
    </script>
</head>
 <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
    <a href="#content" class="hidden-link">Skip to content</a>
    <a id="search-noJS" href="#search-form" class="hidden-link">Skip to search</a>
    <a id="search-hasJS" href="#searchform" style="display:none;" onclick="document.forms['search-form'].elements['query'].focus();" class="hidden-link">Skip to search</a>
    <div id="wrap">

        <div id="header">
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <div id="site-title" role="banner"><?php echo link_to_home_page(theme_logo()); ?></div>

            <div id="search-container" role="search">
                    <?php echo search_form(array('show_advanced'=>TRUE)); ?>
            </div>
            </div>

           <div id="primary-nav" role="navigation">
               <?php
                    echo public_nav_main();
               ?>
           </div>
                   <div id="mobile-nav" role="navigation">
               <?php
                    echo public_nav_main();
               ?>
           </div>
                       <?php echo theme_header_image(); ?>
    <div id="content">

<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
