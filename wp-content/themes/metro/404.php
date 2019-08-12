<!doctype html>
<html <?php language_attributes(); ?>>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="Content-Type" content="text/html"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body class="ER404">
<div class="header">
    <a id="logo" href="<?php bloginfo( 'url' ); ?>">Metro</a>

    <?php wp_nav_menu([
        'theme_location'  => 'top',
        'container' => 'ul',
        'menu_class' => 'nav',
        'depth'=>0,
        'walker'=>new My_Menu()
    ]); ?>
</div>
</body>
</html>

