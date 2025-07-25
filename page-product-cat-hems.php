<?php
/*
Template Name: HEMS製品一覧
*/
get_header();
$img_path = get_stylesheet_directory_uri() . "/images";
?>
<!-- 製品詳細 ターム(HEMS) 一覧ページ -->
<main class="taxonomy-product-cat hems single-products">
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
  <?= get_field('content_1', false, false); ?>
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
              'terms'    => array('hems'), // ターム値を変更可能
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
              <img src="<?= $img_path ?>/single-product/comparison_icon_Data_communication_method.svg" alt="">
            </div>
            <p class="txt">データ通信方式</p>
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
              <img src="<?= $img_path ?>/single-product/comparison_icon_size.svg" alt="">
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
              <img src="<?= $img_path ?>/single-product/comparison_icon_Compatible appliances.svg" alt="">
            </div>
            <p class="txt">対応家電</p>
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
        <div class="row row-t">
          <div class="heading">
            <div class="imgc">
              <img src="<?= $img_path ?>/single-product/comparison_icon_Installation_Method.svg" alt="">
            </div>
            <p class="txt">設置方式</p>
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
        <div class="row row-t">
          <div class="heading">
            <div class="imgc">
              <img src="<?= $img_path ?>/single-product/comparison_icon_Operation_check.svg" alt="">
            </div>
            <p class="txt">作動確認</span></p>
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
                <p class="txt-acc">携帯</p>
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
                <p class="txt-acc">電源</p>
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
                <p class="txt-acc">使用周囲温度</p>
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
                <p class="txt-acc">保存温度</p>
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
                <p class="txt-acc">保存湿度</p>
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
                <p class="txt-acc">I/O ポート</p>
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
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">最大消費電力</p>
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
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">ACアダプタ<span class="sm">※ｺﾝｾﾝﾄﾌﾟﾗｸﾞ方向</span></p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-16"><?= wp_kses_post(get_field('product_detail_16')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt" id="compare-product-detail-16"><?= wp_kses_post(get_field('product_detail_16', $default_compare_post_id)); ?></p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">認証</p>
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
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">メーカー希望小売価格（税込）</p>
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
  <a href="<?= home_url(); ?>/ess-hems" class="btn">蓄電システム・HEMS一覧</a>
</main>
<?= get_footer(); ?>