<?php
/* Template Name: ニュース（一覧） */
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<?php get_header(); ?>
<main class="single-news">
  <section class="news-area" style="min-height: 100vh;">
    <div class="wrap_s">
      <?php
      // カテゴリを取得
      $terms = get_the_terms(get_the_ID(), 'news-post-format');
      if ($terms && !is_wp_error($terms)) {
        $term = $terms[0]; // 最初の1つだけ取得
      }
      ?>
      <div class="post-info"><span class="date">2025</span><span class="cat"><?= esc_html($term->name); ?></span></div>
      <h1 class="title"><?= the_title(); ?></h1>
      <div class="img"><img src="<?= get_field('img')['url']; ?>" alt=""></div>
      <div class="detail"><?= get_field('contents') ?></div>
    </div>
  </section>
</main>
<?php get_footer(); ?>