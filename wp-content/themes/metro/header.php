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
<!doctype html>
<html <?php language_attributes(); ?>>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="text/html"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>

<div class="container">

    <div class="header">
        <a id="logo" href="<?php bloginfo( 'url' ); ?>">Metro</a>

        <?php wp_nav_menu([
            'theme_location'  => 'top',
            'container' => false,
            'menu_class' => 'nav',
            'depth'=>0,
            'items_wrap' => '<ul class="nav"><li class="item-level"><a>%3$s</a></li></ul>',

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