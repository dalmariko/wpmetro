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
                <?php echo do_shortcode('[smartslider3 slider=2]'); ?>
        </div>

    </div>