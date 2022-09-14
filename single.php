<?php

get_header();
while (have_posts()) {
  the_post(); 
  $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); 
  ?>
  <div style="background: url('<?php echo $backgroundImg[0]; ?>') center center; background-size: cover; background-repeat: no-repeat;" class="hero_banner subpage">

    <div class="hero_wrapper">
            <h2 class="hero_header"><?php the_title();?></h2>
        </div>
    </div>
  <div class="single-page">
  <div class="container">
    <div class="single-page_wrapper">
      <div class="breadcrumbs">
          <p>
            <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('services'); ?>"><i class="fa fa-home" aria-hidden="true"></i>Services</a> / <span class="metabox__main"><?php the_title();?></span>
          </p>
      </div>
      <div class="generic-content">
        <?php the_content();?>
      </div>
    </div>
  </div>
  </div>
<?php }

get_footer();

?>