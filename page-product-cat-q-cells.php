<?php
/*
Template Name: Qcells製品一覧
*/ 
get_header();
$img_path = get_stylesheet_directory_uri() . "/images";
?>
<!-- 製品詳細 ターム(Qcells) 一覧ページ -->
<main class="taxonomy-product-cat q-cells single-products">
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
      <div class="share">
        <div class="img"><img src="<?=$img_path?>/tax-prod-cat/share-no1.png" alt=""></div>
        <div class="img"><img src="<?=$img_path?>/tax-prod-cat/top-share.png" alt=""></div>
      </div>
      <div class="prod-img"><img src="<?=get_field('top_product_img')['url'];?>" alt=""></div>
    </div>
  </section>
  <!-- // TOP -->
  <section class="intro bg-q-cells">
    <div class="container">
      <div class="img"><img src="<?=$img_path?>/tax-prod-cat/logo-qcells.png" alt=""></div>
      <div class="ctt">
        <p class="name col-q-cells">Qcells</p>
        <p class="txt"><?= get_field('description'); ?></p>
      </div>
    </div>
  </section>
  <!-- // INTRO -->
  <section class="lineup">
    <div class="container">
      <h2 class="ttl">ラインナップ</h2>
      <?php
      $term_slug = 'q-cells'; // このページで表示させたいターム値

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
            <option value="">シリーズ</option>
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
            <option value="">サイズ</option>
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
      <div class="prod-list">
        <?php
          $args = array(
            'post_type'      => 'product',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
            'tax_query'      => array(
              array(
                'taxonomy' => 'product-cat',
                'field'    => 'slug',
                'terms'    => $term_slug,
              ),
            ),
            'fields' => 'ids', // 投稿IDのみ取得で高速化
          );

          $query = new WP_Query($args);

          if ($query->have_posts()) {
            foreach ($query->posts as $post_id) {
              $title      = get_the_title($post_id);
              $permalink  = get_permalink($post_id);
              $image_data = get_post_meta($post_id, 'lineup', true);
              $new_switch = get_post_meta($post_id, 'new_switch', true);

              // 画像取得（ACFが画像ID保存形式の場合）
              $image_url = is_numeric($image_data)
                ? wp_get_attachment_url($image_data)
                : (is_array($image_data) && isset($image_data['url']) ? $image_data['url'] : '');

              ?>
              <a class="prod-item" href="<?php echo esc_url($permalink); ?>">
                <div class="img">
                  <?php if ($image_url): ?>
                    <img src="<?php echo esc_url($image_url); ?>" alt="">
                  <?php else: ?>
                    <img src="/path/to/default.jpg" alt="No image">
                  <?php endif; ?>
                </div>
                <div class="ttl">
                  <?php if ($new_switch === '1'): ?>
                    <p class="new">NEW</p>
                  <?php endif; ?>
                  <h3 class="name"><?php echo esc_html($title); ?></h3>
                </div>
              </a>
              <?php
            }
          } else {
            echo '<p>該当する商品がありません</p>';
          }

          wp_reset_postdata();
        ?>
      </div>
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
              'terms'    => array('q-cells'), // ターム値を変更可能
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
              <img src="<?= $img_path ?>/single-product/compare_icon_1.svg" alt="">
            </div>
            <p class="txt">公称最大出力<span class="sm">（+5W / -0W）</span></p>
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
              <img src="<?= $img_path ?>/single-product/compare_icon_2.svg" alt="">
            </div>
            <p class="txt">最大変換効率</p>
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
              <img src="<?= $img_path ?>/single-product/compare_icon_3.svg" alt="">
            </div>
            <p class="txt">外形寸法<span class="sm">（横×高さ×奥行）</span></p>
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
        <div class="row row-t">
          <div class="heading">
            <div class="imgc">
              <img src="<?= $img_path ?>/single-product/compare_icon_4.svg" alt="">
            </div>
            <p class="txt">保証</p>
          </div>
          <div class="product">
            <div class="item">
              <p class="data-txt" id="product-detail-15"><?= wp_kses_post(get_field('product_detail_15')); ?></p>
            </div>
            <div class="item">
              <p class="data-txt" id="compare-product-detail-15"><?= wp_kses_post(get_field('product_detail_15', $default_compare_post_id)); ?></p>
            </div>
          </div>
        </div>
        <div class="row row-t">
          <div class="heading">
            <div class="imgc">
              <img src="<?= $img_path ?>/single-product/compare_icon_5.svg" alt="">
            </div>
            <p class="txt">メーカー希望小売価格<span class="sm">（税込）</span></p>
          </div>
          <div class="product">
            <div class="item">
              <p class="data-txt" id="product-detail-14"><?= wp_kses_post(get_field('product_detail_14')); ?></p>
            </div>
            <div class="item">
              <p class="data-txt" id="compare-product-detail-14"><?= wp_kses_post(get_field('product_detail_14', $default_compare_post_id)); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="accordion typeA">
        <div class="accordion-content">
          <div class="table">
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">公称短絡電流（Isc）</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-5"><?= wp_kses_post(get_field('product_detail_5')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt" id="compare-product-detail-5"><?= wp_kses_post(get_field('product_detail_5', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">公称開放電圧（Voc）</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-6"><?= wp_kses_post(get_field('product_detail_6')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt" id="compare-product-detail-6"><?= wp_kses_post(get_field('product_detail_6', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">公称最大出力動作電流（Imp）</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-7"><?= wp_kses_post(get_field('product_detail_7')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt" id="compare-product-detail-7"><?= wp_kses_post(get_field('product_detail_7', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">公称最大出力動作電圧（Vmp）</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-8"><?= wp_kses_post(get_field('product_detail_8')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt" id="compare-product-detail-8"><?= wp_kses_post(get_field('product_detail_8', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">質量</p>
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
                <p class="txt-acc">フレーム材料</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-9"><?= wp_kses_post(get_field('product_detail_9')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt" id="compare-product-detail-9"><?= wp_kses_post(get_field('product_detail_9', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">セル</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-10"><?= wp_kses_post(get_field('product_detail_10')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt" id="compare-product-detail-10"><?= wp_kses_post(get_field('product_detail_10', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">防汚テック防汚仕様</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-11"><?= wp_kses_post(get_field('product_detail_11')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt" id="compare-product-detail-11"><?= wp_kses_post(get_field('product_detail_11', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">最大システム電圧（Vsys）</p>
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
                <p class="txt-acc">最大圧風荷重 / 最大表面荷重</p>
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
          </div>
        </div>
        <div class="accordion-btn">
          <p class="txt">すべての仕様を比較</p>
          <span class="icon"></span>
        </div>
      </div>
      <a href="<?= home_url(); ?>/product-list/" class="btn">製品・システム 一覧</a>
    </div>
  </section>
  <!-- //compare -->
</main>
<!-- // TAXONOMY_PRODUCTS_CAT Q_CELLS -->
<?=get_footer();?>