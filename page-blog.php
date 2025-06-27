<?php
/* Template Name: ブログ（一覧） */
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<?php get_header(); ?>
<main class="blog">

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
        <ul class="blog-list">
          <?php
          $search_keyword = isset($_GET['search_blog']) ? sanitize_text_field($_GET['search_blog']) : '';
          $category_slug  = isset($_GET['blog_cat']) ? sanitize_text_field($_GET['blog_cat']) : '';
          $tag_slug       = isset($_GET['blog_tag']) ? sanitize_text_field($_GET['blog_tag']) : '';
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

          $args = array(
            'post_type'      => 'blog-post',
            'posts_per_page' => 10,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'paged'          => $paged,
          );

          // 検索キーワードがある場合
          if (!empty($search_keyword)) {
            $args['s'] = $search_keyword;
          }

          // カテゴリで絞り込み
          if (!empty($category_slug)) {
            $args['tax_query'][] = array(
              'taxonomy' => 'blog-cat',
              'field'    => 'slug',
              'terms'    => $category_slug,
            );
          }

          // タグで絞り込み
          if (!empty($tag_slug)) {
            $args['tax_query'][] = array(
              'taxonomy' => 'blog-tag',
              'field'    => 'slug',
              'terms'    => $tag_slug,
            );
          }


          $blog_query = new WP_Query($args);

          if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) : $blog_query->the_post();
              // カテゴリーの取得
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
          ?>
        </ul>
        <div class="pnavi" id="pagination">
          <?php
          global $wp_rewrite;
          $paginate_base = get_pagenum_link(1);
          if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
            $paginate_format = '';
            $paginate_base = add_query_arg('paged', '%#%');
          } else {
            $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
              user_trailingslashit('page/%#%/', 'paged');
            $paginate_base .= '%_%';
          }
          echo paginate_links(array(
            'base' => $paginate_base,
            'format' => $paginate_format,
            'total' => $blog_query->max_num_pages,
            'mid_size' => 2,
            'end_size' => 1,
            'current' => ($paged ? $paged : 1),
            'prev_text' => '<',
            'next_text' => '>',
          ));
          ?>
        </div>
      </div>
      <?php include 'template-parts/side-menu/side-menu.php'; ?>
    </div>
  </section>

  <section class="blog-common">
    <div class="wrap_s">
      <div class="links">
        <a href="<?= get_my_home_url("/service-support/contact") ?>" class="link contact"><span class="inner">お問い合わせはこちら</span></a>
        <a href="<?= get_my_home_url("/service-support/contact-quotation") ?>" class="link quotation"><span class="inner">お見積り依頼はこちら</span></a>
        <a href="<?= get_my_home_url("/service-support/catalog") ?>" class="link catalog-a"><span class="inner">カタログ請求・ダウンロードはこちら</span></a>
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