<?php
/*
Template Name: お客様インタビュー
*/
get_header();
?>

<div class="mv_for_page interview" style="background-image: url(<?php the_field('fv_page_img'); ?>)">
  <h2><?php the_title(); ?></h2>
  <span class="sub-title"><?php the_field('interview_page_catch'); ?></span>
</div>
<!--========== MV ==========-->

<div class="wrap">
  <div class="wrap_s">
    <?php custom_breadcrumb(); ?>
  </div>
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <section class="archive-voice">
        <h2 class="section-title">実際に導入された<br>お客様の大切なご意見を伺いました</h2>
        <div class="post-filter-area">
          <div class="voice-category-wrap">
            <ul class="voice-category-buttons">
              <!-- すべてボタン -->
              <li>
                <a class="filter-button<?php if (!isset($_GET['term_id'])) echo ' active'; ?>" href="<?php echo get_permalink(); ?>">すべて</a>
              </li>
              <?php
              $terms = get_terms(array(
                'taxonomy'   => 'voice-cat',
                'hide_empty' => false,
              ));

              foreach ($terms as $term) : ?>
                <li>
                  <form method="GET" action="<?php echo get_permalink(); ?>">
                    <input type="hidden" name="term_id" value="<?php echo $term->term_id; ?>">
                    <button type="submit"
                      class="filter-button <?php if (isset($_GET['term_id']) && $_GET['term_id'] == $term->term_id) echo 'active'; ?>">
                      <?php echo esc_html($term->name); ?>
                    </button>
                  </form>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <div class="voice-list-wrap">
          <ul class="voice-list">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $selected_term_id = (isset($_GET['term_id']) && $_GET['term_id'] !== 'all') ? intval($_GET['term_id']) : null;
            // WP_Query の引数を設定
            $args = array(
              'post_type'      => 'voice',  // カスタム投稿タイプ
              'posts_per_page' => 21,        // 表示する投稿数
              'orderby'        => 'date',   // 日付順
              'order'          => 'DESC',    // 降順]
              'paged'          => $paged,
            );

            if ($selected_term_id) {
              $args['tax_query'] = array(
                array(
                  'taxonomy' => 'voice-cat',
                  'field'    => 'term_id',
                  'terms'    => $selected_term_id,
                ),
              );
            }
            ?>

            <?php
            // クエリを作成
            $voice_query = new WP_Query($args);
            ?>

            <?php if ($voice_query->have_posts()) : ?>
              <?php while ($voice_query->have_posts()) : ?>
                <?php $voice_query->the_post(); ?>

                <li class="voice-item">
                  <a href="<?= the_permalink() ?>">
                    <div class="voice-item-textarea">
                      <div class="voice-item-title"><?= the_field('voice_title') ?></div>
                      <div class="voice-item-address"><?= the_title() ?></div>
                    </div>
                    <div class="voice-item-img"><img src="<?= get_field('voice_img')['url'] ?>" alt="<?= get_field('voice_img')['alt'] ?>"></div>
                    <div class="voice-item-cat">
                      <?php
                      // 任意のクラス名を対応付けるためのマッピング配列
                      $category_classes = array(
                        '太陽光発電システム' => 'solar',
                        '太陽光発電システム+蓄電システム' => 'solar-storage', // この行を追加
                      );

                      // カテゴリを取得
                      $terms = get_the_terms(get_the_ID(), 'voice-cat');

                      if (!empty($terms)) {
                        foreach ($terms as $term) {
                          // タクソノミー名から対応するクラス名を取得
                          $class_name = isset($category_classes[$term->name]) ? $category_classes[$term->name] : 'class-default';
                          echo '<span class="' . esc_attr($class_name) . ' category-link">' . esc_html($term->name) . '</span>';
                        }
                      } else {
                        echo '<span class="no-category">カテゴリなし</span>';
                      }
                      ?>

                    </div>

                  </a>
                </li>

              <?php endwhile; ?>
              <?php wp_reset_postdata(); // クエリリセット 
              ?>
            <?php else : ?>
              <p><?php echo '投稿がありません。'; ?></p>
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
              'total' => $voice_query->max_num_pages,
              'mid_size' => 2,
              'end_size' => 1,
              'current' => ($paged ? $paged : 1),
              'prev_text' => '<',
              'next_text' => '>',
            ));
            ?>
          </div>
        </div>

      </section>
    </main><!-- #main -->
  </div><!-- #primary -->
  <?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
