<?php

get_header(); ?>

<div class="wrap">

  <div class="wrap_s">
    <?php custom_breadcrumb(); ?>
  </div>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">


      <section class="single-voice">
        <h2 class="section-title">お客様インタビュー</h2>
        <span class="section-title-en">USER INTERVIEW</span>
        <h3 class="voice-title">
          <div class="wrap_s">北向きの屋根でも予想以上の発電を実現</div>
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
                <li class="status-item">
                  <div class="status-title">太陽光パネル</div>
                  <div class="status-text">ダミーテキストダミーテキストダミーテキスト</div>
                </li>
                <li class="status-item">
                  <div class="status-title">蓄電池</div>
                  <div class="status-text">ダミーテキストダミーテキストダミーテキスト</div>
                </li>
                <li class="status-item">
                  <div class="status-title">屋根の種類</div>
                  <div class="status-text">ダミーテキストダミーテキストダミーテキスト</div>
                </li>
                <li class="status-item">
                  <div class="status-title">販売店</div>
                  <div class="status-text">ダミーテキストダミーテキストダミーテキスト</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- single-voice -->

      <section class="problem">
        <div class="wrap">
          <div class="wrap_s">
            <div class="problem-titles">
              <div class="problem-title">お客様の悩み</div>
              <div class="problem-title">ハンファジャパンで<br>解決しました</div>
            </div>
            <div class="problem-content">
              <ul class="problem-list">
                <li class="problem-item">ダミーテキストダミーテキストダミーテキスト</li>
                <li class="problem-item">ダミーテキストダミーテキストダミーテキスト</li>
              </ul>
              <ul class="problem-list">
                <li class="problem-item">ダミーテキストダミーテキストダミーテキスト</li>
                <li class="problem-item">ダミーテキストダミーテキストダミーテキスト</li>
                <li class="problem-item">ダミーテキストダミーテキストダミーテキスト</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- problem-area -->

      <section class="inspiration">
        <div class="single-voice-title-area">
          <div class="wrap">
            <div class="wrap_s">
              <h3 class="single-voice-title">導入を決めた<span class="bold">きっかけ</span></h3>
            </div>
          </div>
        </div>

        <div class="inspiration-content">
          <div class="inspiration-background">
            <div class="wrap_s">
              <div class="inspiration-textarea">
                <h4 class="inspiration-title">ダミーテキスト<br>ダミーテキスト</h4>
                <p class="inspiration-text">
                  ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
                </p>
              </div>
              <div class="inspiration-img">
                <img src="<?= get_stylesheet_directory_uri() ?>/images/voice/house.png" alt="">
              </div>
            </div>
          </div>

          <div class="inspiration-background">
            <div class="wrap_s">
              <div class="inspiration-img">
                <img src="<?= get_stylesheet_directory_uri() ?>/images/voice/house.png" alt="">
              </div>
              <div class="inspiration-textarea">
                <h4 class="inspiration-title">ダミーテキスト<br>ダミーテキスト</h4>
                <p class="inspiration-text">
                  ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- inspiration -->


      <section class="benefit">
        <div class="single-voice-title-area">
          <div class="wrap">
            <div class="wrap_s">
              <h3 class="single-voice-title">導入後の<span class="bold">変化</span></h3>
            </div>
          </div>
        </div>

        <div class="benefit-content">
          <div class="benefit-background">
            <div class="wrap_s">
              <div class="benefit-textarea">
                <h4 class="benefit-title">ダミーテキスト<br>ダミーテキスト</h4>
                <p class="benefit-text">
                  ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
                </p>
              </div>
              <div class="benefit-img">
                <img src="<?= get_stylesheet_directory_uri() ?>/images/voice/house.png" alt="">
              </div>
            </div>
          </div>

          <div class="benefit-background">
            <div class="wrap_s">
              <div class="benefit-img">
                <img src="<?= get_stylesheet_directory_uri() ?>/images/voice/house.png" alt="">
              </div>
              <div class="benefit-textarea">
                <p class="benefit-text">
                  ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- benefit -->


      <section class="message">
        <div class="single-voice-title-area">
          <div class="wrap">
            <div class="wrap_s">
              <h3 class="single-voice-title">ご検討中の方に<span class="bold">伝えたいこと</span></h3>
            </div>
          </div>
        </div>

        <div class="message-content">
          <div class="message-background">
            <div class="wrap_s">
              <div class="message-textarea">
                <h4 class="message-title">ダミーテキスト<br>ダミーテキスト</h4>
                <p class="message-text">
                  ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
                </p>
              </div>
              <div class="message-img">
                <img src="<?= get_stylesheet_directory_uri() ?>/images/voice/house.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- message -->


      <section class="store-info">
        <h2 class="section-title">販売店情報</h2>
        <div class="wrap">
          <div class="wrap_s">
            <div class="store-info-title">ダミーテキストダミーテキストダミーテキスト</div>
            <div class="store-info-content">
              <div class="store-info-img"><img src="<?= get_stylesheet_directory_uri() ?>/images/test.png" alt=""></div>
              <div class="store-info-textarea">
                <div class="company-name">新エネルギーシステム株式会社</div>
                <div class="location"><img src="<?= get_stylesheet_directory_uri() ?>/images/location.svg" alt="">〒031-00012 青森県八戸市十日市字登手2-1</div>
                <div class="tel"><img src="<?= get_stylesheet_directory_uri() ?>/images/phone.svg" alt="">0178-51-6091</div>
                <div class="site"><img src="<?= get_stylesheet_directory_uri() ?>/images/language.svg" alt=""><a href="https://google.com" class="site-link" target="_blank">https://google.com</a></div>
                <div class="sns-icons">
                  <a href="#" class="sns-link">
                    <img src="<?= get_stylesheet_directory_uri() ?>/images/facebook_icon.png" alt="" class="sns-icon">
                  </a>
                  <a href="#" class="sns-link">
                    <img src="<?= get_stylesheet_directory_uri() ?>/images/instagram_icon.png" alt="" class="sns-icon">
                  </a>
                  <a href="#" class="sns-link">
                    <img src="<?= get_stylesheet_directory_uri() ?>/images/x_icon.png" alt="" class="sns-icon">
                  </a>
                  <a href="#" class="sns-link">
                    <img src="<?= get_stylesheet_directory_uri() ?>/images/line_icon.png" alt="" class="sns-icon">
                  </a>
                </div>
              </div>
            </div>
            <div class="store-info-detail">
              <div class="store-info-detail-img">
                <img src="<?= get_stylesheet_directory_uri() ?>/images/voice/test.png" alt="">
                <div class="img-info">ダミーテキスト</div>
                <img src="<?= get_stylesheet_directory_uri() ?>/images/voice/test.png" alt="">
                <div class="img-info">ダミーテキスト</div>
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
                <img src="<?= get_stylesheet_directory_uri() ?>/images/voice/logo.png" alt="">
              </div>
              <div class="green-alliance-textarea">
                <div class="green-alliance-title">グリーンアライアンス加盟店</div>
                <p>
                  グリーンアライアンスは<br>グリーンアクションでともに持続可能な明るい未来をつくることを目指すパートナーシップです。
                </p>
                <a href="#" class="green-alliance-link" target="_blank" rel="noopener noreferrer">詳しくはこちら</a>
              </div>
            </div>
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
