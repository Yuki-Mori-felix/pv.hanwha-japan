<?php
/*
Template Name: お問い合わせ--確認
*/
get_header();
$form_id = is_public_server() ? "6c9f023" : "2fb4fe9"; // cf7のフォームid
?>
<main class="contact confirm">
  <section class="mv" style="background-image: url(<?= get_field('fv_page_img'); ?>)">
    <h2 class="ttl"><?= the_title(); ?></h2>
  </section>
  <!-- // MV -->
  <div class="wrap">
    <?php custom_breadcrumb(); ?>
  </div>
  <section class="sec-form">
    <div class="container">
      <?php echo do_shortcode('[contact-form-7 id="' . $form_id . '" title="お問い合わせ内容確認" html_class="form"]');?>
    </div>
  </section>
  <!-- // SEC_FORM -->
  <section class="info">
    <div class="container">
      <div class="ctt customer">
        <div class="img"><img src="<?=get_img_path()?>/contact/icon-customer.svg" alt=""></div>
        <div class="detail">
          <p class="head">お客さまご相談センター</p>
          <p class="txt">
            電話番号 0120-322-001<br>
            受付時間 09：00～17：00<br class="none-min-ml">（12：00～13：00を除く）<br>
            ※土日・祝日および年末年始を除く
          </p>
        </div>
      </div>
      <div class="ctt repair">
        <div class="img"><img src="<?=get_img_path()?>/contact/icon-repair.svg" alt=""></div>
        <div class="detail">
          <p class="head">修理のご用命</p>
          <p class="txt">
            電話番号 0120-801-170<br>
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
