<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package metro
 */
?>

<div class="sidebar">
    <div class="block-sid">
        <div class="box-icons">
            <a href="#"><img src="images/icon-facebook.png" alt="" /></a>
            <a href="#"><img src="images/icon-twitter.png" alt="" /></a>
            <a href="#"><img src="images/icon-urbanspoon.png" alt="" /></a>
        </div>
        <div class="title-follow_us">Follow us</div>
    </div>
    <div class="block-sid">
        <div class="title-make_a_reservation">Make a reservation</div>
        <div class="title-make_a_reservation_2">Make a reservation</div>
        <form class="form-sid" action="" method="post">
            <div class="box-line">
                <p class="label"><label for="name">name</label><input id="name" type="text" value=""/></p>
                <p class="label"><label style="left: 28px;" for="date">date</label><input id="date" type="text" value=""/></p>

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
                <p class="label"><label for="phone">phone</label><input id="phone" type="text" value=""/></p>
                <p class="label"><label style="left: 28px;" for="time">time</label><input id="time" type="text" value=""/></p>
            </div>
            <div class="box-line">
                <p class="label"><label for="email">email</label><input id="email" type="text" value=""/></p>
            </div>
            <div class="box-line">
                <p class="label"><label for="mes">Number of people and special<br /> requirements...</label><textarea id="mes" cols="10" rows="10"></textarea></p>
            </div>
            <label class="sub"><input type="submit" value="" /></label>
        </form>
    </div>
    <div class="block-sid">
        <div class="box-icons">
            <a href="#"><img src="images/icon-pdf.png" alt="" /></a>
        </div>
        <div class="title-functions_package">Functions package</div>
    </div>
</div>