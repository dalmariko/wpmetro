<div id="footer">
    <div class="footer-in">
        <p>&copy; Copyright 2012

            <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
            /
            <a href="#">Contact us</a>
            /
            Site by <a href="#">RedDesign</a>
        </p>
    </div>
</div>
</div>

<script type='text/javascript'>
    jQuery(function(){
        jQuery('#slides').slides({
            play: 5000,
            pause: 5000,
            hoverPause: true
        });
    });

    jQuery(document).ready(function(){
        Calendar.setup
        ({
            ifFormat    : "%d-%m-%Y",
            inputField  : "date", // ID of the input field
            button      : "date"      // ID of the button,
        });
    })
</script>

<?php wp_footer(); ?>
</body>
</html>



