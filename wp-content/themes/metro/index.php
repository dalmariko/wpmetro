<?php
get_header();
?>


    <div class="wrapper" >
        <div class="wrapper-in">
            <div class="content">
                <?php
                $Properties=[
                    'numberposts' => 5,
                    'category_name' => 'news',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'post',
                    'suppress_filters' => true
                ];
                //            $Properties=[
                //                'numberposts' => 1,
                //                'category_name' => 'contact',
                //                'orderby' => 'date',
                //                'order' => 'DESC',
                //                'include' => array(),
                //                'exclude' => array(),
                //                'meta_key' => '',
                //                'meta_value' => '',
                //                'post_type' => 'post',
                //                'suppress_filters' => true,
                //            ];

                /*
                 * <h1><?php echo $data->post_title?></h1>
                 *  <?php echo $data->post_content ?>
                */

                $dates = get_posts($Properties);

                foreach ($dates as $data) :
                    setup_postdata($data);
                    ?>

                <div class="block-new">
                    <a href="<?php echo get_post_permalink($data->ID);?>"><img src="<?php echo get_the_post_thumbnail_url($data->ID,[52,52]); ?>" alt="<?php echo $data->post_title?>"></a>
                    <div class="block-new-info">
                        <h3><a href="<?php echo get_post_permalink($data->ID);?>"><?php echo $data->post_title; ?></a></h3>
                        <?php echo substr(strip_tags($data->post_content),0,130).'...'; ?>
                    </div>
                </div>

                <?php endforeach;
                wp_reset_postdata(); ?>

            </div>
            <?php get_sidebar();?>
        </div>
    </div>


<?php
get_footer();
?>