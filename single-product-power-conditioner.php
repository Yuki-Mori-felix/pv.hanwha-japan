<?php get_header(); ?>
<?php
/*
	Template Name: パワーコンディショナ
	Template Post Type: product
	*/

//画像パス
$img_path = get_stylesheet_directory_uri() . "/images";
?>
<main class="single-products power_conditioner">


  <section class="top_product_logo">
    <div class="wrapper">
      <p class="logo-txt">パワーコンディショナ</p>
    </div>
  </section>
  <!-- //top_product_logo -->


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
        <ul class="pcs_certification">
          <li class="pcs_ctf-item-1">
            <img src="<?= get_field('image6')['url']; ?>" alt="<?= get_field('image6')['alt']; ?>">
          </li>
          <li class="pcs_ctf-item-1">
            <img src="<?= get_field('image7')['url']; ?>" alt="<?= get_field('image7')['alt']; ?>">
          </li>
        </ul>
      </div>
      <div class="right">
        <?php if (get_field('new_switch')): ?>
          <p class="new">NEW</p>
        <?php endif; ?>
        <?php if (get_field('model')): ?>
          <p class="format"><?= the_field('model'); ?></p>
        <?php endif; ?>
        <?php if (!get_field('alternative_title')): ?>
          <h2 class="product-name"><?= the_title(); ?></h2>
        <?php else: ?>
          <h2 class="product-name"><?= get_field('alternative_title'); ?></h2>
        <?php endif; ?>
        <h3 class="description"><?= the_field('product_name_blue'); ?></h3>
        <ul class="tag">
          <li class="tag-item"><?= the_field('feat_1'); ?></li>
          <li class="tag-item"><?= the_field('feat_2'); ?></li>
          <li class="tag-item"><?= the_field('feat_3'); ?></li>
        </ul>
        <?= get_field('product_detail_area', false, false); ?>
        <!-- <ul class="spec01">
          <li class="spec01-item">
            <p class="txt"><span class="bold">変換効率</span><br>96％</p>
          </li>
          <li class="spec01-item">
            <p class="txt"><span class="bold">定格出力</span><br>5.9kW</p>
          </li>
        </ul>
        <ul class="spec02">
          <li class="spec02-item">
            <p class="label">型名</p>
            <p class="data">QREADY-R59-1</p>
          </li>
          <li class="spec02-item">
            <p class="label">重量</p>
            <p class="data">20kg ※1 取付金具含まず</p>
          </li>
        </ul>
        <div class="accordion typeA">
          <div class="accordion-content">
            <ul class="spec03">
              <li class="spec03-item">
                <p class="label">外形寸法（横×高さ×奥行）</p>
                <p class="data">444×530×192（mm）</p>
              </li>
              <li class="spec03-item">
                <p class="label">最大外形寸法（横×高さ×奥行）<br class="none-max-t"><span class="fs-10">※取付金具を含む</span></p>
                <p class="data">444×624×200（mm）</p>
              </li>
              <li class="spec03-item">
                <p class="label">入力電力</p>
                <p class="data">2.2kW（３回路合計6.6kW）</p>
              </li>
              <li class="spec03-item">
                <p class="label">入力回路数</p>
                <p class="data">３回路</p>
              </li>
              <li class="spec03-item">
                <p class="label">設置場所</p>
                <p class="data">屋外<span class="fs-10">※2</span></p>
              </li>
              <li class="spec03-item">
                <p class="label">動作温度</p>
                <p class="data">−20℃～＋40℃</p>
              </li>
              <li class="spec03-item">
                <p class="label">メーカー希望小売価格（税込）</p>
                <p class="data">￥880,000</p>
              </li>
            </ul>
            <p class="note">
              ※1 取付金具を含む場合は21.8kg<br>
              ※2 北海道・沖縄県には設置できません。<br>
              ※掲載商品のデザイン、外観等は予告なく変更する場合がありますのでご了承ください。
            </p>
          </div>
          <div class="accordion-btn">
            <p class="txt">製品仕様を詳しく見る</p>
            <span class="icon"></span>
          </div>
        </div> -->
        <div class="info-links">
          <?php if (get_field('web_catalog')): ?>
            <a href="<?= the_field('web_catalog'); ?>" class="link web">WEBカタログ<img src="<?= $img_path ?>/single-product/book-open.svg" alt=""></a>
          <?php endif; ?>
          <?php if (get_field('catalog_pdf')): ?>
            <a href="<?= the_field('catalog_pdf'); ?>" class="link pdf" download>カタログPDF<img src="<?= $img_path ?>/single-product/download-icon.svg" alt=""></a>
          <?php endif; ?>
          <div class="share">シェアする<a id="copy-url" data-url="<?= get_permalink(); ?>" class="round"><img src="<?= $img_path ?>/single-product/share-icon.svg" alt=""></a></div>
          <div class="success-msg"></div>
        </div>
      </div>
    </div>
    <?php if (get_field('product_url')): ?>
      <a href="<?= get_field('product_url'); ?>" class="pcs-banner" target="_blank">
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/07/Qready_banner_001.jpg" alt="一目でわかるQREADY® 詳しくはこちら">
      </a>
    <?php endif; ?>
  </section>
  <!-- //overview -->

  <?= the_field('sec_feat', false, false) ?>
  <!-- //feature -->


  <?= the_field('sec_warranty', false, false) ?>
  <!-- //warranty -->


  <?= the_field('sec_component', false, false); ?>
  <!-- //component -->


  <!-- <?= the_field('sec_guide', false, false); ?> -->
  <section class="guide" data-target="guide">
    <div class="wrapper">
      <h2 class="sec-ttl" id="guide">安心導入ガイド</h2>
      <ul class="flow">
        <li class="step">
          <p class="no">STEP1</p>
          <h3 class="step-ttl">サイトでお見積り依頼</h3>
          <div class="imgc">
            <img decoding="async" src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/guide-step-1.png" alt="">
          </div>
          <div class="accordion typeB">
            <div class="accordion-btn">
              <p class="txt">詳細を見る</p>
              <p> <span class="icon"></span>
            </div>
            <div class="accordion-content">
              <p class="txt">
                ・ウェブサイトのお見積り依頼フォームをご記入ください。<br>
                ・担当者から確認後ご連絡します。<br>
                その後当社から販売店をご紹介します。
              </p>
            </div>
          </div>
        </li>
        <li class="step">
          <p class="no">STEP2</p>
          <h3 class="step-ttl">ヒアリング・ご提案</h3>
          <div class="imgc">
            <img decoding="async" src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/guide-step-2.png" alt="">
          </div>
          <div class="accordion typeB">
            <div class="accordion-btn">
              <p class="txt">詳細を見る</p>
              <p> <span class="icon"></span>
            </div>
            <div class="accordion-content">
              <p class="txt">
                ・ご紹介した販売店から具体的な状況（例：電気代のご使用状況）やご希望などヒアリングいたします。<br>
                ・ヒアリングの上、最適な内容をご提案いたします。
              </p>
            </div>
          </div>
        </li>
        <li class="step">
          <p class="no">STEP3</p>
          <h3 class="step-ttl">ご契約・施工</h3>
          <div class="imgc">
            <img decoding="async" src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/guide-step-3.png" alt="">
          </div>
          <div class="accordion typeB">
            <div class="accordion-btn">
              <p class="txt">詳細を見る</p>
              <p> <span class="icon"></span>
            </div>
            <div class="accordion-content">
              <p class="txt">
                ・ご契約の後、現地調査、施工を行います。（販売店によりご契約、現地調査は前後する場合がございます）
              </p>
            </div>
          </div>
        </li>
        <li class="step">
          <p class="no">STEP4</p>
          <h3 class="step-ttl">設置完了</h3>
          <div class="imgc">
            <img decoding="async" src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/guide-step-4.png" alt="">
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- //guide -->


  <!-- <?= the_field('sec_support', false, false); ?> -->
  <section class="support" data-target="support">
    <div class="wrapper">
      <h2 class="sec-ttl" id="support">丁寧な導入サポート、充実な保証制度でご安心いただけます。</h2>
      <div class="support_list" style="display: block;">
        <p class="item" style="width: fit-content; margin-inline: auto;"><a href="https://pv.hanwha-japan.com/service-support/contact/"><span class="imgc"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/support_icon_1.svg" alt=""></span><span class="txt txt-faq">導入・製品に関するご質問</span></a></p>
        <!-- <p class="border"> -->
        <!-- <p class="item"><a href="https://pv.hanwha-japan.com/"><span class="imgc"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/support_icon_2.svg" alt=""></span><span class="txt txt-after">アフターフォロー</span></a></p> -->
      </div>
    </div>
  </section>
  <!-- //support -->


  <section class="compare" data-target=""><!-- compareをdata-targetに設定で左側のメニューに比較が表示される -->
    <div class="wrapper">
      <h2 class="sec-ttl" id="compare">製品を比較する</h2>
      <div class="product top">
        <div class="item">
          <div class="imgc">
            <img id="product-image" src="<?= esc_url(get_field('compare_img')['url']); ?>" alt="">
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
                  'terms'    => array('conditioner'),
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
                  'terms'    => array('conditioner'),
                ),
              ),
              'orderby'        => 'date',
              'order'          => 'DESC',
            );

            $query = new WP_Query($args);

            // デフォルトの比較対象を設定
            $default_compare_post_id = 1241;
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
            $compare_image = (!empty($default_compare_post_id)) ? get_field('compare_img', $default_compare_post_id) : null;
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
            <p class="txt">変換効率</p>
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
            <p class="txt">設置場所</p>
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
            <p class="txt">定格出力</p>
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
              <img src="<?= $img_path ?>/single-product/comparison_icon_Installation_Method.svg" alt="">
            </div>
            <p class="txt">寸法（高さx横x奥行）</p>
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
        <div class="row row-t">
          <div class="heading">
            <div class="imgc">
              <img src="<?= $img_path ?>/single-product/comparison_icon_Operation_check.svg" alt="">
            </div>
            <p class="txt">質量</p>
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
      </div>
      <div class="accordion typeA">
        <div class="accordion-content">
          <div class="table">
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">最大外形寸法（横×高さ×奥行）<br>※取付金具を含む</p>
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
                <p class="txt-acc">入力電力</p>
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
                <p class="txt-acc">入力回路数</p>
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
                <p class="txt-acc">動作温度</p>
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
                <p class="txt-acc">直流入力</p>
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
                <p class="txt-acc">定格力率</p>
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
                <p class="txt-acc">絶縁方式</p>
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
                <p class="txt-acc">電気方式（相数）</p>
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
                <p class="txt-acc">自立運転時の定格出力</p>
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
                <p class="txt-acc">使用周囲温</p>
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
                <p class="txt-acc">メーカー希望小売価格（税込）</p>
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
          </div>
        </div>
        <div class="accordion-btn">
          <p class="txt">すべての仕様を比較</p>
          <span class="icon"></span>
        </div>
      </div>
    </div>
  </section>
  <!-- //compare -->
  <a href="<?= home_url(); ?>/proudct-list/conditioner/" class="banner">
    <img src="<?= $img_path ?>/single-product/PDH_monitor_Product details_banner.webp" alt="パワーコンディショナ・モニター一覧ページへ">
  </a>



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
