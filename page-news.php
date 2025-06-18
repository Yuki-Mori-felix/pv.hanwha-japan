<?php
/* Template Name: ニュース（一覧） */
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<?php get_header(); ?>
<main class="news" style="min-height: 100vh;">
  <section class="news-area">
    <div class="wrap_s">
      <h1>NEWS</h1>
      <ul class="news-list">
        <?php
        $args = array(
          'post_type'      => 'news',
          'posts_per_page' => 10, // 表示件数
          'orderby'        => 'date',
          'order'          => 'DESC',
        );

        $news_query = new WP_Query($args);

        if ($news_query->have_posts()) :
          while ($news_query->have_posts()) : $news_query->the_post();
            // カテゴリー（news-post-format）の取得
            $terms = get_the_terms(get_the_ID(), 'news-post-format');
            $term_name = ($terms && !is_wp_error($terms)) ? esc_html($terms[0]->name) : '';
        ?>
            <li>
              <a href="<?= the_permalink(); ?>">
                <div class="img"><img src="<?= get_field('img')['url']; ?>" alt=""></div>
                <div class="post-info"><span class="date">2025.06.05</span><span class="cat"><?= $term_name; ?></span></div>
                <p><?= the_title(); ?></p>
              </a>
            </li>
        <?php
          endwhile;
          wp_reset_postdata();
        else :
          echo '<p>現在、ニュースはありません。</p>';
        endif;
        ?>

      </ul>
    </div>
  </section>
</main>
<?php get_footer(); ?>