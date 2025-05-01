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

      <section class="total-energy-solutions clearfix"><!--太陽光発電システムからトータルエネルギーソリューションまで-->
        <div class="content img-size">
          <img src="/wp-content/uploads/2025/03/concept.png" alt="">
        </div>
        <div class="content">
          <span class="border-solid-bottom-01">ハンファジャパンのPV</span>
          <h3 class="section-title text-align-l">太陽光発電システムから<br>トータルエネルギー<br>ソリューションまで</h3>
          <p>優れた性能及びアフターサービス<br>日本全域に根ざした事業拠点と強固な財務安定性を基に、<br>毎年販売量が増加している。</p>

          <div class="btn-box _link_bt3_b">
            <a href="" class="btn">詳しくはこちら</a>
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
              <p class="product-logo"><img src="<?php the_field('puroduct_logo_01', 75); ?>"></p>
              <h4><a href="#">太陽電池モジュール <br>Re.RISE</a></h4>
              <p class="product-photo1"><img src="<?php the_field('puroduct_photo_01', 75); ?>"></p>
              <span class="_link_bt1"><span><a href="/product-cat/002/">もっと見る</a></span></span>
            </li>
            <li>
              <p class="product-logo"><img src="<?php the_field('puroduct_logo_02', 75); ?>"></p>
              <h4><a href="#">太陽電池モジュール <br>Qcells</a></h4>
              <p class="product-photo1"><img src="<?php the_field('puroduct_photo_02', 75); ?>"></p>
              <span class="_link_bt1"><a href="/product/">もっと見る</a></span>
            </li>
            <li>
              <h4><a href="#">拡張型<br>太陽光発電システム<br>Q.READY</a></h4><br>
              <p class="product-photo1"><img src="<?php the_field('puroduct_photo_03', 75); ?>"></p>
              <span class="_link_bt2"><a href="/product/">もっと見る</a></span>
            </li>
            <li>
              <h4><a href="#">蓄電システム<br>HEMS</a></h4><br>
              <p class="product-photo1"><img src="<?php the_field('puroduct_photo_04', 75); ?>"></p>
              <span class="_link_bt2"><a href="/product-cat/002/">もっと見る</a></span>
            </li>
          </ul>
        </div><!--人気の商品-->

        <div class="banner1"><!--各種バナー-->
          <ul class="wrap_s">
            <li>
              <h4><a href="#">パワーコンディショナー・<br>モニター</a></h4><br><span class="_link_bt1"><a href="#">もっと見る</a></span>
              <p class="banner-photo1"><img src="<?php the_field('banner_photo_01', 75); ?>"></p>
            </li>
            <li>
              <h4><a href="#">架台・設置金具</a></h4><br><span class="_link_bt1"><a href="#">もっと見る</a></span>
              <p class="banner-photo1"><img src="<?php the_field('banner_photo_02', 75); ?>"></p>
            </li>
            <li>
              <h4><a href="#">V2H・その他</a></h4><br><span class="_link_bt1"><a href="#">もっと見る</a></span>
              <p class="banner-photo1"><img src="<?php the_field('banner_photo_03', 75); ?>"></p>
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
          <img src="/wp-content/uploads/2025/03/hana.png" alt="HANASYS (ハナシス)">
        </div>
      </div><!--販売店用システム-->

      <section class="electricity-bill-service"><!--電気料金削減サービス-->
        <h3>電気料金削減サービス</h3>

        <div class="electricity-bill-service-inner"><!--service1-->
          <div class="_left_contents">
            <div class="item_box -fade-in">
              <a class="item_link" href="#" target="_blank">
                <div class="item_content">
                  <div class="item_image">
                    <img src="/wp-content/uploads/2025/04/service.png" alt="">
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
            <h4>メインタイトル/ENECONNECT</h4>
            <p>詳細テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>

            <div class="btn-box">
              <a href="" class="btn">詳しくはこちら</a>
            </div>
          </div>
        </div><!--service1-->

        <!--service2-->
        <div class="electricity-bill-service-inner">
          <div class="_left_contents">
            <div class="item_box -fade-in">
              <a class="item_link" href="#" target="_blank">
                <div class="item_content">
                  <div class="item_image">
                    <img src="/wp-content/uploads/2025/04/service.png" alt="">
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
            <h4>メインタイトル/ENECONNECT</h4>
            <p>詳細テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            <div class="btn-box">
              <a href="" class="btn">詳しくはこちら</a>
            </div>

          </div>
        </div>

      </section><!--電気料金削減サービス-->

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
