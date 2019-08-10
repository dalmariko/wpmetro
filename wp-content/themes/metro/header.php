<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package metro
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>" type="text/css"/>


    <script type='text/javascript' src='<?php echo get_template_directory_uri()?>/js/jquery-1.7.1.min.js'></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/cufon-yui.js" ></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/Robust_ICG_400.font.js" ></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/cufon.js" ></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/form.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/custom-form-elements.js"></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/slides.min.jquery.js"></script>
    <script type='text/javascript'>
        jQuery(function(){
            jQuery('#slides').slides({
                play: 5000,
                pause: 5000,
                hoverPause: true
            });
        });

    </script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.infieldlabel.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/functions.js"></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/calendar_stripped.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/calendar-en.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/calendar-setup_stripped.js"></script>

    <?php wp_head(); ?>

</head>
<body>
<div class="container">
    <div class="header">
        <a id="logo" href="#">Metro</a>

            <?php wp_nav_menu([
                    'theme_location'  => 'top',
                    'container' => false,
                    'menu_class' => 'nav',
                    'depth'=>0,
                    'walker'=>new My_Menu()
            ]); ?>

        <div id="slides">
            <div class="slides_container">

                <div class="slide">
                    <a href="#"><img src="<?php echo get_template_directory_uri()?>/images/img-slider.jpg" alt="" /></a>
                </div>

                <?php the_post()?>
                <?php the_content()?>

            </div>
            <a href="#" class="prev"></a>
            <a href="#" class="next"></a>
        </div>

    </div>
