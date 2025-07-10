<?php get_header(); ?>
<?php
/*
	Template Name: 蓄電システム
	Template Post Type: product
	*/

//画像パス
$img_path = get_stylesheet_directory_uri() . "/images";
?>
<main class="single-products e_storage_system">

  <section class="top_product_logo">
    <div class="wrapper">
      <p class="logo-txt">蓄電システム</p>
    </div>
  </section>
  <!-- //top_product_logo -->

  <?php
  $args = array(
    'post_type'      => 'product', // カスタム投稿タイプを指定
    'posts_per_page' => 1, // 1件のみ取得
    'p' => get_queried_object_id(), // 現在の投稿IDを取得
    'tax_query'      => array(
      array(
        'taxonomy' => 'product-cat', // カスタムタクソノミーを指定
        'field'    => 'slug', // スラッグで指定
        'terms'    => 'storage-system', // 太陽光パネルのスラッグ（適宜変更）
      ),
    ),
  );
  $query = new WP_Query($args);
  ?>

  <?php if ($query->have_posts()) : ?>
    <?php while ($query->have_posts()) : $query->the_post(); ?>
      <section class="overview" id="overview" data-target="overview">
        <div class="wrapper">
          <div class="left">
            <p class="per_page" id="per_page"></p>
            <div class="gallery">
              <div class="splide" id="splide-L" role="group" aria-label="商品詳細メインスライダー">
                <div class="splide__track">
                  <ul class="splide__list">
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                      $image = get_field("image{$i}");
                      if (!empty($image['url'])) {
                        echo '<li class="splide__slide"><img src="' . esc_url($image['url']) . '" alt=""></li>';
                      }
                    }
                    ?>
                  </ul>
                </div>
              </div>
              <div class="splide" id="splide-S" aria-label="商品詳細サムネイルスライダー">
                <div class="splide__track">
                  <div div class="splide__list">
                    <?php
                    for ($i = 1; $i <= 5; $i++) {
                      $image = get_field("image{$i}");
                      if (!empty($image['url'])) {
                        echo '<li class="splide__slide"><img src="' . esc_url($image['url']) . '" alt=""></li>';
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>
              <?php if (get_field('web_ar')): ?>
                <div class="web-ar" id="web-ar">
                  <img src="<?= $img_path ?>/single-product/web-ar.svg" alt="3D">
                </div>
              <?php endif; ?>
            </div>
            <ul class="ess_certification">
              <li class="ess_ctf-item-1">
                <img src="<?= $img_path ?>/single-product/guarantee_15year_icon_small.png" alt="最長15年保証">
              </li>
              <li class="ess_ctf-item-2">
                <p class="txt">全負荷型</p>
              </li>
              <li class="ess_ctf-item-3">
                <p class="txt">屋外設置</p>
              </li>
            </ul>
          </div>
          <div class="right">
            <?php if (get_field('model')): ?>
              <p class="format"><?= get_field('model'); ?></p>
            <?php endif; ?>
            <h2 class="product-name"><?= the_title(); ?></h2>
            <p class="product-maker"><?= the_field('manufacturer') ?></p>
            <h3 class="description"><?= the_field('product_name_blue'); ?></h3>
            <ul class="tag">
              <li class="tag-item"><?= the_field('feat_1'); ?></li>
              <li class="tag-item"><?= the_field('feat_2'); ?></li>
              <li class="tag-item"><?= the_field('feat_3'); ?></li>
            </ul>
            <?= get_field('product_detail_area', false, false); ?>
            <!-- <ul class="spec01">
              <li class="spec01-item">
                <p class="txt"><span class="bold">蓄電地容量</span><br><?= the_field('product_detail_1'); ?></p>
              </li>
              <li class="spec01-item">
                <p class="txt"><span class="bold">寸法（横X高さX奥行）</span><br><?= the_field('product_detail_2'); ?></p>
              </li>
            </ul>
            <ul class="spec02">
              <li class="spec02-item">
                <p class="label">型名</p>
                <p class="data"><?= the_field('product_detail_3'); ?></p>
              </li>
              <li class="spec02-item">
                <p class="label">重量</p>
                <p class="data"><?= the_field('product_detail_4'); ?></p>
              </li>
            </ul>
            <div class="accordion typeA">
              <div class="accordion-content">
                <ul class="spec03">
                  <li class="spec03-item">
                    <p class="label">蓄電池<span class="fs-8">※1</span></p>
                    <div class="detail">
                      <div class="detail-row">
                        <p class="detail-label">種類</p>
                        <p class="detail-data"><?= the_field('product_detail_5'); ?></p>
                      </div>
                      <div class="detail-row">
                        <p class="detail-label">蓄電容量</p>
                        <p class="detail-data"><?= the_field('product_detail_6'); ?></p>
                      </div>
                      <div class="detail-row">
                        <p class="detail-label">定格電圧</p>
                        <p class="detail-data"><?= the_field('product_detail_7'); ?></p>
                      </div>
                    </div>
                  </li>
                  <li class="spec03-item">
                    <p class="label">入力 5.9kVA<br class="none-max-t"><span class="fs-10">（最大需要電力AC5.9kVA）</span></p>
                    <div class="detail">
                      <div class="detail-row">
                        <p class="detail-label">回路数<br class="none-max-t">（太陽光）</p>
                        <p class="detail-data"><?= the_field('product_detail_8'); ?></p>
                      </div>
                      <div class="detail-row">
                        <p class="detail-label">最大電流<br class="none-max-t">（太陽光）</p>
                        <p class="detail-data"><?= the_field('product_detail_9'); ?></p>
                      </div>
                    </div>
                  </li>
                  <li class="spec03-item">
                    <p class="label">出力 6.0kVA<br class="none-max-t"><span class="fs-10">（力率0.95のとき5.7kW）</span></p>
                    <div class="detail">
                      <div class="detail-row">
                        <p class="detail-label">連携出力</p>
                        <p class="detail-data"><?= the_field('product_detail_10'); ?></p>
                      </div>
                      <div class="detail-row">
                        <p class="detail-label">自立出力</p>
                        <p class="detail-data"><?= the_field('product_detail_11'); ?></p>
                      </div>
                    </div>
                  </li>
                  <li class="spec03-item">
                    <p class="label">対応負荷容量</p>
                    <p class="data"><?= the_field('product_detail_12'); ?></p>
                  </li>
                  <li class="spec03-item">
                    <p class="label">充電回復時間</p>
                    <p class="data"><?= the_field('product_detail_13'); ?></p>
                  </li>
                  <li class="spec03-item">
                    <p class="label">環境</p>
                    <div class="detail">
                      <div class="detail-row">
                        <p class="detail-label">動作温度<span class="fs-8">※2</span></p>
                        <p class="detail-data"><?= the_field('product_detail_14'); ?></p>
                      </div>
                      <div class="detail-row">
                        <p class="detail-label">動作温度</p>
                        <p class="detail-data"><?= the_field('product_detail_15'); ?></p>
                      </div>
                      <div class="detail-row">
                        <p class="detail-label">設置場所<span class="fs-8">※3</span></p>
                        <p class="detail-data"><?= the_field('product_detail_16'); ?></p>
                      </div>
                    </div>
                  </li>
                  <li class="spec03-item">
                    <p class="label">メーカー希望小売価格（税込）</p>
                    <p class="data"><?= the_field('product_detail_17'); ?></p>
                  </li>
                </ul>
                <p class="note">※100V/200Vで使用できる電力が異なります。</p>
                <p class="note">
                  <br>
                  ※1 初期実行容量の50％以下になった場合、蓄電システムは安全上充放電等の動作を停止します。ただしパワーコンディショナは動作し、太陽光による発電を継続します。<br>
                  ※2 本体に内蔵された温度センサ計測値。周囲温度により出力を抑制する場合があります。<br>
                  ※3 屋外の場合は、重塩害・塩害地域や省エネルギー基準区分8地域を除く。
                </p>
              </div>
              <div class="accordion-btn">
                <p class="txt">製品仕様を詳しく見る</p>
                <span class="icon"></span>
              </div>
            </div> -->
            <div class="info-links">
              <a href="<?= the_field('web_catalog'); ?>" class="link web">WEBカタログ<img src="<?= $img_path ?>/single-product/book-open.svg" alt=""></a>
              <a href="<?= the_field('catalog_pdf'); ?>" class="link pdf">カタログPDF<img src="<?= $img_path ?>/single-product/download-icon.svg" alt=""></a>
              <div href="#" class="share">シェアする<a href="<?= the_field('share'); ?>" class="round"><img src="<?= $img_path ?>/single-product/share-icon.svg" alt=""></a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- //overview -->


      <?= the_field('sec_feat', false, false) ?>
      <!-- //feature -->


      <?= the_field('sec_warranty', false, false) ?>
      <!-- //warranty -->


      <?= the_field('sec_component', false, false); ?>
      <!-- //component -->


      <?= the_field('sec_guide', false, false); ?>
      <!-- //guide -->


      <?= the_field('sec_support', false, false); ?>
      <!-- //support -->

    <?php endwhile; ?>
  <?php endif;
  wp_reset_postdata(); ?>

  <section class="compare" data-target="compare">
    <div class="wrapper">
      <h2 class="sec-ttl" id="compare">製品を比較する</h2>
      <div class="product top">
        <div class="item">
          <div class="imgc">
            <img id="product-image" src="<?= esc_url(get_field('image1')['url']); ?>" alt="">
          </div>
          <div class="name">
            <?php
            $current_post_id = get_queried_object_id();
            $current_post_url = get_permalink($current_post_id);
            $args = array(
              'post_type'      => 'product',
              'posts_per_page' => -1,
              'tax_query'      => array(
                array(
                  'taxonomy' => 'product-cat',
                  'field'    => 'slug',
                  'terms'    => array('storage-system'),
                ),
              ),
            );

            $query = new WP_Query($args);
            ?>

            <select id="product-select" class="select-product-name">
              <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                  <option value="<?php echo get_the_ID(); ?>" <?php selected(get_the_ID(), $current_post_id); ?>>
                    <?php the_title(); ?>
                  </option>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              <?php endif; ?>
            </select>
          </div>
          <a id="product-more-link" href="<?= esc_url($current_post_url); ?>" class="more">詳しく見る</a>
        </div>

        <div class="item">
          <div class="imgc">
            <?php
            $current_post_id = get_queried_object_id();

            // 最新順で投稿を取得
            $args = array(
              'post_type'      => 'product',
              'posts_per_page' => -1,
              'tax_query'      => array(
                array(
                  'taxonomy' => 'product-cat',
                  'field'    => 'slug',
                  'terms'    => array('storage-system'),
                ),
              ),
              'orderby'        => 'date',
              'order'          => 'DESC',
            );

            $query = new WP_Query($args);

            // デフォルトの比較対象を設定
            $default_compare_post_id = 2119;
            $available_post_ids = [];

            if ($query->have_posts()) {
              while ($query->have_posts()) {
                $query->the_post();
                if (get_the_ID() !== $current_post_id) {
                  $available_post_ids[] = get_the_ID();
                }
              }
              wp_reset_postdata();
            }

            // 比較対象の投稿がある場合のみ条件で上書き
            if (!empty($available_post_ids)) {
              if ($current_post_id == $default_compare_post_id) {
                // 現在の投稿が比較対象の投稿と同じ場合：現在の投稿を除く最新投稿を取得
                foreach ($available_post_ids as $id) {
                  if ($id != $default_compare_post_id) {
                    $default_compare_post_id = $id;
                    break;
                  }
                }
              } elseif (!in_array($default_compare_post_id, $available_post_ids)) {
                // 比較対象の投稿IDがそもそも存在しない場合
                $default_compare_post_id = $available_post_ids[0];
              }
            }

            // 比較対象の投稿の画像を取得
            $compare_image = (!empty($default_compare_post_id)) ? get_field('image1', $default_compare_post_id) : null;
            $compare_image_url = (!empty($compare_image['url'])) ? esc_url($compare_image['url']) : $img_path . '/single-product/default-image.jpg'; // 代替画像を設定
            ?>
            <img id="compare-product-image" src="<?= $compare_image_url; ?>" alt="">
          </div>
          <div class="name">
            <?php $compare_post_url = (!empty($default_compare_post_id)) ? get_permalink($default_compare_post_id) : '#'; ?>
            <select id="compare-product-select" class="select-product-name">
              <?php if (!empty($available_post_ids)) : ?>
                <?php foreach ($available_post_ids as $post_id) : ?>
                  <?php
                  $post_object = get_post($post_id);
                  ?>
                  <option value="<?php echo $post_id; ?>" <?php echo (intval($post_id) === intval($default_compare_post_id)) ? 'selected' : ''; ?>>
                    <?php echo wp_kses_post($post_object->post_title); ?>
                  </option>
                <?php endforeach; ?>
              <?php else : ?>
                <option value="">比較対象の投稿がありません</option>
              <?php endif; ?>
            </select>
          </div>
          <a id="compare-product-more-link" href="<?= esc_url($compare_post_url); ?>" class="more">詳しく見る</a>
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
      <a href="<?= home_url(); ?>/proudct-list/storage-system/" class="banner">
        <img src="<?= $img_path ?>/single-product/PDH_HEMS_Product details_banner.png" alt="蓄電システム・HEMS製品一覧ページへ">
      </a>
    </div>
  </section>
  <!-- //compare -->


  <div class="fixed-anchor">
  </div>
  <!-- //fixed-anchor -->

  <div class="modal-window" id="modal-window">
    <div class="modal-wrap">
      <div class="frame">
        <div class="content">
          <model-viewer
            alt="3D"
            src="<?= get_field('web_ar') ?>"
            ar
            environment-image=""
            poster=""
            shadow-intensity="1"
            camera-controls
            touch-action="pan-y">
          </model-viewer>
        </div>
      </div>
      <div class="close">
        <div class="close-btn"></div>
        <p class="txt">閉じる</p>
      </div>
    </div>
  </div>
  <!-- //modal-window -->

</main>
<?php
get_footer();