<?php wp_footer(); ?>

<div class="footer">
    <footer class="footer-distributed">

        <div class="footer-left">
            <div class="contacts">
                <div><span>Address:</span>
                    <p>6391 Elgin St. Celina, Delaware 10299</p>
                </div>
                <div><span>Phone:</span>
                    <p>+84 1102 2703</p>
                </div>
                <div><span>Email:</span>
                    <p>hello@thebox.com</p>
                </div>
            </div>
            <div class="footer_logo"><?php
                            if (function_exists('the_custom_logo')) {
                                the_custom_logo();
                            }
                            ?></div>
        </div>

        <div class="footer-center"></div>

        <div class="footer-right">
            <span>Newsletter:</span>
            <form class="newsletter">
                <input placeholder="Your email here" type="text"></input>
                <button>subscribe</button>
             </form>
            <div class="footer-icons">
                <span>Social:</span>
                <div class="icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>

        </div>

    </footer>
    <p class="footer_text">TheBox Company © <?php echo do_shortcode('[year]'); ?>. All Rights Reserved</p>

</div>
</body>

</html>