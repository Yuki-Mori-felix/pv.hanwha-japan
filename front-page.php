<?php
get_header();
?>

<div class="wrap">
  <?php if (is_home() && ! is_front_page()) : ?>
    <header class="page-header">
      <h1 class="page-title"><?php single_post_title(); ?></h1>
    </header>
  <?php else : ?>
    <header class="page-header">
      <h2 class="page-title"><?php _e('Posts', 'twentyseventeen'); ?></h2>
    </header>
  <?php endif; ?>


  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <section class="topic section-wrapper"><!--topic-->
        <h3 class="section-title">TOPICS</h3>
        <div class="section-inner">
          <p></p>
        </div>

        <div class="topic-inner">
          <?php
          $args = [
            'post_type' => 'post', // カスタム投稿名が「gourmet」の場合
            'posts_per_page' => 3, // 表示する数
            'category_name' => 'topics', //カテゴリースラッグを指定
            'post_status' => 'publish', //公開の記事だけ
            'order' => 'DESC', //表示する順番（逆はASC）
          ];
          $my_query = new WP_Query($args); ?>

          <?php if ($my_query->have_posts()): // 投稿がある場合
          ?>

            <ul class="wrap_s">

              <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                <li>
                  <a href="<?php the_permalink(); ?>" class="">
                    <div class="_overflow-hidden-topic">
                      <?php the_post_thumbnail('full'); ?>
                    </div>
                    <h3><?php the_title(); ?></h3>
                  </a>
                </li>

              <?php endwhile; ?>

            </ul>

          <?php else: // 投稿がない場合
          ?>

            <p>まだ投稿がありません。</p>

          <?php endif;
          wp_reset_postdata(); ?>

          <div class="next-more1 wrap_s"><a href="/category/topics/">もっと見る</a></div>

      </section><!--topic-->

      <?php
      $args = array(
        'post_type' => 'top',
        'posts_per_page' => -1,
      );
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()): ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <section class="total-energy-solutions clearfix"><!--太陽光発電システムからトータルエネルギーソリューションまで-->
            <div class="content img-size">
              <img src="<?= wp_kses_post(get_field('top_pv_img')['url']); ?>" alt="">
            </div>
            <div class="content">
              <span class="border-solid-bottom-01"><?= wp_kses_post(get_field('top_pv_title')); ?></span>
              <h3 class="section-title text-align-l"><?= wp_kses_post(get_field('top_pv_title_blue')); ?></h3>
              <p><?= wp_kses_post(get_field('top_pv_text')); ?></p>

              <div class="btn-box _link_bt3_b">
                <a href="<?= wp_kses_post(get_field('top_pv_url')); ?>" class="btn">詳しくはこちら</a>
              </div>

            </div>
          </section><!--太陽光発電システムからトータルエネルギーソリューションまで-->

          <section class="product section-wrapper"><!--人気の商品-->
            <h3 class="section-title">製品・システム</h3>
            <div class="section-inner">
              <p class="sub-title">カテゴリー別一覧</p>
            </div>

            <div class="product-category">
              <ul class="wrap_s">
                <li>
                  <p class="product-logo"><img src="<?= wp_kses_post(get_field('puroduct_logo_1')['url']); ?>"></p>
                  <h4><a href="<?= wp_kses_post(get_field('puroduct_url_1')); ?>"><?= wp_kses_post(get_field('puroduct_title_1')); ?></a></h4>
                  <p class="product-photo1"><img src="<?= wp_kses_post(get_field('puroduct_photo_1')['url']); ?>"></p>
                  <span class="_link_bt1"><span><a href="<?= wp_kses_post(get_field('puroduct_url_1')); ?>">もっと見る</a></span></span>
                </li>
                <li>
                  <p class="product-logo"><img src="<?= wp_kses_post(get_field('puroduct_logo_2')['url']); ?>"></p>
                  <h4><a href="<?= wp_kses_post(get_field('puroduct_url_2')); ?>"><?= wp_kses_post(get_field('puroduct_title_2')); ?></a></h4>
                  <p class="product-photo1"><img src="<?= wp_kses_post(get_field('puroduct_photo_2')['url']); ?>"></p>
                  <span class="_link_bt1"><a href="<?= wp_kses_post(get_field('puroduct_url_2')); ?>">もっと見る</a></span>
                </li>
                <li>
                  <h4><a href="<?= wp_kses_post(get_field('puroduct_url_3')); ?>"><?= wp_kses_post(get_field('puroduct_title_3')); ?></a></h4><br>
                  <p class="product-photo1"><img src="<?= wp_kses_post(get_field('puroduct_photo_3')['url']); ?>"></p>
                  <span class="_link_bt2"><a href="<?= wp_kses_post(get_field('puroduct_url_3')); ?>">もっと見る</a></span>
                </li>
                <li>
                  <h4><a href="<?= wp_kses_post(get_field('puroduct_url_4')); ?>"><?= wp_kses_post(get_field('puroduct_title_4')); ?></a></h4><br>
                  <p class="product-photo1"><img src="<?= wp_kses_post(get_field('puroduct_photo_4')['url']); ?>"></p>
                  <span class="_link_bt2"><a href="<?= wp_kses_post(get_field('puroduct_url_4')); ?>">もっと見る</a></span>
                </li>
              </ul>
            </div><!--人気の商品-->

            <div class="banner1"><!--各種バナー-->
              <ul class="wrap_s">
                <li>
                  <h4><a href="<?= wp_kses_post(get_field('puroduct_url_5')); ?>">パワーコンディショナー・<br>モニター</a></h4><br><span class="_link_bt1"><a href="<?= wp_kses_post(get_field('puroduct_url_5')); ?>">もっと見る</a></span>
                  <p class="banner-photo1"><img src="<?= wp_kses_post(get_field('banner_photo_1')['url']); ?>"></p>
                </li>
                <li>
                  <h4><a href="<?= wp_kses_post(get_field('puroduct_url_6')); ?>">架台・設置金具</a></h4><br><span class="_link_bt1"><a href="<?= wp_kses_post(get_field('puroduct_url_6')); ?>">もっと見る</a></span>
                  <p class="banner-photo1"><img src="<?= wp_kses_post(get_field('banner_photo_2')['url']); ?>"></p>
                </li>
                <li>
                  <h4><a href="<?= wp_kses_post(get_field('puroduct_url_7')); ?>">V2H・その他</a></h4><br><span class="_link_bt1"><a href="<?= wp_kses_post(get_field('puroduct_url_7')); ?>">もっと見る</a></span>
                  <p class="banner-photo1"><img src="<?= wp_kses_post(get_field('banner_photo_3')['url']); ?>"></p>
                </li>
              </ul>
            </div>
          </section><!--各種バナー--><!--人気の商品-->


          <div class="retailer-system"><!--販売店用システム-->
            <div class="_left_contents">
              <h3>販売店用システム</h3>
              <P>HANASYS (ハナシス)</p>
            </div>
            <div class="_right_contents">
              <img src="<?= wp_kses_post(get_field('hanasys_banner')['url']); ?>" alt="HANASYS (ハナシス)">
            </div>
          </div><!--販売店用システム-->

          <section class="electricity-bill-service"><!--電気料金削減サービス-->
            <h3><?= wp_kses_post(get_field('electricity_title')); ?></h3>

            <div class="electricity-bill-service-inner"><!--service1-->
              <div class="_left_contents">
                <div class="item_box -fade-in">
                  <a class="item_link" href="<?= wp_kses_post(get_field('electricity_url_content1')); ?>" target="_blank">
                    <div class="item_content">
                      <div class="item_image">
                        <img src="<?= wp_kses_post(get_field('electricity_img_content1')['url']); ?>" alt="">
                      </div>
                      <div class="item_mask">
                        <div class="item_mask-text"><img src="/wp-content/uploads/2025/04/ENECONNECT_Logo_White01.svg"></div>
                        <span class="material-symbols-outlined">open_in_new</span>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="_right_contents">
                <h4><?= wp_kses_post(get_field('electricity_title_content1')); ?></h4>
                <p><?= wp_kses_post(get_field('electricity_text_content1')); ?></p>

                <div class="btn-box">
                  <a href="<?= wp_kses_post(get_field('electricity_url_content1')); ?>" class="btn">詳しくはこちら</a>
                </div>
              </div>
            </div><!--service1-->

            <!--service2-->
            <div class="electricity-bill-service-inner">
              <div class="_left_contents">
                <div class="item_box -fade-in">
                  <a class="item_link" href="<?= wp_kses_post(get_field('electricity_url_content2')); ?>" target="_blank">
                    <div class="item_content">
                      <div class="item_image">
                        <img src="<?= wp_kses_post(get_field('electricity_img_content2')['url']); ?>" alt="">
                      </div>
                      <div class="item_mask">
                        <div class="item_mask-text"><img src="/wp-content/uploads/2025/04/ENECONNECT_Logo_White01.svg"></div>
                        <span class="material-symbols-outlined">open_in_new</span>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="_right_contents">
                <h4><?= wp_kses_post(get_field('electricity_title_content2')); ?></h4>
                <p><?= wp_kses_post(get_field('electricity_text_content2')); ?></p>
                <div class="btn-box">
                  <a href="<?= wp_kses_post(get_field('electricity_url_content2')); ?>" class="btn">詳しくはこちら</a>
                </div>

              </div>
            </div>

          </section><!--電気料金削減サービス-->
        <?php endwhile; ?>
      <?php else: ?>
      <?php endif;
      wp_reset_postdata(); ?>

      <section class="topic press section-wrapper"><!--pre-release-->
        <h3 class="section-title">プレスリリース</h3>

        <div class="topic-inner">
          <?php
          $args = [
            'post_type' => 'post', // カスタム投稿名が「gourmet」の場合
            'posts_per_page' => 3, // 表示する数
            'category_name' => 'pre-release', //カテゴリースラッグを指定
            'post_status' => 'publish', //公開の記事だけ
            'order' => 'DESC', //表示する順番（逆はASC）
          ];
          $my_query = new WP_Query($args); ?>

          <?php if ($my_query->have_posts()): // 投稿がある場合
          ?>

            <ul class="wrap_s">

              <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                <!-- ▽ ループ開始 ▽ -->
                <li>
                  <div class="_overflow-hidden-topic">
                    <a href="<?php the_permalink(); ?>" class="">
                      <?php the_post_thumbnail('full'); ?>
                    </a>
                    <div class="_right_bt"></div>
                  </div>
                  <a href="<?php the_permalink(); ?>" class="">
                    <span class="press-time"><?= the_time('Y.m.d') ?></span>
                    <h3 class="press-title"><?php the_title(); ?></h3>
                  </a>
                </li>
                <!-- △ ループ終了 △ -->

              <?php endwhile; ?>

            </ul>

          <?php else: // 投稿がない場合
          ?>

            <p>まだ投稿がありません。</p>

          <?php endif;
          wp_reset_postdata(); ?>

          <div class="next-more1 wrap_s"><a href="/category/topics/">もっと見る</a></div>

      </section><!--pre-release-->

    </main><!-- #main -->
  </div><!-- #primary -->

</div><!-- .wrap -->

<?php
get_footer();
