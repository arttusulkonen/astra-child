<?php get_header(); ?>
<div class="custom-page">
    <div class="banner">
        <div data-aos="fade-down">
            <h2 class="title">Our history</h2>
            <?php
            $image = get_field('image');
            ?>
            <img class="image" src="<?php echo $image; ?>" alt="">
        </div>
    </div>
    <div class="container">
        <div class="custom-page_wrapper">
            <?php
            $header = get_field('about_header');
            $descr = get_field('about_descr');
            ?>

            <div class="custom-page_content">
                <div class="custom-page_content">
                    <?php
                    if (the_content()) {
                        the_content();
                    } ?>
                </div>

                <div class="custom-page_content">
                    <?php
                    if ($descr) {
                        echo $descr;
                    } ?>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<?php get_footer();
