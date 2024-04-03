<footer class="footer">
    <div>
        <a href="https://www.linkedin.com/in/dmytro-chelpanov/"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/linkedin.png" alt="">
            <p>LinkedIn</p>
        </a>
        <a href="https://twitter.com/uatranslator" id='twitter'><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/twitter.svg" alt="">
            <p>Twitter</p>
        </a>
    </div>
    <div>
        <p>2021 © All rights reserved</p>
    </div>
</footer>
<div id="popUp_thanks" class="overlay none">
    <div class="popUp">
        <div class="popUp_close"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/close.png" alt=""></div>
        <h2>Thanks! </h2>
        <p class='thanks_contact_form none'>Your message has been sent -
            I’ll get back to you shortly. </p>
        <p class='thanks_subscribe none'>Your message has been sent. </p>
        <div class="button">
            <a>close</a>
        </div>
    </div>
</div>
<div id="popUp_subscribe" class="overlay none">
    <div class="popUp">
        <div class="popUp_close"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/close.png" alt=""></div>
        <h2>Subscribe to our newsletter </h2>
        <p>I’m 100% committed to protecting your privacy and will
            use your information only to provide you with the relevant content.
            You can unsubscribe at any time. </p>
        <?php echo do_shortcode('[contact-form-7 id="65" title="Subscribe" html_class="subscribeform"]'); ?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/js/main.js"></script>
<script src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/js/home.js"></script>
</body>

</html>