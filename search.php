<?php
get_header();
?>

<main class="search">
  <div class="wrap_s">
    <h1>検索した “<?php the_search_query(); ?>“ の結果</h1>

    <?php get_search_form(); ?>

    <?php
    // 検索クエリを変更して、1ページに10件まで表示
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      's' => get_search_query(),
      'posts_per_page' => 5, // 1ページあたりの表示件数
      'paged' => $paged
    );
    $search_query = new WP_Query($args);
    ?>

    <?php if ($search_query->have_posts()) : ?>
      <ul class="search-results" style="margin-top: 100px;">
        <?php while ($search_query->have_posts()) : $search_query->the_post(); ?>
          <li class="search-item">
            <h2><?php the_title(); ?></h2>
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
          'prev_text' => '« 前へ',
          'next_text' => '次へ »',
        ));
        ?>
      </div>

      <?php wp_reset_postdata(); ?>
      
    <?php else : ?>
      <div class="error-results" style="margin-top: 100px;">
        <p style="color: red;">検索キーワードに該当する記事がありませんでした。</p>
      </div>
    <?php endif; ?>
  </div>
</main>
<style>
  .search {
    min-height: 80vh;
  }

  .search-item {
    border-bottom: 1px solid black;
    margin-bottom: 20px;
    padding-bottom: 20px;
  }

  .result-link {
    color: #019ee3;
    &:hover {
      color: #019ee3;
      text-decoration: underline;
    }
  }
</style>
<?php
get_footer();
?>
