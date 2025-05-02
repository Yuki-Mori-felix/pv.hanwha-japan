<?php
/*
Template Name: お客様インタビュー
*/

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header();
?>
<div class="mv" style="height: 420px; width: 100%; background: wheat; text-align: center;">
  mv
</div>
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
              <!-- すべてボタンを追加 -->
              <li>
                <button class="filter-button active" data-term-id="all">すべて</button>
              </li>
              <?php
              $terms = get_terms(array(
                'taxonomy'   => 'voice-cat', // カスタムタクソノミーのスラッグ
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
        <div class="voice-list-wrap">
          <ul class="voice-list">
            <?php
            // WP_Query の引数を設定
            $args = array(
              'post_type'      => 'voice',  // カスタム投稿タイプ
              'posts_per_page' => 5,        // 表示する投稿数
              'orderby'        => 'date',   // 日付順
              'order'          => 'DESC'    // 降順
            );
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
                      <div class="voice-item-address"><?= the_field('voice_address') ?></div>
                    </div>
                    <div class="voice-item-img"><img src="<?= get_field('voice_img')['url'] ?>" alt="<?= get_field('voice_img')['alt'] ?>"></div>
                    <div class="voice-item-cat">
                      <?php
                      // カスタムタクソノミーが使用されている場合
                      $terms = get_the_terms(get_the_ID(), 'voice-cat'); // 'voice-cat' がカスタムタクソノミー名

                      if (!empty($terms)) {
                        foreach ($terms as $term) {
                          echo '<a href="' . esc_url(get_term_link($term)) . '" class="category-link">' . esc_html($term->name) . '</a>';
                        }
                      } else {
                        echo '<span>カテゴリなし</span>';
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
        </div>

      </section>
    </main><!-- #main -->
  </div><!-- #primary -->
  <?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
