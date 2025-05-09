<?php
/* Template Name: 製品・システム */
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

<!--人気の商品ここから-->

<section class="popular_products_now"><!--人気の商品-->
  <h3>今人気の商品</h3>

  <div class="wrap_s">
    <ul class="popular_products_category">
      <li class="popular_products_item">
        <h4><a href="#"><?php the_field('product-list-001',); ?></a></h4>
        <div class="_list"><img src="<?php the_field('product-photo-001', 163); ?>"></div>
        <h5><?php the_field('product-list-004', 163); ?></h5>
        <a class="btn" href="#">詳しくはこちら</a>
      </li>
      <li class="popular_products_item">
        <h4><a href="#"><?php the_field('product-list-002',); ?></a></h4>
        <div class="_list"><img src="<?php the_field('product-photo-002', 163); ?>"></div>
        <h5><?php the_field('product-list-005', 163); ?></h5>
        <a class="btn" href="#">詳しくはこちら</a>
      </li>
      <li class="popular_products_item">
        <h4><a href="#"><?php the_field('product-list-003',); ?></a></h4>
        <div class="_list"><img src="<?php the_field('product-photo-003', 163); ?>"></div>
        <h5><?php the_field('product-list-006', 163); ?></h5>
        <a class="btn" href="#">詳しくはこちら</a>
      </li>
    </ul>
  </div>

</section><!--人気の商品-->

<div class="section-back"><!-- 製品 -->

  <div class="main-title">
    <div class="wrap">
      <div class="wrap_s">
        <h2>製品</h2>
      </div>
    </div>
  </div>

  <section class="electricity create_electricity"><!--電気をつくる-->
    <div class="wrap">
      <h3>電気を<br><span>つくる</span></h3>
      <div class="electricity-content wrap_s">
        <ul class="create-list">
          <li>
            <p class="_list"><img src="<?php the_field('create_electricity_1bst_photo', 163); ?>"></p>
            <h4><a href="#">太陽電池モジュール<br>Re.RISE&reg;</a></h4>
            <p class="product-img"><img src="<?php the_field('create_electricity_1st_photo', 163); ?>"></p>
          </li>
          <li>
            <p class="_list"><img src="<?php the_field('create_electricity_2bst_photo', 163); ?>"></p>
            <h4><a href="#">太陽電池モジュール<br>Qcells</a></h4>
            <p class="product-img"><img src="<?php the_field('create_electricity_2st_photo', 163); ?>"></p>
          </li>
          <li>
            <p class="_list"><img src="<?php the_field('create_electricity_3bst_photo', 163); ?>"></p>
            <h4><a href="#">パワーコンディショナー</a></h4>
            <p class="product-img"><img src="<?php the_field('create_electricity_3st_photo', 163); ?>"></p>
          </li>
          <li>
            <p class="_list"><img src="<?php the_field('create_electricity_4bst_photo', 163); ?>"></p>
            <h4><a href="#">架台・設置金具</a></h4>
            <p class="product-img"><img src="<?php the_field('create_electricity_4st_photo', 163); ?>"></p>
          </li>
        </ul>
      </div>
    </div>
  </section><!--電気をつくる-->

  <section class="electricity store_electricity"><!--電気をためる-->
    <div class="wrap">
      <h3>電気を<br><span>ためる</span></h3>
      <div class="electricity-content">
        <ul class="wrap_s">
          <li>
            <h4><a href="#">蓄電システム</a></h4>
            <p class="_list"><img src="<?php the_field('create_electricity_1st_photo', 163); ?>"></p>
          </li>
        </ul>
      </div>
    </div>
  </section><!--電気をためる-->

  <section class="electricity use_electricity"><!--電気をかしこくつかう-->
    <div class="wrap">
      <h3>電気を<br><span>かしこくつかう</span></h3>
      <div class="electricity-content">
        <ul class="wrap_s">
          <li>
            <h4><a href="#">拡張型<br>太陽光発電システム<br>Q.READY&reg;</a></h4>
            <p class="_list"><img src="<?php the_field('puroduct_logo_01', 75); ?>"></p>
          </li>
          <li>
            <h4><a href="#">HEMS</a></h4>
            <p class="_list"><img src="<?php the_field('puroduct_logo_02', 75); ?>"></p>
          </li>
          <li>
            <h4><a href="#">V2H</a></h4>
            <p class="_list"><img src="<?php the_field('puroduct_logo_02', 75); ?>"></p>
          </li>
        </ul>
      </div>
    </div>
  </section><!--電気をかしこくつかう-->

</div>
<!-- 製品 -->

<div class="section-back"><!-- システム -->

  <div class="main-title">
    <div class="wrap">
      <div class="wrap_s">
        <h2>システム</h2>
        <a href="#" class="system-button">販売店様専用</a>
      </div>
    </div>
  </div>

  <section class="system"><!--システム -->
    <div class="wrap">
      <div class="system-content wrap_s">
        <p>ワンストップ電子発注システムHANASYS</p>
        <a class="banner" href="#">
          <img src="<?php the_field('banner002', 163); ?>" alt="ワンストップ電子発注システムHANASYS">
        </a>
      </div>
    </div>
  </section><!--システム-->

</div>
<!-- システム -->

<section class="products_that_generate_electricity_title"><!--関連記事-->
  <div class="wrap">
    <div class="wrap_s">
      <h2 class="section-title">関連記事</h2>

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