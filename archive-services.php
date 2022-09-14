<?php get_header(); ?>
<div class="archive">
  <div style="background: url('http://thebox.local/wp-content/uploads/2022/09/alex-kotliarskyi-QBpZGqEMsKg-unsplash-scaled.jpg') center center; background-size: cover; background-repeat: no-repeat;" class="hero_banner subpage">
    <div class="hero_wrapper">
      <h2 class="hero_header">Services</h2>
    </div>
  </div>
  <div class="container">
    <div class="archive_wrapper">


      <?php
      $archive = new WP_Query(array(
        'post_type' => 'services', // your post type name
        // 'posts_per_page' => 3, // post per page
        'paged' => $paged,
      ));
      if (have_posts()) : while (have_posts()) : the_post();
          $background = get_the_post_thumbnail_url(get_the_ID());
          $category = get_the_category();
      ?>
          <div class="card-container">
            <div class="card">
              <div style="background: url('<?php echo $background ?>')" class="card-img"></div>
              <a href="<?php the_permalink(); ?>" class="card-link">
                <div style="background: url('<?php echo $background ?>') center center; background-size: cover; background-repeat: no-repeat;" class="card-img-hovered"></div>
              </a>
              <div class="card-info">
                <div class="card-about">
                  <a class="card-tag tag-news"><?php echo $category[0]->name; ?></a>
                  <div class="card-time"><?php the_time('n/j/y'); ?></div>
                </div>
                <h1 class="card-title"><?php the_title() ?></h1>
                <div class="card-creator">by <a href=""><?php the_author_posts_link(); ?></a></div>
              </div>
            </div>
          </div>
          <hr>
        <?php endwhile;
      else : ?>
        <p>Posts not found..</p>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <div class="pagination">

      <?php $total_pages = $archive->max_num_pages;
      if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));
        echo paginate_links(array(
          'base' => get_pagenum_link(1) . '%_%',
          'format' => '/page/%#%',
          'current' => $current_page,
          'total' => $total_pages,
          'prev_text'    => __('« back'),
          'next_text'    => __('next »'),
        ));
      } ?>

    </div>
  </div>
</div>


<?php get_footer();

?>