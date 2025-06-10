<?php
/* 
Template Name: お客様インタビュー(販売店) 
Template Post Type: voice
*/
get_header(); ?>

<div class="wrap">

  <div class="wrap_s">
    <?php custom_breadcrumb(); ?>
  </div>

  <div id="primary" class="content-area">
    <main id="main" class="single-voice template-store template-general">

      <section class="single-voice-detail">
        <h2 class="section-title">お客様インタビュー</h2>
        <span class="section-title-en">USER INTERVIEW</span>
        <h3 class="voice-title">
          <div class="wrap_s"><?= get_field('voice_title'); ?></div>
        </h3>
        <div class="wrap_s">
          <div class="voice-detail">
            <div class="voice-detail-imgs">
              <img src="<?= get_field('voice_img')['url'] ?>" alt="">
              <p class="voice-detail-address"><?= the_field('voice_address') ?></p>
            </div>
            <div class="voice-detail-textarea">
              <div class="detail-head">
                <img src="<?= get_stylesheet_directory_uri() ?>/images/voice/voice-head.png" alt="">
                <div class="detail-head-text">
                  <div class="detail-head-title">設置状況</div>
                  <span class="detail-head-title-en">installation status</span>
                </div>
              </div>
              <ul class="status-list">
                <?php if (get_field('solar_panel')): ?>
                  <li class="status-item">
                    <div class="status-title">太陽光パネル</div>
                    <div class="status-text"><?= get_field('solar_panel'); ?></div>
                  </li>
                <?php endif; ?>
                <?php if (get_field('storage_battery')): ?>
                  <li class="status-item">
                    <div class="status-title">蓄電池</div>
                    <div class="status-text"><?= get_field('storage_battery'); ?></div>
                  </li>
                <?php endif; ?>
                <?php if (get_field('kind_of_roof')): ?>
                  <li class="status-item">
                    <div class="status-title">屋根の種類</div>
                    <div class="status-text"><?= get_field('kind_of_roof'); ?></div>
                  </li>
                <?php endif; ?>
                <?php if (get_field('store')): ?>
                  <li class="status-item">
                    <div class="status-title">販売店</div>
                    <div class="status-text">
                      <?= get_field('store', false, false); ?>
                    </div>
                  </li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- single-voice -->

      <section class="problem">
        <div class="sv-wrap">
          <div class="prob-content">
            <div class="prob-item customer">
              <div class="prob-ttl">お客様の悩み</div>
              <div class="prob-img">
                <img src="" alt="">
              </div>
              <?= get_field('customer_concerns', $post_id, false) ?>
            </div>
            <div class="prob-arrow">
              <p class="prob-arrow-part part-1"></p>
              <p class="prob-arrow-part part-2"></p>
            </div>
            <div class="prob-item solution">
              <div class="prob-ttl">ハンファジャパンで<br>解決しました</div>
              <div class="prob-img">
                <img src="" alt="">
              </div>
              <?= get_field('solution', $post_id, false) ?>
            </div>
          </div>
        </div>
      </section>
      <!-- problem -->

      <?= get_field('main_content', false, false); ?>
      <!-- WHY, CHANGES, MESSAGE -->

      <section class="store-info">
        <h2 class="section-title">販売店情報</h2>
        <div class="wrap">
          <div class="wrap_s">
            <div class="store-info-title"><?= get_field('title'); ?></div>
            <div class="store-info-content">
              <div class="store-info-img"><img src="<?= get_field('logo')['url']; ?>" alt=""></div>
              <div class="store-info-textarea">
                <div class="company-name"><?= get_field('company'); ?></div>
                <div class="location"><img src="<?= get_stylesheet_directory_uri() ?>/images/location.svg" alt="">〒<?= get_field('address'); ?></div>
                <div class="tel"><img src="<?= get_stylesheet_directory_uri() ?>/images/phone.svg" alt=""><?= get_field('tel'); ?></div>
                <div class="site"><img src="<?= get_stylesheet_directory_uri() ?>/images/language.svg" alt=""><a href="<?= get_field('url'); ?>" class="site-link" target="_blank"><?= get_field('url'); ?></a></div>
                <div class="sns-icons">
                  <?php if (get_field('link_1')): ?>
                    <a href="<?= get_field('link_1'); ?>" class="sns-link" target="_blank">
                      <img src="<?= get_stylesheet_directory_uri() ?>/images/facebook_icon.png" alt="" class="sns-icon">
                    </a>
                  <?php endif; ?>
                  <?php if (get_field('link_2')): ?>
                    <a href="<?= get_field('link_2'); ?>" class="sns-link" target="_blank">
                      <img src="<?= get_stylesheet_directory_uri() ?>/images/instagram_icon.png" alt="" class="sns-icon">
                    </a>
                  <?php endif; ?>
                  <?php if (get_field('link_3')): ?>
                    <a href="<?= get_field('link_3'); ?>" class="sns-link" target="_blank">
                      <img src="<?= get_stylesheet_directory_uri() ?>/images/x_icon.png" alt="" class="sns-icon">
                    </a>
                  <?php endif; ?>
                  <?php if (get_field('link_4')): ?>
                    <a href="<?= get_field('link_4'); ?>" class="sns-link" target="_blank">
                      <img src="<?= get_stylesheet_directory_uri() ?>/images/line_icon.png" alt="" class="sns-icon">
                    </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <?= get_field('store_content', false, false); ?>
            <!-- <div class="store-info-detail">
              <div class="store-info-detail-img">
                <div class="img-wrap">
                  <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/test.png" alt="">
                  <div class="img-info">ダミーテキスト</div>
                </div>
                <div class="img-wrap">
                  <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/test.png" alt="">
                  <div class="img-info">ダミーテキスト</div>
                </div>
              </div>
              <div class="store-info-detail-text">
                <p>
                  ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
                </p>
                <p>
                  ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
                </p>
                <p>
                  ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
                </p>
                <div class="caution">
                  ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
                </div>
              </div>
            </div>

            <div class="green-alliance">
              <div class="green-alliance-logo">
                <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/green-logo.png" alt="">
              </div>
              <div class="green-alliance-textarea">
                <div class="green-alliance-title">グリーンアライアンス加盟店</div>
                <p>
                  グリーンアライアンスは<br>グリーンアクションでともに持続可能な明るい未来をつくることを目指すパートナーシップです。
                </p>
                <a href="#" class="green-alliance-link" target="_blank" rel="noopener noreferrer">詳しくはこちら</a>
              </div>
            </div> -->
          </div>
        </div>
      </section>
      <!-- store-info -->

    </main><!-- #main -->
  </div><!-- #primary -->
  <?php get_sidebar(); ?>
</div><!-- .wrap -->


<?php
get_footer();
