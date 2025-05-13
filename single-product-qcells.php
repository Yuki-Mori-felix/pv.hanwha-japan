<?php get_header(); ?>
<?php
/*
	Template Name: Qcells
	Template Post Type: product
	*/

//画像パス
$img_path = get_stylesheet_directory_uri() . "/images";
?>
<main class="single-products">

  <section class="top_product_logo">
    <div class="wrapper">
      <img src="/wp-content/uploads/2025/04/logo.png" alt="Qcells">
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
        'terms'    => 'q-cells', // 太陽光パネルのスラッグ（適宜変更）
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
              <div class="web-ar" id="web-ar">
                <img src="<?= $img_path ?>/single-product/web-ar.svg" alt="3D">
              </div>
            </div>
            <ul class="certification">
              <li class="ctf-item-1">
                <img src="<?= $img_path ?>/single-product/overview-share-no1.png" alt="太陽光発電システム 新築住宅シェア2年連続NO.1">
              </li>
              <li class="ctf-item-2">
                <img src="<?= $img_path ?>/single-product/overview-warranty-1.png" alt="25年製品・出力保証">
              </li>
            </ul>
          </div>
          <div class="right">
            <?php if (get_field('new_switch')): ?>
              <p class="new">NEW</p>
            <?php endif; ?>
            <h2 class="product-name"><?= the_title(); ?></h2>
            <h3 class="description"><?= the_field('product_name_blue'); ?></h3>
            <ul class="tag">
              <li class="tag-item"><?= the_field('feat_1'); ?></li>
              <li class="tag-item"><?= the_field('feat_2'); ?></li>
              <li class="tag-item"><?= the_field('feat_3'); ?></li>
            </ul>
            <ul class="spec01">
              <li class="spec01-item">
                <p class="txt"><span class="bold">公称最大出力</span><span class="sm">（+5%/-0W）</span><br><?= the_field('product_detail_1'); ?></p>
              </li>
              <li class="spec01-item">
                <p class="txt"><span class="bold">モジュール変換効率</span><br><?= the_field('product_detail_2'); ?></p>
              </li>
            </ul>
            <ul class="spec02">
              <li class="spec02-item">
                <p class="label">外形寸法（長さ×幅×厚み）</p>
                <p class="data"><?= the_field('product_detail_3'); ?></p>
              </li>
              <li class="spec02-item">
                <p class="label">質量</p>
                <p class="data"><?= the_field('product_detail_4'); ?></p>
              </li>
            </ul>
            <div class="accordion typeA">
              <div class="accordion-content">
                <ul class="spec03">
                  <li class="spec03-item">
                    <p class="label">公称短絡電流（Isc）</p>
                    <p class="data"><?= the_field('product_detail_5'); ?></p>
                  </li>
                  <li class="spec03-item">
                    <p class="label">公称開放電圧（Voc）</p>
                    <p class="data"><?= the_field('product_detail_6'); ?></p>
                  </li>
                  <li class="spec03-item">
                    <p class="label">公称最大出力動作電流（Imp）</p>
                    <p class="data"><?= the_field('product_detail_7'); ?></p>
                  </li>
                  <li class="spec03-item">
                    <p class="label">公称最大出力動作電圧（Vmp）</p>
                    <p class="data"><?= the_field('product_detail_8'); ?></p>
                  </li>
                  <li class="spec03-item">
                    <p class="label">フレーム材料</p>
                    <p class="data"><?= the_field('product_detail_9'); ?></p>
                  </li>
                  <li class="spec03-item">
                    <p class="label">セル</p>
                    <p class="data"><?= the_field('product_detail_10'); ?></p>
                  </li>
                  <li class="spec03-item">
                    <p class="label">防汚テック防汚仕様</p>
                    <p class="data"><?= the_field('product_detail_11'); ?></p>
                  </li>
                  <li class="spec03-item">
                    <p class="label">最大システム電圧（Vsys）</p>
                    <p class="data"><?= the_field('product_detail_12'); ?></p>
                  </li>
                  <li class="spec03-item">
                    <p class="label">最大圧風荷重 / 最大表面荷重</p>
                    <p class="data"><?= the_field('product_detail_13'); ?></p>
                  </li>
                  <li class="spec03-item">
                    <p class="label">メーカー希望小売価格（税込）</p>
                    <p class="data"><?= the_field('product_detail_14'); ?></p>
                  </li>
                </ul>
                <p class="note"><?= the_field('caution'); ?></p>
              </div>
              <div class="accordion-btn">
                <p class="txt">製品仕様を詳しく見る</p>
                <span class="icon"></span>
              </div>
            </div>
            <div class="info-links">
              <a href="<?= the_field('web_catalog'); ?>" class="link web">WEBカタログ<img src="<?= $img_path ?>/single-product/book-open.svg" alt=""></a>
              <a href="<?= the_field('catalog_pdf'); ?>" class="link pdf">カタログPDF<img src="<?= $img_path ?>/single-product/download-icon.svg" alt=""></a>
              <div href="<?= the_field('share'); ?>" class="share">シェアする<a href="#" class="round"><img src="<?= $img_path ?>/single-product/share-icon.svg" alt=""></a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- //overview -->

      <section class="feature" data-target="feature">
        <div class="wrapper">
          <h2 class="sec-ttl" id="feature">特長</h2>
        </div>
        <ul class="feature_list">
          <li class="item">
            <div class="wrapper">
              <div class="feature-ttl">
                <span class="no">1</span>
                <h3 class="txt">独自のQ.ANTUM NEOテクノロジー</h3>
              </div>
              <p class="lead">世界で認められた最先端技術で高出力・高効率</p>
            </div>
            <div class="primary">
              <div class="primary-wrapper">
                <div class="left">
                  <div class="point">
                    <h4 class="ttl">Q.ANTUM NEOセルの効率</h4>
                    <div class="imgc">
                      <img src="<?= $img_path ?>/single-product/feature-1-1.jpg" alt="">
                    </div>
                  </div>
                  <div class="point">
                    <h4 class="ttl">Q.ANTUM NEOセルの効率</h4>
                    <div class="imgc">
                      <img src="<?= $img_path ?>/single-product/feature-1-2.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="right">
                  <div class="right-wrap">
                    <p class="outline">
                      Q.TRON M-G2.4+は<br>Qセルズ独自の最先端技術の<br>Q.ANTUM NEOテクノロジーを採用された高効率N型モジュールです。
                    </p>
                    <ul class="right_point_list">
                      <li class="item">高出力と高効率を兼ね備えたTOPCon構造に基づいたQ.ANTUM NEOテクノロジーで、22.5％まで変換効率を向上</li>
                      <li class="item">N型セルでより多くの電子が裏面の電極に到達させ、さらに高出力・高効率を実現</li>
                      <li class="item">優れた温度係数で、表面温度上昇に伴う効率の低下を改善</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="wrapper">
              <div class="feature-ttl">
                <span class="no">2</span>
                <h3 class="txt">Qセルズならではの厳格な品質管理</h3>
              </div>
              <p class="lead">世界最高レベルの「品質検証認証」QCPV</p>
            </div>
            <div class="primary">
              <div class="primary-wrapper">
                <div class="left">
                  <div class="point">
                    <h4 class="ttl">過酷な環境ストレステスト</h4>
                    <div class="imgc">
                      <img src="<?= $img_path ?>/single-product/feature-2-1.jpg" alt="">
                    </div>
                  </div>
                  <div class="point">
                    <h4 class="ttl">生産モニタリング</h4>
                    <div class="imgc">
                      <img src="<?= $img_path ?>/single-product/feature-2-2.jpg" alt="">
                    </div>
                  </div>
                  <div class="point">
                    <h4 class="ttl">品質テスト一例</h4>
                    <div class="imgc">
                      <img src="<?= $img_path ?>/single-product/feature-2-3.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="right">
                  <div class="right-wrap">
                    <p class="outline">
                      世界的な太陽電池モジュール（太陽光パネル）の認証機関である、ドイツのTÜV Rheinland（テュフラインランド）が設計した品質設定プログラムで、優れた性能と信頼性を認定されました。
                    </p>
                    <ul class="right_point_list">
                      <li class="item">IEC規格※の最大3倍に及ぶ過酷な品質テストを実施、外部環境の変化にも高い発電量を維持</li>
                      <li class="item">生産過程でTÜV Rheinlandの専門家がランダムサンプリング検査・モニタリング</li>
                      <li class="item">高度な試験方法による部材の試験と総合的なサプライヤー管理</li>
                    </ul>
                    <p class="note">IEC規格：国際電気標準会議が定めた電気及び電子技術分野の国際標準規格</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="wrapper">
              <div class="feature-ttl">
                <span class="no">3</span>
                <h3 class="txt">25年長期保証でOOO円の経済効果</h3>
              </div>
              <p class="lead">長期保証による、25年間の経済的なメリットが期待できます。</p>
            </div>
            <div class="primary">
              <div class="primary-wrapper">
                <div class="left">
                  <div class="point">
                    <h4 class="ttl">出力性能</h4>
                    <div class="imgc">
                      <img src="<?= $img_path ?>/single-product/feature-3-1.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="right">
                  <div class="right-wrap">
                    <p class="outline">
                      長期間の保証でもしものときも安心できるだけでなく、長期保証から25年間発生する約4,710kWh（後程経済メリットを感じられる数字で計算）のお得もご期待いただけます。
                    </p>
                    <p class="note">注釈テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      <!-- //feature -->

      <section class="warranty" data-target="warranty">
        <div class="wrapper">
          <h2 class="sec-ttl" id="warranty">保証</h2>
          <ul class="warranty_list">
            <li class="item item-1">
              <div class="detail">
                <div class="imgc">
                  <img src="<?= $img_path ?>/single-product/warranty-item-1.png" alt="25年製品保証">
                </div>
                <div class="heading">出力保証</div>
                <p class="txt">太陽電池モジュール（太陽光パネル）の出力性能を、25年もの長期間保証いたします。</p>
              </div>
              <div class="graph">
                <img src="<?= $img_path ?>/single-product/warranty-graph.jpg" alt="">
              </div>
            </li>
            <li class="item item-2">
              <div class="detail">
                <div class="imgc">
                  <img src="<?= $img_path ?>/single-product/warranty-item-2.png" alt="25年製品保証">
                </div>
                <div class="heading">製品保証</div>
                <p class="txt">Q.TRONシリーズは高い品質管理とともに、25年の製品保証を提供して長く安心してご使用いただけます。</p>
              </div>
              <p class="note">※太陽電池モジュールのみ販売の場合。システムとして販売の場合と保証開始日と保証規定が異なります。</p>
            </li>
          </ul>
        </div>
      </section>
      <!-- //warranty -->

      <section class="guide" data-target="guide">
        <div class="wrapper">
          <h2 class="sec-ttl" id="guide"><?= the_field('guide_title') ?></h2>
          <ul class="flow">
            <li class="step">
              <p class="no">STEP1</p>
              <h3 class="step-ttl"><?= the_field('step1_title') ?></h3>
              <div class="imgc">
                <img src="<?= get_field('step1_img')['url'] ?>" alt="">
              </div>
              <div class="accordion typeB">
                <div class="accordion-btn">
                  <p class="txt">詳細を見る</p>
                  <span class="icon"></span>
                </div>
                <div class="accordion-content">
                  <p class="txt">
                    <?= the_field('step1_detail') ?>
                  </p>
                </div>
              </div>
            </li>
            <li class="step">
              <p class="no">STEP2</p>
              <h3 class="step-ttl"><?= the_field('step2_title') ?></h3>
              <div class="imgc">
                <img src="<?= get_field('step2_img')['url'] ?>" alt="">
              </div>
              <div class="accordion typeB">
                <div class="accordion-btn">
                  <p class="txt">詳細を見る</p>
                  <span class="icon"></span>
                </div>
                <div class="accordion-content">
                  <p class="txt">
                    <?= the_field('step2_detail') ?>
                  </p>
                </div>
              </div>
            </li>
            <li class="step">
              <p class="no">STEP3</p>
              <h3 class="step-ttl"><?= the_field('step3_title') ?></h3>
              <div class="imgc">
                <img src="<?= get_field('step3_img')['url'] ?>" alt="">
              </div>
              <div class="accordion typeB">
                <div class="accordion-btn">
                  <p class="txt">詳細を見る</p>
                  <span class="icon"></span>
                </div>
                <div class="accordion-content">
                  <p class="txt">
                    <?= the_field('step3_detail') ?>
                  </p>
                </div>
              </div>
            </li>
            <li class="step">
              <p class="no">STEP4</p>
              <h3 class="step-ttl"><?= the_field('step4_title') ?></h3>
              <div class="imgc">
                <img src="<?= get_field('step4_img')['url'] ?>" alt="">
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- //guide -->

      <section class="support" data-target="support">
        <div class="wrapper">
          <h2 class="sec-ttl" id="support">ご検討から設置後のアフターまでも徹底サポートいたします。</h2>
          <div class="support_list">
            <a href="<?= get_field('left_link')['url'] ?>" class="item">
              <div class="imgc">
                <img src="<?= $img_path ?>/single-product/support_icon_1.svg" alt="">
              </div>
              <p class="txt txt-faq"><?= get_field('left_link')['title'] ?></p>
            </a>
            <span class="border"></span>
            <a href="<?= get_field('right_link')['url'] ?>" class="item">
              <div class="imgc">
                <img src="<?= $img_path ?>/single-product/support_icon_2.svg" alt="">
              </div>
              <p class="txt txt-after"><?= get_field('right_link')['title'] ?></p>
            </a>
          </div>
        </div>
      </section>
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
            $args = array(
              'post_type'      => 'product',
              'posts_per_page' => -1,
              'tax_query'      => array(
                array(
                  'taxonomy' => 'product-cat',
                  'field'    => 'slug',
                  'terms'    => 'q-cells',
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
          <a href="#" class="more">詳しく見る</a>
        </div>

        <div class="item">
          <div class="imgc">
            <img src="<?= $img_path ?>/single-product/compare-product-2.jpg" alt="">
          </div>
          <div class="name">
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
                  'terms'    => array('q-cells'),
                ),
              ),
              'orderby'        => 'date',
              'order'          => 'DESC',
            );

            $query = new WP_Query($args);

            // デフォルトの比較対象を設定
            $default_compare_post_id = null;
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

            // 比較対象が1つしかない場合でも、その投稿を選択できるようにする
            if (!empty($available_post_ids)) {
              $default_compare_post_id = $available_post_ids[0]; // 最初の比較対象をデフォルトに
            }
            ?>

            <select id="compare-product-select" class="select-product-name">
              <?php if (!empty($available_post_ids)) : ?>
                <?php foreach ($available_post_ids as $post_id) : ?>
                  <?php
                  $post_object = get_post($post_id);
                  ?>
                  <option value="<?php echo $post_id; ?>" <?php echo (intval($post_id) === intval($default_compare_post_id)) ? 'selected' : ''; ?>>
                    <?php echo esc_html($post_object->post_title); ?>
                  </option>
                <?php endforeach; ?>
              <?php else : ?>
                <option value="">比較対象の投稿がありません</option>
              <?php endif; ?>
            </select>
          </div>
          <a href="#" class="more">詳しく見る</a>
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
              <p class="data-txt" id="product-detail-1"><?= esc_html(get_field('product_detail_1')); ?></p>
            </div>
            <div class="item">
              <p class="data-txt">285W</p>
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
              <p class="data-txt" id="product-detail-2"><?= esc_html(get_field('product_detail_2')); ?></p>
            </div>
            <div class="item">
              <p class="data-txt">21.5%</p>
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
              <p class="data-txt" id="product-detail-3"><?= esc_html(get_field('product_detail_3')); ?></p>
            </div>
            <div class="item">
              <p class="data-txt">1,722mm×766mm×30mm</p>
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
              <p class="data-txt" id="product-detail-15"><?= esc_html(get_field('product_detail_15')); ?></p>
            </div>
            <div class="item">
              <p class="data-txt">25年機器+出力保証</p>
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
              <p class="data-txt" id="product-detail-14"><?= esc_html(get_field('product_detail_14')); ?></p>
            </div>
            <div class="item">
              <p class="data-txt">¥269,610</p>
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
                  <p class="data-txt" id="product-detail-5"><?= esc_html(get_field('product_detail_5')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt">13.84A</p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">公称開放電圧（Voc）</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-6"><?= esc_html(get_field('product_detail_6')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt">25.91V</p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">公称最大出力動作電流（Imp）</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-7"><?= esc_html(get_field('product_detail_7')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt">13.13A</p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">公称最大出力動作電圧（Vmp）</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-8"><?= esc_html(get_field('product_detail_8')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt">21.70V</p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">質量</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-4"><?= esc_html(get_field('product_detail_4')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt">14.9kg</p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">フレーム材料</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-9"><?= esc_html(get_field('product_detail_9')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt">アルミニウム合金（アルマイト処理）、黒色</p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">セル</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-10"><?= esc_html(get_field('product_detail_10')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt">4×18（単結晶Q.ANTUM NEOハーフセル）</p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">防汚テック防汚仕様</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-11"><?= esc_html(get_field('product_detail_11')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt">保護クラスIP67(*3)</p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">最大システム電圧（Vsys）</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-12"><?= esc_html(get_field('product_detail_12')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt">1000V</p>
                </div>
              </div>
            </div>
            <div class="row row-acc">
              <div class="heading">
                <p class="txt-acc">最大圧風荷重 / 最大表面荷重</p>
              </div>
              <div class="product">
                <div class="item">
                  <p class="data-txt" id="product-detail-13"><?= esc_html(get_field('product_detail_13')); ?></p>
                </div>
                <div class="item">
                  <p class="data-txt">4,000Pa / 4,000Pa</p>
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
      <a href="#" class="banner">
        <img src="<?= $img_path ?>/single-product/qcells_banner.png" alt="Qcells太陽光パネル製品一覧ページへ">
      </a>
    </div>
  </section>
  <!-- //compare -->

  <div class="fixed-anchor">
    <a href="#overview" data-id="overview" class="link"><span class="txt">TOP</span></a>
    <a href="#feature" data-id="feature" class="link"><span class="txt">特長</span></a>
    <a href="#warranty" data-id="warranty" class="link"><span class="txt">保証</span></a>
    <a href="#guide" data-id="guide" class="link"><span class="txt">安心導入ガイド</span></a>
    <a href="#support" data-id="support" class="link"><span class="txt">徹底サポート</span></a>
    <a href="#compare" data-id="compare" class="link"><span class="txt">比較</span></a>
  </div>
  <!-- //fixed-anchor -->

  <div class="modal-window" id="modal-window">
    <div class="modal-wrap">
      <div class="frame">
        <div class="content"></div>
      </div>
      <div class="close">
        <div class="close-btn"></div>
        <p class="txt">閉じる</p>
      </div>
    </div>
  </div>
  <!-- //modal-window -->

</main>
<script src="<?= get_stylesheet_directory_uri() ?>/js/product-solar-panel.js"></script>
<?php
get_footer();
