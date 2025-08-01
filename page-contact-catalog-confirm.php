<?php
/*
Template Name: カタログ請求--確認
*/
get_header();
$form_id = is_public_server() ? "058f6ed" : "4061147"; // cf7のフォームid
?>

<main class="contact contact-catalog confirm">
  <section class="mv" style="background-image: url(<?= get_field('fv_page_img'); ?>)">
    <h2 class="ttl"><?= the_title(); ?></h2>
  </section>
  <!-- // MV -->
  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>
  <section class="sec-form">
    <?php echo do_shortcode('[contact-form-7 id="' . $form_id . '" title="カタログ請求内容確認" html_class="h-adr form"]');?>
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

