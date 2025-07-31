<?php
/* Template Name: ニュース（一覧） */
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<?php get_header(); ?>
<main class="news" style="min-height: 100vh;">
  <div class="wrap_s">
    <?php custom_breadcrumb(); ?>
  </div>
  <section class="news-area">
    <div class="wrap_s">
      <?php
      $page_id = 2580; // 固定ページ(ニュース一覧)のIDを指定
      $page = get_post($page_id);
      echo '<h1>' . esc_html($page->post_title) . '</h1>';
      ?>

      <div class="post-filter-area">
        <div class="news-category-wrap">

          <ul class="news-category-buttons">
            <!-- 「すべて」ボタン -->
            <li>
              <a class="filter-button <?php echo empty($_GET['news_category']) ? 'active' : ''; ?>" href="<?php echo home_url('/news/'); ?>">すべて</a>
            </li>
            <?php
            $terms = get_terms(array(
              'taxonomy'   => 'news-post-format',
              'hide_empty' => false,
            ));

            foreach ($terms as $term) :
              $is_active = (isset($_GET['news_category']) && $_GET['news_category'] === $term->slug || $_GET['news_category'] === $term->name);
              $link = add_query_arg('news_category', $term->slug, home_url('/news/'));
            ?>
              <li>
                <a class="filter-button <?php echo $is_active ? 'active' : ''; ?>" href="<?php echo esc_url($link); ?>">
                  <?php echo esc_html($term->name); ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>

        </div>
      </div>

      <ul class="news-list">
        <?php
        $search_keyword = isset($_GET['search_news']) ? sanitize_text_field($_GET['search_news']) : '';
        $category_slug = isset($_GET['news_category']) ? sanitize_text_field($_GET['news_category']) : '';
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type'      => 'news',
          'posts_per_page' => 18, //1ページあたりの表示件数
          'orderby'        => 'date',
          'order'          => 'DESC',
          'paged'          => $paged,
        );

        // 検索キーワードがある場合
        if (!empty($search_keyword)) {
          $args['s'] = $search_keyword;
        }

        if (!empty($category_slug)) {
          $args['tax_query'] = array(
            array(
              'taxonomy' => 'news-post-format',
              'field'    => 'slug',
              'terms'    => $category_slug,
            ),
          );
        }

        $news_query = new WP_Query($args);
        ?>

        <?php if ($news_query->have_posts()) : ?>
          <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
            <?php
            // カテゴリー（news-post-format）の取得
            $terms = get_the_terms(get_the_ID(), 'news-post-format');
            $term_name = ($terms && !is_wp_error($terms)) ? esc_html($terms[0]->name) : '';
            ?>
            <li>
              <a href="<?= the_permalink(); ?>">
                <div class="img"><?php the_post_thumbnail('full'); ?></div>
                <div class="post-info"><span class="date"><?php the_time('Y.m.d'); ?></span><span class="cat"><?= $term_name; ?></span></div>
                <p><?= the_title(); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
        <?php else: ?>
          <?php echo '<div><p>記事がありません。</p></div>'; ?>
        <?php endif; ?>
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
          'total' => $news_query->max_num_pages,
          'mid_size' => 1,
          'current' => ($paged ? $paged : 1),
          'prev_text' => '<',
          'next_text' => '>',
        ));
        ?>
      </div>

      <div class="search-area">
        <div class="title">ニュース内を検索</div>
        <form method="get" action="<?php echo home_url('/news/'); ?>">
          <input type="text" name="search_news" value="<?php echo esc_attr($search_keyword); ?>" placeholder="キーワードを入力">
          <?php if (!empty($category_slug)) : ?>
            <input type="hidden" name="news_category" value="<?php echo esc_attr($category_slug); ?>">
          <?php endif; ?>
          <button type="submit"><img src="<?= $img_path; ?>/search.svg" alt=""></button>
        </form>
      </div>

      <a href="/" class="btn news-top-btn">TOPに戻る</a>

    </div>
  </section>
</main>
<?php get_footer(); ?>