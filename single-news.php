<?php
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<?php get_header(); ?>
<main class="single-news">
  <section class="single-news-area">
    <div class="wrap_s">
      <?php
      // カテゴリを取得
      $terms = get_the_terms(get_the_ID(), 'news-post-format');
      if ($terms && !is_wp_error($terms)) {
        $term = $terms[0]; // 最初の1つだけ取得
      }
      ?>
      <div class="post-info"><span class="date"><?php the_time('Y.m.d'); ?></span><span class="cat"><?= esc_html($term->name); ?></span></div>
      <h1 class="title"><?= the_title(); ?></h1>
      <div class="top-img"><?php the_post_thumbnail('full'); ?></div>
      <div class="detail"><?= get_field('contents', false, false) ?></div>
      <a class="btn" href="<?= home_url(); ?>/news/">一覧に戻る</a>
    </div>
  </section>
</main>
<?php get_footer(); ?>