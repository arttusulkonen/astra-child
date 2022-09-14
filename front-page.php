<?php /* Template Name: General page */ ?>

<?php get_header(); ?>

<?php 
    if(have_rows('contentblocks')):?>

        <?php while(have_rows('contentblocks')): the_row();?>

        <?php if(get_row_layout() == 'banner'):
                $header = get_sub_field('header');
                $background = get_sub_field('background');
            ?>
            <div style="background: url('<?php echo $background ?>') center center; background-size: cover; background-repeat: no-repeat;" class="hero_banner">
            <div class="hero_wrapper">
                    <h2 class="hero_header"><?php echo $header?></h2>
                </div>
            </div>
            <?php endif;?>

            <?php if(get_row_layout() == 'repeater_reputation'):
                $header = get_sub_field('header');
                $repeater = get_sub_field('reputation');
            ?>
            <div class="reputation">
                <div class="container">
                    <h2 class="title"><?php echo $header?></h2>
                    <div class="reputation_wrapper">
                    <?php foreach($repeater as $repeat):?> 
                        <div class="reputation_item" data-aos="fade-left">
                            <img class="reputation_img" src="<?php echo $repeat['icon']; ?>" alt="" />
                            <p class="reputation_item-header"><?php echo $repeat['header'];?></p>
                            <p class="reputation_item-descr"><?php echo $repeat['description']; ?></p>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <?php endif;?>

            <?php if(get_row_layout() == 'services'):
                $header = get_sub_field('services_header');
                $services = get_sub_field('services_to_show');
            ?>
            <div class="services">
                <div class="container">
                    <h2 class="title"><?php echo $header?></h2> 
                    <div class="services_wrapper">
                        <?php foreach($services as $service):
                            $permalink = get_permalink( $service->ID );
                            $title = get_the_title( $service->ID );
                            ?>
                            <div class="services_item" data-aos="fade-right">
                                <a class="services_link" href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $title ); ?></a>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <button class="button"><a href="/services">All services</a></button>
                </div>
            </div>
            <?php endif;?>

            <?php if(get_row_layout() == 'about_us'):
                $header = get_sub_field('about_us-header');
                $image = get_sub_field('about_us-image');
                $descr = get_sub_field('about_us-description');
                $link = get_sub_field('about_us-link');
                $link_text = get_sub_field('about_us-link-text');
            ?>
            <div class="about">
                <div class="container">
                    <div class="about_wrapper">
                        <div class="about_img" data-aos="fade-down">
                            <img class="image " src="<?php echo $image; ?>" alt="">
                        </div>
                        <div class="about_box">
                            <h2 class="about_box-header"><?php echo $header ?></h2>
                            <p class="about_box-descr"><?php echo $descr ?></p>
                            <div class="about_button">
                                <button class="button">
                                    <a href="<?php echo $link ?>"><?php echo $link_text; ?></a>
                                </button>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <?php endif;?>
        <?php endwhile;?>
    <?php endif;?>
<?php get_footer();
