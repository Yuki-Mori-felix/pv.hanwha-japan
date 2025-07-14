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
      <h1>ニュース</h1>

      <div class="post-filter-area">
        <div class="news-category-wrap">
          <ul class="news-category-buttons">
            <!-- すべてボタンを追加 -->
            <li>
              <button class="filter-button active" data-term-id="all">すべて</button>
            </li>
            <?php
            $terms = get_terms(array(
              'taxonomy'   => 'news-post-format', // カスタムタクソノミーのスラッグ
              'hide_empty' => false,       // 投稿がないカテゴリも表示
            ));

            foreach ($terms as $term) : ?>
              <li>
                <button class="filter-button" data-term-id="<?php echo $term->term_id; ?>">
                  <?php echo $term->name; ?>
                </button>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

      <ul class="news-list">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type'      => 'news',
          'posts_per_page' => 21, // 表示件数(functions.phpの数と合わせる)
          'orderby'        => 'date',
          'order'          => 'DESC',
          'paged'          => $paged,
        );

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
      <a href="/" class="btn news-top-btn">TOPに戻る</a>
    </div>
  </section>
</main>
<?php get_footer(); ?>