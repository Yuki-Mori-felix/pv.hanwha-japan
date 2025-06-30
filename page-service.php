<?php
/* Template Name: サービス */
get_header();
?>

<section class="mv-for-page product-list">
  <div class="mv-img" style="background-image: url(<?php the_field('fv_page_img'); ?>);">
    <div class="mv-sub-title-area">
      <div class="border"></div>
      <div class="mv-sub-title"><?php the_field('page_sub_title') ?></div>
    </div>
    <div class="mv-text">
      <?php $catch = get_field('fv_page_catch'); ?>
      <?php if ($catch) echo '<span>' . $catch . '</span>'; ?>
      <h2><?php the_title(); ?></h2>
    </div>
  </div>
</section>

<div class="wrap">
  <div class="wrap_s">
    <?php custom_breadcrumb(); ?>
  </div>
</div>



<!--コンテンツ-->
<?php if ( have_posts() ) : ?>
  <?php while( have_posts() ) : the_post(); ?>
      <p><?php the_content(); ?></p>
  <?php endwhile;?>
<?php endif; ?>
<!--コンテンツ-->


<section class="products_that_generate_electricity_title"><!--関連記事-->
  <div class="wrap">
    <div class="wrap_s">
      <h2 class="section-title">関連情報</h2>

      <div class="related_articles">
        <aside class="related-post-wrap">
          <ul>
            <?php
            $catkwds = array();

            if (has_category()) {

              $cats = get_the_category();

              foreach ($cats as $cat) {
                $catkwds[] = $cat->term_id;
              }
            }
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => '3',
              'post__not_in' => array($post->ID),
              'category__in' => $catkwds,
              'orderby' => 'rand'
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()):
              while ($the_query->have_posts()): $the_query->the_post();
            ?>
                <li class="related-post">
                  <a href="<?php the_permalink(); ?>">
                    <?php
                    if (has_post_thumbnail()) {

                      the_post_thumbnail('medium');
                    } else {

                      echo '<img src="' . get_template_directory_uri() . '/images/no-image.gif">';
                    }
                    ?>
                    <!-- <div class="text-wrap">
                      <?php the_title(); ?>
                    </div> -->
                  </a>
                </li>
            <?php
              endwhile;
            endif;
            wp_reset_postdata();
            ?>
          </ul>
        </aside>
      </div>
    </div>
  </div>
</section><!--関連記事-->




<?php get_footer(); ?>