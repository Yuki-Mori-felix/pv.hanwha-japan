<?php
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<?php get_header(); ?>
<?php
// 閲覧数カウント 関数の呼び出し
if (is_singular('blog-post')) {
  set_post_views(get_the_ID());
}
?>
<main class="single-blog">
  <section class="mv">
    <div class="back-img">
      <h1 class="title">ブログ</h1>
    </div>
  </section>
  <!--========== END OF MV ==========-->

  <div class="wrap_s">
    <?php custom_breadcrumb(); ?>
  </div>

  <section class="blog-area">
    <div class="wrap_s">
      <div class="blog-wrap">
        <?php
        // カテゴリを取得
        $terms = get_the_terms(get_the_ID(), 'blog-cat');
        if ($terms && !is_wp_error($terms)) {
          $term = $terms[0]; // 最初の1つだけ取得
        }
        ?>
        <div class="post-info"><span class="date"><?= get_the_date('Y.m.d'); ?></span><span class="cat"><?= esc_html($term->name); ?></span></div>
        <h1 class="title"><?= the_title(); ?></h1>
        <ul class="icon-list">
          <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" rel="nofollow noopener" target="_blank"><img src="<?= $img_path; ?>/side-menu/Facebook_Logo_Primary.png" alt=""></a></li>
          <li><a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>" rel="nofollow noopener" target="_blank"><img src="<?= $img_path; ?>/side-menu/logo-black.png" alt=""></a></li>
          <li><a href="#"><img src="<?= $img_path; ?>/side-menu/threads-logo-black-01.png" alt=""></a></li>
          <li><a href="https://social-plugins.line.me/lineit/share?url=<?php echo urlencode(get_permalink()); ?>" rel="nofollow noopener" target="_blank"><img src="<?= $img_path; ?>/side-menu/LINE_Brand_icon.png" alt=""></a></li>
          <li><a href="#"><img src="<?= $img_path; ?>/side-menu/link_icon.png" alt=""></a></li>
        </ul>
        <div class="img"><?php the_post_thumbnail('full'); ?></div>
        <div class="detail"><?= the_content(); ?></div>

        <div class="blog-bottom-area">

          <div class="cat-and-tags">
            カテゴリー：　<a class="cat" href="<?php echo home_url('/blog/?blog_cat=' . esc_attr($term->slug)); ?>"><?php echo esc_html($term->name); ?></a>
            <?php $tags = get_the_terms(get_the_ID(), 'blog-tag'); ?>
            <?php if ($tags && !is_wp_error($tags)) : ?>
              <div class="tags">
                <?php foreach ($tags as $tag) : ?>
                  タグ：　<a class="tag" href="<?php echo home_url('/blog/?blog_tag=' . esc_attr($tag->slug)); ?>"><?php echo esc_html($tag->name); ?></a>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>

          <ul class="icon-list">
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" rel="nofollow noopener" target="_blank"><img src="<?= $img_path; ?>/side-menu/Facebook_Logo_Primary.png" alt=""></a></li>
            <li><a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>" rel="nofollow noopener" target="_blank"><img src="<?= $img_path; ?>/side-menu/logo-black.png" alt=""></a></li>
            <li><a href="#"><img src="<?= $img_path; ?>/side-menu/threads-logo-black-01.png" alt=""></a></li>
            <li><a href="https://social-plugins.line.me/lineit/share?url=<?php echo urlencode(get_permalink()); ?>" rel="nofollow noopener" target="_blank"><img src="<?= $img_path; ?>/side-menu/LINE_Brand_icon.png" alt=""></a></li>
            <li><a href="#"><img src="<?= $img_path; ?>/side-menu/link_icon.png" alt=""></a></li>
          </ul>
        </div>

        <!-- <div class="conclusion">
          <h2>まとめ</h2>
          <div class="conclusion-area">
            <p>
              この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。
            </p>
          </div>
        </div> -->

        <a href="<?= home_url(); ?>/blog/" class="btn">記事一覧に戻る</a>

        <!-- <div class="toc-wrap">
          <div class="toc-title">目次</div>
          <ul class="toc-list">
            <li class="toc-item">
              <div class="toc-h2">1.これは大見出しです</div>
              <ul>
                <li>1_1.これは小見出しです</li>
              </ul>
            </li>
            <li class="toc-item">
              <div class="toc-h2">2.これは大見出しです</div>
              <ul>
                <li>2_1.これは小見出しです</li>
                <li>2_2.これは小見出しです</li>
              </ul>
            </li>
            <li class="toc-item">
              <div class="toc-h2">3.まとめ</div>
            </li>
          </ul>
        </div> -->

      </div>

      <?php include 'template-parts/side-menu/side-menu.php'; ?>
    </div>
  </section>

  <section class="blog-common">
    <div class="wrap_s">
      <div class="recommend-post">
        <h3>この記事を読んだあなたにオススメ</h3>
        <ul class="recommend-list">
          <?php
          $recommend_post_1 = get_field('recommend_1');
          $recommend_post_2 = get_field('recommend_2');
          $recommend_post_3 = get_field('recommend_3');

          $recommend_posts = array_filter([$recommend_post_1, $recommend_post_2, $recommend_post_3]);

          if (!empty($recommend_posts)) {
            // ACFで指定された投稿がある場合、それらを表示
            foreach ($recommend_posts as $post) {
              setup_postdata($post);
              $terms = get_the_terms(get_the_ID(), 'blog-cat');
              $term_name = ($terms && !is_wp_error($terms)) ? esc_html($terms[0]->name) : '';
          ?>
              <li>
                <a href="<?= the_permalink(); ?>">
                  <div class="img"><?php the_post_thumbnail('full'); ?></div>
                  <div class="post-info"><span class="date"><?= get_the_date('Y.m.d'); ?></span><span class="cat"><?= $term_name; ?></span></div>
                  <h2><?= the_title(); ?></h2>
                </a>
              </li>
              <?php
            }
            wp_reset_postdata();
          } else {
            // おすすめが設定されていない場合は最新3件を表示
            $args = array(
              'post_type'      => 'blog-post',
              'posts_per_page' => 3,
              'orderby'        => 'date',
              'order'          => 'DESC',
            );
            $blog_query = new WP_Query($args);
            if ($blog_query->have_posts()) :
              while ($blog_query->have_posts()) : $blog_query->the_post();
                $terms = get_the_terms(get_the_ID(), 'blog-cat');
                $term_name = ($terms && !is_wp_error($terms)) ? esc_html($terms[0]->name) : '';
              ?>
                <li>
                  <a href="<?= the_permalink(); ?>">
                    <div class="img"><?php the_post_thumbnail('full'); ?></div>
                    <div class="post-info"><span class="date"><?= get_the_date('Y.m.d'); ?></span><span class="cat"><?= $term_name; ?></span></div>
                    <h2><?= the_title(); ?></h2>
                  </a>
                </li>
          <?php
              endwhile;
              wp_reset_postdata();
            else :
              echo '<p>現在、ブログはありません。</p>';
            endif;
          }
          ?>
        </ul>

      </div>
      <div class="links">
        <a href="<?= get_my_home_url("/service-support/contact") ?>" class="link contact"><span class="inner">お問い合わせはこちら</span></a>
        <a href="<?= get_my_home_url("/service-support/contact-quotation") ?>" class="link quotation"><span class="inner">お見積り依頼はこちら</span></a>
        <a href="<?= get_my_home_url("/service-support/catalog") ?>" class="link catalog-a"><span class="inner">WEBカタログ・ダウンロードはこちら</span></a>
      </div>
    </div>
  </section>

  <section class="info">
    <div class="container">
      <div class="ctt customer">
        <div class="img"><img src="<?= get_img_path() ?>/contact/icon-customer.svg" alt=""></div>
        <div class="detail">
          <p class="head">お客さまご相談センター</p>
          <p class="txt">
            電話番号 0120-322-001<br>
            受付時間 09：00～17：00<br class="none-min-ml">（12：00～13：00を除く）<br>
            ※土日・祝日および年末年始を除く
          </p>
        </div>
      </div>
      <div class="ctt repair">
        <div class="img"><img src="<?= get_img_path() ?>/contact/icon-repair.svg" alt=""></div>
        <div class="detail">
          <p class="head">修理のご用命</p>
          <p class="txt">
            電話番号 0120-801-170<br>
            受付時間 09：00～17：00<br class="none-min-ml">（12：00～13：00を除く）<br>
            ※土日・祝日および年末年始を除く
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- // INFO -->

</main>
<?php get_footer(); ?>