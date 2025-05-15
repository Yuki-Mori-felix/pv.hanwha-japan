<!-- 製品詳細 ターム(Qcells) 一覧ページ -->
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <?php
    $term_object = get_queried_object();
    $term_slug = $term_object->slug;
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => -1,
      'taxonomy' => 'product-cat',
      'term' => $term_slug
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()): ?>
      <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

        <!-- 繰り返し処理する内容 -->
        <article>
          <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
          </a>
        </article>
        <!-- 繰り返し処理する内容 -->

      <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
  </div>
</body>

</html>