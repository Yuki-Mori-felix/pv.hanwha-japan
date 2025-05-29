<?php
/*
Template Name: Re.RISE®製品一覧
*/ 
get_header();
$img_path = get_stylesheet_directory_uri() . "/images";
?>
<!-- 製品詳細 ターム(Re.RISE) 一覧ページ -->
<main class="taxonomy-product-cat re-rise">
  <section class="mv mv-re-rise">
    <div class="container">
      <div class="ttlc">
        <p class="prod-name"><?= get_field('title_main'); ?></p>
        <h2 class="ttl"><?= get_field('title_sub') ?></h2>
      </div>
    </div>
  </section>
  <!-- // MV -->
  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>
  <section class="top">
    <div class="container">
      <div class="share">
        <div class="img"><img src="<?=$img_path?>/tax-prod-cat/share-no1.png" alt=""></div>
        <div class="img"><img src="<?=$img_path?>/tax-prod-cat/top-share.png" alt=""></div>
      </div>
      <div class="panel"><img src="<?=$img_path?>/tax-prod-cat/panel-re-rise.png" alt=""></div>
    </div>
  </section>
  <!-- // TOP -->
  <section class="intro bg-re-rise">
    <div class="container">
      <div class="img"><img src="<?=$img_path?>/tax-prod-cat/logo-re-rise.png" alt=""></div>
      <div class="ctt">
        <p class="name col-re-rise">Re.RISE<sup>®</sup></p>
        <p class="txt"><?= get_field('description'); ?></p>
      </div>
    </div>
  </section>
  <!-- // INTRO -->
  <section class="lineup">
    <div class="container">
      <h2 class="ttl">ラインナップ</h2>
      <?php
      $term_slug = 're-rise'; // このページで表示させたいターム値

      $filter1_choices = [];
      $filter2_choices = [];
      $acf_filter1_choices = [];
      $acf_filter2_choices = [];

      $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1,
        'tax_query'      => array(
          array(
            'taxonomy' => 'product-cat',
            'field'    => 'slug',
            'terms'    => $term_slug,
          ),
        ),
      );
      $the_query = new WP_Query($args);

      if ($the_query->have_posts()):
        while ($the_query->have_posts()): $the_query->the_post();
          // 各投稿のコンテキストでフィールドオブジェクトを取得
          $acf_filter1_object = get_field_object('filter1');
          $acf_filter2_object = get_field_object('filter2');

          // フィールドオブジェクトが取得できた場合、選択肢をセット
          if ($acf_filter1_object) {
            $acf_filter1_choices = $acf_filter1_object['choices']; // 各投稿が選択できる値
          }
          if ($acf_filter2_object) {
            $acf_filter2_choices = $acf_filter2_object['choices']; // 各投稿が選択できる値
          }

          // 各投稿が選択した値を取得
          $filter1_value = get_field('filter1');
          $filter2_value = get_field('filter2');

          if ($filter1_value && isset($acf_filter1_choices[$filter1_value])) {
            $filter1_choices[$filter1_value] = $acf_filter1_choices[$filter1_value]; // ACF順で取得
          }
          if ($filter2_value && isset($acf_filter2_choices[$filter2_value])) {
            $filter2_choices[$filter2_value] = $acf_filter2_choices[$filter2_value]; // ACF順で取得
          }
        endwhile;
        wp_reset_postdata();
      endif;
      ?>

      <!-- フィルタリング用セレクトボックス -->
      <div class="choose">
        <button class="all">ALL</button>
        <div class="series">
          <select id="filter1" class="select">
            <option value="">シリーズを選択</option>
            <?php
            foreach ($acf_filter1_choices as $choice_key => $choice_value):
              if (isset($filter1_choices[$choice_key])): ?>
                <option value="<?php echo esc_attr($choice_key); ?>"><?php echo esc_html($choice_value); ?></option>
            <?php endif;
            endforeach;
            ?>
          </select>
        </div>
        <div class="size">
          <select id="filter2" class="select">
            <option value="">カテゴリを選択</option>
            <?php
            foreach ($acf_filter2_choices as $choice_key => $choice_value):
              if (isset($filter2_choices[$choice_key])): ?>
                <option value="<?php echo esc_attr($choice_key); ?>"><?php echo esc_html($choice_value); ?></option>
            <?php endif;
            endforeach;
            ?>
          </select>
        </div>
      </div>


      <!-- sort-product-cat.jsにターム値を取得させる -->
      <div id="product-term" data-term="<?php echo esc_attr($term_slug); ?>"></div>

      <!-- 商品一覧（AJAXで更新） -->
      <div class="prod-list"></div>

    </div>
  </section>
  <!-- // LINEUP -->
</main>
<!-- // TAXONOMY_PRODUCTS_CAT RE_RISE -->
<?=get_footer();?>