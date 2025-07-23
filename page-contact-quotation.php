<?php
/*
Template Name: お見積り依頼
*/
get_header();
$form_id = is_public_server() ? "fc48203" : "722591f"; // cf7のフォームid
?>
<main class="contact quotation">
  <section class="mv" style="background-image: url(<?= get_field('fv_page_img'); ?>)">
    <h2 class="ttl"><?= the_title(); ?></h2>
  </section>
  <!-- // MV -->
  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>
  <section class="top">
    <div class="container">
      <p class="lead">以下のフォームよりお見積りいただけます。</p>
      <p class="txt">
        お見積り依頼頂きました内容に関しては弊社にて確認後、担当よりご連絡させて頂きます。<br>
        お見積り内容によっては、協力会社と共有する場合もございますので、予めご了承ください。
      </p>
    </div>
  </section>
  <!-- // TOP -->
  <section class="sec-form">
    <div class="container">
      <?php echo do_shortcode('[contact-form-7 id="' . $form_id . '" title="お見積り依頼" html_class="h-adr form form-quotation"]');?>
      <div class="links">
        <a href="<?=get_my_home_url("/service-support/contact-catalog")?>" class="link catalog-a"><span class="inner">カタログ請求はこちら</span></a>
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
<!-- // CONTACT QUOTATION -->
<?=get_footer();?>