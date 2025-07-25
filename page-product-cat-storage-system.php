<?php
/*
Template Name: 蓄電システム製品一覧
*/
get_header();
$img_path = get_stylesheet_directory_uri() . "/images";
?>
<!-- 製品詳細 ターム(蓄電システム) 一覧ページ -->
<main class="taxonomy-product-cat storage-system single-products">
  <section class="mv" style="background-image: url(<?= get_field('fv_page_img'); ?>)">
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
      <div class="prod-img"><img src="<?=get_field('top_product_img')['url'];?>" alt=""></div>
    </div>
  </section>
  <!-- // TOP -->
  <section class="lineup">
    <div class="container">
      <h2 class="ttl">ラインナップ</h2>
      <?php
      $term_slug = 'storage-system'; // このページで表示させたいターム値

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
            <option value="">容量</option>
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
            <option value="">タイプ</option>
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
      <div class="typec ready">
        <div class="type"><p class="txt">レディ型</p></div>
        <div id="ready-list" class="prod-list">
          <?php
          $args = array(
            'post_type'      => 'product',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'tax_query'      => array(
              array(
                'taxonomy' => 'product-cat',
                'field'    => 'slug',
                'terms'    => 'storage-system',
              ),
            ),
            'fields' => 'ids', // 投稿IDのみ取得して軽量化
          );
          $query = new WP_Query($args);

          $ready_items = '';
          $hybrid_items = '';

          if ($query->have_posts()) {
            foreach ($query->posts as $post_id) {
              $title      = get_the_title($post_id);
              $permalink  = get_permalink($post_id);
              $image_id   = get_post_meta($post_id, 'lineup', true);
              $image_url  = wp_get_attachment_url($image_id);
              $filter2    = get_post_meta($post_id, 'filter2', true);

              $html  = '<a class="prod-item" href="' . esc_url($permalink) . '">';
              $html .= '<div class="img"><img src="' . esc_url($image_url) . '" alt=""></div>';
              $html .= '<div class="ttl"><h3 class="name">' . esc_html($title) . '</h3></div>';
              $html .= '</a>';

              if ($filter2 === 'レディ型') {
                $ready_items .= $html;
              } elseif ($filter2 === 'ハイブリッド型') {
                $hybrid_items .= $html;
              }
            }
          }
          echo !empty($ready_items) ? $ready_items : '<p>該当する商品がありません</p>';
          ?>
        </div>
      </div>

      <div class="typec hybrid">
        <div class="type"><p class="txt">ハイブリッド型</p></div>
        <div id="hybrid-list" class="prod-list">
          <?php
          echo !empty($hybrid_items) ? $hybrid_items : '<p>該当する商品がありません</p>';
          ?>
        </div>
      </div>

      <!-- <div class="typec hybrid">
        <div class="type"><p class="txt">ハイブリッド型</p></div>
        <div id="hybrid-list" class="prod-list"></div>
      </div> -->

    </div>
  </section>
  <!-- // LINEUP -->
  <section class="compare" data-target="compare">
    <div class="wrapper">
      <h2 class="sec-ttl" id="compare">製品を比較する</h2>
      <div class="product top">
        <?php
        // **指定した2つの投稿IDをデフォルトとの比較製品として設定**
        $default_product_id = get_field('default_product'); // 任意の投稿IDを設定
        $default_compare_id = get_field('default_compare_product'); // 任意の比較対象の投稿IDを設定

        // 最新の投稿のリストを取得（セレクトボックス用）
        $args = array(
          'post_type'      => 'product',
          'posts_per_page' => -1,
          'post_status' => 'publish',
          'tax_query'      => array(
            array(
              'taxonomy' => 'product-cat',
              'field'    => 'slug',
              'terms'    => array('storage-system'), // ターム値を変更可能
            ),
          ),
        );

        $query = new WP_Query($args);
        $post_ids = [];

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
            $post_ids[get_the_ID()] = get_the_title(); // 投稿IDをキーにタイトルを保存
          }
          wp_reset_postdata();
        }

        // **投稿IDが未設定の場合は、最新の投稿を使用**
        if (!$default_product_id || !$default_compare_id) {
          $latest_posts = array_keys($post_ids); // 投稿IDを取得

          $default_product_id = $latest_posts[0] ?? null; // 最新の投稿
          $default_compare_id = $latest_posts[1] ?? null; // 2番目の投稿
        }

        // 投稿IDに基づいて画像URLを取得
        $product_image_url = esc_url(get_field('compare_img', $default_product_id)['url'] ?? '');
        $compare_image_url = esc_url(get_field('compare_img', $default_compare_id)['url'] ?? '');
        ?>

        <!-- メインの製品 -->
        <div class="item">
          <div class="imgc">
            <img id="product-image" src="<?= $product_image_url; ?>" alt="">
          </div>
          <div class="name">
            <select id="product-select" class="select-product-name">
              <?php foreach ($post_ids as $post_id => $title) : ?>
                <option value="<?= $post_id; ?>" <?= ($post_id === $default_product_id) ? 'selected' : ''; ?>>
                  <?= esc_html($title); ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <a id="product-more-link" href="<?= esc_url(get_permalink($default_product_id)); ?>" class="more">詳しく見る</a>
        </div>

        <!-- 比較対象の製品 -->
        <div class="item">
          <div class="imgc">
            <img id="compare-product-image" src="<?= $compare_image_url; ?>" alt="">
          </div>
          <div class="name">
            <select id="compare-product-select" class="select-product-name">
              <?php foreach ($post_ids as $post_id => $title) : ?>
                <option value="<?= $post_id; ?>" <?= ($post_id === $default_compare_id) ? 'selected' : ''; ?>>
                  <?= esc_html($title); ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
          <a id="compare-product-more-link" href="<?= esc_url(get_permalink($default_compare_id)); ?>" class="more">詳しく見る</a>
        </div>


      </div>
      <div class="table table-visible">
        <div class="row row-t">
          <div class="heading">
            <div class="imgc">
              <img src="<?= $img_path ?>/single-product/PDH_comparison_icon_1.svg" alt="">
            </div>
            <p class="txt">蓄電容量</p>
          </div>
          <div class="product">
            <div class="item">
              <p class="data-txt" id="product-detail-1"><?= wp_kses_post(get_field('product_detail_1')); ?></p>
            </div>
            <div class="item">
              <p class="data-txt" id="compare-product-detail-1"><?= wp_kses_post(get_field('product_detail_1', $default_compare_post_id)); ?></p>
            </div>
          </div>
        </div>
        <div class="row row-t">
          <div class="heading">
            <div class="imgc">
              <img src="<?= $img_path ?>/single-product/PDH_comparison_icon_2.svg" alt="">
            </div>
            <p class="txt">寸法（高さx横x奥行）</p>
          </div>
          <div class="product">
            <div class="item">
              <p class="data-txt" id="product-detail-2"><?= wp_kses_post(get_field('product_detail_2')); ?></p>
            </div>
            <div class="item">
              <p class="data-txt" id="compare-product-detail-2"><?= wp_kses_post(get_field('product_detail_2', $default_compare_post_id)); ?></p>
            </div>
          </div>
        </div>
        <div class="row row-t">
          <div class="heading">
            <div class="imgc">
              <img src="<?= $img_path ?>/single-product/PDH_comparison_icon_3.svg" alt="">
            </div>
            <p class="txt">蓄電池ユニット2台使用</p>
          </div>
          <div class="product">
            <div class="item">
              <p class="data-txt" id="product-detail-18"><?= wp_kses_post(get_field('product_detail_18')); ?></p>
            </div>
            <div class="item">
              <p class="data-txt" id="compare-product-detail-18"><?= wp_kses_post(get_field('product_detail_18', $default_compare_post_id)); ?></p>
            </div>
          </div>
        </div>
        <div class="row row-t">
          <div class="heading">
            <div class="imgc">
              <img src="<?= $img_path ?>/single-product/PDH_comparison_icon_4.svg" alt="">
            </div>
            <p class="txt">保証</p>
          </div>
          <div class="product">
            <div class="item">
              <p class="data-txt" id="product-detail-19"><?= wp_kses_post(get_field('product_detail_19')); ?></p>
            </div>
            <div class="item">
              <p class="data-txt" id="compare-product-detail-19"><?= wp_kses_post(get_field('product_detail_19', $default_compare_post_id)); ?></p>
            </div>
          </div>
        </div>
        <div class="row row-t">
          <div class="heading">
            <div class="imgc">
              <img src="<?= $img_path ?>/single-product/PDH_comparison_icon_5.svg" alt="">
            </div>
            <p class="txt">200V機器対応</p>
          </div>
          <div class="product">
            <div class="item">
              <p class="data-txt" id="product-detail-20"><?= wp_kses_post(get_field('product_detail_20')); ?></p>
            </div>
            <div class="item">
              <p class="data-txt" id="compare-product-detail-20"><?= wp_kses_post(get_field('product_detail_20', $default_compare_post_id)); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion typeA">
        <div class="accordion-content">
          <div class="table">
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">型名</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-3"><?= wp_kses_post(get_field('product_detail_3')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt" id="compare-product-detail-3"><?= wp_kses_post(get_field('product_detail_3', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">重量</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-4"><?= wp_kses_post(get_field('product_detail_4')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt" id="compare-product-detail-4"><?= wp_kses_post(get_field('product_detail_4', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">蓄電池<span class="fs-8">※1</span></p>
              </div>
              <div class="product-table">
                <div class="product-table-row">
                  <p class="detail-label">種類</p>
                  <p class="detail-data" id="product-detail-5"><?= wp_kses_post(get_field('product_detail_5')); ?></p>
                  <p class="detail-data" id="compare-product-detail-5"><?= wp_kses_post(get_field('product_detail_5', $default_compare_post_id)); ?></p>
                </div>
                <div class="product-table-row">
                  <p class="detail-label">蓄電容量</p>
                  <p class="detail-data" id="product-detail-6"><?= wp_kses_post(get_field('product_detail_6')); ?></p>
                  <p class="detail-data" id="compare-product-detail-6"><?= wp_kses_post(get_field('product_detail_6', $default_compare_post_id)); ?></p>
                </div>
                <div class="product-table-row">
                  <p class="detail-label">定格電圧</p>
                  <p class="detail-data" id="product-detail-7"><?= wp_kses_post(get_field('product_detail_7')); ?></p>
                  <p class="detail-data" id="compare-product-detail-7"><?= wp_kses_post(get_field('product_detail_7', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">入力 5.9kVA<br class="none-max-t"><span class="fs-10">（最大需要電力AC5.9kVA）</span></p>
              </div>
              <div class="product-table">
                <div class="product-table-row">
                  <p class="detail-label">回路数<br class="none-max-t">（太陽光）</p>
                  <p class="detail-data" id="product-detail-8"><?= wp_kses_post(get_field('product_detail_8')); ?></p>
                  <p class="detail-data" id="compare-product-detail-8"><?= wp_kses_post(get_field('product_detail_8', $default_compare_post_id)); ?></p>
                </div>
                <div class="product-table-row">
                  <p class="detail-label">最大電流<br class="none-max-t">（太陽光）</p>
                  <p class="detail-data" id="product-detail-9"><?= wp_kses_post(get_field('product_detail_9')); ?></p>
                  <p class="detail-data" id="compare-product-detail-9"><?= wp_kses_post(get_field('product_detail_9', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">出力 6.0kVA<br class="none-max-t"><span class="fs-10">（力率0.95のとき5.7kW）</span></p>
              </div>
              <div class="product-table">
                <div class="product-table-row">
                  <p class="detail-label">連携出力</p>
                  <p class="detail-data" id="product-detail-10"><?= wp_kses_post(get_field('product_detail_10')); ?></p>
                  <p class="detail-data" id="compare-product-detail-10"><?= wp_kses_post(get_field('product_detail_10', $default_compare_post_id)); ?></p>
                </div>
                <div class="product-table-row">
                  <p class="detail-label">自立出力</p>
                  <p class="detail-data" id="product-detail-11"><?= wp_kses_post(get_field('product_detail_11')); ?></p>
                  <p class="detail-data" id="compare-product-detail-11"><?= wp_kses_post(get_field('product_detail_11', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">対応負荷容量</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-12"><?= wp_kses_post(get_field('product_detail_12')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt" id="compare-product-detail-12"><?= wp_kses_post(get_field('product_detail_12', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">充電回復時間</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-13"><?= wp_kses_post(get_field('product_detail_13')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt" id="compare-product-detail-13"><?= wp_kses_post(get_field('product_detail_13', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">環境</p>
              </div>
              <div class="product-table">
                <div class="product-table-row">
                  <p class="detail-label">動作温度<span class="fs-8">※2</span></p>
                  <p class="detail-data" id="product-detail-14"><?= wp_kses_post(get_field('product_detail_14')); ?></p>
                  <p class="detail-data" id="compare-product-detail-14"><?= wp_kses_post(get_field('product_detail_14', $default_compare_post_id)); ?></p>
                </div>
                <div class="product-table-row">
                  <p class="detail-label">動作温度</p>
                  <p class="detail-data" id="product-detail-15"><?= wp_kses_post(get_field('product_detail_15')); ?></p>
                  <p class="detail-data" id="compare-product-detail-15"><?= wp_kses_post(get_field('product_detail_15', $default_compare_post_id)); ?></p>
                </div>
                <div class="product-table-row">
                  <p class="detail-label">設置場所<span class="fs-8">※3</span></p>
                  <p class="detail-data" id="product-detail-16"><?= wp_kses_post(get_field('product_detail_16')); ?></p>
                  <p class="detail-data" id="compare-product-detail-16"><?= wp_kses_post(get_field('product_detail_16', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">メーカー希望小売価格（税込）</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-17"><?= wp_kses_post(get_field('product_detail_17')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt" id="compare-product-detail-17"><?= wp_kses_post(get_field('product_detail_17', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
          </div>
          <p class="acc-note">※100V/200Vで使用できる電力が異なります。</p>
        </div>
        <div class="accordion-btn">
          <p class="txt">すべての仕様を比較</p>
          <span class="icon"></span>
        </div>
      </div>
    </div>
  </section>
  <!-- //compare -->
  <a href="<?= home_url(); ?>/product-list/" class="btn">製品・システム 一覧</a>
</main>
<?= get_footer(); ?>