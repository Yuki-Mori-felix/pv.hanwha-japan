<?php get_header(); ?>
<?php
/*
	Template Name: HEMS
	Template Post Type: product
	*/

//画像パス
$img_path = get_stylesheet_directory_uri() . "/images";
?>
<main class="single-products hems">

  <section class="top_product_logo">
    <div class="wrapper">
      <p class="logo-txt">HEMS</p>
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
        'terms'    => 'hems', // 太陽光パネルのスラッグ（適宜変更）
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
            <?php if (get_field('hems_banner')): ?>
              <a href="<?= get_field('hems_banner'); ?>" class="eneconnect-banner">
                <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/ENECONECT_banner_01.png" alt="エネコネクトの節電サポート 詳しくはこちら">
              </a>
            <?php endif; ?>
          </div>
          <div class="right">
            <?php if (get_field('new_switch')): ?>
              <p class="new">NEW</p>
            <?php endif; ?>
            <h2 class="product-name"><?= the_title(); ?></h2>
            <p class="product-maker"><?= wp_kses_post(the_field('manufacturer')); ?></p>
            <h3 class="description"><?= the_field('product_name_blue'); ?></h3>
            <ul class="tag">
              <li class="tag-item"><?= the_field('feat_1'); ?></li>
              <li class="tag-item"><?= the_field('feat_2'); ?></li>
              <li class="tag-item"><?= the_field('feat_3'); ?></li>
            </ul>
            <?= get_field('product_detail_area', false, false); ?>
            <!-- <ul class="spec01">
              <li class="spec01-item">
                <p class="txt"><span class="bold">データ通信方式</span><br><?= the_field('product_detail_1'); ?></p>
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
                    <p class="label">携帯</p>
                    <p class="data"><?= the_field('product_detail_5'); ?></p>
                  </li>
                  <li class="spec03-item">
                    <p class="label">対応家電</p>
                    <p class="data"><?= the_field('product_detail_6'); ?></p>
                  </li>
                  <li class="spec03-item">
                    <p class="label">電源</p>
                    <p class="data"><?= the_field('product_detail_7'); ?></p>
                  </li>
                  <li class="spec03-item">
                    <p class="label">設置方式</p>
                    <p class="data"><?= the_field('product_detail_8'); ?></p>
                  </li>
                  <li class="spec03-item">
                    <p class="label">メーカー希望小売価格（税込）</p>
                    <p class="data"><?= the_field('product_detail_9'); ?></p>
                  </li>
                </ul>
              </div>
              <div class="accordion-btn">
                <p class="txt">製品仕様を詳しく見る</p>
                <span class="icon"></span>
              </div>
            </div> -->
            <div class="info-links">
              <a href="<?= the_field('web_catalog'); ?>" class="link web" target="_blank" rel="noopener noreferrer">WEBカタログ<img src="<?= $img_path ?>/single-product/book-open.svg" alt=""></a>
              <a href="<?= the_field('catalog_pdf'); ?>" class="link pdf">カタログPDF<img src="<?= $img_path ?>/single-product/download-icon.svg" alt=""></a>
              <div href="" class="share">シェアする<a href="<?= the_field('share'); ?>" class="round"><img src="<?= $img_path ?>/single-product/share-icon.svg" alt=""></a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- //overview -->

      <?= the_field('sec_component', false, false); ?>
      <!-- //component -->

      <?= the_field('sec_feat', false, false); ?>
      <!-- //feature -->


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
                  'terms'    => array('hems'),
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
                  'terms'    => array('hems'),
                ),
              ),
              'orderby'        => 'date',
              'order'          => 'DESC',
            );

            $query = new WP_Query($args);

            // デフォルトの比較対象を設定
            $default_compare_post_id = 852; // 比較対象の投稿ID
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
      <a href="<?= home_url(); ?>/proudct-list/hems/" class="banner">
        <img src="<?= $img_path ?>/single-product/Product details_banner.png" alt="蓄電システム・HEMS 製品一覧ページへ">
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
