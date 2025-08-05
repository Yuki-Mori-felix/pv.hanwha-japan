<?php
get_header();
?>

<main class="search">
  <div class="wrap_s">
    <?php get_search_form(); ?>
    <h1 class="search-ttl">検索した “<?php the_search_query(); ?>“ の結果</h1>
    
    <?php
    // 検索クエリを変更して、1ページに10件まで表示
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      's' => get_search_query(),
      'posts_per_page' => 6, // 1ページあたりの表示件数
      'paged' => $paged
    );
    $search_query = new WP_Query($args);
    ?>

    <?php if ($search_query->have_posts()) : ?>
      <ul class="search-results">
        <?php while ($search_query->have_posts()) : $search_query->the_post(); ?>
          <li class="result-item">
            <h2 class="result-ttl"><?php the_title(); ?></h2>
            ページ : <a class="result-link" href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a>
            <!-- <p><?php the_excerpt(); ?></p> -->
          </li>
        <?php endwhile; ?>
      </ul>

      <!-- ページネーション -->
      <div class="pagination">
        <?php 
        echo paginate_links(array(
          'total' => $search_query->max_num_pages,
          'current' => max(1, get_query_var('paged')),
          'prev_text' => '<',
          'next_text' => '>',
          'end_size'  => 1, 
          'mid_size'  => 1,
        ));
        ?>
      </div>

      <?php wp_reset_postdata(); ?>
      
    <?php else : ?>
      <div class="error-results">
        <div class="error-img"><img src="/wp-content/uploads/2025/06/ico_search.png" alt=""></div>
        <p class="error-txt">検索した結果がありません。 再び検索してください。</p>
      </div>
    <?php endif; ?>
  </div>
</main>
<?php
get_footer();
?>
