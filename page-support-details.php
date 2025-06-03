<?php
/* Template Name: サポート詳細 */
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<?php get_header(); ?>

<main class="under-pv">
  <section class="mv">
    <div class="back-img" style="background-image: url(<?= get_field('fv_page_img'); ?>);">
      <h1 class="title">最後まで徹底サポート</h1>
    </div>
  </section>
  <!--========== END OF MV ==========-->

  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>

  <section class="support">
    <div class="wrap">
      <h2>ご検討から設置後のアフターまで<br>充実したサポートをお約束します。</h2>
    </div>
    <ul class="under-pv-list">
      <li>
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/support_img1.jpg" alt="">
        <div class="text-area">
          <div class="title">ご検討の段階から<br>親身なサポート</div>
          <p>
            ご検討の際、見積・シミュレーション依頼を頂き、<br>
            ニーズに合う最適な内容をご提案します。<br>
            また、安心導入ガイドで導入の最後まで<br>
            徹底した支援をいたします。
          </p>
        </div>
      </li>
      <li>
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/support_img2.jpg" alt="">
        <div class="text-area">
          <div class="title">もしもの時も安心できる<br>手厚いアフターフォロー</div>
          <p>
            お問い合わせ（ウェブサイト）、<br>お客様ご相談センター（電話）、<br>
            修理のご用命の窓口（電話）で<br>
            専門コンサルタントがお客様のご要望に<br>
            全力を尽くしてフォローします。
          </p>
        </div>
      </li>
      <li>
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/support_img3.jpg" alt="">
        <div class="text-area">
          <div class="title">全国に広がる拠点から<br>素早く対応</div>
          <p>
            東京、仙台、名古屋、大阪、福岡など<br>
            日本全域にかけている拠点から<br>
            全国どこでも即時ご対応します。
          </p>
        </div>
      </li>
      <li>
        <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/06/support_img4.jpg" alt="">
        <div class="text-area">
          <div class="title">販売店様向けのご支援もきめ細かく</div>
          <p>
            全国各地に広がる1,800社のQ.PARTNERS<br>
            （販売店支援プログラム）と<br>
            セールスサポートをご提供します。<br>
            尚、テクニカルサポートとして<br>
            Q.CAST III（販売支援ツール）、
            施工ID研修制度（施工サービス）もご支援しております。
          </p>
        </div>
      </li>
    </ul>
  </section>
  <!--========== END OF SUPPORT ==========-->

  <a href="<?= home_url(); ?>/pv" class="btn location-button">ハンファジャパンの太陽光発電について</a>
</main>
<?php get_footer(); ?>