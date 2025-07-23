<?php
/*
Template Name: お問い合わせ
*/
get_header();
$form_id = is_public_server() ? "bc3e21b" : "c274000"; // cf7のフォームid
?>
<main class="contact">
  <section class="mv" style="background-image: url(<?= get_field('fv_page_img'); ?>)">
    <h2 class="ttl"><?= the_title(); ?></h2>
  </section>
  <!-- // MV -->
  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>
  <section class="top">
    <div class="container">
      <p class="lead">ご意見やご要望等は、お気軽にお問い合わせください。</p>
      <p class="txt">下記フォームに必要事項をご記入の上、送信してください。<br>後日担当者より、ご連絡させていただきます。</p>
      <div class="links">
        <a href="<?=get_my_home_url("/service-support/contact-quotation")?>" class="link quotation"><span class="inner">お見積り依頼はこちら</span></a>
        <a href="<?=get_my_home_url("/service-support/catalog")?>" class="link catalog-a"><span class="inner">カタログ請求はこちら</span></a>
      </div>
    </div>
  </section>
  <!-- // TOP -->
  <section class="sec-form">
    <div class="container">
      <?php echo do_shortcode('[contact-form-7 id="' . $form_id . '" title="お問い合わせ" html_class="h-adr form"]');?>
    </div>
  </section>
  <!-- // SEC_FORM -->
  <section class="info">
    <div class="container">
      <div class="ctt customer">
        <div class="img"><img src="<?=get_img_path()?>/contact/icon-customer.svg" alt=""></div>
        <div class="detail">
          <p class="head">お問い合わせはこちらまで</p>
          <p class="txt">
            番号 0120-322-001<br>
            受付時間 09：00～17：00<br class="none-min-ml">（12：00～13：00を除く）<br>
            ※土日・祝日および年末年始を除く
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- // INFO -->
</main>
<!-- // CONTACT -->
<?=get_footer();?>