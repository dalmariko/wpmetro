<!doctype html>
<html <?php language_attributes(); ?>>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="Content-Type" content="text/html"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>

<body>

<div class="container">

    <div class="header">
        <a id="logo" href="<?php bloginfo('url'); ?>">Metro</a>

        <?php wp_nav_menu([
            'theme_location' => 'top',
            'container' => 'ul',
            'menu_class' => 'nav',
            'depth' => 0,
            'walker' => new My_Menu()
        ]); ?>


        <div id="slides">
            <div class="slides_container">


                <?php
                $Slider = [
                    'numberposts' => -1,
                    'category_name' => 'slider',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'post',
                    'suppress_filters' => true
                ];


                $dates = get_posts($Slider);

                foreach ($dates as $data) :
                    setup_postdata($data);

                    ?>

                    <div class="slide">
                        <a href="#"><img src="<?php echo get_the_post_thumbnail_url($data->ID,[900,289]); ?>" alt=""/></a>
                    </div>

                <?php endforeach;
                wp_reset_postdata(); ?>


            </div>

            <a href="#" class="prev"></a>
            <a href="#" class="next"></a>
        </div>


    </div>

</div>
