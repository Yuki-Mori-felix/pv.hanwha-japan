<?php
/*
Template Name: カタログ請求
*/
get_header();
$form_id = is_public_server() ? "99a0cdb" : "b3167e9"; // cf7のフォームid
?>

<main class="contact contact-catalog">
  <section class="mv" style="background-image: url(<?= get_field('fv_page_img'); ?>)">
    <h2 class="ttl"><?= the_title(); ?></h2>
  </section>
  <!-- // MV -->
  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>
  <section class="top">
    <div class="container">
      <p class="lead">紙カタログをご用意しております。</p>
      <p class="txt">こちらに掲載のないカタログをご希望の方はご要望欄にご記入ください。</p>
      <div class="links">
        <a href="<?=get_my_home_url("/service-support/catalog")?>" class="link catalog-b"><span class="inner">WEBカタログ・ダウンロードはこちら</span></a>
      </div>
      <a href="#input-address" class="scroll-btn">お届け先情報のご入力へ</a>
    </div>
  </section>
  <!-- // TOP -->
  <section class="sec-form">
    <?php echo do_shortcode('[contact-form-7 id="' . $form_id . '" title="カタログ請求" html_class="h-adr form"]');?>
    <div class="container">
      <div class="links">
        <a href="<?=get_my_home_url("/service-support/contact-quotation")?>" class="link quotation"><span class="inner">お見積り依頼はこちら</span></a>
        <a href="<?=get_my_home_url("/service-support/contact")?>" class="link contact"><span class="inner">お問い合わせはこちら</span></a>
      </div>
    </div>
  </section>
  <!-- // SEC_FORM -->
  <section class="common-info">
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
<!-- // CONTACT CONTACT_CATALOG -->
<?php get_footer(); ?>