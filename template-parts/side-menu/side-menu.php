<?php
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<aside class="side-menu">
  <div class="title">カテゴリー</div>
  <div class="side-content">
    <ul class="cat-list">
      <li><a href="<?= home_url(); ?>/blog/">すべて</a></li>
      <?php
      $terms = get_terms(array(
        'taxonomy' => 'blog-cat',
        'hide_empty' => true,
      ));

      if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $term) :
          $term_link = get_term_link($term);
          if (is_wp_error($term_link)) {
            continue;
          }
      ?>
          <li>
            <a href="<?php echo home_url('/blog/?blog_cat=' . esc_attr($term->slug)); ?>">
              <?php echo esc_html($term->name); ?>
            </a>
          </li>
      <?php
        endforeach;
      else :
        echo '<li>カテゴリーが見つかりませんでした。</li>';
      endif;
      ?>
    </ul>
  </div>

  <div class="title">検索</div>
  <div class="side-content">
    <form method="get" action="<?php echo home_url('/blog/'); ?>">
      <input type="text" name="search_blog" value="<?php echo esc_attr(get_query_var('search_blog')); ?>" placeholder="キーワードを入力">
      <button type="submit"><img src="<?= $img_path; ?>/search.svg" alt=""></button>
    </form>
  </div>


  <div class="title">人気の記事ランキング</div>
  <div class="side-content">
    <?php
    $args = [
      'post_type' => 'blog-post',
      'posts_per_page' => 5,
      'meta_key' => 'post_views_count',
      'orderby' => 'meta_value_num',
      'order' => 'DESC'
    ];
    $query = new WP_Query($args);
    ?>
    <?php if ($query->have_posts()) : ?>
      <ul class="blog-list ranking">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
          <?php
          $views = get_post_meta(get_the_ID(), 'post_views_count', true);
          $views = $views ? intval($views) : 0;
          $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
          $terms = get_the_terms(get_the_ID(), 'blog-cat');
          $term_name = ($terms && !is_wp_error($terms)) ? esc_html($terms[0]->name) : '';
          ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>">
              <div class="text-area">
                <div class="cat"><?php echo $term_name; ?></div>
                <h2><?php the_title(); ?></h2>
                <?php if (is_user_logged_in()): ?>
                  <!-- <p class="views">閲覧数：<?php echo number_format($views); ?> 回</p> -->
                <?php endif; ?>
              </div>
            </a>
          </li>
        <?php endwhile; ?>

      </ul>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>


  <div class="title">新着記事</div>
  <div class="side-content">
    <ul class="blog-list">
      <?php
      $recent_posts = new WP_Query(array(
        'post_type'      => 'blog-post',
        'posts_per_page' => 5,
        'orderby'        => 'date',
        'order'          => 'DESC',
      ));

      if ($recent_posts->have_posts()) :
        while ($recent_posts->have_posts()) : $recent_posts->the_post();
          $terms = get_the_terms(get_the_ID(), 'blog-cat');
          $term_name = ($terms && !is_wp_error($terms)) ? esc_html($terms[0]->name) : '';
          $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
      ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>">
              <div class="text-area">
                <div class="cat"><?php echo $term_name; ?></div>
                <h2><?php the_title(); ?></h2>
              </div>
            </a>
          </li>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<li>新着記事はまだありません。</li>';
      endif;
      ?>
    </ul>
  </div>


  <div class="title">おすすめタグ</div>
  <div class="side-content">
    <ul class="tag-list">
      <?php
      $tags = get_terms(array(
        'taxonomy' => 'blog-tag',
        'hide_empty' => true,
      ));

      if (!empty($tags) && !is_wp_error($tags)) :
        foreach ($tags as $tag) :
          $tag_link = get_term_link($tag);
          if (is_wp_error($tag_link)) {
            continue;
          }
      ?>
          <li>
            <a href="<?php echo home_url('/blog/?blog_tag=' . esc_attr($tag->slug)); ?>">
              <?php echo esc_html($tag->name); ?>
            </a>
          </li>
      <?php
        endforeach;
      else :
        echo '<li>タグが見つかりませんでした。</li>';
      endif;
      ?>
    </ul>

  </div>

  <div class="side-menu-img">
    <a href="#">
      <img src="<?= $img_path; ?>/blog/kv_slide04_bg.webp" alt="">
    </a>
  </div>

</aside>