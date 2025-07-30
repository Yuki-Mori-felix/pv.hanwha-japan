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
    <div class="fv_add_img"><img src="<?= get_stylesheet_directory_uri(); ?>/images/product-list/Products_TopPage_FV_01.png" alt=""></div>
  </div>
</section>

<div class="wrap">
  <div class="wrap_s">
    <?php custom_breadcrumb(); ?>
  </div>
</div>

<!--人気の商品ここから-->

<section class="popular_products_now"><!--人気の商品-->
  <h3>今人気の製品</h3>

  <div class="wrap_s">
    <ul class="popular_products_category">
      <li class="popular_products_item">
        <h4><a href="<?= wp_kses_post(get_field('product_url1')); ?>"><?= wp_kses_post(get_field('product_title1')); ?></a></h4>
        <div class="_list"><img src="<?= get_field('product_img1', 163)['url']; ?>"></div>
        <h5><?= wp_kses_post(get_field('product_name1')); ?></h5>
        <a class="btn" href="<?= wp_kses_post(get_field('product_url1')); ?>">詳しくはこちら</a>
      </li>
      <li class="popular_products_item">
        <h4><a href="<?= wp_kses_post(get_field('product_url2')); ?>"><?= wp_kses_post(get_field('product_title2')); ?></a></h4>
        <div class="_list"><img src="<?= get_field('product_img2', 163)['url']; ?>"></div>
        <h5><?= wp_kses_post(get_field('product_name2')); ?></h5>
        <a class="btn" href="<?= wp_kses_post(get_field('product_url2')); ?>">詳しくはこちら</a>
      </li>
      <li class="popular_products_item">
        <h4><a href="<?= wp_kses_post(get_field('product_url3')); ?>"><?= wp_kses_post(get_field('product_title3')); ?></a></h4>
        <div class="_list"><img src="<?= get_field('product_img3', 163)['url']; ?>"></div>
        <h5><?= wp_kses_post(get_field('product_name3')); ?></h5>
        <a class="btn" href="<?= wp_kses_post(get_field('product_url3')); ?>">詳しくはこちら</a>
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
            <a href="<?=get_my_home_url("/product-list/re-rise")?>">
              <p class="_list"><img src="<?= get_field('create_electricity_1bst_photo', 163)['url']; ?>"></p>
              <h4><?= the_field('create_electricity_title1', 163) ?></h4>
              <p class="product-img"><img src="<?= get_field('create_electricity_1st_photo', 163)['url']; ?>"></p>
            </a>
          </li>
          <li>
            <a href="<?=get_my_home_url("/product-list/q-cells")?>">
              <p class="_list"><img src="<?= get_field('create_electricity_2bst_photo', 163)['url']; ?>"></p>
              <h4><?= the_field('create_electricity_title2', 163) ?></h4>
              <p class="product-img"><img src="<?= get_field('create_electricity_2st_photo', 163)['url']; ?>"></p>
            </a>
          </li>
          <li>
            <a href="<?=get_my_home_url("/product-list/power-conditioner")?>">
              <p class="_list"><img src="<?= get_field('create_electricity_3bst_photo', 163)['url']; ?>"></p>
              <h4><?= the_field('create_electricity_title3', 163) ?></h4>
              <p class="product-img"><img src="<?= get_field('create_electricity_3st_photo', 163)['url']; ?>"></p>
            </a>
          </li>
          <li>
            <a href="<?=get_my_home_url("/product-list/bracket")?>">
              <p class="_list"><img src="<?= get_field('create_electricity_4bst_photo', 163)['url']; ?>"></p>
              <h4><?= the_field('create_electricity_title4', 163) ?></h4>
              <p class="product-img"><img src="<?= get_field('create_electricity_4st_photo', 163)['url']; ?>"></p>
            </a>
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
            <a href="<?=get_my_home_url("/product-list/storage-system")?>">
              <h4><?php the_field('products_storing_electricity_title', 163); ?></h4>
              <p class="_list"><img src="<?= get_field('_Products_Products_Storing_electricity_001', 163)['url']; ?>"></p>
            </a>
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
            <a href="https://www.q-cells.jp/qreadylp/" rel="nofollow noopener" target="_blank">
              <h4><?= the_field('use_electricity_title1'); ?></h4>
              <p class="_list"><img src="<?= get_field('use_electricity_img1', 163)['url']; ?>"></p>
            </a>
          </li>
          <li>
            <a href="<?=get_my_home_url("/product-list/hems")?>">
              <h4><?= the_field('use_electricity_title2'); ?></h4>
              <p class="_list"><img src="<?= get_field('use_electricity_img2', 163)['url']; ?>"></p>
            </a>
          </li>
          <li>
            <a href="<?=get_my_home_url("/product-list/v2h")?>">
              <h4><?= the_field('use_electricity_title3'); ?></h4>
              <p class="_list"><img src="<?= get_field('use_electricity_img3', 163)['url']; ?>"></p>
            </a>
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
        <p class="system-button">販売店様専用</p>
      </div>
    </div>
  </div>

  <section class="system"><!--システム -->
    <div class="wrap">
      <div class="system-content wrap_s">
        <p>ワンストップ電子発注システムHANASYS</p>
        <a class="banner" href="https://www.q-cells.jp/qorder-qmusubi/" rel="nofollow noopener" target="_blank">
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