<?php
/* Template Name: アフターフォロー */
require get_stylesheet_directory() . '/include/my_variables.php';
?>
<?php get_header(); ?>

<main>
  <section class="mv">
    <div class="back-img" style="background-image: url(<?= get_field('fv_page_img'); ?>);">
      <h1 class="title"><?= the_title(); ?></h1>
    </div>
  </section>
  <!--========== END OF MV ==========-->

  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>

  <section class="support">
    <div class="wrap_s">
      <h2>全国拠点から即時対応が可能です。<br>素早く、手厚いアフターフォローを実施しております。</h2>
      <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/HWJ-Office-Map.png" alt="">
    </div>
  </section>
  <!--========== END OF SUPPORT  ==========-->

  <section class="guide">
    <div class="wrap_s">
      <h2>修理関連ガイド</h2>
      <ul class="flow">
        <li class="step">
          <p class="no">STEP1</p>
          <h3 class="step-ttl">不具合発生</h3>
          <div class="imgc">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/guide-step-1.png" alt="">
          </div>
        </li>
        <li class="step">
          <p class="no">STEP2</p>
          <h3 class="step-ttl">販売店にご連絡<br>一次検査</h3>
          <div class="imgc">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/guide-step-2.png" alt="">
          </div>
        </li>
        <li class="step">
          <p class="no">STEP3</p>
          <h3 class="step-ttl">ハンファジャパンが<br>ご対応</h3>
          <div class="imgc">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/guide-step-3.png" alt="">
          </div>
        </li>
        <li class="step">
          <p class="no">STEP4</p>
          <h3 class="step-ttl">修理完了</h3>
          <div class="imgc">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/guide-step-4.png" alt="">
          </div>
        </li>
      </ul>
    </div>
  </section>
  <div class="caution">
    <div class="wrap_s">
      ※上記のガイドはご案件の内容によって変わる可能性がございます。<br>
      ※保証関連は基本ご購入された販売店で対応しております。
    </div>
  </div>
  <!--========== END OF FAQ GUIDE  ==========-->

  <section class="apply">
    <div class="wrap_s">
      <h2>修理のお申込み</h2>
      <p>修理・ご相談・ご依頼等は、下記窓口にお問い合わせください。</p>
      <div class="apply-contents">
        <div class="apply-item">
          <div class="apply-icon">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/repair-web-icon.svg" alt="">
          </div>
          <div class="apply-title">WEBでのお申込み</div>
          <div class="appply-text">当サイトから簡単にお申し込みいただけます。</div>
          <a class="contact-button" href="https://pv.hanwha-japan.com/service-support/contact/"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/contact_envelope-alt.svg" alt="">お問い合わせはこちら</a>
        </div>
        <div class="apply-item">
          <div class="apply-icon">
            <img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/repair-phone-icon.svg" alt="">
          </div>
          <div class="apply-title">お電話でのお申込み</div>
          <div class="appply-text">下記のフリーダイヤルにおかけください。</div>
          <div class="num"><img src="https://pv.hanwha-japan.com/wp-content/uploads/2025/05/freedial-icon.svg" alt="">0120-801-170</div>
          <div class="time">
            受付時間 09：00～17：00（12：00～13：00を除く）<br>
            <span>※土日・祝日および年末年始を除く</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--========== END OF APPLY  ==========-->

</main>
<?php get_footer(); ?>