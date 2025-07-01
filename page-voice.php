<?php
/* Template Name: お客様の声(TOP) */
?>

<?php get_header(); ?>

<main class="voice">
  <section class="mv-for-page">
    <div class="mv-img" style="background-image: url(<?php the_field('fv_page_img'); ?>);">
      <div class="mv-sub-title-area">
        <div class="border"></div>
        <div class="mv-sub-title"><?php the_field('page_sub_title') ?></div>
      </div>
      <div class="mv-text wrap_s">
        <?php $catch = get_field('fv_page_catch'); ?>
        <?php if ($catch) echo '<span>' . $catch . '</span>'; ?>
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
  </section>
  <!--========== END OF MV  ==========-->

  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>

  <!-- <section class="voice-top">
    <div class="wrap_s">
      <h2>ご購入者様の声</h2>
      <p>ほんの一部ですが、お客様が体験された導入後の変化をご紹介します。</p>
      <div class="splide" aria-label="Splideの基本的なHTML">
        <div class="splide__track">
          <ul class="voice-top-list splide__list">
            <li class="splide__slide">
              <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/view23.jpg" alt="">
              <div class="text-area">
                <p>電気代が<br>半分になった！</p>
              </div>
            </li>
            <li class="splide__slide">
              <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/view23.jpg" alt="">
              <div class="text-area">
                <p>電気代が<br>半分になった！</p>
              </div>
            </li>
            <li class="splide__slide">
              <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/view23.jpg" alt="">
              <div class="text-area">
                <p>電気代を気にせずに<br>家電など使用でき、<br>ストレスが減った！</p>
              </div>
            </li>
            <li class="splide__slide">
              <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/view23.jpg" alt="">
              <div class="text-area">
                <p>蓄電池も<br>セットにしたい！</p>
              </div>
            </li>
            <li class="splide__slide">
              <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/view23.jpg" alt="">
              <div class="text-area">
                <p>アフターフォローが<br>しっかりしている！</p>
              </div>
            </li>
            <li class="splide__slide">
              <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/view23.jpg" alt="">
              <div class="text-area">
                <p>晴天でなくても<br>しっかり充電して<br>くれます！</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section> -->
  <?= get_field('content_1', false, false) ?>
  <!--========== END OF VOICE TOP  ==========-->


  <div class="section-back">
    <!-- <section class="interview">
      <div class="section-title-area">
        <div class="wrap_s">
          <h2 class="section-title">お客様インタビュー</h2>
        </div>
      </div>
      <div class="wrap_s">
        <div class="title-sub">ハンファジャパンを選んでいただいたお客様の嬉しい声を是非ご確認ください。</div>
        <ul class="interview-list">
          <li>
            <a href="https://www.q-cells.jp/individual_customer/usersvoice/view01" target="_blank" rel="noopener noreferrer">
              <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/03/Re.RISE_Logo_Package_RGB_2024_v2.1_Re.RISE_Main.png" alt="">
              <div class="text-area">
                <p class="address">千葉県成田市 K様邸</p>
                <div class="title">“電気代が約半分に！<br>驚きの性能に家族も大満足”</div>
              </div>
            </a>
          </li>
          <li>
            <a href="https://www.q-cells.jp/individual_customer/usersvoice/view19" target="_blank" rel="noopener noreferrer">
              <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/03/Re.RISE_Logo_Package_RGB_2024_v2.1_Re.RISE_Main.png" alt="">
              <div class="text-area">
                <p class="address">岩手県八幡平市 K様邸</p>
                <div class="title">“電気代が約半分に！<br>驚きの性能に家族も大満足”</div>
              </div>
            </a>
          </li>
          <li>
            <a href="https://www.q-cells.jp/individual_customer/usersvoice/view18" target="_blank" rel="noopener noreferrer">
              <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/03/Re.RISE_Logo_Package_RGB_2024_v2.1_Re.RISE_Main.png" alt="">
              <div class="text-area">
                <p class="address">埼玉県さいたま市 I様邸</p>
                <div class="title">“電気代が約半分に！<br>驚きの性能に家族も大満足”</div>
              </div>
            </a>
          </li>
        </ul>
        <div class="voice-btn-wrap">
          <a href="<?= home_url(); ?>/voice/interview/" class="btn">お客様インタビュー 一覧</a>
        </div>
      </div>
    </section> -->
    <?= get_field('content_2', false, false) ?>
    <!--========== END OF INTERVIEW  ==========-->
  </div><!-- section-back -->

</main>
<?php get_footer(); ?>