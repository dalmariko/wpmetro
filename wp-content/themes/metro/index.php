<?php
get_header();
?>


<!--HOME-->
<a name="home/"></a>
    <div class="wrapper" >
        <div class="wrapper-in">
            <div class="content">
                <?php

                $posts = get_posts(array(
                    'numberposts' => 5,
                    'category_name' => 'home',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'post',
                    'suppress_filters' => true,
                ));

                foreach ($posts as $post) :
                    setup_postdata($post);
                    ?>

                <div class="block-new">
                    <a href="#"><img src="<?php echo get_the_post_thumbnail_url($post->ID,[52,52]); ?>" alt="<?php echo $post->post_title?>"></a>
                    <div class="block-new-info">
                        <h3><a href="#"> <?php echo $post->post_title; ?></a></h3>
                        <?php echo substr(strip_tags($post->post_content),0,130).'...'; ?>
                    </div>
                </div>

                <?php endforeach;
                wp_reset_postdata(); ?>

            </div>
            <div class="sidebar">
                <div class="block-sid">
                    <div class="box-icons">
                        <a href="#"><img src="images/icon-facebook.png" alt=""></a>
                        <a href="#"><img src="images/icon-twitter.png" alt=""></a>
                        <a href="#"><img src="images/icon-urbanspoon.png" alt=""></a>
                    </div>
                    <div class="title-follow_us">Follow us</div>
                </div>
                <div class="block-sid">
                    <div class="title-make_a_reservation">Make a reservation</div>
                    <div class="title-make_a_reservation_2"><cufon class="cufon cufon-canvas" alt="Make " style="width: 74px; height: 31px;"><canvas width="87" height="33" style="width: 87px; height: 33px; top: -2px; left: -1px;"></canvas><cufontext>Make </cufontext></cufon><cufon class="cufon cufon-canvas" alt="a " style="width: 25px; height: 31px;"><canvas width="39" height="33" style="width: 39px; height: 33px; top: -2px; left: -1px;"></canvas><cufontext>a </cufontext></cufon><cufon class="cufon cufon-canvas" alt="reservation" style="width: 161px; height: 31px;"><canvas width="168" height="33" style="width: 168px; height: 33px; top: -2px; left: -1px;"></canvas><cufontext>reservation</cufontext></cufon></div>
                    <form class="form-sid" action="" method="post">
                        <div class="box-line">
                            <p class="label"><label for="name">name</label><input id="name" type="text" value=""></p>
                            <p class="label"><label style="left: 28px; opacity: 1;" for="date">date</label><input id="date" type="text" value=""></p>

                            <script type="text/javascript">
                                jQuery(document).ready(function(){
                                    Calendar.setup
                                    ({
                                        ifFormat    : "%d-%m-%Y",
                                        inputField  : "date", // ID of the input field
                                        button      : "date"      // ID of the button,
                                    });
                                })
                            </script>

                        </div>
                        <div class="box-line">
                            <p class="label"><label for="phone">phone</label><input id="phone" type="text" value=""></p>
                            <p class="label"><label style="left: 28px;" for="time">time</label><input id="time" type="text" value=""></p>
                        </div>
                        <div class="box-line">
                            <p class="label"><label for="email">email</label><input id="email" type="text" value=""></p>
                        </div>
                        <div class="box-line">
                            <p class="label"><label for="mes">Number of people and special<br> requirements...</label><textarea id="mes" cols="10" rows="10"></textarea></p>
                        </div>
                        <label class="sub"><input type="submit" value=""></label>
                    </form>
                </div>
                <div class="block-sid">
                    <div class="box-icons">
                        <a href="#"><img src="images/icon-pdf.png" alt=""></a>
                    </div>
                    <div class="title-functions_package">Functions package</div>
                </div>
            </div>
        </div>
    </div>

<!--END HOME-->

<!--MENU-->

<!--END MENU-->


<!--FUNCTIONS-->


<!--END FUNCTIONS-->

<!--CONTACT-->


<a name="contact/"></a>
    <div   class="wrapper">
        <div class="wrapper-in">
            <div class="content">
                <h1>Contact</h1>
                <p><b>Email:</b> publican@metrohotel.com.au<br> <b>Phone:</b> (03) 9328 4222<br> <b>Fax:</b> (03) 9328 4288</p>
                <h3>OPENING TIMES</h3>
                <p><b>Kitchen:</b><br> Mon – Thu 12pm-2pm, 6-9pm;<br> Fri 12pm-3pm, 6pm-9pm<br> Sat 6pm-9pm<br> <b>Bar:</b> Daily 11.30am-late<br> <b>Closed:</b> Sundays</p>
                <h3>ADDRESS</h3>
                <p>36-42 Courtney St,<br> (Cnr Blackwood St)<br> North Melbourne 3051<br> Victoria</p>
                <div class="box-img-map">
                    <a href="#"><img src="images/img-map.jpg" alt=""></a>
                </div>
            </div>
            <div class="sidebar">
                <div class="block-sid">
                    <div class="box-icons">
                        <a href="#"><img src="images/icon-facebook.png" alt=""></a>
                        <a href="#"><img src="images/icon-twitter.png" alt=""></a>
                        <a href="#"><img src="images/icon-urbanspoon.png" alt=""></a>
                    </div>
                    <div class="title-follow_us">Follow us</div>
                </div>
                <div class="block-sid">
                    <div class="box-icons">
                        <a href="#"><img src="images/icon-pdf.png" alt=""></a>
                    </div>
                    <div class="title-functions_package">Functions package</div>
                </div>
                <div class="block-sid">
                    <div class="title-make_a_reservation">Make a reservation</div>
                    <form class="form-sid" action="" method="post">
                        <div class="box-line">
                            <p class="label"><label for="name">name</label><input id="name" type="text" value=""></p>
                            <p class="label"><label style="left: 28px;" for="date">date</label><input id="date" type="text" value=""></p>

                            <script type="text/javascript">
                                jQuery(document).ready(function(){
                                    Calendar.setup
                                    ({
                                        ifFormat    : "%d-%m-%Y",
                                        inputField  : "date", // ID of the input field
                                        button      : "date"      // ID of the button,
                                    });
                                })
                            </script>

                        </div>
                        <div class="box-line">
                            <p class="label"><label for="phone">phone</label><input id="phone" type="text" value=""></p>
                            <p class="label"><label style="left: 28px;" for="time">time</label><input id="time" type="text" value=""></p>
                        </div>
                        <div class="box-line">
                            <p class="label"><label for="email">email</label><input id="email" type="text" value=""></p>
                        </div>
                        <div class="box-line">
                            <p class="label"><label for="mes">Number of people and special<br> requirements...</label><textarea id="mes" cols="10" rows="10"></textarea></p>
                        </div>
                        <label class="sub"><input type="submit" value=""></label>
                    </form>
                </div>
            </div>
        </div>
    </div>




<!--END CONTACT-->






<?php
get_footer();
